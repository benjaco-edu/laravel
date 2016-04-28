@extends('layouts.main')

@section('content')

   <h1>New task</h1>
   @foreach($errors->all() as $error)
       <p class="error">{{$error}}</p>
   @endforeach
    {{Form::open()}}
        <input type="text" name="name" placeholder="Nsme">
        <input type="submit" value="Create">
    {{Form::close()}}
@stop
