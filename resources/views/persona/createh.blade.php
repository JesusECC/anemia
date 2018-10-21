@extends('layouts.layouts')
@section('content')


<!--{!!Form::open(array('url'=>'empleados','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}-->
<label for="" class="control-label" style="color: #676a6c !important font: 20px"><h4>
                                            Registro Hijo
                                        </h4></label><hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <form action="">
                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form>
                                    <label for="" class="control-label" style="color: #676a6c !important font: 20px">
                                            Datos
                                        </label><hr>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                                <input type="text" class="form-control border-input" placeholder="Nombre de la madre" id="a" name="nombres">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DNI</label>
                                                <input type="text" class="form-control border-input" placeholder="DNI" id="b" name="dni">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edad">Fecha nacimiento</label>
                                                <input type="date" class="form-control border-input" placeholder="fecha de nacimeinto" id="c" name="fecha_nac">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="peso_nacer">Peso de nacimiento</label>
                                                <input type="number" class="form-control border-input" placeholder="peso" id="d" name="peso_nacer">
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edad_gestacional">Edad Gestacional</label>
                                                <input type="number" class="form-control border-input" placeholder="edad" id="e" name="edad_gestacional">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="talla_nacer">Talla de nacimiento</label>
                                                <input type="number" class="form-control border-input" placeholder="talla " id="f" name="talla_nacer">
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edad_meses">Edad en Meses</label>
                                                <input type="number" class="form-control border-input" placeholder="edad en meses" id="g" name="edad_meses">
                                            </div>
                                        </div>
                                       
                                    </div>

                               <div class="row">
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="peso_actual">Peso Actual</label>
                                                <input type="number" class="form-control border-input" placeholder="peso actual" id="h" name="peso_actual">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="talla_actual">Talla Actual</label>
                                                <input type="number" class="form-control border-input" placeholder="talla actual" id="i" name="talla_actual">
                                            </div>
                                        </div>
                                    </div><hr>

                                    <label for="" class="control-label" style="color: #676a6c !important font: 20px">
                                            Datos Medicos
                                        </label><hr>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Hemoglobina </label>
                                                <input type="number" class="form-control border-input" placeholder="hemoglobina" id="j" name="hemoglobina">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">              
                                        <div class="form-group">
                                            <label>Tipo de parto</label>
                                                <select id="k" name="tipo_parto" class="form-control">
                                                 <option value="" disabled selected >Selecione Tipo de Parto</option>
                                                <option value="Parto natural">Parto natural</option>
                                                <option value="Cesarea">Cesarea</option>
                                                
                                                
                                                </select>
                                        </div>
                                    </div>                  
                                 <div class="col-md-3">
                                            <div class="form-group">
                                            <label>Corte Tardio Cordon </label>
                                                <select id="l" name="corte_tardio_cordon" class="form-control">
                                                 <option value="" disabled selected >eligir opcion</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label>Lactancia menor a 6 meses </label>
                                                <select id="m" name="lactancia6" class="form-control">
                                                 <option value="" disabled selected >eligir opcion</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                                </select>
                                            </div>
                                        </div>                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Micronutrientes </label>
                                                <select id="n" name="micronutrientes" class="form-control">
                                                 <option value="" disabled selected >eligir opcion</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">              
                                        <div class="form-group">
                                            <label>Acceso Agua</label>
                                                <select id="o" name="acceso_agua" class="form-control">
                                                 <option value="" disabled selected >eligir opcion</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                                </select>
                                        </div>
                                    </div>                  
                                 <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Acceso Desague </label>
                                                <select id="p" name="acceso_desague" class="form-control">
                                                 <option value="" disabled selected >eligir opcion</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                                
                                                </select>
                                            </div>
                                        </div>  
                                                        
                                    </div>

                                        <div class="text-right">
                                       
                                        <button  id="save" class="btn btn-primary btn-sm" type="button"><i class="far fa-save"></i> Guardar</button>

                                       <a href="{{url('empleados')}}"><button  class="btn btn-info btn-fill btn-wd " type="button">Cancelar</button></a>
                                    </div>
                             </div>
                                    
                                

         <!--  {!!Form::close()!!}-->
   
@push('scripts')
<script>
    
        $('#save').click(function(){
            saveEmpleado();
        });
        
        $('#su').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '1');
        });
        $('#su').click(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '1');
       
        // Actualizar
       

    });

    function saveEmpleado(){
        // se enviar los datos al controlador empleados
        var nombres=$("#a").val();
        var dni=$("#b").val();
        var fecha_nac=$("#c").val();
        var peso_nacer=$("#d").val();
        var edad_gestacional=$("#e").val();
        var talla_nacer=$("#f").val();
        var peso_actual=$("#g").val();
        var talla_actual=$("#h").val();
        var edad_meses=$("#i").val();
        var hemoglobina=$("#j").val();
        var tipo_parto=$("#k").val();
        var corte_tardio_cordon=$("#l").val();
        var lactancia6=$("#m").val();
        var micronutrientes=$("#n").val();
        var acceso_agua=$("#o").val();
        var acceso_desague=$("#p").val();
        
        if(dni!=''){
            var dat=[{nombres:nombres,dni:dni,fecha_nac:fecha_nac,peso_nacer:peso_nacer,edad_gestacional:edad_gestacional,talla_nacer:talla_nacer,peso_actual:peso_actual,talla_actual:talla_actual,edad_meses:edad_meses,hemoglobina:hemoglobina,tipo_parto:tipo_parto,corte_tardio_cordon:corte_tardio_cordon,lactancia6:lactancia6,micronutrientes:micronutrientes,acceso_agua:acceso_agua,acceso_desague:acceso_desague}];
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:  {datos:dat}, //datos que se envian a traves de ajax
                url:   'guardar', //archivo que recibe la peticion
                type:  'post', //método de envio
                dataType: "json",//tipo de dato que envio 
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    if(response.veri==true){
                        var urlBase=window.location.origin;
                        var url=urlBase+'/'+response.data;
                        document.location.href=url;
                    }else{
                        alert("problemas al guardar la informacion");
                    }
                }
            });
        }
    }
    var bool;
    
   
</script>
@endpush
@endsection