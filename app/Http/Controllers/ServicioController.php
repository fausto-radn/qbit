<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Servicio;

class ServicioController extends Controller
{

  public function index()
  {
    //
    $servicios = Servicio::all();
    return view('servicios.index',compact('servicios'));
  }


  public function create()
  {
    //
    $proveedores = Proveedor::all();
    return view('servicios.create',compact('proveedores'));
  }


  public function store(Request $request)
  {
    //dd($request->duracion);
    $request->validate([
      'proveedor_id' => ['required','exists:proveedores,id'],
      'codigo' => ['required','max:10','unique:servicios,codigo'],
      'nombre' => ['required','unique:servicios,nombre'],
      'descripcion' => ['required','max:500'],
      'precio' => ['required','min:0'],
      'duracion' => ['required']
    ]);

    Servicio::create($request->all());

    return redirect()->route('servicios.index')->withSuccess('Servicio Agregado.');
  }

  public function show($id)
  {
    //
    $servicio = Servicio::findOrFail($id);
    return view('servicios.show',compact('servicio'));
  }

  public function edit($id)
  {
    //
    $proveedores = Proveedor::all();
    $servicio = Servicio::findOrFail($id);
    return view('servicios.edit',compact('servicio','proveedores'));
  }

  public function update(Request $request, $id)
  {
    //
    $request->validate([
      'proveedor_id' => ['required','exists:proveedores,id'],
      'codigo' => ['required','max:10','unique:servicios,codigo,' . $id],
      'nombre' => ['required','unique:servicios,nombre,' . $id],
      'descripcion' => ['required','max:500'],
      'precio' => ['required','min:0'],
      'duracion' => ['required']
    ]);

    $servicio = Servicio::findOrFail($id);
    $servicio->update($request->all());
    return redirect()->route('servicios.index')->withSuccess('Servicio Actualizado.');
  }

  public function destroy($id)
  {
    //
    $servicio = Servicio::findOrFail($id);
    $servicio->delete();
    return redirect()->route('servicios.index')->withSuccess('Servicio Eliminado.');
  }
}
