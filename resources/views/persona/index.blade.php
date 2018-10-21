@extends('layouts.layouts')
@section('content')


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border" style="padding: 10px !important">
                    <h4>
                        <strong style="font-weight: 400">
                             Lista de Madres
                        </strong>
                    </h4>
                    <div class="ibox-title-buttons pull-right">
                        <a href="{{route('persona-create')}}" style="text-decoration: none !important">
                            <button class="btn btn-block btn-success" style="background-color: #blue !important; margin-bottom: 15px">
                                 Agregar Madre
                            </button></a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;font-size: 11px !important">
                       <thead>
                            <tr>
                                <th>N documento</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Opciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($madres as $ma)
                            <tr>
                                <td>{{$ma->dni}}</td>
                                <td>{{$ma->nom_madre}}</td>
                                <td>{{$ma->correo}}</td>
                                <td>{{$ma->cel}}</td>
                               
                                <td align="center">
                                  <a  href="{{route('persona-show',$ma->id)}}" class="btn btn-primary btn-xs"  title="Ver Producto"> Ver </a>
                                    
                                    <a href="{{url('empleados')}}" data-target=""  data-toggle="modal" class="btn btn-danger btn-xs" title="Eliminar Producto">Eliminar </a>
                                </td>
                            </tr>
                           
                            @endforeach
                        </tbody>
                    </table>
                    {{$madres->render()}}
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
</section><!-- /.content -->
@endsection

<!-- COMENTARIOS
-Codigo de pedido ira en el detalle catalogo
-Foto ira en el detalle catalogo
-fecha de sistema de registro ira en el detalle catalogo  -->