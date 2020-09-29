<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notificacion;
use App\Producto;
use App\Pesaje;

class PesajesController extends Controller
{

    public function index()
    {
        $qryProcesos = Pesaje::where('pesa_proc', '>', 1)->first();

            if (count($qryProcesos) >= 1) {
                return redirect()->route('pesajes.pesando', $qryProcesos->pesa_fk_prod);
            }else{
                $productos = Producto::orderby('prod_cod', 'ASC')->get();
                $data = array('productos'=>$productos);
                return view('pesaje.indexPesaje')->with($data);                
            }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $pesaje = new Pesaje;
        $pesaje->pesa_fk_prod = $request->pesa_fk_prod; 
        $pesaje->pesa_est = $request->pesa_est;
        $pesaje->save();  
        return redirect()->route('pesajes.pesando',$pesaje->pesa_fk_prod);  
    }

    public function pesando($prod)
    {
        $pesaje = Pesaje::where('pesa_fk_prod', $prod)->where('pesa_proc', '>=', 1)->get();
        //$pesaje = Pesaje::where('pesa_fk_prod', $prod)->where('pesa_proc', '>=', 1)->where('pesa_peso', '!=', 'null')->get();
        //dd(count($pesaje));
        $data = array('pesaje'=>$pesaje);
        return view('pesaje.pesando')->with($data);
    }

    public function valorpesado($producto)
    {
        $proceso = Pesaje::where('pesa_fk_prod', $producto)->where('pesa_proc', '>=', 1)->where('pesa_peso', '!=', 'null')->get();
        $sqlErro = Pesaje::where('pesa_fk_prod', $producto)->where('pesa_proc', '=',  2)->get();

        foreach($sqlErro as $error) {
            $reg = $error->pesa_id; 
            $noti = new Notificacion;
            $noti->not_fk_pesa = $reg;
            $noti->save();  
            Pesaje::where('pesa_id', $reg)->where('pesa_fk_prod', $producto)->update(['pesa_proc'=> 3]);
        }
  
        $data = array('proceso'=>$proceso, 'sqlErro'=>$sqlErro);
        return view('pesaje.detalle')->with($data);
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
        /*
        $proces = Pesaje::where($id);
        $proces->pesa_id = $request->prod;
        $proces->pesa_proc = 0;
        $proces->save();
               
        */
        Pesaje::where('pesa_fk_prod', $request->prod)->update(['pesa_proc' => 0]); 
        return redirect()->route('pesajes.index')->with('msg-success', 'Proceso de Pesaje detenido Exitosamente!'); 
    }

    public function destroy($id)
    {
        //
    }
}
