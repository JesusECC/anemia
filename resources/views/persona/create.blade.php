@extends('layouts.layouts')
@section('content')


{!!Form::open(array('url'=>'empleados','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <form action="">
                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nombre de la madre</label>
                                                <input type="text" class="form-control border-input" placeholder="Nombre de la madre" id="nom_madre" name="nom_madre">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DNI</label>
                                                <input type="text" class="form-control border-input" placeholder="DNI" id="dni" name="dni">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="edad">Edad</label>
                                                <input type="number" class="form-control border-input" placeholder="edad" id="edad" name="edad">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="edad">Direccion</label>
                                                <input type="text" class="form-control border-input" placeholder="Direccion" id="lugar_residencia" name="lugar_residencia">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Departamento </label>
                                                <input type="text" class="form-control border-input" placeholder="departamento" id="departamento" name="departamento">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provincia</label>
                                                <input type="text" class="form-control border-input" placeholder="provincia" id="provincia" name="provincia">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Distrito</label>
                                                <input type="text" class="form-control border-input" placeholder="distrito" id="distrito" name="distrito">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Correo </label>
                                                <input type="text" class="form-control border-input" placeholder="correo" id="correo" name="correo">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input type="number" class="form-control border-input" placeholder="cel" id="cel" name="cel">
                                            </div>
                                        </div>
                                    </div>

                                    
                                       
                                        <div class="text-center">
                                       
                                        <button class="btn btn-info btn-fill btn-wd" type="submit"> Guardar</button>

                                       <a href="{{url('empleados')}}"><button  class="btn btn-info btn-fill btn-wd " type="button">Cancelar</button></a>
                                    </div>
                             </div>
                                    
                                

           {!!Form::close()!!}
   
@endsection