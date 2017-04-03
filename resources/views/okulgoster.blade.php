@extends('layouts.panel')
@section('body')
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Id:</td>
            <td>Şehir:</td>
            <td>Ülke:</td>
            <td>İşlem</td>
        </tr>
        </thead>
        <tbody>
        @foreach($okullar as $okul)
            <tr>
                <td>{{$okul->Id}}</td>
                <td>{{$okul->School_Name}}</td>
                <td>
                @foreach($sehirler as $sehir)
                    @if($okul->cities == $sehir->id)
                        {{$sehir->city}}
                    @endif
                @endforeach
                </td>
                <td><a href="{{url('panel/okul_duzenle/'.$okul->Id)}}" class="editbtn"><img src="/img/myicons/edit.png"></a> <a href="{{url('panel/okul_sil/'.$okul->Id)}}"><img src="/img/myicons/delete.png"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection