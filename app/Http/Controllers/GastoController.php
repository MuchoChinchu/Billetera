<?php

namespace App\Http\Controllers;

use App\Models\gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    public function list()
    {
        return gasto::all();
    }

    public function getById($id)
    {
        return gasto::findOrFail($id);
    }

}