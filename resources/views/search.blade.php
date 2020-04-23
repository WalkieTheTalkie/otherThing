@extends('layouts/index')
    @section('content')
</table>
<form action="/searchResults" method="post" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search Students"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default"> Search
            </button>
        </span>
    </div>
    <p style="color:red">{{$errors->first('q')}}</p>
</form>

@stop
