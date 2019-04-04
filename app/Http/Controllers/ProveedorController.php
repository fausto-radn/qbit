<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{

  public function index()
  {
    //
    $proveedores = Proveedor::all();
    return view('proveedores.index',compact('proveedores'));
  }


  public function create()
  {
    //
    return view('proveedores.create');
  }


  public function store(Request $request)
  {

    $request->validate([
      'nombre' => ['required','unique:proveedores,nombre'],
      'telefono' => ['required'],
      'correo' => ['required','email','unique:proveedores,correo']
    ]);

    Proveedor::create($request->all());

    return redirect()->route('proveedores.index')->withSuccess('Proveedor Agregado.');
  }

  public function show($id)
  {
    //
    $proveedor = Proveedor::findOrFail($id);
    return view('proveedores.show',compact('proveedor'));
  }

  public function edit($id)
  {
    //
    $proveedor = Proveedor::findOrFail($id);
    return view('proveedores.edit',compact('proveedor'));
  }

  public function update(Request $request, $id)
  {
    //
    $request->validate([
      'nombre' => ['required','unique:proveedores,nombre,' . $id],
      'telefono' => ['required'],
      'correo' => ['required','email','unique:proveedores,correo,' . $id]
    ]);

    $proveedor = Proveedor::findOrFail($id);
    $proveedor->update($request->all());
    return redirect()->route('proveedores.index')->withSuccess('Proveedor Actualizado.');
  }

  public function destroy($id)
  {
    //
    $proveedor = Proveedor::findOrFail($id);
    $proveedor->delete();
    return redirect()->route('proveedores.index')->withSuccess('Proveedor Eliminado.');
  }
}
