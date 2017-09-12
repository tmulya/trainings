@extends('layout.app')

@section('content')
{!! Form::open(['url'=> route('matakuliah.store')]) !!}
	@include('matakuliah._form')
<br>
<br>
<button type="submit" class="btn btn-primary">Save</button>
{!! Form::close() !!}
@endsection