@extends('layouts.layouts')
@section('content')
<section class="content-header" style="margin-top: -30px !important;">
    <h1>
        Panel de Administrador
        <small>Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
            <i class="fas fa-dolly"></i>Nutricionista</a>
        </li>
        <li class="active">Index</li>
    </ol>
</section>
<button type="submit" class="btn btn-info btn-fill btn-wd" style="margin-bottom: 15px;"><span class="ti-user"></span> Agregar Nutricionista</button>                              
<div class="row">
<div class="col-lg-4 col-md-5">
    <div class="card card-user">
        <div class="image">
            <img src="{{asset('img/background1.jpeg')}}" alt="...">
        </div>
        <div class="content">
            <div class="author">
              <img class="avatar border-white" src="{{asset('img/doctor.png')}}" alt="...">
              <h4 class="title">Chet Faker<br>
                 <a href="#"><small>doctor1@gmail.com</small></a>
              </h4>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h5>2GB<br><small>Celular</small></h5>
                </div>
                <div class="col-md-6 text-center">
                    <h5>24,6$<br><small>Cod. CNP</small></h5>
                </div>
            </div>
        </div>
    </div>           
</div>


@endsection
