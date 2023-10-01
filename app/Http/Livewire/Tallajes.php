<?php

namespace App\Http\Livewire;
use App\Models\contrato;
use App\Models\cliente;
use Livewire\Component;

class Tallajes extends Component
{
    public $search,$image,
    $selected_id,$pageTitle,$componentName,$sel_contrato_id;

    private $pagination = 5;

    public function mount()
    {
        $this->componentName = 'Tallaje del Personal';
        $this->pageTitle = 'Listado';
        // $this->cliente_id = 0;
        // $this->tipoProceso= 0;
        // $this->moneda = 0;
    }

    public function render()
    {
        // return view('livewire.tallajes.tallajes');
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
        return view('livewire.tallajes.tallajes',
            [
                'contratos'=>$data,
                'clientes' => cliente::orderBy('cliente','asc')->get()
            ])
        ->extends('layouts.shalom')
        ->section('content');
    }
    // protected $listeners = ['tallajeDetalle' => 'tDetalle'];

    public function tDetalle($contratoId)
    {
        // $regContrato = contrato::find($id);
        // dd($regContrato);
        return redirect()->to("tallajeDetalle/$contratoId");
        // $this->sel_contrato_id = $regContrato->id;
        // return view ('livewire.tallajes.tallajesDetalle')->extends('layouts.shalom')->section('content');
    }
}
