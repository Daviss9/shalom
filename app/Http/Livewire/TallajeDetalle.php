<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contrato;
use App\Models\cliente;
use App\Models\cargo;
use App\Models\area;
use App\Models\persona;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TallajeDetalle extends Component
{
    public $contratoId,$selectContrato,$pageTitle,$componentName,
    //Campos Tabla
    $selected_id,$paterno,$materno,$nombre,$dni,$sexo,$celular,
    $email,$fechaNac,$observacion,
    $Cargo,$listaArea,
    //Llaves foraneas
    $area_id,$cargo_id,$cliente_id,$contrato_id,$tallajaOk;

    public function mount($contratoId)
    {
        $this->componentName = 'Tallaje';
        $this->pageTitle = 'Detalle de';
        $this->sexo = 0;
        // $this->cargo_id = 0;
        // $this->area_id = 0;
    }

    public function render()
    {
        // $selecContrato = contrato::find($this->contratoId);
        $selectContrato = contrato::join("clientes","contratos.cliente_id","=","clientes.id")
        ->select("*")
        ->where('contratos.id','=',$this->contratoId)
        ->get();
        $this->cliente_id = $selectContrato[0]->cliente_id;
        $this->contrato_id = $selectContrato[0]->contrato_id;
        $listaCargo = cargo::orderBy('cargo','asc')->where('cliente_id','=',$this->cliente_id)->get(); 
        $listaArea = area::orderBy('area','asc')->where('cliente_id','=',$this->cliente_id)->get(); 
        return view('livewire.tallajeDetalle.tallajeDetalle',
            [
                'contrato'=>$selectContrato,
                'listacargo' => $listaCargo,
                'areas' => $listaArea,
            ])
        ->extends('layouts.shalom')
        ->section('content');
    }
    public function resetUI()
    {
        $this->reset(['paterno','materno','nombre','dni','sexo',
        'celular','email','fechaNac','observacion','selected_id',
        'area_id','cargo_id','cliente_id','contrato_id']);
        //Resetea los errores de validacion
        $this->resetErrorBag(); 
    }

    public function Store()
    {
        $rules = [
            'paterno'   => "required",
            'materno'   => "required",
            'nombre'    => "required",
            'sexo'      => "not_in:['0','null']",
            'area_id'   => "not_in:null",
            'cargo_id'  => "not_in:null",
        ];
        $messages = [
            'paterno.required'   => "Ingrese el Apellido Paterno del personal",
            'materno.required'   => "Ingrese el Apellido Materno del personal",
            'nombre.required'    => "Ingrese el Nombre del personal",
            'sexo.not_in'      => "Seleccione el sexo",
            'area_id.not_in'   => "Seleccione el area",
            'cargo_id.not_in'  => "Seleccione el cargo",
        ];
        $this->validate($rules,$messages);

        $persona = persona::create
        ([
            'paterno'       =>Str::upper($this->paterno),
            'materno'       =>Str::upper($this->materno),
            'nombre'        =>Str::upper($this->nombre),
            'dni'           =>$this->dni,
            'sexo'          =>$this->sexo,
            'email'         =>$this->email,
            'celular'       =>$this->celular,
            'fechaNac'      =>$this->fechaNac,
            'observacion'   =>Str::upper($this->observacion),
            'area_id'       =>$this->area_id,
            'cargo_id'      =>$this->cargo_id,
            'cliente_id'    =>$this->cliente_id,
            'contrato_id'   =>$this->contratoId 
        ]);
        $persona->save();
        $this->resetUI();
        $this->emit('persona-agregar','Persona Registrado con Exito');      
    }
    public function addCargo()
    {
        $rules =[
            'cargo' => "required"
        ];
        $messages = [
            'cargo.required' => "Ingrese el cargo"
        ];
        $this->validate($rules,$messages);

        $cargo = cargo::create([
            'cargo' => Str::upper($this->cargo),
            'cliente_id' => $this->cliente_id
        ]);
        $cargo->save();
        $this->emit('cargo-agregar','Cargo agregar');

    }
}
