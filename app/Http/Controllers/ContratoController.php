<?php

namespace App\Http\Controllers;

use App\Models\contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contrato = contrato::withTrashed()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'nombreProceso' => "required",
            'objetoProceso' => "required",
            'tipoProceso' => "required",
            'nroContrato' => "required",
            'ordenCompra' => "required",
            'plazoEntrega' => "required",
            'fechaContrato' => "required",
            'fechaEntrega' => "required",
            'moneda' => "required",
            'montoTotal' => "required",
            'cliente_id' => "required",
        ],
        $messages=[
            'nombreProceso.required' => "Ingrese el nombre del Proceso",
            'objetoProceso.required' => "Ingrese el Objeto del Proceso",
            'tipoProceso.required' => "Ingrese el tipo de Proceso",
            'nroContrato.required' => "Ingrese el numero de contrato",
            'ordenCompra.required' => "Ingrese el numero de orden de compra ",
            'plazoEntrega.required' => "Ingrese el plazo de entrega (dias calendarios) ",
            'fechaContrato.required' => "Ingrese la fecha del contrato u O/C",
            'fechaEntrega.required' => "Ingrese la fecha de entrega del bien/servicio",
            'moneda.required' => "Ingrese la moneda",
            'montoTotal.required' => "Ingrese el monto total del contrato u OC",
            'cliente_id.required' => "Ingrese el ",
        ]
        );
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
        }
        else
        {
            $contrato = new contrato();
            $contrato->nombreProceso = Str::upper($request->nombreProceso);
            $contrato->objetoProceso = Str::upper($request->objetoProceso);
            $contrato->tipoProceso = Str::upper($request->tipoProceso);
            $contrato->nroContrato = Str::upper($request->nroContrato);
            $contrato->ordenCompra = $request->ordenCompra;
            $contrato->plazoEntrega = $request->plazoEntrega;
            $contrato->fechaContrato = $request->fechaContrato;
            $contrato->fechaEntrega = $request->fechaEntrega;
            $contrato->moneda = $request->moneda;
            $contrato->montoTotal = $request->montoTotal;
            $contrato->observacion = $request->observacion;
            $contrato->cliente_id = $request->cliente_id;
            $contrato->save();
            return response()->json('Contrato registrado con exito',200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contrato $contrato)
    {
        $validacion = Validator::make($request->all(),[
            'nombreProceso' => "required",
            'objetoProceso' => "required",
            'tipoProceso' => "required",
            'nroContrato' => "required",
            'ordenCompra' => "required",
            'plazoEntrega' => "required",
            'fechaContrato' => "required",
            'fechaEntrega' => "required",
            'moneda' => "required",
            'montoTotal' => "required",
            'cliente_id' => "required",
        ],
        $messages=[
            'nombreProceso.required' => "Ingrese el nombre del Proceso",
            'objetoProceso.required' => "Ingrese el Objeto del Proceso",
            'tipoProceso.required' => "Ingrese el tipo de Proceso",
            'nroContrato.required' => "Ingrese el numero de contrato",
            'ordenCompra.required' => "Ingrese el numero de orden de compra ",
            'plazoEntrega.required' => "Ingrese el plazo de entrega (dias calendarios) ",
            'fechaContrato.required' => "Ingrese la fecha del contrato u O/C",
            'fechaEntrega.required' => "Ingrese la fecha de entrega del bien/servicio",
            'moneda.required' => "Ingrese la moneda",
            'montoTotal.required' => "Ingrese el monto total del contrato u OC",
            'cliente_id.required' => "Ingrese el ",
        ]
        );
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
        }
        else
        {
            $contrato->nombreProceso = Str::upper($request->nombreProceso);
            $contrato->objetoProceso = Str::upper($request->objetoProceso);
            $contrato->tipoProceso = Str::upper($request->tipoProceso);
            $contrato->nroContrato = Str::upper($request->nroContrato);
            $contrato->ordenCompra = $request->ordenCompra;
            $contrato->plazoEntrega = $request->plazoEntrega;
            $contrato->fechaContrato = $request->fechaContrato;
            $contrato->fechaEntrega = $request->fechaEntrega;
            $contrato->moneda = Str::upper($request->moneda);
            $contrato->montoTotal = $request->montoTotal;
            $contrato->observacion = $request->observacion;
            $contrato->cliente_id = $request->cliente_id;
            $contrato->save();
            return response()->json('Contrato Actualizado con exito',200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contrato $contrato)
    {
        //
    }
}
