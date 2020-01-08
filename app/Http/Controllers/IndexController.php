<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home(){

        if(session()->has('cliente')){
            $codigo = session()->get('cliente');
            $empresan = session()->get('empresa');

            $facs = \App\Facturas::where('codigo_cliente',$codigo)
            ->where('empresa', $empresan)->get();

            $cliente = \App\Cliente::where('codigo',$codigo)
            ->where('empresa',$empresan)
            ->where('sucursal',1)->first();

            $empresa = \App\Empresa::where('idempresa',$empresan)->first();

            // $chartDoc = \App\Facturas::where('codigo_cliente',$codigo)
            // ->where('empresa',$empresan)
            // ->orderby('fecha','DESC')
            // ->select('fecha')
            // ->distinct('fecha')
            // ->count('fecha');

            $chartDoc = DB::table('facturas')
            ->where('codigo_cliente',$codigo)
            ->where('empresa', $empresan)
            ->select('fecha', DB::raw('count(fecha) as total'))
            ->groupBy('fecha')
            ->get();

            return view('home',['facs'=>$facs, 'cliente'=>$cliente, 'empresa'=>$empresa,'char'=>$chartDoc]);

        }else{
            return redirect()->route('login');
        }
        
    }

    public function download($file){
        if(session()->has('empresa')){
            $empresan = session()->get('empresa');
            $exists = Storage::disk('public')->exists('/'.$empresan.'/'.$file);
            if($exists){
                return Storage::disk('public')->download('/'.$empresan.'/'.$file);
            }else{
                return \Redirect::back()->withErrors(['EL Archivo no se Encuentra disponible. Recuerde que los documentos se mantendran online durante un periodo de 3 meses.']);
            }
        }
    }
}
