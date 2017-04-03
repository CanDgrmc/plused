@extends('layouts.panel')
@section('body')
<table class="table table-bordered">
    <thead>
    <tr>
        <td>Id:</td>
        <td>Ulke Adı:</td>
    </tr>
    </thead>
    <tbody>
    @foreach($ulkeler as $ulke)
        <tr>
            <td>{{$ulke->Id}}</td>
            <td>{{$ulke->Name}}</td>

        </tr>
    @endforeach
    </tbody>
</table>

@endsection