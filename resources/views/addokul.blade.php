@extends('layouts.panel')
@section('title')
    Admin Panel
@endsection

@section('body')

    <form action="{{url('panel/addokul')}}" class="form-group" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="okuladi"> Okul Adı Giriniz:</label>
        <input type="text" class="form-control okuladi" name="okuladi">

        <label for="detail"> Detay:</label>
        <textarea class="form-control" name="detail" id="detail"></textarea>

        <label for="webaddress"> Web Sitesi</label>
        <input type="text" class="form-control" name="webaddress">

        <label for="tel_1"> Telefon Numarası:</label>
        <input type="text" class="form-control" name="tel_1">

        <label for="tel_2"> Telefon Numarası 2:</label>
        <input type="text" class="form-control" name="tel_2">

        <label for="maps"> Google Haritalar:</label>
        <input type="text" class="form-control" name="maps">

        <label for="accomodation"> Konaklama:</label>
        <input type="text" class="form-control" name="accommodation">

        <label for="photo"> Fotoğraf:</label>
        <input type="file" class="form-control" name="photo">

        <label for="education"> Eğitim:</label>
        <input type="text" class="form-control" name="education">

        <label for="sehir">Şehir Seçiniz:</label>
        <select name="sehir" id="" class="form-control">
            @foreach($sehirler as $sehir)
                    <option value="{{$sehir->id}}">{{$sehir->city}}</option>
            @endforeach

        </select>
       
       
        
        <button type="submit" class="btn btn-primary" style="margin-top:10px"> Ekle</button>
    </form>

<script type="text/javascript">

    $(document).ready(function(){
        $('#detail').summernote();

    })
</script>

@endsection