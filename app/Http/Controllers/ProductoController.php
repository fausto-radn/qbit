<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Producto;

class ProductoController extends Controller
{

  public function index()
  {
    //
    $productos = Producto::all();
    return view('productos.index',compact('productos'));
  }


  public function create()
  {
    //
    $proveedores = Proveedor::all();
    return view('productos.create',compact('proveedores'));
  }


  public function store(Request $request)
  {
    //dd($request->all());
    $request->validate([
      'proveedor_id' => ['required','exists:proveedores,id'],
      'codigo' => ['required','max:10','unique:productos,codigo'],
      'nombre' => ['required','unique:productos,nombre'],
      'descripcion' => ['required','max:500'],
      'precio' => ['required','min:0'],
      'cantidad' => ['required','integer','min:0']
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')->withSuccess('Producto Agregado.');
  }

  public function show($id)
  {
    //
    $producto = Producto::findOrFail($id);
    return view('productos.show',compact('producto'));
  }

  public function edit($id)
  {
    //
    $proveedores = Proveedor::all();
    $producto = Producto::findOrFail($id);
    return view('productos.edit',compact('producto','proveedores'));
  }

  public function update(Request $request, $id)
  {
    //
    $request->validate([
      'proveedor_id' => ['required','exists:proveedores,id'],
      'codigo' => ['required','max:10','unique:productos,codigo,' . $id],
      'nombre' => ['required','unique:productos,nombre,' . $id],
      'descripcion' => ['required','max:500'],
      'precio' => ['required','min:0'],
      'cantidad' => ['required','integer','min:0']
    ]);

    $producto = Producto::findOrFail($id);
    $producto->update($request->all());
    return redirect()->route('productos.index')->withSuccess('Producto Actualizado.');
  }

  public function destroy($id)
  {
    //
    $producto = Producto::findOrFail($id);
    $producto->delete();
    return redirect()->route('productos.index')->withSuccess('Producto Eliminado.');
  }
}
