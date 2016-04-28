@extends('layouts.main')

@section('content')
    <h1>Opret bruger</h1>
    @foreach($errors->all() as $error)
        <p class="error">{{$error}}</p>
    @endforeach
    {{ Form::open()  }}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_gentag" placeholder="Password igen">
    <input type="submit" value="Login">
    {{ Form::close()  }}

@stop