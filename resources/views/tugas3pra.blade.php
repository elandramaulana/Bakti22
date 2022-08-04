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
                    <p style="line-height: 30px;">Dalam memeriahkan acara BAKTI UNAND 2022, setiap peserta BAKTI UNAND 2022 diwajibkan untuk ikut dalam twibbon contest ini guna memeriahkan acara BAKTI UNAND 2022. </p>

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Memperkenalkan asal dan budaya masing-masing mahasiswa baru.</li>
                        <li>Mempromosikan dan memeriahkan kegiatan Bakti Unand 2022. </li>
                        <li>Melatih kreatifitas mahasiswa baru untuk berpikir kritis menentukan caption sesuaj ketentuan yang di minta. </li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Setiap peserta Bakti UNAND 2022 mengupload twibbon dengan Foto yang digunakan adalah foto menggunakan atribut yang memiliki ciri khas suatu daerah agar menunjukkan keberagaman nusantaranya (seperti foto menggunakan baju adat, mengonsumsi makanan khas daerah, atau foto dengan latar rumah adat). </li>
                        <li>Dalam caption menjelaskan kebudayaan yang diperlihatkan pada foto serta menjelaskan bahwa Indonesia memiliki banyak budaya yang harus diketahui oleh poetra/I Indonesia.</li>
                        <li>Foto menyertakan wajah mahasiswa baru dengan jelas. Nantinya foto akan dikumpulkan untuk dijadikan buku (etnootografi : keberagaman)</li>
                    </ol>

                    <h5>Caption :</h5>
                    <p>Judul : [Challenge Bakti #3 UNAND 2022]</p>
                    <p>
                        My name is (Nama) from (Jurusan)(Fakultas), I am a part Of BAKTI UNAND 2022 !!
                        (Caption menarik mengenai keberagaman budaya Indonesia)

                    </p>
                    <p>#BAKTIUntukNegeri <br>
                        #BAKTIUNAND2022

                    </p>

                    <h5 style="margin-top:15px">Kriteria :</h5>
                    <ol style="line-height: 30px;">
                        <li>Kreativitas : terlihat dari caption yang dituliskan (30).</li>
                        <li>Kesesuaian foto dengan caption yang dituliskan. (20)</li>
                        <li>Estetika : kerapihan dan keindahan foto (20)</li>
                        <li>Ketepatan waktu pengumpulan (30)</li>
                    </ol>

                    <h5 style="margin-top:15px">Timeline :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Tanggan Release : 5 Agustus 2022 <br>
                        Tanggal Pengumpulan : 14 Agustus 2022
                    </p>

                    <h5 style="margin-top:15px">Teknis Pengumpulan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Twibbon diupload di Instagram pribadi peserta BAKTI, akun tidak diperbolehkan privat dan wajib Tag IG @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing. Nantinya mahasiswa baru akan mengumpulkan Link Postingan Twibbon tersebut ke dalam Link G-Form yang disediakan oleh panitia.
                    </p>

                    <h5 style="margin-top:15px">Hadiah :</h5>
                    <ol style="line-height: 30px;">
                        <li>Sertifikat.</li>
                        <li>Merchendise</li>
                        <li>Poin Peniilaian</li>
                    </ol>


                    <p uk-margin align="center">
                        <button class="uk-button uk-button-default center" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">SUBMIT</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection