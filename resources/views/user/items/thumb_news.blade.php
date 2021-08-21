<div class="news-1-box clearfix">
    <div class="col-xs-12 row">
        <div class="image bottom30">
            <a href="{{route("news_detail",$item->slug)}}"><img src="{{$item->ImagePathSmall}}" alt="image" class="img-responsive"/></a>
        </div>
    </div>
    <div class="col-xs-12 row">
        <div class="news-details bottom15">
            {{-- <span><i class="icon-icons230"></i> by Martin Moore</span> --}}
           <a href="{{route('news', ['category'=>$item->Category->id])}}"><span><i class="fa fa-list-alt"></i> {{$item->Category->title }}</span></a>
        </div>
        <h3 class="bottom10"><a href="{{route("news_detail",$item->slug)}}">{{$item->title}}</a></h3>
        <p class="bottom20">{!! str_limit(strip_tags($item->description), 500) !!}
                {{-- @if (strlen(strip_tags($item->description)) > 500)
                  ...
                @endif --}}
        <div class="pro-3-link padding-t-20">
            <a class="btn-dark border_radius" href="{{route("news_detail",$item->slug)}}">Read More</a>
        </div>
    </div>
</div>