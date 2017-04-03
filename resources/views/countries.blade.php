@extends('layouts.page')
@section('body')
<div id="content-wrapper">

    <!-- TT-TOPHEADING -->
    <div class="tt-topheading background-block" style="background-image:url(img/heading/heading.jpg);">
        <div class="container">
            <h2 class="tt-topheading-title c-h3"><span>DİL OKULLARI</span></h2>
            <ul class="tt-breadcrumbs">
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a></li>
                <li><span>DİL OKULLARI</span></li>
            </ul>
        </div>
    </div>

    <div class="bg-1 tt-sidebar-right tt-overflow">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="tt-two-colors pright35">
                        <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
                        <div class="tt-searchbar-top">
                            <form>
                                <div class="tt-searchbar-form">
                                    <input type="text" required placeholder="Dil Okulu Ara">
                                    <div class="tt-searchbar-submit">
                                        <i class="stroke-icon icon-Search"></i>
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </form>
                            <a class="tt-searchbar-view" href="#" data-view="grid"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a class="tt-searchbar-view active" href="#" data-view="list"><i class="fa fa-list" aria-hidden="true"></i></a>
                        </div>


    @foreach($Sehirler as $Sehir)
        <div class="tt-accordion type-2">
            <div class="tt-accordion-panel">
                <div class="tt-accordion-title">
                    {{$Sehir->city}}
                    <div class="tt-accordion-icon"></div>
                </div>
                <div class="tt-accordion-body">
                    <div class="simple-text size-4 style-3 clearfix">
                        @foreach($Okullar as $okul)
                            @if($Sehir->id==$okul->cities)
                                <a href="{{url('okuldetay/'.$okul->permalink)}}">{{$okul->School_Name}}</a><br>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
                        <div class="empty-space marg-lg-b135 marg-md-b120 marg-sm-b50 marg-xs-b30"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pleft20">
                        <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>DİL OKULLARI</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10 marg-sm-b30"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">


    @foreach($Ulkeler as $Ulke)
        <li><a href="ulke_listele/{{$Ulke->Id}}">{{$Ulke->Name}}</a></li>

    @endforeach
                        </ul>
                        <div class="empty-space marg-lg-b40 marg-sm-b60"></div>

                    </div>

                </div>
            </div>


        </div>

    </div>
</div>

@endsection

