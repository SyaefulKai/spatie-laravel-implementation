@extends('app')

@section('content')
    <form action="/register/validate" method="post">
        @csrf
        <input type="text" name='name'><br>
        <input type="email" name='email'><br>
        <input type="password" name='password'><br>
        <button>Register</button>
    </form>
@endsection