@extends('layouts.main')

@section('gallery')

<section class="sixth-img" id="gallery">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="gallery-label uk-position-right" src="{{ url('image/gallery-label.png') }}" alt="">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
          <div class="gal-pos1">
            <div class="uk-flex mt-3">
              <div class="uk-card mt-3 uk-transition-toggle" tabindex="0">
                <img src="{{ url('image/cover.png') }}" width="270px" height="160px" alt="">
                <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="270px" height="160px" alt="">
              </div>
              <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                <img src="{{ url('image/cover.png') }}" width="270px" height="160px" alt="">
                <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="270px" height="160px" alt="">
              </div>
            </div>
            <div class="uk-flex mt-3">
              <div class="uk-card mt-3 uk-transition-toggle" tabindex="0">
                <img src="{{ url('image/cover.png') }}" width="270px" height="160px" alt="">
                <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="270px" height="160px" alt="">
              </div>
              <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="margin-left:30px;">
                <img src="{{ url('image/cover.png') }}" width="270px" height="160px" alt="">
                <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="270px" height="160px" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="gal-pos2">
          <div class="uk-flex">
            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="400" height="250" loop muted playsinline uk-video="autoplay: inview"></video>
          </div>
          <div class="uk-flex">
            <div class="uk-card mt-3 uk-transition-toggle" tabindex="0">
              <img src="{{ url('image/cover.png') }}" width="180px" height="80px" alt="">
              <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="180px" height="80px" alt="">
            </div>
            <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="margin-left:36px;">
              <img src="{{ url('image/cover.png') }}" width="180px" height="80px" alt="">
              <img class="uk-transition-scale-up uk-position-cover" src="{{ url('image/peta.png') }}" width="180px" height="80px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection