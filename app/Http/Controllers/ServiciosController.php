<?php

namespace App\Http\Controllers;
use App\Models\talla;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function listarTallas()
    {
        return talla::select('id','talla')->get();
    }
    // public function listarAreas($id)
    // {
        
    // }

}
