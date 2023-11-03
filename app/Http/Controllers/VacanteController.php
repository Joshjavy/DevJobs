<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index()
    {
        return view('vacantes.index');
    }

    public function create()
    {
        return view('vacantes.create');
    }

    public function edit(Vacante $vacante){

        $this->authorize('update', $vacante);

        return view('vacantes.edit',[
            'vacante'=>$vacante,
        ]);
    }
}
