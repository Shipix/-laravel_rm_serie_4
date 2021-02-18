@extends('template.mainadm')
@section('content')
    @include('partial.fruitcontadm')
    
    <div>
        <a  class="btn btn-success" href="{{route("addfruit")}}"> nouveaux fruits</a>
    </div>
@endsection