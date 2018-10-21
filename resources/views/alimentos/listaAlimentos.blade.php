@extends('layouts.layouts')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
            <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nombre</th>
                                    	<th>Tamaño</th>
                                    	<th>Peso</th>
                                    	<th>Proteina</th>
                                        <th>Femg</th>
                                        <th>Vitamina</th>
                                        <th>Imagen</th>
                                        <th>Tipo</th>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($cart as $ali)
                                        <tr>
                                            <td>{{  $ali->id }}</td>
                                        	<td>{{  $ali->nombre }}</td>
                                        	<td>{{  $ali->tamaño }}</td>
                                        	<td>{{  $ali->peso }}</td>
                                        	<td>{{  $ali->proteina }}</td>
                                            <td>{{  $ali->femg}}</ td>
                                            <td>{{  $ali->vitamina }}</td>
                                            <td>{{  $ali->imagen }}</td>
                                            <td>{{  $ali->tipo }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

            </div>                    
        </div>
    </div>
@endsection