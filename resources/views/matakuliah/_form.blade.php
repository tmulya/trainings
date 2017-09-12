{!! Form::label('kode_matakuliah') !!} <br>
{!! Form::text('kode_matakuliah', null, ['class'=>'form','id'=>'kode_matakuliah', 'placeholder'=>'kode matakuliah']) !!}<br>

{!! Form::label('nama_matakuliah', 'Nama Matakuliah') !!}<br>
{!! Form::text('nama_matakuliah', null) !!}<br>

{!! Form::label('sks', 'Sks') !!} <br>
{!! Form::text('sks', null) !!}<br>

{!! Form::label('date_matakuliah', 'Date') !!} <br>
{!! Form::date('date_matakuliah', null) !!}<br>

{!! Form::label('mahasiswa_id', 'Mahasiswa') !!}<br>
{!! Form::select('mahasiswa_id', $mahasiswa, null) !!}