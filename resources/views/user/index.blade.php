@extends('layout.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<a href="{{ route('user.create') }}">Create</a>
		<table class="table">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Date</th>
				<th>Role</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php $no = 0;?>
				@foreach ($users as $user)
					<tr>
						<td>{{ $no = $no +1 }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
						<td>
							@foreach ($user->roles as $r)
								{{ $r->name }},
							@endforeach
						</td>
						<td>
							<a href="{{ route('user.edit', $user->id) }}">Edit</a>
							<form action="{{ route('user.destroy', $user->id) }}" method="POST">
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