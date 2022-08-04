@extends('layouts.main')

@section('anthem')
<section class="ninth-img" id="anthem">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="anthem-label uk-position-left" src="{{ url('image/anthem-label.png') }}" alt="">
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm-12 d-flex justify-content-center">
        <div class="card anthem-pos uk-width-2xlarge ">
          <div class="card-body uk-flex">
            <iframe width="700" height="450" src="https://www.youtube.com/embed/_Z0Ks8Bjg9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>
        </div>
      </div>
    </div>
  </div>


</section>

@endsection