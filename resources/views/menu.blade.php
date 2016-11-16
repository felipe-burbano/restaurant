@extends('layouts.app')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

@section('content')

<div class="container">
  <div class="page-header">
  	<h1>Menú <small>de alimentos</small></h1>
  </div>
	
    <a href="{{ url('/crear-menu') }}" class="btn btn-primary">Adicionar</a></li>
	<!--<button type="button" class="btn btn-primary">Modificar</button>-->
	<br><br>
    <br>
  <table id="example" class="display table table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr class="info">
                <th>categoria</th>
                <th>fecha</th>
                <th>sopa</th>
                <th>arroz</th>
                <th>carnes</th>
                <th>ensalada</th>
                <th>jugo</th>
                <th>valor almuerzo</th>
                <th>valor bandeja</th>   
                <th>Acción</th>             
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)

                <tr>
                    <td>{{ $menu->categoria }}</td>
                    <td>{{ $menu->fecha }}</td>
                    <td>{{ $menu->sopa }}</td>
                    <td>{{ $menu->arroz }}</td>
                    <td>{{ $menu->carnes}}</td>
                    <td>{{ $menu->ensalada }}</td>
                    <td>{{ $menu->jugo }}</td>
                    <td>{{ $menu->valor_almuerzo }}</td>
                    <td>{{ $menu->valor_bandeja }}</td>
                    <td>@include('crud.eliminar')</td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
   </div>
       @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
    $('#example').DataTable(/*{
    	"processing": true,
        "serverSide": true,
        "ajax": "api/menu",
        "columns" :[
        	{data: 'id'},
        	{data: 'name'},
        	{data: 'email'},
        ]
    	}*/);
	} );
</script>