@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
<style>
    .cbp-item-wrapper{
        max-height: 239px;
    }
</style>
@section('content')
<!-- Gallery -->
<section id="types" class="padding">
  <div class="container">
      <div class="row">
      <div class="col-sm-12 text-center">
          <h2 class="uppercase">Photo Gallery</h2>
          <p style="display: none;" class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable prices.</p>
      </div>
      <div class="row">
      <br>
      <br>
      <br>
      </div>
      </div>
      <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
          @foreach ($data['data'] as $item)
              <div class="cbp-item">
              	  @if($item->ThumbPath)
                  <img src="{{$item->ThumbPath->ImagePathSmall}}" alt="{{ $item->name }}" style="object-fit: cover;">
                  @else
                  <img src="https://via.placeholder.com/360x240" alt="{{ $item->name }}" style="object-fit: cover;">
                  @endif
                  <div class="overlay">
                  <div class="grid-caption">
                      <br>
                      <br>
                      <br>
                      <h3>{{ $item->name }}</h3>
                  </div>
                  <a class="centered" href="{{route("gallery_photos",$item->id)}}"><i class="icon-focus"></i></a>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>
<!-- Gallery Ends -->
@endsection