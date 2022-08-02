@extends('layouts.main')

@section('sambutan')

<section class="first-img" id="sambutan">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="sambutan-label uk-position-left" src="{{ url('image/sambutan-label.png') }}" alt="">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class=" card card1">
          <div class=" card-body">
            <iframe width="600" height="400" src="#" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen uk-responsive></iframe>
            <div class="nama-sambutan text-center">
              <h4>Prof. Dr. Yuliandri, SH, MH</h4>
              <h6>Rektor Universitas Andalas</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card2">
          <div class="card-body">
            <iframe width="600" height="400" src="#" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen uk-responsive></iframe>
            <div class="nama-sambutan text-center">
              <h4>Agib Zainuranda</h4>
              <h6>Ketua Pelaksana BAKTI 2022</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection