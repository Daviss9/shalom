<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contrato;
use App\Models\cliente;
use App\Models\cargo;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TallajeDetalle extends Component
{
    public $contratoId,$selectContrato,$pageTitle,$componentName,
    //Campos Tabla
    $selected_id,$paterno,$materno,$nombre,$dni,$sexo,$celular,
    $email,$fechaNac,$observacion,
    $Cargo,
    //Llaves foraneas
    $area_id,$cargo_id,$cliente_id,$contrato_id,$tallajaOk;

    public function mount($contratoId)
    {
        $this->componentName = 'Tallaje';
        $this->pageTitle = 'Detalle de';
        $this->sexo = 0;
        
    }

    public function render()
    {
        // $selecContrato = contrato::find($this->contratoId);
        $selectContrato = contrato::join("clientes","contratos.cliente_id","=","clientes.id")
        ->select("*")
        ->where('contratos.id','=',$this->contratoId)
        ->get();
        $this->cliente_id = $selectContrato[0]->cliente_id;
        $listaCargo = cargo::orderBy('cargo','asc')->where('cliente_id','=',$this->cliente_id)->get(); 
        
        return view('livewire.tallajeDetalle.tallajeDetalle',
            [
                'contrato'=>$selectContrato,
                'listacargo' => $listaCargo
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
