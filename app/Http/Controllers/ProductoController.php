<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use Productos;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productos=Producto::all();
        return view('index')->with('productos',$productos);
        //return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre=$request->input('nombre');
        $description=$request->input('description');
        $precio=$request->input('precio');

        $producto=new Producto();
        $producto->nombre=$nombre;
        $producto->description=$description;
        $producto->precio=$precio;
        $producto->save();
        return redirect()->route('productos.index'); 
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
        //
        $productos=Producto::find($id);
        return view('actualizar')->with('productos',$productos);
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
        //
        $productos=Producto::find($id);
        $productos->nombre=$request->nombre;
        $productos->description=$request->description;
        $productos->precio=$request->precio;
        $productos->save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::find($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }

    public function generar_pdf(){
        $productos=Producto::all();
        $pdf=\PDF::loadView('generar_pdf',compact('productos'));
        return $pdf->download('listado-productos.pdf');
    }
}
