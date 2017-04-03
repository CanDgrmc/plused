@extends('layouts.page')
@section('body')
    <div class="empty-space marg-lg-b35 marg-sm-b30" ></div>
    <div id="content-wrapper" style="margin-bottom:50px;">
        <div class="container">
           <!-- <div class="">
                <form action="{{url('basvurugonder')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                

                
                
                <div class="c-btn type-1 color-3" style="margin-top:20px">
                    <input type="submit" value="GÖNDER">
                </div>
                </form> -->
                

<!--      ###############################################################################   -->
<form action="{{url('basvurugonder')}}" class="" method="POST" id="basvuruform">
<!-- Progressbar -->
<ul id="progressbar" class="col-md-12 col-xs-12" style="margin-bottom:25px;">
<li id="active1" class="baslik aktif">Kişisel Bilgiler <i id="icon1" class="fa "></i></li>
<li id="active2" class="baslik">İletişim Bilgileri <i id="icon2" class="fa"></i></li>
<li id="active3" class="baslik">Ebeveyn Bilgileri <i id="icon3" class="fa"></i></li>
<li id="active4" class="baslik">Eğitim Bilgileri <i id="icon4" class="fa"></i></li>
</ul>
<!-- Fieldsets -->
<fieldset id="first">
<div class="col-md-12">
<h2 class="title">Kişisel Bilgiler</h2>
<p class="subtitle">1.Adım</p>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6">
                <label for="adsoyad">Adınız Soyadınız   :</label>
                <input type="text" class="c-input type-3 step1"  name="adsoyad" value="">
                <label for="dmtarih">Doğum Tarihi   :</label>
                <input type="text" class="c-input type-3 step1"  name="dgmtarih">
                <label for="dgmyer">Doğum Yeri   :</label>
                <input type="text" class="c-input type-3 step1" name="dgmyer">
                <label for="milliyet">Milliyet  :</label>
                <input type="text" class="c-input type-3 step1" name="milliyet">
                <label for="tcno">Tc Kimlik Numarası:</label>
                <input type="text" class="c-input type-3 step1" name="tcno">
                <label for="milliyet2">Varsa başka milliyeti:</label>
                <input type="text" class="c-input type-3 step1" name="milliyet2">
                </div>
                <div class="col-md-5">
                <label for="passno">Pasaport No :</label>
                <input type="text" class="c-input type-3 step1" name="pasaport">
                <label for="passyer">Pasaportun Verildiği Yer   :</label>
                <input type="text" class="c-input type-3 step1" name="pasyer">
                <label for="passmakam">Pasaportu Veren Makam    :</label>
                <input type="text" class="c-input type-3 step1" name="pasmakam">
                <label for="passtarih">Pasaportun Veriliş Tarihi    :</label>
                <input type="text" class="c-input type-3 step1" name="pastarih">
                <label for="passbitis">Pasaportunun Süresinin Bitiş Tarihi     :</label>
                <input type="text" class="c-input type-3 step1" name="pasbitis">
                <label for="passilk">Bu İlk Pasaportunuz Mu   :</label>
                <select name="pasilk" id="" class="c-input type-3">
                    <option value="evet">Evet</option>
                    <option value="hayır">Hayır</option>
                </select>
                </div>
                <div class="col-md-12">
                    <div class="c-btn type-1 color-3" style="margin-top:20px">
                    <input id="next_btn1" onclick="next_step1()" type="button" value="Next">
                    </div>
                </div>
</fieldset>
<fieldset id="second">
<h2 class="title">İletişim Bilgileri:</h2>
<p class="subtitle">2.Adım</p>
                <label for="adres">Ev Adresi   :</label>
                <textarea class="c-input type-3 step2" name="adres" rows="4"></textarea>

                <label for="ikametsure">Kaç Yıldır İkamet Ediyor :</label>
                <input required type="number" class="c-input type-3 step2" name="ikametsure">
                <label for="evtel">Ev Telefonu   :</label>
                <input type="text" class="c-input type-3 step2" name="evtel">
                <label for="ceptel">Cep Telefonu   :</label>
                <input type="text" class="c-input type-3 step2" name="ceptel">
                <label for="anneceptel">Anne Cep Telefonu   :</label>
                <input type="text" class="c-input type-3 step2" name="annetel">
                <label for="babaceptel">Baba Cep Telefonu   :</label>
                <input type="text" class="c-input type-3 step2" name="babatel">
                <label for="mail">E-Posta Adresi    :</label>
                <input type="text" class="c-input type-3 step2" name="mail">
                <div class="c-btn type-1 color-3" style="margin-top:20px">
                <input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
                </div>
                <div class="c-btn type-1 color-3" style="margin-top:20px">
                <input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next">
                </div>
</fieldset>
<fieldset id="third">
<h2 class="title">Ebeveyn Bilgileri:</h2>
<p class="subtitle">3.Adım</p>
<label for="babaadi">Baba Adı,Soyadı    :</label>
                <input type="text" class="c-input type-3 step3" name="badsoyad">
                <label for="babadogumtarih">Baba Doğum Tarihi    :</label>
                <input type="text" class="c-input type-3 step3" name="bdgmtarih">
                <label for="babadogumtarih">Baba Doğum Yeri    :</label>
                <input type="text" class="c-input type-3 step3" name="bdgmyer">
                <label for="anneadi">Anne Adı,Soyadı    :</label>
                <input type="text" class="c-input type-3 step3" name="aadsoyad">
                <label for="annekizlik">Anne Kızlık Soyadı    :</label>
                <input type="text" class="c-input type-3 step3" name="akizlik">
                <label for="annedogumtarih">Anne Doğum Yeri    :</label>
                <input type="text" class="c-input type-3 step3" name="adgmyer">
                <label for="annedogumtarih">Anne Doğum Tarihi    :</label>
                <input type="text" class="c-input type-3 step3" name="adgmtarih">
                <label for="annemilliyet">Annenizin Milliyeti     :</label>
                <input type="text" class="c-input type-3 step3" name="amilliyet">
                <label for="babamilliyet">Babanızın Milliyeti     :</label>
                <input type="text" class="c-input type-3 step3" name="bmilliyet">
                <div class="c-btn type-1 color-3" style="margin-top:20px">
                <input id="pre_btn2" onclick="prev_step2()" type="button" value="Previous">
                </div>
                <div class="c-btn type-1 color-3" style="margin-top:20px">
                <input class="submit_btn" onclick="next_step3()" type="button" value="Next">
                </div>
</fieldset>
<fieldset id="forth">
        <div class="col-md-12">
        <h2 class="title">Eğitim Bilgileri:</h2>
        <p class="subtitle">4.Adım</p>
        </div>
            <div class="col-md-6">
                <label for="okuladi">Öğrenciyseniz Okul Adı     :</label>
                <input type="text" class="c-input type-3 step4" name="okul">
                <label for="subesinif">Şube Ve Sınıf     :</label>
                <input type="text" class="c-input type-3 step4" name="sube_sinif">
                <label for="okuladres">Okul Adresiniz     :</label>
                <input type="text" class="c-input type-3 step4" name="okuladres">
                <label for="okultel">Okul Telefon Numarası     :</label>
                <input type="text" class="c-input type-3 step4" name="okultel">
                <label for="okulmail">Okul E-posta Adresi    :</label>
                <input type="text" class="c-input type-3 step4" name="okulmail">
                <label for="abd">Amerika'ya Gittiniz Mı?     :</label>
                <select name="abd" id="" class="c-input type-3">
                    <option value="evet">Evet</option>
                    <option value="hayır">Hayır</option>
                </select>
                </div>
                <div class="col-md-6">
                <label for="abdtarih">Gittiyseniz Gidiş Tarihiniz (gün,ay,yıl)    :</label>
                <input type="text" class="c-input type-3 step4" name="abdtarih">
                <label for="yurtdisi">Yurtdışına Çıktınız Mı?    :</label>
                <input type="text" class="c-input type-3 step4" name="yurtdisi">
                <label for="ulkeler">Hangi Ülkelere Gittiniz   :</label>
                <input type="text" class="c-input type-3 step4" name="ulkeler">
                <label for="yurtdisitarih">Gittiğiniz Tarihler    :</label>
                <input type="text" class="c-input type-3 step4" name="yurtdisitarih">
                </div>
                <div class="col-md-12">
                    <div class="c-btn type-1 color-3" style="margin-top:20px">
                    <input id="pre_btn2" onclick="prev_step3()" type="button" value="Previous">
                    </div>

                    <div class="c-btn type-1 color-3" style="margin-top:20px">
                    <input class="submit_btn" onclick="validation(event)" type="submit" value="Submit">
                    </div>
                </div>
</fieldset>
</form>
<style type="text/css">
.aktif{
    border-radius:10px;
    padding:20px;
    background-color: #05305a;
    color:#fff !important;

}

#progressbar{
margin:0;
padding:0;
font-size:18px
}

fieldset{
display:none;

padding:20px;
margin-top:50px;

border-radius:5px;
box-shadow:3px 3px 25px 1px gray
}
#first{
display:block;

padding:20px;
margin-top:50px;
border-radius:5px;

box-shadow:3px 3px 25px 1px gray
}
/*input[type=text],input[type=password],select{
width:100%;
margin:10px 0;
height:40px;
padding:5px;
border:3px solid #ecb0dc;
border-radius:4px
}
textarea{
width:100%;
margin:10px 0;
height:70px;
padding:5px;
border:3px solid #ecb0dc;
border-radius:4px
}
input[type=submit],input[type=button]{
width:120px;
margin:15px 25px;
padding:5px;
height:40px;
background-color:#a0522d;
border:none;
border-radius:4px;
color:#fff;
font-family:'Droid Serif',serif
}
h2,p{
text-align:center;
font-family:'Droid Serif',serif
}*/
.baslik{
margin-right:15px;
display:inline;
color:#c1c5cc;
font-family:'Droid Serif',serif
}
</style>

<script type="text/javascript">
   var count = 0; // To count blank fields.
function validation(event) {
    event.preventDefault();
    var arr=document.getElementsByClassName('step4');
for (var i =0; i <arr.length; i++) {
    if(arr[i].value==''){
        error=1
    }else{error=0}
}

    if(error===1){
        
        swal('Eksik Bilgi','Bütün alanları doldurunuz','error');
    }
    else {
        var form=document.getElementById('basvuruform');
        swal({
          title: "Başvuru Formu",
          text: "Başvuru formunuz gönderiliyor",
          type: "success",
          showCancelButton: true,
          closeOnConfirm: false,
          showLoaderOnConfirm: true,
        },
    function(){
      setTimeout(function(){
        form.submit();
        swal("Başvuru","Bilgileriniz başarıyla gönderildi!","success");
      }, 500);
});
    }
}
/*---------------------------------------------------------*/
// Function that executes on click of first next button.
var error=0;
function next_step1() {
var arr=document.getElementsByClassName('step1');
for (var i =0; i <arr.length; i++) {
    if(arr[i].value==''){
        
        arr[i].placeholder= "Eksik alan *"
        error=1
    }else{error=0}
}

    if(error===0){
        document.getElementById("first").style.display = "none";
        document.getElementById("second").style.display = "block";
        document.getElementById("active2").classList.add('aktif');
        document.getElementById("icon1").classList.add('fa-check-circle');
    }
    else {
        swal('Eksik Bilgi','Bütün alanları doldurunuz','error');
    }
}
// Function that executes on click of first previous button.
function prev_step1() {
document.getElementById("first").style.display = "block";
document.getElementById("second").style.display = "none";
document.getElementById("active1").classList.add('aktif');
document.getElementById("active2").classList.remove('aktif');
}
// Function that executes on click of second next button.
function next_step2() {

    var arr=document.getElementsByClassName('step2');
for (var i =0; i <arr.length; i++) {
    if(arr[i].value==''){
        error=1
    }else{error=0}
}

    if(error===0){
    document.getElementById("second").style.display = "none";
    document.getElementById("third").style.display = "block";
    document.getElementById("active3").classList.add('aktif');
    document.getElementById("icon2").classList.add('fa-check-circle');
    }
    else {
        swal('Eksik Bilgi','Bütün alanları doldurunuz','error');
    }
}
// Function that executes on click of second previous button.
function prev_step2() {
document.getElementById("third").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").classList.add('aktif');
document.getElementById("active3").classList.remove('aktif');
}
function next_step3() {
var arr=document.getElementsByClassName('step3');
for (var i =0; i <arr.length; i++) {
    if(arr[i].value==''){
        error=1
    }else{error=0}
}

    if(error===0){
        document.getElementById("third").style.display = "none";
        document.getElementById("forth").style.display = "block";
        document.getElementById("active4").classList.add('aktif');
        document.getElementById("icon3").classList.add('fa-check-circle');
        }
        else{
            swal('Eksik Bilgi','Bütün alanları doldurunuz','error');
        }
    }
function prev_step3() {
document.getElementById("forth").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").classList.add('aktif');
document.getElementById("active4").classList.remove('aktif');
}


</script>


            </div>
        </div>
    </div>
    <div class="empty-space marg-lg-b35 marg-sm-b30"></div>
@endsection