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
                <h4>TUGAS BESAR MABA</h4>
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
                    <h5 style="margin-top:15px">Penjelasan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Setiap peserta BAKTI diwajibkan untuk membuat rangkuman materi BAKTI dalam bentuk essai, tidak perlu sesuai ketentuan essai karya tulis ilmiah namun lebih bentuk rangkuman materi BAKTI.
                    </p>
                    <h5 style="margin-top:15px">Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Memberikan gambaran kepada mahasiswa baru mengenai karya tulis ilmiah atau gambaran dari tugas-tugas kuliah saat menjadi mahasiswa.</li>
                        <li>Membantu mahasiswa baru dalam memahami dan menguasai isi sebuah materi pada Hari H-BAKTI. </li>
                        <li>Membentuk karakter mahasiswa baru untuk bisa berpikir kritis dan paham akan materi yang disampaikan.</li>
                    </ol>

                    <h5 style="margin-top:15px">Ketentuan Penugasan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Essai/rangkuman berisi tentang semua rangkaian acara bakti mulai dari kuliah umum yang disampaikan oleh para direktur dan kegiatan Andalas in Action (minimal setiap peserta wajib menuliskan mengenai 3 UKM yang ada di Universitas Andalas).</li>
                        <li>Mahasiswa dibebaskan berkreativitas dalam membuat essai/rangkuman.</li>
                        <li>Essai/rangkuman dibuat dalam bentuk soft file dengan format kertas (atas,kanan,bawah = 3cm dan kiri = 4 cm)</li>
                        <li>Pada Essai/rangkuman, peserta wajib menuliska nama, jurusan, fakultas, dan kelompok bakti pada bagian atas.</li>
                        <li>Essai/rangkuman dibuat dengan maksimal 3 halaman, dan tidak perlu menggunakan cover.</li>
                        <li>Essai/rangkuman dibuat secara individu sesuai dengan materi yang diterima oleh masing-masing peserta bakti, tidak diperkenakan untuk melakukan plagiarisme dari internet ataupun meniru teman-teman mahasiswa baru yang lain.</li>
                        <li>Dan Jika terdapat kendala pada saat pembuatan maupun pengumpulan, peserta wajib melapor kepada uda-uni mentor kelompok masing-masing, dan disertai dengan bukti yang logis.</li>

                    </ol>

                    <h5 style="margin-top:15px">Kriteria :</h5>
                    <ol style="line-height: 30px;">
                        <li>Originalitas : dibuat menggunakan karya pribadi (25).</li>
                        <li>Kreativitas (15)</li>
                        <li>Kesesuaian isi dengan materi yang diberikan (25)</li>
                        <li>Estetika : kerapihan dan keindahan (15)</li>
                        <li>Ketepatan waktu pengumpulan (20)</li>
                    </ol>

                    <h5 style="margin-top:15px">Timeline :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Tanggan Release : 5 Agustus 2022 <br>
                        Tanggal Pengumpulan : 19 Agustus 2022

                    </p>

                    <h5 style="margin-top:15px">Teknis Pengumpulan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Peserta bakti akan mengumpulkannya melalui link G-Form yang disediakan oleh uda-uni mentor kelompok masing-masing. Essai/rangkuman dikumpulkan dalam format PDF dan maksimal ukuran PDF adalah 1 MB, dengan Format nama: <br>
                        <b>(Nama_Kelompok) <br>
                            Contoh : Azizah Nur Afifah_Kelompok 3<b>

                    </p>

                    <h5 style="margin-top:15px">Hadiah :</h5>
                    <ol style="line-height: 30px;">
                        <li>Sertifikat.</li>
                        <li>Merchendise</li>
                        <li>Poin Peniilaian</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection