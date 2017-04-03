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
        @foreach($sehirler as $sehir)
            <tr>
                <td>{{$sehir->id}}</td>
                <td>{{$sehir->city}}
                <div class="update col-md-12 hidden">
                    <div class="col-md-6">
                        <input type="text" name="upd" class="form-control">
                    </div>
                    <button class="btn btn-default col-md-4">Değiştir</button>
                </div>
                </td>
                <td>
                @foreach($ulkeler as $ulke)
                    @if($ulke->Id == $sehir->country_id)
                        {{$ulke->Name}}

                    @endif
                    
                    
                @endforeach
                </td>
                <td><a href="{{$ulke->Id}}" class="editbtn"><img src="/img/myicons/edit.png"></a> <a href="{{$ulke->Id}}" class="delbtn"><img src="/img/myicons/delete.png"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
<script type="text/javascript">
    $('.editbtn').click(function(e){
    e.preventDefault();
    $(this).parent().prev().prev().children('.update').toggleClass('hidden');

    return false
})
</script>
@endsection