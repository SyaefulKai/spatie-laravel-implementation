@extends('app')

@section('content')
    <p>Your role is {{$role[0]}}</p>

    <!-- Simple usage -->
    
    @if($role === 'user')
        <!-- Do something -->
    @elseif($role === 'admin')
        <!-- Do something -->
    @endif
@endsection