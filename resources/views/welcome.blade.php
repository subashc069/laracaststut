@extends('layouts.layout')

@section('content')
    <h1>My {{$foo}} website</h1>
    <ul>
        {{--  passing data to a view  --}}
        {{--  @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach  --}}
    </ul>
    
@endsection