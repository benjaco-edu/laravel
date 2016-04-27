@extends('layouts.main')

@section('content')

    <h1>Items</h1>

    @foreach($items as $item)
        {{$item->name}}<br>
    @endforeach

@stop
