@extends('layout.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-primary" onclick="addRole()">Create</button>
		<table class="table" id="roleTable">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php $no = 0;?>
				@foreach ($roles as $role)
					<tr>
						<td>{{ $no = $no +1 }}</td>
						<td>{{ $role->name }}</td>
						<td>{{ date('d/m/Y', strtotime($role->created_at)) }}</td>
						<td>
							<button class="btn btn-xs btn-primary" onclick='editRole("{{ $role->id }}","{{ $role->name }}")'><i class="fa fa-pencil" aria-hidden="true"></i></button>
							<button class="btn btn-xs btn-danger" onclick='DeleteRole({{ $role->id }})'><i class="fa fa-trash" aria-hidden="true"></i></button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>	

		@include('role._modal')
	</div>
</div>
@endsection

@section('scripts')
	@include('role._js')
@endsection