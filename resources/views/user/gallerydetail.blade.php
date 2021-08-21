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
            <h2 class="uppercase">Gallery : {{$data['category']->name}}</h2>
        <p style="display: none;" class="heading_space">{!! $data['category']->description !!}}</p>
        </div>
        <div class="row">
        <br>
        <br>
        <br>
        </div>
        </div>
        <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
            @if (count($data['data']))
                @foreach ($data['data'] as $item)
                    <div class="cbp-item">
                        <img src="{{$item->ImagePathSmall}}" alt="">
                        <div class="overlay">
                            <a class="centered cbp-lightbox" href="{{$item->ImagePath}}"><i class="icon-focus"></i></a>
                        </div>
                        
                    </div>
                @endforeach
            @else
                <div class="col-sm-12 text-center">
                        <h2 class="uppercase">No Photos</h2>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Gallery Ends -->
@endsection