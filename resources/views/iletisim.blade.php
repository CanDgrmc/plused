@extends('layouts.page')


@section('body')



    <div id="content-wrapper">

        <!-- TT-TOPHEADING -->
        <div class="tt-topheading background-block" style="background-image:url(img/heading/contact.jpg);">
            <div class="container">
                <h2 class="tt-topheading-title c-h3"><span>İLETİŞİM</span></h2>
                <ul class="tt-breadcrumbs">
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a></li>
                    <li><span>İLETİŞİM</span></li>
                </ul>
            </div>
        </div>
        <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b30"></div>

        <div class="container">

            <!-- TT-CONTACT -->
            <div class="tt-contact-wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="tt-contact clearfix">
                            <div class="tt-contact-img"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="tt-contact-info">
                                Barboros H. Paşa Mah. 1992 Sk. No:14 Çebi Natura Residence <br>  Beylikdüzü - İstanbul - Türkiye 
                            </div>
                            <div class="tt-contact-img" style="margin-top:20px"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="tt-contact-info" style="margin-top:20px">
                                Beybi Giz Plaza Meydan Sk. No:1 K:15 D:55 <br>  Maslak - İstanbul - Türkiye 
                            </div>
                        </div>
                        <div class="empty-space marg-xs-b30"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="tt-contact clearfix">
                            <div class="tt-contact-img"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <div class="tt-contact-info">
                                <a href="mailto:info@plused.com.tr">info@plused.com.tr</a>
                                <a href="mailto:support@plused.com.tr">support@plused.com.tr</a>
                            </div>
                        </div>
                        <div class="empty-space marg-xs-b30"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="tt-contact clearfix">
                            <div class="tt-contact-img"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="tt-contact-info">
                                <a href="tel:00902128539052">+90 (212) 853 90 52</a><br>
                                <a href="tel:00902127117803">+90 (212) 711 78 03</a><br>
                                <a href="tel:0090212328203">+90 (212) 328 20 31</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space marg-lg-b50 marg-sm-b30"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="tt-contact-form">
                           
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" class="token">
                            <input class="c-input type-3 name" type="text" required name="name" placeholder="Adınız">
                            <input class="c-input type-3 email" type="text" required name="email" placeholder="Email">
                            <input class="c-input type-3 konu" type="text" required name="subject" placeholder="Konu">
                            <textarea class="c-area type-1 message" required name="message" placeholder="Mesaj"></textarea>
                         
                          
                            <button type="submit"  id="contactsubmit" onclick="AjaxSubmit()" class="c-btn type-1 color-3">Gönder</button>
                                
                            
                            
                        
                    </div>
                    <div class="simple-text tt-request-success">
                        <p></p>
                    </div>
                    <div class="empty-space marg-xs-b30"></div>
                </div>
                <div class="col-sm-6">
                    <div class="tt-contact-map map-block" id="map-canvas"  data-lat="41.016152" data-lng="28.640475" data-zoom="10"></div>
                    <div class="addresses-block">
                        <a data-lat="41.016152" data-lng="28.640475" data-string="1. Here is some address or email or phone or something else..."></a>
                    </div>
                </div>
            </div>
            <div class="empty-space marg-lg-b135 marg-md-b120 marg-sm-b100 marg-xs-b60"></div>
        </div>

    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy5GQMlIPCfcgxGXLU1pPlIKR3pfSjpgk&callback=initMap"></script>
<script src="js/map.js"></script> 
   
    <script type="text/javascript">
        function AjaxSubmit(){
       
        $(this).unbind('submit');
        var token=$('.token').val();
        var name=$('.name').val();
        var email=$('.email').val();
        var konu=$('.konu').val();
        var message=$('.message').val();
        var token=$('.token').val();
        if (name!='' && email!='' && konu != '' && message != ''){
        $.post('/sendmail',{
            "_token" : token,
            "name" : name,
            "subject" : konu,
            "message" : message,
            "email" : email          
            
        },function(data){
        
        })
       
    swal('Gönderildi','Bizimle iletişime geçtiğiniz için teşekkür ederiz, En yakın zamanda tarafınıza dönüş sağlanacaktır.','success')
    }


}
    </script>






@endsection