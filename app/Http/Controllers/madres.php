<?php

namespace sinanemia\Http\Controllers;

use Illuminate\Http\Request;
use sinanemia\Madress;
use sinanemia\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Response;
use Illuminate\Support\Collection;
use DB;

class madres extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchText'));
       $madres=DB::table('madres')
       ->where('nom_madre','LIKE','%'.$query.'%')
       ->where('estadoM','=',1)
       ->orderby('id','asc')
       ->paginate(10);
        
        return view('persona.index',["madres"=>$madres,"searchText"=>$query]);
    }
}

    public function show($id)
    {

    $madre=DB::table('madres')
    ->where('id','=',$id)
    ->first();
    return view("persona.show",["madre"=>$madre]);  
    }

    public function create()
    {
        
    return view('persona.create');

    }
  


 public function store(Request $request){
  
  //dd($request);
                  $madres=new Madress;             
                  $madres->nom_madre=$request->get('nom_madre'); 
                  $madres->dni=$request->get('dni');                 
                  $madres->edad=$request->get('edad');
                  $madres->lugar_residencia=$request->get('lugar_residencia');
                  $madres->departamento=$request->get('departamento');
                  $madres->provincia=$request->get('provincia');
                  $madres->distrito=$request->get('distrito'); 
                  $madres->correo=$request->get('correo');
                  $madres->cel=$request->get('cel');
                  $madres->estadoM=1;              
                  $madres->save();
    
            return redirect::to('empleados');
          }

public function create2()
    {
        
    return view('persona.createh');

    }
  
 public function store2(Request $request){
  
  try{
        $nombres;
        $dni;
        $fecha_nac;
        $peso_nacer;
        $edad_gestacional;
        $talla_nacer;
        $peso_actual;
        $talla_actual;
        $edad_meses;
        $hemoglobina;
        $tipo_parto;
        $corte_tardio_cordon;
        $lactancia6;
        $micronutrientes;
        $acceso_agua;
        $acceso_desague;


        foreach ($request->datos as $dato) {
            $nombres=$dato['nombres'];
            $dni=$dato['dni'];
            $fecha_nac=$dato['fecha_nac'];
            $peso_nacer=$dato['peso_nacer'];
            $edad_gestacional=$dato['edad_gestacional'];
            $talla_nacer=$dato['talla_nacer'];
            $peso_actual=$dato['peso_actual'];
            $talla_actual=$dato['talla_actual'];
            $edad_meses=$dato['edad_meses'];
            $hemoglobina=$dato['hemoglobina'];
            $tipo_parto=$dato['tipo_parto'];
            $corte_tardio_cordon=$dato['corte_tardio_cordon'];
            $lactancia6=$dato['lactancia6'];
            $micronutrientes=$dato['micronutrientes'];
            $acceso_agua=$dato['acceso_agua'];
            $acceso_desague=$dato['acceso_desague'];
            
        }
        $idfactores=DB::table('factores_importante')->insertGetId(
            [
            'corte_tardio_cordon'=>$corte_tardio_cordon,
            'lactancia6'=>$lactancia6,
            'micronutrientes'=>$micronutrientes,
            'acceso_agua'=>$acceso_agua,
            'acceso_desague'=>$acceso_desague
            ]
        );

            $hijo=new Hijos;
            $hijo->nombres->$nombres;
            $hijo->dni->$dni;           
            $hijo->fecha_nac->$fecha_nac;
            $hijo->peso_nacer->$peso_nacer;
            $hijo->edad_gestacional->$edad_gestacional;
            $hijo->talla_nacer->$talla_nacer;
            $hijo->peso_actual->$peso_actual;
            $hijo->talla_actual->$talla_actual;
            $hijo->edad_meses->$edad_meses;
            $hijo->hemoglobina->$hemoglobina;
          //$hijo->madres_id->;
            $hijo->factores_importante_id->$idfactores;
            $hijo->save();

        
            return ['data' =>'empleados','veri'=>true];
        }catch(Exception $e){
            return ['data' =>$e,'veri'=>false];
        }
          }

  

  public function edit($id)
    {

        return view("persona.edit",["madres"=>madres::findOrFail($id)]);
    }

   
    public function update(Request $request,$id)
    {

                  $madres=Madress::Find($id);
                  $madres->nom_madre=$request->get('nom_madre'); 
                  $madres->dni=$request->get('dni');                 
                  $madres->edad=$request->get('edad');
                  $madres->lugar_residencia=$request->get('lugar_residencia');
                  $madres->departamento=$request->get('departamento');
                  $madres->provincia=$request->get('provincia');
                  $madres->distrito=$request->get('distrito'); 
                  $madres->distrito=$request->get('correo');
                  $madres->distrito=$request->get('cel');  
                  $Cliente->update();
 
            
            return redirect::to('persona');
    }

    public function destroy($id)
    {
        $madres=madres::findOrFail($id);
        $madres->estado=0;
        $madres->update();
        return Redirect::to('persona');


    }
}
