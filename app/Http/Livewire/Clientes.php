<?php

namespace App\Http\Livewire;
use App\Models\cliente;
use Livewire\Component;
use Livewire\WithFileUploads; //Trait para subir imagenes
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class Clientes extends Component
{

    Use WithFileUploads, WithPagination;

    public $search,$image,$selected_id,$pageTitle,$componentName,$cliente,$ruc,$direccion,$email,$personaContacto,
    $cargoContacto,$telefonoContacto,$emailContacto, $created_at, $updated_at, $deleted_at;
    private $pagination = 10;


    public function mount()
    {
        $this->componentName = 'Clientes';
        $this->pageTitle = 'Listado';
    }
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }  
    public function render()
    {
        // $data = cliente::all();
        if(strlen($this->search)>0)
        $data = cliente::withTrashed()->where('cliente','like','%'.$this->search.'%')->paginate($this->pagination);
        else
        $data = cliente::withTrashed()->orderBy('cliente')->paginate($this->pagination);

        return view('livewire.clientes.clientes',['clientes'=>$data])
        ->extends('layouts.shalom')
        ->section('content');
    }
    public function Editar($id)
    {
        $registro = cliente::find($id);
        $this->selected_id = $registro->id;
        $this->cliente = $registro->cliente;
        $this->ruc = $registro->ruc;
        $this->direccion = $registro->direccion;
        $this->email = $registro->email;
        $this->personaContacto = $registro->personaContacto;
        $this->cargoContacto = $registro->cargoContacto;
        $this->telefonoContacto = $registro->telefonoContacto;
        $this->emailContacto = $registro->emailContacto;
        $this->created_at= $registro->created_at;
        $this->updated_at = $registro->updated_at;

        $this->emit('show-modal','Hola soy modal');

    }
    public function Store()
    {
        $rules = [
            'cliente'           => "required|min:4",
            'ruc'               => "required|digits:11|unique:clientes",
            'direccion'         => "required|min:4",
            'email'             => 'email',
            'personaContacto'   =>"required|min:4",
        ];
        $messages = [
            'cliente.required'  =>'Ingrese el nombre del cliente',
            'cliente.min'       =>'El cliente debe tener 4 caracteres como minimo',
            'ruc.required'      =>'Ingrese el numero de RUC',
            'ruc.digits'        =>'El Ruc es de 11 digitos obligatorio',
            'ruc.unique'        =>'DUPLICIDAD: el numero de RUC, ya existe',
            'direccion.required'  =>'Ingrese la direccion del cliente',
            'direccion.min'       =>'La direccion debe tener 4 caracteres como minimo',
            'email.email'         =>'Formato de email incorrecto: ejemplo@dominio.com',
            'persona.required'  =>'Ingrese el nombre del contacto del cliente',
            'persona.min'       =>'El contacto debe tener 4 caracteres como minimo',

        ];
        $this->validate($rules,$messages);

        
        $cliente = cliente::create
        ([
            'cliente'       => Str::upper($this->cliente),
            'ruc'           => $this->ruc,
            'direccion'     => str::upper($this->direccion),
            'email'         => $this->email,
            'personaContacto'     => str::upper($this->personaContacto),
            'cargoContacto'     => str::upper($this->cargoContacto),
            'telefonoContacto'     => str::upper($this->telefonoContacto),
            'emailContacto'     => $this->emailContacto
        ]);
        $cliente->save();
        $this->resetUI();
        $this->emit('cliente-agregar','Cliente Registrado con Exito');
    }

    public function Update()
    {
        $rules = [
            'cliente'           => "required|min:4|unique:clientes,cliente,{$this->selected_id}",
            'ruc'               => "required|digits:11|unique:clientes,ruc,{$this->selected_id}",
            'direccion'         => "required|min:4",
            'email'             => 'email',
            'personaContacto'   =>"required|min:4",
        ];
        $messages = [
            'cliente.required'  =>'Ingrese el nombre del cliente',
            'cliente.min'       =>'El cliente debe tener 4 caracteres como minimo',
            'cliente.unique'        =>'DUPLICIDAD: el cliente, ya existe',
            'ruc.required'      =>'Ingrese el numero de RUC',
            'ruc.digits'        =>'El Ruc es de 11 digitos obligatorio',
            'ruc.unique'        =>'DUPLICIDAD: el numero de RUC, ya existe',
            'direccion.required'  =>'Ingrese la direccion del cliente',
            'direccion.min'       =>'La direccion debe tener 4 caracteres como minimo',
            'email.email'         =>'Formato de email incorrecto: ejemplo@dominio.com',
            'persona.required'  =>'Ingrese el nombre del contacto del cliente',
            'persona.min'       =>'El contacto debe tener 4 caracteres como minimo',

        ];
        $this->validate($rules,$messages);

        $cliente = cliente::find($this->selected_id);
        $cliente->update([
            'cliente'       => Str::upper($this->cliente),
            'ruc'           => $this->ruc,
            'direccion'     => str::upper($this->direccion),
            'email'         => $this->email,
            'personaContacto'     => str::upper($this->personaContacto),
            'cargoContacto'     => str::upper($this->cargoContacto),
            'telefonoContacto'     => str::upper($this->telefonoContacto),
            'emailContacto'     => $this->emailContacto
        ]);
        $cliente->save();
        $this->resetUI();
        $this->emit('cliente-actualizar','Cliente Actualizado');

    }

    public function resetUI()
    {
        $this->reset(['cliente','ruc','direccion','email','personaContacto','cargoContacto','telefonoContacto','emailContacto','search','selected_id']);
        
    }

    protected $listeners = ['desactivarRegistro' => 'desactivar','activarRegistro' => 'activar'];

    public function desactivar($id)
    {
        // dd($id);
        cliente::find($id)->delete();
    }
    public function activar($id)
    {
        cliente::withTrashed()->find($id)->restore();
    }
}
