<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;



class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // private function Validacion(Request $request)
    // {
        
    //     $rules=[
    //         'paterno'   => "required|min:4",
    //         'materno'   => "required|min:4",
    //         'nombre'    => "required|min:4",
    //         'dni'       => "required|digits:8|unique:roles,name,".$request->input('id'),
    //         'sexo'      => "required",
    //         'celular'   => "numeric|digits:9|unique:roles,name,".$request->input('id'),
    //         'email'     => "email|unique:roles,name,".$request->input('id'),
    //         'fechaNac'  =>'required|date',
    //         'area_id'  =>'required',
    //         'cargo_id'  =>'required',
    //         // 'cliente_id'  =>'required',
    //     ];
    //     $messages=[
    //         'paterno.required' => 'Ingrese el apellido paterno',
    //         'paterno.min' => 'El apellido paterno debe tener 4 caracteres como minimo',
    //         'materno.required' => 'Ingrese el apellido materno',
    //         'materno.min' => 'El apellido materno debe tener 4 caracteres como minimo',
    //         'nombre.required' => 'Ingrese el apellido nombre',
    //         'nombre.min' => 'El apellido nombre debe tener 4 caracteres como minimo',
    //         'sexo.required' => 'Seleccione el sexo de la persona',
    //         // DNI
    //         'dni.required' => 'Ingrese numero de DNI',
    //         'dni.digits' => 'El DNI debe tener 8 digitos',
    //         'dni.unique' => 'Duplicidad: El DNI ya esta registrado',
    //         //celular
    //         'celular.required' => 'Ingrese numero de celular',
    //         'celular.digits' => 'El celular debe tener 9 digitos',
    //         'celular.unique' => 'Duplicidad: N° Celular ya esta registrado',
    //         //email
    //         'email.required' => 'Ingrese email',
    //         'email.unique' => 'Duplicidad: Email ya esta registrado',
    //         'area_id.required' => 'Seleccione departamento/area/servicio',
    //         'cargo_id.required' => 'Seleccione cargo del personal',
    //         // 'cliente_id.required' => 'Seleccione la institucion del personal'

    //     ];
    //     $this->validate($request,$rules,$messages);
    // }

    public function index()
    {
        $persona = Persona::withTrashed()->get();
        $totalPersona = Persona::withTrashed()->count();
        $totalPersonaActivo = persona::count();
        $totalPersonaInactivo = persona::onlyTrashed()->count();
        $cuentaPersonaTallaje = persona::where('tallajeOk','1')->count();
        return compact('persona','totalPersona','totalPersonaActivo','totalPersonaInactivo','cuentaPersonaTallaje');
        
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'paterno'   => "required|min:4,",
            'materno'   => "required|min:4,",
            'nombre'    => "required|min:4,",
            'dni'       => ['required','digits:8',Rule::unique('personas')->ignore($request->id)],
            'sexo'      => "required",
            'celular'   => ['digits:9',Rule::unique('personas')->ignore($request->id)],
            'email'     => ['email',Rule::unique('personas')->ignore($request->id)],
            'fechaNac'  =>'required|date',
            'area_id'  =>['required'],
            'cargo_id'  =>['required'],
        ],
        $messages=[
            'paterno.required' => 'Ingrese el apellido paterno',
            'paterno.min' => 'El apellido paterno debe tener 4 caracteres como minimo',
            'materno.required' => 'Ingrese el apellido materno',
            'materno.min' => 'El apellido materno debe tener 4 caracteres como minimo',
            'nombre.required' => 'Ingrese el apellido nombre',
            'nombre.min' => 'El apellido nombre debe tener 4 caracteres como minimo',
            'sexo.required' => 'Seleccione el sexo de la persona',
            // DNI
            'dni.required' => 'Ingrese numero de DNI',
            'dni.digits' => 'El DNI debe tener 8 digitos',
            'dni.unique' => 'Duplicidad: El DNI ya esta registrado',
            //celular
            // 'celular.numeric' => 'Ingrese solo digitos',
            'celular.digits' => 'El celular debe tener 9 digitos',
            'celular.unique' => 'Duplicidad: N° Celular ya esta registrado',
            //email
            'email.required' => 'Ingrese email',
            'email.unique' => 'Duplicidad: Email ya esta registrado',
            'area_id.required' => 'Seleccione departamento,area,servicio',
            'cargo_id.required' => 'Seleccione cargo del personal',
        ]
        );
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
            // return $validacion->messages();
        }else{
            $persona = new Persona();
            $persona->paterno = Str::upper($request->paterno);
            $persona->materno = Str::upper($request->materno);
            $persona->nombre = Str::upper($request->nombre);
            $persona->dni = $request->dni;
            $persona->sexo = Str::upper($request->sexo);
            $persona->celular = $request->celular;
            $persona->email = $request->email;
            $persona->observacion = Str::upper($request->observacion);
            $persona->fechaNac = $request->fechaNac;
            $persona->area_id = $request->area_id;
            $persona->cargo_id = $request->cargo_id;
            $persona->cliente_id = $request->cliente_id;
            $persona->contrato_id = $request->contrato_id;
            $persona->save();
            return response()->json('Registro Guardado con Exito',200);
        }
    }

    public function show(persona $persona)
    {
        // $personaTallaje = persona::findOrFail($persona->id)->tallaje;
        $personaTallaje = persona::where('id',$persona->id)->with('tallaje')->get();
        return $personaTallaje;
    }

    public function edit($id)
    {
        persona::withTrashed()->find($id)->restore();
        $persona = persona::find($id);
        return response()->json("personal ACTIVADO : $persona->paterno $persona->materno $persona->nombre",200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persona $persona)
    {
        $validacion = Validator::make($request->all(),[
            'paterno'   => "required|min:4,",
            'materno'   => "required|min:4,",
            'nombre'    => "required|min:4,",
            'dni'       => ['required','digits:8',Rule::unique('personas')->ignore($persona)],
            'sexo'      => "required",
            'celular'   => ['digits:9',Rule::unique('personas')->ignore($persona)],
            'email'     => ['email',Rule::unique('personas')->ignore($persona)],
            'fechaNac'  =>'required|date',
            'area_id'  =>['required'],
            'cargo_id'  =>['required'],
        ],
        $messages=[
            'paterno.required' => 'Ingrese el apellido paterno',
            'paterno.min' => 'El apellido paterno debe tener 4 caracteres como minimo',
            'materno.required' => 'Ingrese el apellido materno',
            'materno.min' => 'El apellido materno debe tener 4 caracteres como minimo',
            'nombre.required' => 'Ingrese el apellido nombre',
            'nombre.min' => 'El apellido nombre debe tener 4 caracteres como minimo',
            'sexo.required' => 'Seleccione el sexo de la persona',
            // DNI
            'dni.required' => 'Ingrese numero de DNI',
            'dni.digits' => 'El DNI debe tener 8 digitos',
            'dni.unique' => 'Duplicidad: El DNI ya esta registrado',
            //celular
            // 'celular.numeric' => 'Ingrese solo digitos',
            'celular.digits' => 'El celular debe tener 9 digitos',
            'celular.unique' => 'Duplicidad: N° Celular ya esta registrado',
            //email
            'email.required' => 'Ingrese email',
            'email.unique' => 'Duplicidad: Email ya esta registrado',
            'area_id.required' => 'Seleccione departamento,area,servicio',
            'cargo_id.required' => 'Seleccione cargo del personal',
        ]
        );
        if($validacion->fails()){
            return response()->json($validacion->messages(),422);
        }else{
            $persona->paterno = Str::upper($request->paterno);
            $persona->materno = Str::upper($request->materno);
            $persona->nombre = Str::upper($request->nombre);
            $persona->dni = $request->dni;
            $persona->sexo = Str::upper($request->sexo);
            $persona->celular = $request->celular;
            $persona->email = $request->email;
            $persona->observacion = Str::upper($request->observacion);
            $persona->fechaNac = $request->fechaNac;
            $persona->area_id = $request->area_id;
            $persona->cargo_id = $request->cargo_id;
            $persona->cliente_id = $request->cliente_id;
            $persona->contrato_id = $request->contrato_id;
            $persona->save();
            return response()->json('Registro Actualizado con Exito',200);
        }
        // return ['update'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $persona)
    {
        $persona->delete();
        return response()->json("personal INACTIVADO : $persona->paterno $persona->materno $persona->nombre",200);
    }
}
