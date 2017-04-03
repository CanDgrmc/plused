<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" rel="stylesheet">
    <title>@yield('title')</title>
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