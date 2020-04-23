@extends('layouts/thishasnopurpose')
@section('content')
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
            <td>
                <form method="get" action="/home/{{$s->id}}">
                    @csrf
                    <input type="submit" value="Show: {{$s->id}}">
                </form>
            </td>
        </tr>
    @endforeach
@stop

