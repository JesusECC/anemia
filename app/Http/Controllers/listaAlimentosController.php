<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use DB;
use App\alimentos;

class listaAlimentosController extends Controller
{
     //
     public function __cosntruct(){
        if(!\Session::has('cart')) \Session::put('cart',array());
    }
    public function show(){
        $cart= \Session::get('cart');
        
        return  view('alimentos.listaAlimentos');
    }
    public function add(alimentos $alimento,$id){

        $Tabla_alimentos=alimentos::findOrFail($id);

        $cart= \Session::get('cart');
        $cart[$alimento->id]=$Tabla_alimentos;

        foreach($cart as $car){
            if($car->id===$id){
                \Session::put('cart',$cart);
                return  redirect()->route('alimentos-index');
            }else{
                return  redirect()->route('alimentos-index');
            }
        }
    }
    public function delete(alimentos $alimento){
        $cart= \Session::get('cart');
        unset($cart[$paquete->id]);
        \Session::put('cart',$cart);
        return  redirect()->route('cart-show');
    }
    public function update($id,$cantid){
        
        $cart= \Session::get('cart');
        $cart[$id]->cant=$cantid;
        //dd($cart);
        $cart[$id]->subto=$cart[$id]->precio*$cantid;
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
       //return dd($paquete,$cantid);
    }
    public function trash(){
        \Session::forget('cart');        
        return  redirect()->route('cart-show');
    }
}
