@extends('layouts.panel')
@section('body')

<table class="table table-bordered">
    <thead>
    <tr>
        <td>Id:</td>
        <td>Ulke Adı:</td>
        <td>İşlem</td>
    </tr>
    </thead>
    <tbody>
    @foreach($ulkeler as $ulke)
        <tr>
            <td>{{$ulke->Id}}</td>
            <td>{{$ulke->Name}}<br><div class="update hidden col-md-12"><div class="col-md-6"><input type="text" name="ulkeadi" value="{{$ulke->Name}}" class="form-control "></div><button class="btn btn-default col-md-3 updateulke" data="{{$ulke->Id}}">Değiştir</button><input type="hidden" name="_token" value="{{ csrf_token() }}" class="token"></div></td>
            <td><a href="{{$ulke->Id}}" class="editbtn"><img src="/img/myicons/edit.png"></a> <a href="{{$ulke->Id}}" class="delbtn"><img src="/img/myicons/delete.png"></a></td>

        </tr>
    @endforeach
    </tbody>
</table>
<script type="text/javascript">
 $('.updateulke').on('click',function(e){
    e.preventDefault();
    
    var token= $(this).next().val();

    var ulkeadi=$(this).prev().children('input').val();
    var id=$(this).attr('data');
    $.post("/panel/ulkeupdate",{
        "_token" : token,
        "id" : id,
        "ulkeadi" : ulkeadi
    },function(res){
        console.log(res)
    })

 })



$('.editbtn').click(function(e){
    e.preventDefault();
    $(this).parent().prev().children('.update').toggleClass('hidden');

    return false
})
    $('.delbtn').click(function(e){
        $(this).parents('tr').fadeOut('slow');
        var id= $(this).attr('href');
        e.preventDefault();
        swal({
          title: "Siliniyor",
          text: "Bu ülkeyi silmek istediğinize emin misin?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Sil",
          closeOnConfirm: false
        },
        function(){
            

             $.get('/panel/ulkesil/'+id , function(e){
            if(e){
                
                swal('Silindi','Ülke veritabanından başarıyla silindi','success')
            }
            else{
                $('.delbtn').parents('tr').fadeIn('fast');
                swal('Hata','İşlem gerçekleştirilemedi, Hata Mesajı: '+e,'error')
            }
        } )
          swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
        
       
    })

</script>
@endsection