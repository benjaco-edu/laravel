@extends('layouts.main')

@section('content')

    <h1>Items <a href="{{URL::route("new")}}">Add</a></h1>

    <ul>

    @foreach($items as $item)
        <li>
            {{ Form::open() }}
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="checkbox" name="item"
                   onclick="this.form.submit()"
                   value="" {{ $item->done? 'checked':'' }} >
            {{ e($item->name) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
    <a href="{{URL::route("delete_done")}}">Fjern færdige</a>

@stop
