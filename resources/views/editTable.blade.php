@extends('layouts/index')
@section('content')
    <form action="/home/{{$student->id}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        Major: <input type="text"
                      name="major"
                      value="{{$student->major}}">

        <input type="submit" value="Update student major">
    </form>
@stop
