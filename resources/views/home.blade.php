@extends('layouts.main')

@section('content')

    <h1>Items</h1>

    <ul>

    @foreach($items as $item)
        <li>
            {{ Form::open() }}
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="checkbox" name="item"
                   onclick="this.form.submit()"
                   value="" {{ $item->done? 'checked':'' }} >
            {{$item->name}}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>

@stop
