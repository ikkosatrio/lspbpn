@extends('user/template')
@section('title')
{!!$data['title']!!}
@endsection
@section('content')


  <!-- Property Detail -->
  <section id="property" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 listing1 property-details">
            <h2 class="text- text-center">{{$data['title']}}</h2>
          <br>
          <table class="table table-striped table-responsive" id="table_id">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['data'] as $key => $item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{ $item->date_event->format('d-M-Y') }}</td>
                <th><a href="{{route('event.detail',$item->id)}}"><button class="btn btn-primary">Lihat</button></a></th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--  Property Detail End -->
  <script>
    $(document).ready(function(){
      $('#table_id').DataTable();
    })
  </script>
  @endsection
