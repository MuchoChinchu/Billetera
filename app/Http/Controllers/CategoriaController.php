<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function list()
    {
        return categoria::all();
    }

    public function getById($id)
    {
        return categoria::findOrFail($id);
    }

}