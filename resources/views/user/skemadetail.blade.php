@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<!-- News Start -->
<section id="news-section-1" class="property-details padding_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text- text-center">{{$data['title']}} : {{isset($data['kopetensi']) ? $data['kopetensi']->title : ""}}</h2>
                <p class="">
                    {!! isset($data['kopetensi']) ? $data['kopetensi']->content : "" !!}
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel-group" id="accordion">
                            @foreach ($data['data'] as $item)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#panel{{$item->id}}">
                                                {{$item->sort}}. {{$item->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="panel{{$item->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="bottom20">
                                                 {!! $item->content !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<!-- News End -->
@endsection
