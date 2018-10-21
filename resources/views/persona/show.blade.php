@extends('layouts.layouts')
@section('content')




<section class="content-header" style="margin-top: -30px !important;">
  
    <ol class="breadcrumb">
        <li>
            <a href="#">
            <i class="fas fa-dolly"></i>Nutricionista</a>
        </li>
        <li class="active">Index</li>
    </ol>
</section>
                              
<div class="row">
<div class="col-lg-12 col-md-12">
    <div class="card card-user">
        
        <div class="content">
            <div class="author">
              <img class="avatar border-white" width="300" height="300" src="{{asset('img/mia.jpg')}}" alt="...">
              <h4 class="title">{{$madre->nom_madre}}<br>
                 <a href="#"><small>{{$madre->correo}}</small></a>
              </h4>
            </div>
        </div>
        <hr>
        <div style="padding-bottom: 15px" class="text-center">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h5>DNI:<h6>{{$madre->dni}} </h6></h5>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Edad:<h6>{{$madre->edad}} </h6></h5>
                </div>
                
                <div class="col-md-4 text-center">
                    <h5>Celular:<h6>{{$madre->cel}} </h6></h5>
                </div>
              </div><hr>
              <div class="row">
                <div class="col-md-4 text-center">
                    <h5>Departamento:<h6>{{$madre->departamento}} </h6></h5>
                </div>    
                <div class="col-md-4 text-center">
                    <h5>Provincia:<h6>{{$madre->provincia}} </h6></h5>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Distrito:<h6>{{$madre->distrito}} </h6></h5>
                </div>
                
            </div><hr>
              <div class="row">
                <div class="col-md-12 text-center">
                    <h5>Direccion:<h6>{{$madre->lugar_residencia}} </h6></h5>
                </div>
            </div>
            <a href="{{url('empleados/createh')}}"><button style="margin-top: 20px" class="btn btn-info" type="button">Agregar Hijos</button></a>

        </div>
    </div>           
</div>
</div>

        
  
@endsection

