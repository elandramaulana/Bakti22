@extends('layouts.main')

@section('challenge')
<section class="thirteen-img" id="challenge" style="background-color: #d6e7cf;">
    <div class="col-sm-12">
        <div class="container-fluid">
            <img class="challenge-label uk-position-right" src="{{ url('image/tugas-label.png') }}" alt="">
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12 d-flex justify-content-center">
            <div class="text-center" style="margin-top:150px;">
                <h4>PPT LIFE PLAN</h4>
            </div>
        </div>
    </div>

    <div class="container" id="nav-page-tugas">
        <div class="col-sm-12">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="{{ route('tugas1pasca') }}">PPT Life Plan</a></li>
                        <li class="uk-active"><a href="{{ route('tugas2pasca') }}">Tugas Besar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div class="">
                <div class="task uk-card uk-card-default uk-card-hover uk-card-body opacity-75 mt-10 challenge-card">
                    <h5 style="margin-top:15px">Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Memberikan gambaran kepada mahasiswa baru mengenai pandangan hidup ke depan meliputi target-target yang harus dicapai saat menjadi mahasiswa.</li>
                        <li>Menjadi panduan bagi mahasiswa baru dalam membuat keputusan atau bertindak kedepannya. </li>
                        <li>Menjadi pengingat dan motivasi diri untuk mahasiswa baru dalam mencapai cita-cita atau target yang diinginkan.</li>
                        <li>Membentuk karakter mahasiswa baru untuk bisa berpikir kritis dalam merencanakan kehidupan kedepannya agar terarah dan fokus terhadap hal yang ingin diraih.</li>
                    </ol>
                    <br>

                    <h5 style="margin-top:15px">Ketentuan Penugasan :</h5>
                    <ol style="line-height: 30px;">
                        <li>PPT Life Plan berisi rencana hidupatau target-target yang akan dilakukan kedepannya.</li>
                        <li>Mahasiswa dibebaskan berkreativitas dalam mendesain PPT Life Plan.</li>
                        <li>PPT Life Plan dibuat secara individu sesuai dengan rencana hidup pribadi, tidak diperkenankan untuk men-copas dari internet ataupun meniru teman-teman mahasiswa baru yang lain.</li>
                    </ol>
                    <br>

                    <h5 style="margin-top:15px">Timeline :</h5>
                    <p style="line-height: 30px;text-align:justify">Penugasan PPT Life Plan ini diberikan kepada mahasiswa baru pada saat Pra Bakti yaitu pada pembekalan Bakti dan dikumpulkan pasca bakti tanggal 18 Agustus maksimal di link G-drive masing-masing kelompok
                    </p>

                    <br>

                    <p uk-margin align="center">
                        <button class="uk-button uk-button-default center" uk-toggle="target: #modal-close-default" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">SUBMIT</button>
                    </p>

                    <div id="modal-close-default" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body center mx-auto text-center" style="border-radius:20px;background: linear-gradient(180deg, #FEFFDF 0%, #D5ECC2 100%),linear-gradient(0deg, #FFFFFF, #FFFFFF);">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <h4>Kelompok</h4>
                            <p style="background-color:rgba(145, 199, 137, 1);color:white;padding:10px 10px;border-radius:10px;margin:20px auto">Ketik nomor kelompokmu...</p>
                            <button class="uk-button" type="button" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection