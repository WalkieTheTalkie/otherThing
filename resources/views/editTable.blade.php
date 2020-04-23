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
    <form action="/home/{{$student->id}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        Major: <input type="text"
                      name="major"
                      value="{{$student->major}}">

        <input type="submit" value="Update student major">
    </form>
    </tbody>
    </table>
@stop
