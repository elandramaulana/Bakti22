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
                <h4>TWIBBON CONTEST/POTRET INDONESIA</h4>
            </div>
        </div>
    </div>

    <div class="container" id="nav-page-tugas">
        <div class="col-sm-12">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="{{ route('tugas1pra') }}">Keberagaman Budaya</a></li>
                        <li class="uk-active"><a href="{{ route('tugas2pra') }}">Seputar Kampus</a></li>
                        <li class="uk-active"><a href="{{ route('tugas3pra') }}">Twibbion Contest</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div class="">
                <div class="task uk-card uk-card-default uk-card-hover uk-card-body opacity-75 mt-10 challenge-card">

                    <p style="line-height: 30px;text-align:justify">Konsep twibbon tentang Keberagaman Nusantara dan pemuda sebagai penggerak dan pemimpin dalam perubahan dengan
                        <b>#BAKTIUntukNegeri</b>. Foto yang digunakan adalah foto dengan menggunakan atribut yang memiliki ciri khas suatu daerah untuk menunjukkan keberagaman nusantara. Dalam caption menjelaskan asal muasal atau deskripsi tentang atribut yang digunakan serta menjelaskan bahwa Indonesia memiliki banyak budaya yang harus diketahui oleh poetra/i Indonesia. Foto nantinya bisa dikumpulkan selain untuk twibbon (ini bisa dijadiin buku nanti, etnootografi : keberagaman).
                    </p>
                    </p>

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Memperkenalkan asal dan budaya masing-masing mahasiswa baru.</li>
                        <li>Mempromosikan dan memeriahkan kegiatan Bakti Unand 2022.</li>
                        <li>Melatih kreatifitas mahasiswa baru untuk berpikir kritis menentukan caption sesuai ketentuan yang diminta.</li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Setiap peserta Bakti UNAND 2022 mengupload twibbon dengan foto yang digunakan adalah foto dengan menggunakan atribut yang memiliki ciri khas suatu daerah agar menunjukkan kebergaman nusantaranya. Dalam caption menjelaskan asal muasal atau deskripsi tentang atribut yang mereka gunakan serta menjelaskan bahwa Indonesia memiliki banyak budaya yang harus diketahui oleh poetra/I Indonesia.</li>
                        <li>Foto menyertakan wajah mahasiswa baru dengan jelas. Foto nantinya bisa dikumpulkan selain untuk twibbon.</li>
                        <li>Twibbon diupload di instagram pribadi.</li>
                        <li>Tag @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing.</li>
                    </ol>

                    <h5>Caption :</h5>
                    <p>[Challenge BAKTI 2022]</p>
                    <p>My name is (nama) from (jurusan fakultas), I am a part of BAKTI 2022!</p>
                    <p>(Caption menarik tentang keberagaman budaya Indonesia)</p>
                    <br>
                    <p>#BAKTIUntukNegeri</p>
                    <p>#BAKTIUNAND2021</p>

                    <h5>Waktu Pelaksanaan :</h5>
                    <p>H-1 BAKTI ( 14 Agustus 2022)</p>


                    <p uk-margin align="center">
                        <button class="uk-button uk-button-default center" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">SUBMIT</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection