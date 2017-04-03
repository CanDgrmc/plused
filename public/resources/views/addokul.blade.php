@extends('layouts.panel')
@section('title')
    Admin Panel
@endsection

@section('body')
    <form action="{{url('panel/addokul')}}" class="form-group" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="okuladi"> Okul Adı Giriniz:</label>
        <input type="text" class="form-control" name="okuladi">
        <label for="sehir">Şehir Seçiniz:</label>
        <select name="sehir" id="" class="form-control">
            @foreach($sehirler as $sehir)
                    <option value="{{$sehir->id}}">{{$sehir->city}}</option>
            @endforeach

        </select>
        <button type="submit" class="btn btn-primary" style="margin-top:10px"> Ekle</button>
    </form>



@endsection