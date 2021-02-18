@extends('template.mainadm')
@section('content')
    @include('partial.legumecontadm') 
    <div>
        <a class="btn btn-success" href="{{route('addlegume')}}">Nouveau legumes</a>
    </div>
@endsection