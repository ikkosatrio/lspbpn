@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
    <!--Slider-->
        <div class="rev_slider_wrapper">
            <div id="rev_eight" class="rev_slider"  data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                @foreach ($data['slide'] as $item)
                    <li data-transition="fade">
                        <img src="{{$item->ImagePathMedium}}" alt="" data-bgposition="center center" data-bgfit="cover">
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        <!--Slider ends-->
        
        <!--Featured Property-->
        <section id="feature_property" class="padding">
            <div class="container feature3">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <h2 class="uppercase">{{$profile->name}}</h2>
                <h4 class="bottom30">{{$profile->address}}</h4>
                    <p class="bottom30">{!!$profile->description!!}</p>
                    
                    <a href="{{route('about-us')}}" class="uppercase btn-blue border_radius space30">view all detail</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="bottom30">{!!$data['home']->section1!!}</p>
                </div>
            </div>
            </div>
        </section>
        <!--Featured Property Ends-->
        
        <!-- Latest Property -->
        <section id="property" class="padding index2 bg_light">
            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10">
                <h2 class="uppercase">DAFTARKAN DIRI ANDA SEKARANG JUGA !</h2>
                <p class="heading_space"> {{$profile->name}}. 
                </p>
                </div>
            </div>
            <div class="row">
                <div class="three-item owl-carousel">
                @foreach ($data['kopetensi'] as $item)
                <div class="item">
                        <div class="property_item">
                        <div class="property_head default_clr text-center" style="min-height:176px;">
                            <h3 class="captlize"><a href="{{route('skema_detail', $item->slug)}}">{{$item->title}}</a></h3>
                            <p>{{$item->code}}</p>
                        </div>
                        <div class="image">
                            <a href="{{route('skema_detail', $item->slug)}}"> <img src="{{$item->ImagePathSmall}}" style='max-height:270px;' alt="latest property" class="img-responsive"></a>
                            <div class="price lighter clearfix"> 
                            </div>
                            <div class="proerty_content">
                                
                                <div class="proerty_text">
                                <p>{!!$item->short_content!!}</p>
                                </div>
                                <div class="favroute clearfix">
                                @if ($item->price > 0)
                                <p class="pull-md-left">Rp {{ number_format($item->price,0,",",".") }}</p>
                                @endif
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
            </div>
        </section>
        <!-- Latest Property Ends -->
        
        
        
        <!--Parallax-->
        <section id="parallax_four" class="padding" style="background: url({{ url('public/image/') }}/home-bg.jpg) no-repeat">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 bottom30">
                <h2>Bergabung bersama kamu</h2>
                <div class="bottom15"></div>
                <div class="row number-counters text-center">
                <div class="col-sm-4 col-xs-4 counters-item margin40">
                <i class="icon-user"></i>
                <strong data-to="{{$data['counterAsesor']}}">{{$data['counterAsesor']}}</strong>
                <p>Asesor</p>
                </div>
                <div class="col-sm-4 col-xs-4 counters-item margin40">
                <i class="icon-icons230"></i>
                <strong data-to="{{$data['counterCertificatetHolder']}}">{{$data['counterCertificatetHolder']}}</strong>
                <p>Pemegang Sertifikat</p>
                </div>
                <div class="col-sm-4 col-xs-4 counters-item margin40">
                <i class="icon-smiling-face"></i>
                <strong data-to="{{$data['counterKopetensi']}}">{{$data['counterKopetensi']}}</strong>
                <p>Skema Kompetensi</p>
                </div>
            </div>
        
                </div>
            </div>
            </div>
        </section>
        <!--About Owner ends-->
        
        
        <!-- testimonials Start -->
        <section id="testinomila_page" class="padding">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase heading_space">Customer feedback</h2>
                </div>
            </div>
            <div id="testinomial-masonry" class="cbp">
                @foreach ($data['testimoni'] as $item)
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                        <div class="testinomial_box">
                        <div class="testinomial_desc blue_dark  text-center">
                            <p>{!!$item->comment!!}</p>
                        </div>
                        <div class="testinomial_author">
                            <img src="{{$item->ImagePathSmall}}" alt="testinomial" width="59">
                            <h4 class="color">{{$item->name}}</h4>
                            <span class="post_img">( {{$item->position}}  )</span>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </section>
        <!-- testimonials End --> 
        
        
        <!--News-->
        <section id="news" class="padding bg_light">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="uppercase">Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div id="news_slider" class="owl-carousel">
                    @foreach ($data['news'] as $item)
                        <a href="{{route("news_detail",$item->slug)}}">
                            <div class="item">
                                <div class="news_hovered">
                                <p class="top10 bottom15"><strong>{{$item->title}}</strong></p>
                                <p class="bottom30">{!! str_limit(strip_tags($item->description), 200) !!}...</p>
                                <span><i class="icon-clock4"></i>{{$item->created_at->format('M d,Y') }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
        <!--News ends-->
        
        
        <!--Partners-->
        <section id="logos">
            <div class="container partner2 padding">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase">DI DUKUNG OLEH :</h2>
                <p class="heading_space">Kami Bangga Dapat Bekerjasama Dengan</p>
                </div>
            </div>
            <div class="row">
                <div id="partners" class="owl-carousel">
                    @foreach ($data['client'] as $item)
                        <div class="item">
                            <img src="{{$item->ImagePathSmall}}" alt="{{$item->name}}">
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
  <!--Partners Ends-->
@endsection