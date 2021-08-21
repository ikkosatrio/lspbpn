@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<!-- Agent Start -->
<section id="agents" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text- text-center">{{$data['title']}}</h2>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
      @foreach ($data['data'] as $item)
        <div class="col-sm-4 text-center">
          <div class="agent_wrap">
            <div class="image">
              <img src="{{$item->ImagePathSmall}}" style='max-height:270px;' alt="Agents">
            </div>
            <div class="agent_text">
              <h3>{{$item->title}}</h3>
              <p>{{$item->code}}</p>
              @if ($item->price > 0)
              <p>Price : {{$item->price}}</p>
              @endif
              <p class="bottom20">{!!$item->short_content!!}</p>
              <a class="btn-more" href="{{route("skema_detail",$item->slug)}}">
              <i></i><span>Detail</span><i><img alt="arrow" src="{{ url('public/assets/user') }}/images/arrowrY.png"></i>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Agent End -->  
@endsection