@extends('layouts.page')
@section('body')
 <div id="content-wrapper">
    

        <!-- TT-TOPHEADING -->
        <div class="tt-topheading background-block" style="background-image:url(img/heading/heading.jpg);">
            <div class="container">
                <h2 class="tt-topheading-title c-h3"><span>Yurt Dışı Eğitim</span></h2>
                <ul class="tt-breadcrumbs">
                    <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Anasayfa</a></li>
                    <li><a href="{{url('/okullar')}}">DİL OKULLARI</span></a></li>
                    <li><span id="okuladi">{{$okul->School_Name}}</span></li>

                </ul>
            </div>
        </div>        
<!-- Okul Detayı -->
        <div class="bg-1 tt-sidebar-right tt-overflow">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="tt-two-colors pright35">
                            <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

                            <!-- TT-HEDING -->
                            <div class="tt-heding type-2">
                                <h2 class="tt-heding-title c-h4 txt-uppercase"><span>{{$okul->School_Name}}</span></h2>
                            </div>
                            <div class="empty-space marg-lg-b25"></div>                           
                           

                            <div class="">
                                <img class="img-responsive" src="{{asset($okul->Photo)}}" style="height: 500px;width:850px;" alt="{{$okul->School_Name}}">  
                            </div>
                            <div class="empty-space marg-lg-b10"></div>

                            <!-- TT-AUTHOR -->
                            <div class="tt-author">
                                
                                <div class="tt-author-avacell">
                                    
                                    <div class="tt-author-tags">
                                        <a href="#">
                                            @foreach($Sehirler as $sehir)
                                            
                                                @if($sehir->id == $okul->cities)
                                                @foreach($Ulkeler as $ulke)
                                                    @if($sehir->country_id==$ulke->Id)
                                                        <div class="tt-author-label">{{$ulke->Name}},</div>
                                                    @endif
                                                    @endforeach
                                                    {{$sehir->city}}

                                                @endif
                                                
                                            @endforeach
                                        </a>
                                    </div>
                                </div>
                                <div class="tt-author-ratecell">
                                    <div class="tt-author-label">Puan</div>
                                    <div class="tt-author-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="empty-space marg-lg-b30"></div>

                            <a class="c-btn type-1 size-3 color-2" href="{{url('/onlinebasvuru')}}"><span>HEMEN BAŞVUR !<i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                            <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b30"></div>

                            <!-- TT-HEDING -->
                            <div class="tt-heding type-2">
                                <h2 class="tt-heding-title c-h4 txt-uppercase"><span>OKUL HAKKINDA</span></h2>
                            </div>
                            <div class="empty-space marg-lg-b20"></div>

                            <div class="simple-text size-4 color-3">

                                <p>{!!$okul->Detail!!}</p>

                                <p><strong>Konaklama: </strong><br>{{$okul->Accommodation}}</p>
                            </div>
                            <div class="empty-space marg-lg-b35 marg-sm-b30"></div>

                            
                            <!-- TT-POST-FOOTER -->
                            <div class="tt-post-footer clearfix">
                                <ul class="tt-post-tags">
                                    <li>  <i class="fa fa-home"> </i> Web: <a href="{{$okul->Web_Address}}" target="_blank">{{$okul->Web_Address}} </a> </li>
                                    <li><a href="">  <i class="fa fa-phone"> </i> Tel: {{$okul->Tel_1}}</a> </li>
                                    <li><a href="{{$okul->Maps}}"> <i class="fa fa-map-marker"> </i> Harita</a></li>
                                </ul>

                                


                                <ul class="tt-share">
                                    <li><a class="fb-xfbml-parse-ignore fb-share" target="_blank" data-mobile_iframe="true" href="https://www.facebook.com/sharer/sharer.php?u=https://www.plused.com.tr/okuldetay/{{$okul->permalink}}&amp;src=sdkpreparse"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                                    
                                </ul>
                            </div>
                            <div class="empty-space marg-lg-b75 marg-sm-b50 marg-xs-b30"></div>

                            
                            <!-- TT-REVIEW -->               
                            <div class="tt-review-wrapper">
                                <!-- TT-HEDING -->
                                

                                
                                   
                                <!-- TT-HEDING -->
                                <div class="tt-heding type-2">
                                    <h2 class="tt-heding-title c-h4 txt-uppercase"><span>SİZİ ARAMAMIZI İSTERMİSİNİZ?</span></h2>
                                </div>
                                <div class="empty-space marg-lg-b40 marg-sm-b30 marg-xs-b15"></div>

                                <!-- TT-COMMENT-FORM -->
                                <div class="tt-comment-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="c-input type-3 size-2" type="text" required  placeholder="First Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="c-input type-3 size-2" type="text" required placeholder="E-mail">
                                            </div>                                        
                                        </div>
                                        <textarea class="c-area type-1 size-2" required name="message" placeholder="Comments"></textarea>
                                        <div class="c-btn type-1 color-2">
                                            <input type="submit" value="GÖNDER">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </form>
                                </div>                                                                                                                   
                            </div>
                            
                            <div class="empty-space marg-lg-b135 marg-md-b120 marg-sm-b50 marg-xs-b30"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pleft20">
                            <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>                            

                            <!-- TT-HEDING -->
                            <div class="tt-heding type-3">
                                <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>Ülkeler</small></span></h5>
                            </div>
                            <div class="empty-space marg-lg-b10 marg-sm-b30"></div>

                            <!-- TT-SLIST -->
                            <ul class="tt-slist">
                                 @foreach($Ulkeler as $Ulke)
       							 <li><a href="ulke_listele/{{$Ulke->Id}}">{{$Ulke->Name}}</a></li>

    							@endforeach
                            </ul>
                            <div class="empty-space marg-lg-b40 marg-sm-b60"></div>

                            
                            
                            <div class="empty-space marg-lg-b15 marg-sm-b30"></div>

                           
                             <div class="empty-space marg-lg-b10 marg-sm-b30"></div>

                            <!-- TT-CLOUD -->
                            <ul class="tt-cloud-wrapper">
                                <li><a class="tt-cloud" href="#">Education</a></li>
                                <li><a class="tt-cloud" href="#">coading</a></li>
                                <li><a class="tt-cloud" href="#">library</a></li>
                                <li><a class="tt-cloud" href="#">Books</a></li>
                                <li><a class="tt-cloud" href="#">Graphic designing</a></li>
                            </ul>

                            <div class="empty-space marg-sm-b80 marg-xs-b60"></div> 

                        </div>                    

                    </div>
                </div>

                
            </div>                
        
        </div>
    </div>

    <script>
   
        var content=$('#okuladi').text();
        $('#metacontent').attr('content',content);
    
        $('.fb-share').click(function(e) {
        e.preventDefault();
        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
    });
    </script> 


@endsection