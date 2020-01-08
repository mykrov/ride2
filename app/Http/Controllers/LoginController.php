<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Cliente;

class LoginController extends Controller
{
    //Pagina Principal
    public function index(){
        return view('auth-login');
    }

    //Proceso de Login
    public function login(Request $request){

        $request->validate([
            'user' => 'required',
            'password' => 'required',
            'empresa' => 'required'
        ]);

        $user = $request->input('user');
        $password = $request->input('password');
        $empresa = $request->input('empresa');
        $passHash = Hash::make($password);

        $row = Cliente::where('codigo',$user)
        ->where('empresa',$empresa)
        ->where('estado','A')
        ->first();

        if($row != null and Hash::check($password ,$row->clave)){
            session()->put('cliente', $user);
            session()->put('empresa', $empresa);
            return redirect()->route('home');
        }else{
            return  redirect()->route('login');
        }

    }
    //Proceso de Salir
    public function logout(){
        session()->flush();
        return  redirect()->route('login');
    }

    public function cambiopass(Request $request){
        $pass = $request->input('password');

        if(session()->has('cliente')){
            $codigo = session()->get('cliente');
            $empresan = session()->get('empresa');

            $cliente = \App\Cliente::where('codigo',$codigo)
            ->where('empresa',$empresan)
            ->where('sucursal',1)->first();

            $passHasheado = Hash::make($pass);
            $cliente->clave =  $passHasheado;
            $cliente->save();

            return response()->json("successchange");

        }else{
            return response()->json("errorchange");
        }

       
    }
}
