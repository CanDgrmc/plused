<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="/css/sweetalert.css" rel="stylesheet" type="text/css" />
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- include summernote css/js-->
    <link href="/css/summernote.css" rel="stylesheet">
    <script src="/js/summernote.min.js"></script>

    <title>@yield('title')</title>
    
    <script src="/js/sweetalert.min.js"></script>
</head>
<style>
    a{
        color:#807c7c;
    }
    .menu {
        height: 100%;
    }
    .divider{
        margin:10px;
    }
</style>
<body>
<div class="container-fluid">
    <div class="col-md-2 hidden-xs well">
        <ul class="nav nav-list menu">
            <li><label class="tree-toggle nav-header">Görüntüle</label>
                <ul class="nav nav-list tree">
                    <li><a href="{{url('panel/ulke_goster')}}">Ülkeleri görüntüle</a></li>
                    <li><a href="{{url('panel/sehir_goster')}}">Şehirleri görüntüle</a></li>
                    <li><a href="{{url('panel/okul_goster')}}">Okulları görüntüle</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li><label class="tree-toggle nav-header">İşlemler</label>
                <ul class="nav nav-list tree">
                    <li><a href="{{url('panel/ulke_ekle')}}">Ülke ekle</a></li>
                    <li><a href="{{url('panel/sehir_ekle')}}">Şehir ekle</a></li>
                    <li><a href="{{url('panel/okul_ekle')}}">Okul Ekle</a></li>
                </ul>
            </li>
            <li><a href="{{url('logout')}}">Çıkış</a></li>



        </ul>
    </div>
    <div class="row">
        <div class="col-md-9 col-xs-12 well">
            @section('body')
                @show
        </div>
    </div>
</div>


</body>
</html>