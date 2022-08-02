@extends('layouts.main')

@section('merch')

<section class="third1-img" id="merch">


    <div class="col-sm-12">
        <div class="container-fluid">
            <img class="merch-label uk-position-right" src="{{ url("image/merch-label.png") }}" alt="">
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <h5 style="padding-top:200px;"><b>Pilihan Paket</b></h5>
            <div class="uk-slider-container-offset" uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="margin:0 30px">

                    <ul class="uk-slider-items uk-child uk-grid ">
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <img class="" src="{{ url("image/paket1.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <img src="{{ url("image/paket2.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <img src="{{ url("image/paket3.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <img src="{{ url("image/paket4.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <img src="{{ url("image/paket5.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>



    <div class="container">
        <h5><b>Koleksi Merchandise</b></h5>
        <div class="col-sm-12">
            <div class="uk-child-width-expand@s d-flex justify-content-center" uk-grid style="margin:0 20px;">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="row1 col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item1.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item2.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class=" merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item3.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item4.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item5.png') }}">
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="row2 col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item6.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item7.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item8.png') }}">
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item1.png') }}">
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection