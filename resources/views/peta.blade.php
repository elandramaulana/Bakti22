@extends('layouts.main')

@section('peta')
<section class="eleventh-img" id="peta">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="peta-label uk-position-left" src="{{ url('image/map-label.png') }}" alt="">
    </div>
  </div>

  <div class="container">
    <div class="col-sm-12">
      <div class="uk-child-width-1-3@m" uk-grid>
        <div>
          <div class="uk-card uk-position-large uk-position-center">
            <div class="d-flex justify-content-center uk-media-bottom" uk-toggle="target: #modal-close-default">
              <img class="peta-img" src="{{ url('image/map.png') }}" width="500" height="480" alt="">
            </div>
          </div>
        </div>

        <div id="modal-close-default" uk-modal>
          <div id="peta-body" class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <img src="{{ url('image/map.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection