<div class="row">
	<div class="col-md-4">
		{!! Form::label('kode_matakuliah') !!} <br>
		{!! Form::text('kode_matakuliah', null, ['class'=>'form-control','id'=>'kode_matakuliah', 'placeholder'=>'kode matakuliah']) !!}<br>

		{!! Form::label('nama_matakuliah', 'Nama Matakuliah') !!}<br>
		{!! Form::text('nama_matakuliah', null, ['class'=>'form-control']) !!}<br>

		{!! Form::label('sks', 'Sks') !!} <br>
		{!! Form::text('sks', null,['class'=>'form-control']) !!}<br>

		{!! Form::label('date_matakuliah', 'Date') !!} <br>
		{!! Form::date('date_matakuliah', null, ['class'=>'form-control']) !!}<br>

		{!! Form::label('mahasiswa_id', 'Mahasiswa') !!}<br>
		{!! Form::select('mahasiswa_id', $mahasiswa, null, ['class'=>'form-control']) !!}	
	</div>
</div>