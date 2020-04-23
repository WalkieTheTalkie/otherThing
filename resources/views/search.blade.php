@extends('layouts/index')
    @section('content')
</table>
<form action="/searchResults" method="post" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default" value="hello gordon"> Search
            </button>
        </span>
    </div>
</form>

@stop
