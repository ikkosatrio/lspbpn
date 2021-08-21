@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<!-- News Start -->
<section id="news-section-1" class="property-details padding_top">
    <div class="container property-details">
        <div class="row">
            <div class="col-md-8">
                @foreach ($data['news'] as $item)
                    @include('user/items/thumb_news')
                @endforeach
                {{ $data['news']->links("user/include/pagination") }}
            </div>
            <aside class="col-md-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-search bottom40" method="get" id="news-search" action="{{route("news")}}">
                            <div class="input-append">
                                <input type="text" class="input-medium search-query" placeholder="Search Here" name="search" value="">
                                <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <h3 class="bottom20">Categories</h3>
                        <ul class="pro-list bottom20">
                            @foreach ($data['news_categories'] as $item)
                                <li>
                                    <a href="{{route('news', ['category'=>$item->id])}}">  {{$item->title}}</a>
                                </li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- News End -->
@endsection
