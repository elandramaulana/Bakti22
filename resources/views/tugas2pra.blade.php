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
                    <p style="line-height: 30px;">Video Kreatif oleh Mahasiswa Baru UNAND 2022 ini adalah video yang dibuat oleh mahasiswa baru mengenai Universitas Andalas. Dalam pembuatannya mahasiswa boleh memilih tema yang disediakan oleh panitia untuk proses pembuatan videonya. Sehingga melalui video ini kita berharap mahasiswa baru akan lebih kenal dengan lingkungan kampusnya dan memberikan wawasan baru bagi mereka terkait Universitas Andalas. Mari ramaikan video ini dengan tagar berikut: #AkuDanKampusku</p>

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Membentuk mahasiswa baru yang mengenal lingkungannya sendiri.</li>
                        <li>Memberikan wawasan yang konstruktif dan berkelanjutan terhadap mahasiswa baru oleh panitia BAKTI 2022 </li>
                        <li>Menanamkan penasaran yang yang tinggi terhadap lingkungan Universitas Andalas</li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Video berisi tentang Universitas Andalas sesuai dengan tema yang dapat dipilih, yaitu :</li>
                        <ol style="line-height: 30px; list-style-type:lower-alpha">
                            <li>Fakultas dan Fasilitas unggulan yang ada di Universitas Andalas</li>
                            <li>Unit Kegiatan Mahasiswa (UKM) di Universitas Andalas</li>
                            <li>Fun Fact atau ciri khas unik tentang Universitas Andalas yang perlu diketahui Mahasiswa Universitas Andalas</li>
                            <li>Kesan dan pesan BAKTI 2022</li>
                        </ol>
                        <li>Video berdurasi minimal 30 detik dan maksimal 5 menit dengan pengambilan video wajib potrait</li>
                        <li>Video yang dibuat adalah video karya pribadi mahasiswa baru (originalitas) tanpa adanya melakukan plagiarisme, jika memang terdapat clip dari video yang diambil dari google maupun sumber lainnya harap dicantumkan pada end title video. </li>
                        <li>Jika memungkinkan mahasiswa baru dapat melakukan shooting langsung di UNAND.</li>
                        <li>Dan Jika terdapat kendala pada saat pembuatan maupun pengumpulan, peserta wajib melapor kepada uda-uni mentor kelompok masing-masing, dan disertai dengan bukti yang logis. </li>
                    </ol>


                    <h5>Caption :</h5>
                    <p>Judul : [Challenge Bakti #2 UNAND 2022]</p>
                    <p>[AkuDanKampusKu]
                        (Caption menarik tentang tema yang dipilih terkait dengan video dam pengenalan UNAND)
                        Saya (Nama) dari (Jurusan)(Fakultas), saya Kenal UNAND
                    </p>
                    <p>#AkuDanKampusku <br>
                        #BAKTIUNAND2022<br>
                        #VideoKreatifMABAUNAND2022

                    </p>

                    <h5 style="margin-top:15px">Kriteria :</h5>
                    <ol style="line-height: 30px;">
                        <li>Originalitas : dibuat menggunakan karya pribadi (25).</li>
                        <li>Kreativitas (20) </li>
                        <li>Kesesuaian isi video dengan tema yang diberikan (20)</li>
                        <li>Estetika : kerapihan dan keindahan video (15)</li>
                        <li>Ketepatan waktu pengumpulan (20)</li>
                    </ol>

                    <h5 style="margin-top:15px">Timeline :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Tanggan Release : 5 Agustus 2022 <br>
                        Tanggal Pengumpulan : 13 Agustus 2022


                    </p>

                    <h5 style="margin-top:15px">Teknis Pengumpulan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Video diupload di Instagram pribadi peserta BAKTI dalam bentuk IGTV dengan mengaktifkan fitur post a preview, akun tidak boleh privat dan wajib Tag IG @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing. Nantinya mahasiswa baru akan mengumpulkan Link IGTV tersebut ke dalam Link G-Form yang disediakan oleh panitia.
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