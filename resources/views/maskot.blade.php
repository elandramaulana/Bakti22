@extends('layouts.main')

@section('maskot')

<section class="tenth-img" id="maskot">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="maskot-label uk-position-left" src="{{ url('image/maskot-label.png') }}" alt="">
    </div>
  </div>

  <div class="container maskot-pos">
    <div class="col-sm-12 d-flex justify-content-center ">
      <div class="card text-center ">
        <div class=" card-body">
          <h5 class="card-title ">Anan</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3 d-flex justify-content-center">
        <div class="maskot-img">
          <img src="{{ url('image/anan.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 d-flex justify-content-start">
        <div class="filosofi">
          <h5><b>Baju Silat</b></h5>
          <h6>Perwajahan mahasiswa baru yang harus memiliki bekal menjaga diri</h6><br>

          <h5><b>Kepala</b></h5>
          <h6>Replikasi atap rumah adat minangkabau, rumah gadang</h6><br>

          <h5><b>Pose</b></h5>
          <h6>Menyilangkan tangan berarti ketahanan dan jari 2 ditangan kiri dan jari 2 <br>ditangan kanan melambangkan angkatan 2022</h6><br><br>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-sm-12 d-flex justify-content-center">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Tinan</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3 d-flex justify-content-center">
        <div class="maskot-img">
          <img src="{{ url('image/tinan.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 d-flex justify-content-start">
        <div class="filosofi">
          <h5><b>Almamater</b></h5>
          <h6>Perwajahan mahasiswa baru yang harus memiliki bekal menjaga diri.</h6><br>

          <h5><b>Kepala</b></h5>
          <h6>Bentuk kepala meyerupai ciri khas gedung Universitas Andalas.</h6><br>

          <h5><b>Pose</b></h5>
          <h6>Melambangkan semangat perjuangan dan pergerakan seorang mahasiswa seolah menyorakkan “Hidup mahasiswa! Hidup rakyat Indonesia!”.</h6><br><br>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-sm-12 d-flex justify-content-center">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Ganan</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3 d-flex justify-content-center">
        <div class="maskot-img">
          <img src="{{ url('image/ganan.png') }}" alt="">
        </div>
      </div>
      <div class="col-sm-6 d-flex justify-content-start">
        <div class="filosofi">
          <h6>Ganan merupakan singkatan dari Garuda Unand dan maskot Bakti Unand 2022. Garuda melambangkan negara dan warna kuning emasnya melambangkan kejayaan, makna yang sama dengan Angkatan 22, yakni “Adayawimsati Adhikara”</h6>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection