@extends('layouts.app')

@section('content')
    <div class="row">
        <img class="col-md-2" src="../images/avatars/{{$user->avatar}}">
        <h1 class="col-md-4">{{$user->name}}</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
        <button onclick="toggle_visibility('changeavatar')">Update Profile Image</button>
        <form  id="changeavatar" class="col-md-2" style="display:none" enctype="multipart/form-data" action="/profile" method="POST">
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-primary">
        </form>
        </div>
    </div>
@endsection