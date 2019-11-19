<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all()->toArray();
        return view('listaproductos', compact('productos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearproducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $this->validate($request, [
            'nombre_producto' => 'required|max:255',
            'descripcion' => 'required',
            'valor' => 'required|numeric|min:1',
            'cantidad' => 'required|numeric|min:1'
        ]);

        $producto=new Productos();
        $producto->nombre_producto=$request->nombre_producto;
        $producto->descripcion=$request->descripcion;
        $producto->valor=$request->valor;
        $producto->cantidad=$request->cantidad;
        $producto->save();
        return redirect('productos')->with('success', 'Producto Guardado Correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        return view('editarproducto',compact('producto','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'nombre_producto' => 'required|max:255',
            'descripcion' => 'required',
            'valor' => 'required|numeric|min:1',
            'cantidad' => 'required|numeric|min:1'
        ]);

        $producto = Productos::find($id);
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->descripcion=$request->get('descripcion');
        $producto->valor=$request->get('valor');
        $producto->cantidad=$request->get('cantidad');
        $producto->save();
        return redirect('productos')->with('success','Producto Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect('productos')->with('success','Producto Eliminado Correctamente');
    }
}
