@extends('layouts/index')
@section('content')
<table class="container">

        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Graduated</th>
            <th>Major</th>
            <th>Year of Graduation</th>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->last_name}}</td>
                @if(($s->graduated)==1)
                    <td>Graduated</td>
                @else
                    <td>Not Graduated</td>
                @endif
                <td>{{$s->major}}</td>
                <td>{{$s->realboys}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
@stop
