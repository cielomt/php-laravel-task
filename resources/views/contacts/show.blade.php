@extends('general')

@section('content')
    <script>
        function ConfirmDelete(){
            var x = confirm("Are you sure you want to delete?");
            return x;
        }
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{$contacts->name}}</h2>
                    </div>
                    <div class="table-responsive panel-body">
                        <articles>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Email Address:</td>
                                    <td>{{$contacts->email}}</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>{{$contacts->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{$contacts->address}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {!! Form::open(['method' => 'GET', 'route'=>['contacts.edit',$contacts->id]])!!}
                                        {!! Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit',
                                        array('type' => 'submit','class' => 'btn btn-info')) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route'=>['contacts.destroy',$contacts->id],
                                        'onsubmit' => 'return ConfirmDelete()']) !!}
                                        {!! Form::button('<span class="glyphicon glyphicon-trash"></span> Delete',
                                        array('type' =>'submit', 'class' => 'btn btn-primary')) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </articles>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop