{{-- Create Modal --}}
<div class="modal fade" id="createRoleModal" tabindex="-1" role="dialog" aria-labelledby="Create Role">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="CreateColor">Create Role</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['route'=> 'role.store']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Name:') !!}
						{!! Form::text('name',null,['class'=>'form-control']) !!}
					</div>
					{!! Form::submit('save' , ['class' =>'btn btn-red']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="Edit Role">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="EditType">Edit Role</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url'=> '/role/','method'=>"PATCH",'id'=>'editRole']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Name:') !!}
						{!! Form::text('name',null,['class'=>'form-control','id'=>'nameRole']) !!}
					</div>
					{!! Form::submit('Update' , ['class' =>'btn btn-red']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteRoleModal" tabindex="-1" role="dialog" aria-labelledby="Delete Role">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="CreateMerk">Please Confirm</h4>
			</div>
			<div class="modal-body">
				<p class="lead">
            	<i class="fa fa-question-circle fa-lg"></i>  
            		Are you sure you want to delete this Role?
          		</p>
			</div>
			<div class="modal-footer">
				{!! Form::open(['url'=> '/role/','method'=>"DELETE",'id'=>'deleteRole']) !!}
					{!! Form::submit('Delete' , ['class' =>'btn btn-danger']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>