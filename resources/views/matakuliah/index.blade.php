@extends('layout.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<a href="{{ route('matakuliah.create') }}">Create</a>
		<table class="table">
			<thead>
				<th>#</th>
				<th>Kode</th>
				<th>Name</th>
				<th>sks</th>
				<th>Date</th>
				<th>Mahasiswa</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php $no = 0;?>
				@foreach ($matkul as $m)
					<tr>
					<td>{{ $no = $no +1 }}</td>
					<td>{{ $m->kode_matakuliah }}</td>
					<td>{{ $m->nama_matakuliah }}</td>
					<td>{{ $m->sks }}</td>
					<td>{{ $m->date_matakuliah }}</td>
					<td>{{ $m->mahasiswa->nama }}</td>
					<td>
						<a href="{{ route('matakuliah.edit', $m->id) }}">Edit</a>
						<form action="{{ route('matakuliah.destroy', $m->id) }}" method="POST">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="DELETE">
						<button type="submit">Delete</button>
						</form>
					</td>
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
</div>
@endsection