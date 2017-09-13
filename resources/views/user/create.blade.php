@extends('layout.app')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['url'=> route('user.store')]) !!}
	@include('user._form')
<br>
<br>
<button type="submit" class="btn btn-primary">Save</button>
{!! Form::close() !!}
@endsection