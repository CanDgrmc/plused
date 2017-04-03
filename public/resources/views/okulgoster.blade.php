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
        @foreach($okullar as $okul)
            <tr>
                <td>{{$okul->Id}}</td>
                <td>{{$okul->School_Name}}</td>
                @foreach($sehirler as $sehir)
                    @if($okul->cities == $sehir->id)
                        <td>{{$sehir->city}}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection