@extends('layouts.main')

@section('content')
    @foreach($errors->all() as $error)
        <p class="error">{{$error}}</p>
    @endforeach
    {{ Form::open()  }}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
    {{ Form::close()  }}

    <a href="/new_user">Ny bruger?</a>
@stop