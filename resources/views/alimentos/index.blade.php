@extends('layouts.layouts')
@section('content')
            
            <div class="container-fluid">
                <div class="row">
                    @foreach($alimentos as $alimento)
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('img/alimentos/'.$alimento->imagen)}}" alt="...">
                            </div>
                            <div class="content" style="background-color: transparent !important;">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                    <h5>{{$alimento->imagen}}<br><small>{{ $alimento->nombre}}</small></h5>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <h5><br><small>{{ $alimento->tamaño }}</small></h5>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center" >
                                <div class="row">
                                    <!-- <button class="btn btn-info btn-fill btn-wd" style="margin-bottom: 10px;"> Agregar </button> -->
                                    <a href="{{ route('cart-add',$alimento->id) }}" class="btn btn-info btn-fill btn-wd" style="margin-bottom: 10px;">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
                <div class="text-center" >
                    <div class="row">
                        <button class="btn btn-info btn-fill btn-wd" style="margin-bottom: 10px;"> Agregar </button>
                    </div>
                </div>
            </div>
            
@endsection