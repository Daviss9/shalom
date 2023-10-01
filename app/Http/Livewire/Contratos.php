<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contrato;
use App\Models\cliente;
use Livewire\WithFileUploads; //Trait para subir imagenes
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Contratos extends Component
{
    
    Use WithFileUploads, WithPagination;

    public $search,$image,
    $selected_id,$pageTitle,$componentName,
    //Campos de Tabla
    $nombreProceso,$objetoProceso,$tipoProceso,$nroContrato,$ordenCompra,
    $fechaContrato,$plazoEntrega,$fechaEntrega,$moneda,$montoTotal,$observacion,$cliente_id,
    $created_at, $updated_at, $deleted_at;

    private $pagination = 5;
    
    public function mount()
    {
        $this->componentName = 'Contratos';
        $this->pageTitle = 'Listado';
        $this->cliente_id = 0;
        $this->tipoProceso= 0;
        $this->moneda = 0;
    }
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }  

    public function render()
    {
        if(strlen($this->search)>0)
            $data = contrato::withTrashed()->join('clientes as c','c.id','contratos.cliente_id')
                        ->select('contratos.*','c.cliente as nCliente')
                        ->where('contratos.nombreProceso','like','%'.$this->search.'%')
                        ->orWhere('contratos.objetoProceso','like','%'.$this->search.'%')
                        ->orWhere('c.cliente','like','%'.$this->search.'%')
                        ->orderBy('contratos.fechaContrato','desc')
                        ->paginate($this->pagination);
        // $data = contrato::withTrashed()->with('clientes')->where('objetoProceso','like','%'.$this->search.'%')->paginate($this->pagination);
        else
            $data = contrato::withTrashed()->join('clientes as c','c.id','contratos.cliente_id')
                        ->select('contratos.*','c.cliente as nCliente')
                        ->orderBy('contratos.fechaContrato','desc')
                        ->paginate($this->pagination);
        // dd($data);
        return view('livewire.contratos.contratos',
            [
                'contratos'=>$data,
                'clientes' => cliente::orderBy('cliente','asc')->get()
            ])
        ->extends('layouts.shalom')
        ->section('content');
    }

    public function Store()
    {
        $rules = [
            'nombreProceso'     => 'required',
            'objetoProceso'     => 'required',
            'tipoProceso'       => 'required|not_in:0',
            'plazoEntrega'      => 'integer|min:1',
            'fechaContrato'     => 'required',
            'montoTotal'        => 'required',
            'moneda'            => 'not_in:0',
            // 'cliente_id'        => 'numeric|min:1',
            'cliente_id'        => 'required|not_in:0',
            
        ];
        $messages = [
            'nombreProceso.required'     => 'Ingrese el nombre del Proceso',
            'objetoProceso.required'     => 'Ingrese el Objeto de Proceso',
            'tipoProceso.not_in'            => 'Seleccione el Tipo de Proceso',
            'moneda.not_in'             => 'Seleccione el Tipo de Moneda',
            'plazoEntrega.min'           => 'Ingrese el plazo de Entrega',
            'fechaContrato.required'     => 'Ingrese la fecha de contrato',
            'montoTotal.required'        => 'Ingrese el monto total',
            'cliente_id.not_in'            => 'Seleccione el cliente del contrato',
        ];
        $this->validate($rules,$messages);
        
        $contratos = contrato::create
        ([
            'nombreProceso' => Str::upper($this->nombreProceso),
            'objetoProceso' => Str::upper($this->objetoProceso),
            'tipoProceso' => Str::upper($this->tipoProceso),
            'nroContrato' => Str::upper($this->nroContrato),
            'ordenCompra' => $this->ordenCompra,
            'plazoEntrega' => $this->plazoEntrega,
            'fechaContrato' => $this->fechaContrato,
            'fechaEntrega' => $this->fechaEntrega,
            'moneda' => $this->moneda,
            'montoTotal' => $this->montoTotal,
            'observacion' => $this->observacion,
            'cliente_id' => $this->cliente_id
        ]);
        $contratos->save();
        $this->resetUI();
        $this->emit('contrato-agregar','Cliente Registrado con Exito');      
    }
    
    public function Editar($id)
    {
        $registro = contrato::find($id);
            $this->selected_id = $registro->id;
            $this->nombreProceso = $registro->nombreProceso;
            $this->objetoProceso = $registro->objetoProceso;
            $this->tipoProceso = $registro->tipoProceso;
            $this->nroContrato = $registro->nroContrato;
            $this->ordenCompra = $registro->ordenCompra;
            $this->plazoEntrega = $registro->plazoEntrega;
            $this->fechaContrato = $registro->fechaContrato;
            $this->fechaEntrega = $registro->fechaEntrega;
            $this->moneda = $registro->moneda;
            $this->montoTotal = $registro->montoTotal;
            $this->observacion = $registro->observacion;
            $this->cliente_id = $registro->cliente_id;

            $this->emit('show-modal','Empezando a Editar');
    }

    public function Update()
    {
        $rules = [
            'nombreProceso'     => 'required',
            'objetoProceso'     => 'required',
            'tipoProceso'       => 'required|not_in:0',
            'plazoEntrega'      => 'integer|min:1',
            'fechaContrato'     => 'required',
            'montoTotal'        => 'required',
            'moneda'            => 'not_in:0',
            // 'cliente_id'        => 'numeric|min:1',
            'cliente_id'        => 'required|not_in:0',
            
        ];
        $messages = [
            'nombreProceso.required'     => 'Ingrese el nombre del Proceso',
            'objetoProceso.required'     => 'Ingrese el Objeto de Proceso',
            'tipoProceso.not_in'            => 'Seleccione el Tipo de Proceso',
            'moneda.not_in'             => 'Seleccione el Tipo de Moneda',
            'plazoEntrega.min'           => 'Ingrese el plazo de Entrega',
            'fechaContrato.required'     => 'Ingrese la fecha de contrato',
            'montoTotal.required'        => 'Ingrese el monto total',
            'cliente_id.not_in'            => 'Seleccione el cliente del contrato',
        ];
        $this->validate($rules,$messages);
        
        $contrato = contrato::find($this->selected_id);
        $contrato->update([
            'nombreProceso' => Str::upper($this->nombreProceso),
            'objetoProceso' => Str::upper($this->objetoProceso),
            'tipoProceso' => Str::upper($this->tipoProceso),
            'nroContrato' => Str::upper($this->nroContrato),
            'ordenCompra' => $this->ordenCompra,
            'plazoEntrega' => $this->plazoEntrega,
            'fechaContrato' => $this->fechaContrato,
            'fechaEntrega' => $this->fechaEntrega,
            'moneda' => $this->moneda,
            'montoTotal' => $this->montoTotal,
            'observacion' => $this->observacion,
            'cliente_id' => $this->cliente_id
        ]);
        $contrato->save();
        $this->resetUI();
        $this->emit('contrato-actualizar','Contrato Actualizado con Exito');      
    }
    public function resetUI()
    {
        $this->reset(['nombreProceso','objetoProceso','tipoProceso','nroContrato',
        'ordenCompra','plazoEntrega','fechaContrato','fechaEntrega','moneda',
        'montoTotal','observacion','cliente_id','selected_id']);
        $this->cliente_id = 0;
        $this->tipoProceso= 0;
        $this->moneda = 0;
        //Resetea los errores de validacion
        $this->resetErrorBag();
    }

    protected $listeners = ['desactivarRegistro' => 'desactivar','activarRegistro' => 'activar'];

    public function desactivar($id)
    {
        // dd($id);
        contrato::find($id)->delete();
    }
    public function activar($id)
    {
        contrato::withTrashed()->find($id)->restore();
    }
}
