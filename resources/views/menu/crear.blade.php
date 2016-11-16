@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
  	<h1>Creación <small>de alimentos</small></h1>
  </div>

<div class="row">
{!! Form::open(['route'=>'crear.store', 'method'=> 'POST']) !!}
<div class="col-md-7">
   {!! Form::label('name', 'Fecha:') !!}
   {!! Form::date('name', \Carbon\Carbon::now(), ['name' => 'fecha']) !!}<br/><br/>

   {!! Form::label('name', 'Tipo de comida:') !!}
  <select class="form-control" name="tipoComida">
    <option>--Selecione una opción--</option>
    <option value="0">Almuerzo</option>
    <option value="1">Desayuno</option>
  </select>
 </div>
  
 <!-- <div class="col-md-6">
   <h2>Desayuno</h2>
    <div class="form-group">
    <label>Bebida:</label>
    <input type="text" class="form-control" id="sopa" name="bebidaNombre" placeholder="Nombre de la sopa">
  </div>&nbsp;&nbsp; 
  </div>-->


   <div class="col-md-6">
  <h2>Almuerzo</h2>
	<div class="form-group">
    <label>Sopa:</label>
    <input type="text" class="form-control" id="sopa" name="sopaNombre" placeholder="Nombre de la sopa">
  </div>&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputEmail2">Arroz:</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="arrozNombre" placeholder="Nombre del arroz">
  </div>&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputEmail2">Carnes:</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="carnesNombre" placeholder="Nombre de la carne">
  </div>
	  <div class="form-group">
    <label for="exampleInputEmail2">Ensalada:</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="ensaladaNombre" placeholder="Nombre de la ensalada">
  </div> <br/>
   <div class="form-group">
    <label for="exampleInputEmail2">Principio:</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="principioNombre" placeholder="Nombre del principio">
  </div> <br/>
  <div class="form-group">
    <label for="exampleInputEmail2">Jugo:</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="jugoNombre" placeholder="Nombre del jugo">
  </div>&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputEmail2">Valor almuerzo:</label>
    <input type="number" class="form-control" id="exampleInputEmail2" name="valorAlmuerzo" placeholder="valor del almuerzo $50">
  </div>&nbsp;&nbsp;
  <div class="form-group">
    <label for="exampleInputEmail2">Valor bandeja:</label>
    <input type="number" class="form-control" id="exampleInputEmail2" name="valorBandeja" placeholder="Valor de la bandeja $10">
  </div> 
  </div>
<br>
</div>
{!! Form::submit('Agregar al menú', ['class' => 'btn btn-primary btn-lg']) !!}
{!! Form::close() !!}
</div>
@endsection