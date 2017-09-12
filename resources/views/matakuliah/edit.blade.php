{!! Form::model($matkul, ['url'=>route('matakuliah.update', $matkul->id), 'method'=>'PUT']) !!}
	@include('matakuliah._form')
	
	
	<br>
	<br>
	<button type="submit">Update</button>
{!! Form::close() !!}