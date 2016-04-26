@extends('general')

@section('content')
    <h1>Contacts</h1>
    <hr/>
    <div class="col-md-offset-10">
        <a href="/contacts/create" class="btn btn-link" style="display:inline;color: #ffffff">
            <span class="glyphicon glyphicon-plus-sign"></span> New
        </a>
    </div>
    <hr/>
    @foreach ($contacts as $contact)
        <articles>
            <h4>
                <a href="{{url('/contacts',$contact->id)}}">{{$contact->name}}</a>
            </h4>
        </articles>
    @endforeach
@stop
