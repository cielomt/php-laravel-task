@extends('general')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Account Info
                        </h2>
                    </div>
                    <div class="panel-body">
                        @include('errors.list')
                        {!! Form::model($user, ['method' => 'PATCH', 'url' =>'auth/account']) !!}
                            @include('auth.form',['submitButton' => 'Save Changes'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop