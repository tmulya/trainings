@extends('layout.app')

@section('content')
	{!! Form::model($matkul, ['url'=>route('matakuliah.update', $matkul->id), 'method'=>'PUT']) !!}
		@include('matakuliah._form')
	

		<br>
		<br>
		<button type="submit" class="btn btn-primary">Update</button>
	{!! Form::close() !!}
@endsection