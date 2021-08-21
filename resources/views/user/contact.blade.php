@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')
<!-- testimonials Start -->
<section id="contact-us" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom30">
        <div id="map-single" style="width: 100%;text-align: center;">
          {!!$config->maps_script!!}
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-7 margin40">
        <div class="our-agent-box bottom30">
          <h2>Send us a message</h2>
        </div>
        <form class="callus" action="{{ route('contact_us.store') }}" id="formInput" method="post">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name"  name="name" id="name" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Message" name="message" id="message" required></textarea>
              </div>
            </div>
            <div class="col-sm-12 row">
              <div class="row">
                <div class="col-sm-3">
                  <input type="submit" class="btn-blue uppercase border_radius" value="send">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-5 margin40">
        <div class="agent-p-contact">
          <div class="our-agent-box bottom30">
            <h2>get in touch</h2>
          </div>
          <div class="agetn-contact-2 bottom30">
            <p><i class="icon-telephone114"></i><a target="_blank" href="{{ $profile->WaNumber }}">{{$profile->phone}}</a> (Phone) </p>
            <p><i class="icon-telephone114"></i><a target="_blank" href="tel:{{$profile->telephone}}">{{$profile->telephone}}</a> (Office Phone) </p>
            <p><i class=" icon-icons142"></i><a href="mailto:{{$profile->email}}">{{$profile->email}}</a></p>
            
            <p><i class="icon-browser2"></i>{{ $profile->name }}</p>
            <p><i class="icon-icons74"></i>{{$profile->address}}</p>
        </div>
        <ul class="social_share bottom20">
          <li><a href="https://www.facebook.com/{{ $profile->social_facebook }}" target="_blank"
              title="https://www.facebook.com/{{ $profile->social_facebook }}" class="facebook">
              <i class="icon-facebook"></i></a>
          </li>
          <li><a href="https://www.twitter.com/{{ $profile->social_twitter }}" target="_blank"
              title="https://www.twitter.com/{{ $profile->social_twitter }}" class="twitter">
              <i class="icon-twitter"></i></a>
          </li>
          <li><a href="https://www.instagram.com/{{ $profile->social_instagram }}" target="_blank"
              title="https://www.instagram.com/{{ $profile->social_instagram }}" class="google">
              <i class="icon-instagram"></i></a>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- testimonials End -->


<!--Partners-->
<section id="logos">
  <div class="container partners padding_top">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Client</h2>
        <br>
      </div>
    </div>
    <div class="row">
      <div id="partner-slider" class="owl-carousel">
        @foreach ($data['client'] as $item)
            <div class="item">
                <img src="{{$item->ImagePathSmall}}" alt="{{$item->name}}">
            </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<br>
<!--Partners Ends-->  
@endsection