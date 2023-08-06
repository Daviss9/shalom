<?php

namespace App\Http\Controllers;

use App\Models\tallaje;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TallajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['Hola soy tallaje : index'];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),
        [
            // 'tallaSaco'         => "required",
            'persona_id'    => "required"
        ],
        $messages=
        [
            // 'tallaSaco.required'    => 'Ingrese la talla de Saco/Camisa',
            'persona_id'        => 'Seleccione Personal'

        ]);
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
        }
        else
        {
            // $tallaje = new tallaje($request->all());
            // tallaje::create($request->all());
            $tallaje = new tallaje();
            $tallaje->tallaSaco = Str::upper($request->tallaSaco);
            $tallaje->tallaCamisa = Str::upper($request->tallaCamisa);
            $tallaje->tallaPantalon = Str::upper($request->tallaPantalon);
            $tallaje->tallaFalda = Str::upper($request->tallaFalda);
            $tallaje->tallaCasco = Str::upper($request->tallaCasco);
            $tallaje->tallaCalzado = Str::upper($request->tallaCalzado);
            $tallaje->hombro = $request->hombro;
            $tallaje->cuello = $request->cuello;
            $tallaje->espalda = $request->espalda;
            $tallaje->pecho = $request->pecho;
            $tallaje->cintura = $request->cintura;
            $tallaje->abdomen = $request->abdomen;
            $tallaje->cadera = $request->cadera;
            $tallaje->largoManga = $request->largoManga;
            $tallaje->puno = $request->puno;
            $tallaje->talleEspalda = $request->talleEspalda;
            $tallaje->tallePecho = $request->tallePecho;
            $tallaje->largoSaco = $request->largoSaco;
            $tallaje->tiro = $request->tiro;
            $tallaje->largoPantalon = $request->largoPantalon;
            $tallaje->rodilla = $request->rodilla;
            $tallaje->basta = $request->basta;
            $tallaje->observacion = Str::upper($request->observacio);
            $tallaje->persona_id = $request->persona_id;
            $tallaje->save();
            // Confirmamos la medida en la tbl persona
            $persona = persona::find($request->persona_id);
            $persona->tallajeOK = 1;
            $persona->save();

            return response()->json('Registro se guardo correctamente',200);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tallaje $tallaje)
    {
        return $tallaje;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tallaje $tallaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tallaje $tallaje)
    {
        $validacion = Validator::make($request->all(),
        [
            // 'tallaSaco'         => "required",
            'persona_id'    => "required"
        ],
        $messages=
        [
            // 'tallaSaco.required'    => 'Ingrese la talla de Saco/Camisa',
            'persona_id'        => 'Seleccione Personal'

        ]);
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
        }
        else
        {
            $tallaje->tallaSaco = Str::upper($request->tallaSaco);
            $tallaje->tallaCamisa = Str::upper($request->tallaCamisa);
            $tallaje->tallaPantalon = Str::upper($request->tallaPantalon);
            $tallaje->tallaFalda = Str::upper($request->tallaFalda);
            $tallaje->tallaCasco = Str::upper($request->tallaCasco);
            $tallaje->tallaCalzado = Str::upper($request->tallaCalzado);
            $tallaje->hombro = $request->hombro;
            $tallaje->cuello = $request->cuello;
            $tallaje->espalda = $request->espalda;
            $tallaje->pecho = $request->pecho;
            $tallaje->cintura = $request->cintura;
            $tallaje->abdomen = $request->abdomen;
            $tallaje->cadera = $request->cadera;
            $tallaje->largoManga = $request->largoManga;
            $tallaje->puno = $request->puno;
            $tallaje->talleEspalda = $request->talleEspalda;
            $tallaje->tallePecho = $request->tallePecho;
            $tallaje->largoSaco = $request->largoSaco;
            $tallaje->tiro = $request->tiro;
            $tallaje->largoPantalon = $request->largoPantalon;
            $tallaje->rodilla = $request->rodilla;
            $tallaje->basta = $request->basta;
            $tallaje->observacion = Str::upper($request->observacio);
            $tallaje->persona_id = $request->persona_id;
            $tallaje->save();

            // Confirmamos la medida en la tbl persona
            $persona = persona::find($request->persona_id);
            $persona->tallajeOK = 1;
            $persona->save();
            
            return response()->json('Registro se Actualizo correctamente',200);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tallaje $tallaje)
    {
        //
    }
}
