


{!! Form::open(['route' => ['eliminar.destroy',$menu->id], 'method' => 'DELETE']) !!}
	{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}