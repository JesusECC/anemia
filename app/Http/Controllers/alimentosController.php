<?php

namespace anemia\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;

use App\alimentos;
use imagen;




class alimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alimentos=DB::table('Tabla_alimentos')
    //    ->where('nombre','LIKE','%'.$query.'%')
    //    ->select('id','nombre','tamaño','peso','proteina','femg','vitamina','imagen','tipo')
    ->get();
    //    ->orderby('id','asc');
    //    ->paginate(10);
        // dd($alimentos);
        return view('alimentos.index',['alimentos'=>$alimentos]);
    }

    public function add(alimentos $alimen)
    {
        //
        $cart= \Session::get('cart');
        $alimen->cantdad=1;
        // $cart[$alimen->id]=$alimen;
        // $Tabla_alimentos=alimentos::findOrFail($id);
        // dd($tab_alime);
        // $Tabla_alimento->id=$Tabla_alimentos->id;
        // $Tabla_alimento->nombre=$Tabla_alimentos->nombre;;
        // $Tabla_alimento->tamaño=$Tabla_alimentos->tamaño;;
        // $Tabla_alimento->peso=$Tabla_alimentos->peso;
        // $Tabla_alimento->proteina=$Tabla_alimentos->proteina;
        // $Tabla_alimento->femg=$Tabla_alimentos->femg;
        // $Tabla_alimento->vitamina=$Tabla_alimentos->vitamina;
        // $Tabla_alimento->imagen=$Tabla_alimentos->imagen;
        // $Tabla_alimento->tipo=$Tabla_alimentos->tipo;
        // $Tabla_alimento->cantidad=1;
        $cart[$alimen->id]=$Tabla_alimentos;
        dd($cart);
        \Session::put('cart',$cart);
        // dd($cart);
        //dd($cart);
        return  redirect()->route('alimentos-index');    
        // return view('alimentos.index');
    }
    // public function add(Paquete $paquete){
    //     $cart= \Session::get('cart');
    //     $paquete->cant=1;
    //     $paquete->subto=$paquete->precio;
    //     $cart[$paquete->id]=$paquete;
    //     \Session::put('cart',$cart);
    //     //dd($cart);
    //     return  redirect()->route('cart-show');
    // }

    public function list(){
        return view('alimentos.listaAlimentos');

    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
