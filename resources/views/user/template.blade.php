<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>{{$config->name}} - @yield('title')</title>
<link id="favicon" rel="shortcut icon" href="{{$config->FaviconPath}}" type="image/png">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/search.css">
<link rel="stylesheet" type="text/css" href="{{ url('public/assets/user') }}/css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  

<link rel="icon" href="{{$config->FaviconPath}}">


<script src="{{ url('public/assets/user') }}/js/jquery-2.1.4.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</head>
<body>



{{-- <!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->  --}}
 

<!--Header-->
<div id="mainMenuBarAnchor"></div>
<header class="white_header">
  <nav class="navbar navbar-default bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="attr-nav">
            <div class="upper-column info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong>Phone Number</strong></li>
                <li>{{$profile->phone}}</li>
              </ul>
            </div>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{ $config->LogoPath }}" class="logo" alt="{{ $config->name }}" style="height: 80px;width: auto;"></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
              <li><a href="{{route('index')}}">Home</a></li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Tentang Kami </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('visimisi')}}">Visi & Misi</a></li>
                  <li><a href="{{route('struktur')}}">Struktur Organisasi</a></li>
                  <li><a href="{{route('tempat')}}">Tempat uji Kompetensi</a></li>
                  <!--<li><a href="{{route('pemegang')}}">Pemegang Sertifikat</a></li>-->
                  <li><a href="{{route('asesor')}}">Asesor Kompetensi</a></li>
                  <li><a href="{{route('logo')}}">Logo & Arti Logo</a></li>
                  <li><a href="{{route('contohsertifikat')}}">Contoh Sertifikat</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Media </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('news')}}">Berita</a></li>
                  <li><a href="{{route('gallery')}}">Gallery Photo</a></li>
                  <li><a href="{{route('event')}}">Jadwal & Event</a></li>
                  <li><a href="{{route('testimoni')}}">Testimoni</a></li>
                </ul>
              </li>
              <li><a href="{{route('skema')}}">Skema</a></li>
              <li><a href="{{route('regulasi')}}">Regulasi</a></li>
              <li><a href="{{route('contact-us')}}">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->



@yield('content')



<!--Footer-->
<footer class="footer_third">
  <div class="container contacts">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="info-box first">
          <div class="icons"><i class="icon-telephone114"></i></div>
          <ul class="text-center">
            <li><strong>Phone Number</strong></li>
            <li><a href="tel:{{$profile->phone}}">{{$profile->phone}}</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons74"></i></div>
          <ul class="text-center">
            <li><strong>{{ $profile->address }}</strong></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="info-box">
          <div class="icons"><i class="icon-icons142"></i></div>
          <ul class="text-center">
            <li><strong>Email Address</strong></li>
            <li><a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding_top">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="{{route('index')}}" class="logo bottom30"><img style="height: 100px;" src="{{ $config->LogoPath }}" alt="{{ $config->name }}"></a>
          <p class="bottom15">{{$config->description}}
          </p>
          {{-- <p class="bottom15">If you are interested in castle do not wait and <a href="{{ url('public/assets/user') }}/#.">BUY IT NOW!</a></p> --}}
        </div>
      </div>
      
    </div>
    <!--CopyRight-->
    <div class="copyright_simple">
      <div class="row">
        <div class="col-md-6 col-sm-5 top20 bottom20">
          <p>Copyright &copy; {{date('Y')}} <span>{{$config->name}}</span>. All rights reserved.</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right top15 bottom10">
          <ul class="social_share">
            <li><a href="https://www.facebook.com/{{$profile->social_facebook}}" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="https://www.instagram.com/{{$profile->social_instagram}}" class="instagram"><i class="icon-instagram"></i></a></li>
            <li><a href="mailto:{{$profile->email}}" class="google"><i class="icon-google4"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>




<script src="{{ url('public/assets/user') }}/js/bootstrap.min.js"></script> 
<script src="{{ url('public/assets/user') }}/js/jquery.appear.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery-countTo.js"></script>
<script src="{{ url('public/assets/user') }}/js/bootsnav.js"></script>
<script src="{{ url('public/assets/user') }}/js/masonry.pkgd.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.parallax-1.1.3.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/range-Slider.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/owl.carousel.min.js"></script> 
<script src="{{ url('public/assets/user') }}/js/selectbox-0.2.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/zelect.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.fancybox.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.navigation.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.parallax.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.slideanims.min.js"></script>
<script src="{{ url('public/assets/user') }}/js/revolution.extension.video.min.js"></script>

<script src="{{ url('public/assets/user') }}/js/custom.js"></script>
<script src="{{ url('public/assets/user') }}/js/functions.js"></script>

</body>
</html>

