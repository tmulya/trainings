<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Email', 'Email') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('role_id', 'Role') !!}<br>
			{!! Form::select('role_id[]', $role, null, ['class'=>'form-control', 'multiple']) !!}	
		</div>
	</div>
</div>