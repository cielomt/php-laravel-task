@extends('general')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Edit: {!! $contacts->name !!}
                        </h2>
                    </div>
                    <div class="panel-body">
                        @include('errors.list')
                        {!! Form::model($contacts, ['method' => 'PATCH', 'url' =>'contacts/'.$contacts->id]) !!}
                            @include('contacts.form',['submitButton' => 'Update Contact'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop