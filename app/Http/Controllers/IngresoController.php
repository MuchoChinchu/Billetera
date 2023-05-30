<?php

namespace App\Http\Controllers;

use App\Models\ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function list()
    {
        return ingreso::all();
    }

    public function getById($id)
    {
        return ingreso::findOrFail($id);
    }

}