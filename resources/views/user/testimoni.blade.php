@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<!-- testimonials Start -->
<section id="testinomila_page" class="padding">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <h2 class="text-uppercase heading_space">Customer feedback</h2>
        </div>
     </div>
     <div id="testinomial-masonry" class="cbp">
        @foreach ($data['data'] as $item)
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
@endsection