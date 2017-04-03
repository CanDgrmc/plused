@extends('layouts.login')
@section('body')
    <div class="container">
        <div class="col-md-4">
        <form action="{{url('check')}}" method="POST" class="form-group">
            <label for="username"></label>
            <input type="text" placeholder="Username" class="form-control" name="username">
            <label for="password"></label>
            <input type="password" placeholder="Password" class="form-control" name="password">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary" type="submit" style="margin-top:15px;padding-left:55px;padding-right:55px">Giriş</button>
        </form>
    </div>
    </div>

@endsection


