<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::orderby('prod_cod', 'ASC')->get();
        $data = array('productos'=>$productos);
        return view('producto.indexProd')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $prod = new Producto;
        $prod->prod_cod =  mb_strtoupper($request->prod_cod);
        $prod->prod_min =  $request->prod_min;
        $prod->prod_max =  $request->prod_max;
        $prod->prod_des =  mb_strtoupper($request->prod_des);
        $prod->save();  
        return redirect()->route('productos.index')->with('msg-success','Producto Registrado Exitosamente!');          
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $prod = Producto::find($id);
        $prod->prod_cod =  mb_strtoupper($request->prod_cod);
        $prod->prod_min =  $request->prod_min;
        $prod->prod_max =  $request->prod_max;
        $prod->prod_des =  mb_strtoupper($request->prod_des);
        $prod->save();  
        return redirect()->route('productos.index')->with('msg-success','Producto Actualizado Exitosamente!');    
    }

    public function destroy($id)
    {
        Producto::destroy($id);
        return back()->with('msg-error','Producto Eliminado Exitosamente!'); 
    }
}
