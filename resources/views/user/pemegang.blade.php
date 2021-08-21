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
                <th>No Registrasi</th>
                <th>No Sertifikat</th>
                <th>Nama</th>
                <th>Tanggal Expired</th>
                <th>Kompetensi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['data'] as $item)
              <tr>
              <td>{{$item->no_sertifikat}}</td>
                <td>{{$item->no_registrasi}}</td>
                <td>{{$item->name}}</td>
                <td>{{ $item->expired_date->format('d-M-Y') }}</td>
                <td>{{($item->kopetensi) ? $item->kopetensi->title : ""}}</td>
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
 
 