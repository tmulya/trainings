{!! Form::open(['url'=> route('matakuliah.store')]) !!}
	@include('matakuliah._form')
<br>
<br>
<button type="submit">Save</button>
{!! Form::close() !!}