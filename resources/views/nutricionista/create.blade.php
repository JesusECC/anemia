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
        <li class="active">Crear</li>
    </ol>
</section>
<div class="row">
    
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Nuevo Nutricionista</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nombres y Apellidos Completos</label>
                                <input class="form-control border-input"  placeholder="Nombres y apellidos completos" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo </label>
                                <input class="form-control border-input" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Celular</label>
                                <input class="form-control border-input" placeholder="Número de celular" type="number">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Codigo CNP</label>
                                <input class="form-control border-input" placeholder="Código CNP" value="" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Agregar Nutricionista</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>  
    <div class="col-lg-4 col-md-5">
        <div class="card" style="border: 1px dashed #9A9A9A !important;background-color: transparent !important;">
            <div class="header">
                <h4 class="title">Indicaciones</h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('img/faces/face-0.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                DJ Khaled
                                <br>
                                <span class="text-muted"><small>Offline</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('img/faces/face-1.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                Creative Tim
                                <br>
                                <span class="text-success"><small>Available</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="{{asset('img/faces/face-3.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                Flume
                                <br>
                                <span class="text-danger"><small>Busy</small></span>
                            </div>

                            <div class="col-xs-3 text-right">
                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection