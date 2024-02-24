<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
}

public function index()
{
    return view('productos.index');
}

public function create()
{
    // Esta función redirige a la ruta personalizada de vista de creación
    return redirect('productos/create-view');
}

public function createView()
{
    return view('productos.create');
}

public function edit($id)
{
    // Lógica de edición, pero no se muestra la vista directamente
}
