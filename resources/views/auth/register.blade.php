@extends('general')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						Register
					</h2>
				</div>
				<div class="panel-body">
					@include('errors.list')
					{!! Form::open(['url' =>'auth/register']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Name:') !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('username', 'Username:') !!}
						{!! Form::text('username', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('email', 'Email Address:') !!}
						{!! Form::text('email', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password', 'Password:') !!}
						{!! Form::password('password', ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password_confirmation', 'Confirm Password:') !!}
						{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
					</div>

					<div class="col-md-offset-4 form-group">
						{!! Form::submit('Register', ['class' => 'btn btn-primary form-inline']) !!}
						<a href="{{ URL::previous() }}" class="btn btn-warning form-inline">
							Cancel
						</a>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
