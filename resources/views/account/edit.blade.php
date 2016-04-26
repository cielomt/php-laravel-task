@extends('general')

@section('content')
    <h1>Account Info</h1>
    <hr/>
    <ul class="col-md-4 nav nav-tabs nav-stacked">
        <li class="active"><a href="#name" data-toggle="tab" aria-expanded="true">Name</a></li>
        <li class=""><a href="#username" data-toggle="tab" aria-expanded="false">Username</a></li>
        <li class=""><a href="#email" data-toggle="tab" aria-expanded="true">Email</a></li>
        <li class=""><a href="#password" data-toggle="tab" aria-expanded="false">Password</a></li>
    </ul>
    @include('errors.list')
    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AccountController@update',$user->id]]) !!}
    <div id="myTabContent" class="col-md-6 tab-content">
        <div class="tab-pane fade active in" id="name">
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="tab-pane fade" id="username">
            <div class="form-group">
                {!! Form::label('username', 'Username:') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="tab-pane fade" id="email">
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="tab-pane fade" id="password">
            <div class="form-group">
                {!! Form::label('old_password', 'Current Password:') !!}
                {!! Form::password('old_password',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'New Password:') !!}
                {!! Form::password('password',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirm New Password:') !!}
                {!! Form::password('password_confirmation',null,['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md- 10 form-group">
            {!! Form::submit('Save Changes', ['class' => 'btn btn-primary form-group']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop