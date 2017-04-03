@extends('layouts.panel')
@section('body')
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Id:</td>
            <td>Şehir:</td>
            <td>Ülke:</td>
        </tr>
        </thead>
        <tbody>
        @foreach($sehirler as $sehir)
            <tr>
                <td>{{$sehir->id}}</td>
                <td>{{$sehir->city}}</td>
                @foreach($ulkeler as $ulke)
                    @if($ulke->Id == $sehir->country_id)
                        <td>{{$ulke->Name}}</td>

                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection