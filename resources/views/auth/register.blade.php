@extends('layout')

@section('title', 'Registration')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div>
        <input type="email" name="email" placeholder="E-mail">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div>
        <input type="password" name="password_confirmation" placeholder="Password confirmation">
    </div>
    <div>
        <input type="submit" value="Register">
    </div>
</form>
@endsection