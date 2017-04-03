@extends('layouts.panel')
@section('title')
    Admin Panel
@endsection

@section('body')
    <form action="{{url('panel/addulke')}}" class="form-group" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="ulkeadi"> Ulke Adı Giriniz:</label>
        <input type="text" class="form-control" name="ulkeadi">
        <button type="submit" class="btn btn-primary" style="margin-top:10px"> Ekle</button>
    </form>



@endsection