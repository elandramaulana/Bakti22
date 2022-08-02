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
                <h4>VIDEO KREATIF</h4>
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
                    <h5>#AkuDanKampusku</h5>
                    <p style="line-height: 30px">Membuat video berdurasi minimal 2 menit dengan tema pilihan yang menceritakan tentang Universitas Andalas. Jika memungkinkan mahasiswa baru melakukan shooting langsung di UNAND.

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Membentuk mahasiswa baru yang mengenal lingkungannya sendiri.</li>
                        <li>Memberikan wawasan yang konstruktif dan berkelanjutan terhadap mahasiswa baru oleh panitia BAKTI 2022.</li>
                        <li>Menanamkan rasa ingin tahu yang tinggi terhadap lingkungan Universitas Andalas.</li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Video berisi tentang Universitas Andalas sesuai dengan tema yang dapat dipilih, yaitu :</li>
                        <ol style="line-height: 30px; list-style-type:lower-alpha">
                            <li>Fakultas dan Fasilitas unggulan yang ada di Universitas Andalas</li>
                            <li>Unit Kegiatan Mahasiswa (UKM) di Universitas Andalas</li>
                            <li>Fun Fact atau ciri khas unik tentang Universitas Andalas yang perlu diketahui Mahasiswa Universitas Andalas</li>
                            <li>Alasan memilih jurusan</li>
                        </ol>
                        <li>Video berdurasi minimal 2 menit dan maksimal 5 menit</li>
                        <li>Video diupload di Instagram pribadi dalam bentuk IGTV dengan mengaktifkan fitur post a review atau tampilkan cuplikan</li>
                        <li>Tag @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing.</li>
                        <li>Jika memungkinkan mahasiswa baru melakukan shooting langsung di UNAND.</li>
                        <li>Judul : Challenge Bakti UNAND 2022</li>
                    </ol>

                    <h5>Caption :</h5>
                    <p>[akudankampusku]</p>
                    <p>(Caption menarik terkait video dan pengenalan UNAND)</p>
                    <br>
                    <p>Saya (Nama) dari (Jurusan dan Fakultas), saya Kenal UNAND!</p>
                    <br>
                    <p>#AkuDanKampusku</p>
                    <p>#BaktiUNAND2021</p>

                    <h5>Waktu Pelaksanaan :</h5>
                    <p>Video Diupload H-3 BAKTI (14 Agustus 2022)</p>
                    <br>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection