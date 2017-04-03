@extends('layouts.panel')
@section('title')
Admin Panel
@endsection

@section('body')
<form action="{{url('panel/addsehir')}}" class="form-group" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="sehiradi"> Şehir Adı Giriniz:</label>
    <input type="text" class="form-control" name="sehiradi">
    <label for="ulke">Ulke Seçiniz</label>
    <select name="ulke" id="" class="form-control">
        @foreach($ulkeler as $ulke)
            <option value="{{$ulke->Id}}">{{$ulke->Name}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary" style="margin-top:10px"> Ekle</button>
</form>



@endsection