@extends('layouts/index')

@section('content')
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
    <h2>Student Details</h2>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->last_name}}</td>
    @if(($student->graduated)==1)
        <td>Graduated</td>
    @else
        <td>Not Graduated</td>
    @endif
    <td>{{$student->major}}</td>
    <td>{{$student->realboys}}</td>
    <td>
        <form method="get" action="/home/{{$student->id}}/edit">
            @csrf
            <input type="submit" value="Edit">
        </form>
    </td>
    <td>
        <form action="/home/{{$student->id}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Delete">
        </form>
    </td>
    </tbody>
    </table>
@stop
