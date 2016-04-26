@extends('general')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Create a New Contact
                        </h2>
                    </div>
                    <div class="panel-body">
                        @include('errors.list')
                        {!! Form::open(['url' =>'contacts']) !!}
                        @include('contacts.form',['submitButton' => 'Add Contact'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
