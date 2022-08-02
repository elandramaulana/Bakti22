@extends('layouts.main')

@section('logo')
<section class="fifth-img" id="logo">

    <div class="col-sm-12">
        <div class="container-fluid">
            <img class="logo-label uk-position-right" src="{{ url('image/logo-label.png') }}" alt="">
        </div>
    </div>

    <div id="logo-modal" class="container text-center">
        <div class="col-sm-12">
            <img src="{{ url('image/logoA.png') }}" href="#modal-center0" uk-toggle class="logo-pos" width="300px" height="300px" alt="">
            <div id="modal-center0" class="uk-flex-top " uk-modal>
                <div class="uk-modal-dialog uk-modal-body" align="center" style="border-radius:20px">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <img class="uk-button" uk-toggle src="{{ url('image/logoA.png') }}" width="400px" height="400px" alt="">
                </div>
            </div>

            <div class="container text-center">
                <div class="uk-column">
                    <img class="uk-button lg-size" href="#modal-center" uk-toggle src="{{ url('image/logoB.png') }}" width="200px" height="200px" alt="">
                    <div id="modal-center" class="" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" align="center" style="border-radius:20px">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="uk-button" uk-toggle src="{{ url('image/logoB.png') }}" width="200px" height="200px" alt="">
                            <p>Logo Universitas Andalas<br>Lambang kebanggaan yang menjadi salah satu identitas Universitas Andalas</p>
                        </div>
                    </div>
                    <img class="uk-button lg-size" href="#modal-center1" uk-toggle src="{{ url('image/logoC.png') }}" width="200px" height="200px" alt="">
                    <div id="modal-center1" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" align="center" style="border-radius:20px">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="uk-button" uk-toggle src="{{ url('image/logoC.png') }}" width="200px" height="200px" alt="">
                            <p>Garis Lurus Vertikal bermakna setiap jalan dan tujuan yang lurus bermula dari pemikiran matang dari sudut pandang berbeda</p>
                        </div>
                    </div>
                    <img class="uk-button lg-size " href="#modal-center2" uk-toggle src="{{ url('image/logoD.png') }}" width="200px" height="200px" alt="">
                    <div id="modal-center2" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" align="center" style="border-radius:20px">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="uk-button" uk-toggle src="{{ url('image/logoD.png') }}" width="200px" height="200px" alt="">
                            <p>Bendera Negara Kesatuan Republik Indonesia yang mana menjadi tempat Universitas Andalas bernaung</p>
                        </div>
                    </div>
                    <img class="uk-button lg-size " href="#modal-center3" uk-toggle src="{{ url('image/logoE.png') }}" width="200px" height="200px" alt="">
                    <div id="modal-center3" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" align="center" style="border-radius:20px">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="uk-button" uk-toggle src="{{ url('image/logoE.png') }}" width="200px" height="200px" alt="">
                            <p>Lingkaran terputus yang terlihat seperti huruf “O” menandakan inisial dari “orang”, dibuat terputus karena pemikiran dari setiap insan di Unand tidak akan selalu terhubung, tetapi logo Universitas Andalas akan memersatukannya.</p>
                        </div>
                    </div>
                    <img class="uk-button lg-size" href="#modal-center4" uk-toggle src="{{ url('image/logoF.png') }}" width="200px" height="200px" alt="">
                    <div id="modal-center4" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" align="center" style="border-radius:20px">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="uk-button" uk-toggle src="{{ url('image/logoF.png') }}" width="200px" height="200px" alt="">
                            <p>Perpaduan Huruf B dan Bendera Merah Putih menjadi notasi yang bermakna melalui BAKTI lah tercipta harmoni dan kolaborasi untuk menyambut mahasiswa baru Universitas Andalas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection