@extends('layouts.parents')

@section('title', 'Register')

@section('content')
    <form action="/home" method="post">
        @csrf
        <table border=1>
        <tr><th>Name：</th><td><input type="text" name="name"></td></tr>
        <tr><th>E-Mail Address：</th><td><input type="mail" name="mail"></td></tr>
        <tr><th>Password：</th><td><input type="password" name="password"></td></tr>
        <tr><th>Confirm Password：</th><td><input type="password" name="Confirm-password"></td></tr>
        <tr><th></th><td><input type="submit" value="Register"></td></tr>
    </form>
@endsection
