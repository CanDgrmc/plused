@extends('layouts.panel')

@section('body')
<form action="{{url('panel/okulduzenle')}}" class="form-group" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="photo"> Fotoğraf:</label>
        <img src="{{asset($okul->Photo)}}">
        <input type="text" name="id" class="hidden" value="{{$okul->Id}}">
        <label for="okuladi"> Okul Adı Giriniz:</label>
        <input type="text" class="form-control okuladi" name="okuladi" value="{{$okul->School_Name}}">

        <label for="detail"> Detay:</label>
        <textarea class="form-control" name="detail" id="detail" >{{$okul->detail}}</textarea>

        <label for="webaddress"> Web Sitesi</label>
        <input type="text" class="form-control" name="webaddress" value="{{$okul->Web_Address}}">

        <label for="tel_1"> Telefon Numarası:</label>
        <input type="text" class="form-control" name="tel_1" value="{{$okul->Tel_1}}">

        <label for="tel_2"> Telefon Numarası 2:</label>
        <input type="text" class="form-control" name="tel_2" value="{{$okul->Tel_2}}">

        <label for="maps"> Google Haritalar:</label>
        <input type="text" class="form-control" name="maps" value="{{$okul->Maps}}">

        <label for="accomodation"> Konaklama:</label>
        <input type="text" class="form-control" name="accommodation" value="{{$okul->Accommodation}}">

        
        

        <label for="education"> Eğitim:</label>
        <input type="text" class="form-control" name="education" value="{{$okul->Education}}">

        <label for="sehir">Şehir Seçiniz:</label>
        <select name="sehir" id="" class="form-control">
            @foreach($sehirler as $sehir)
            @if($sehir->id==$okul->cities)
            		<option selected value="{{$sehir->id}}">{{$sehir->city}}</option>
            @else
                    <option value="{{$sehir->id}}">{{$sehir->city}}</option>
            @endif
            @endforeach

        </select>
       
       
        
        <button type="submit" class="btn btn-primary" style="margin-top:10px"> Ekle</button>
    </form>

@endsection