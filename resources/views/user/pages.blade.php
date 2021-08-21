@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<style>
    .sectioncontent ul {
        padding: 0;
        margin: 0;
        list-style: disc;
    }
</style>  
  
  <!-- Property Detail -->
  <section id="property" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 listing1 property-details">
            <h2 class="text- text-center">{{$data['title']}}</h2>
          <br>
          <div class="sectioncontent">
          <p class="bottom30">
            {!! $data['data']->section1 !!}
          </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Property Detail End -->
  @endsection