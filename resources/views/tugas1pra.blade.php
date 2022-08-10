@extends('layouts.main')

@section('challenge')
<section class="thirteen-img" id="challenge">
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
                        <li class="uk-active"><a href="{{ route('tugas3pra') }}">Twibbon Contest</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



    <div class="container">
        <div class="col-sm-12">
            <div class="">
                <div class="task uk-card uk-card-default uk-card-hover uk-card-body opacity-75 mt-10 challenge-card">
                    <h5>#KamiBAKTIUntukNegeri</h5>
                    <p style="line-height: 30px;">Video Kreatif oleh Mahasiswa Baru UNAND 2022 ini adalah video kegiatan yang berkaitan dengan keberagaman budaya Indonesia seperti makanan khas daerah, tarian daerah, lagu daerah, dll. Diharapkan melalui video ini mahasiswa baru ikut memberikan kontribusinya untuk negeri ini dalam mengenalkan kebudayaan yang ada di Indonesia. Mari ramaikan video ini dengan tagar berikut: #KamiBaktiUntukNegeri</p>

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Membentuk kreativitas mahasiswa dalam membuat video pengenalan budaya dari daerah masing-masing mahasiswa baru.</li>
                        <li>Menciptakan mahasiswa baru yang kreatif, dan inovatif dalam pembuatan video pengenalan beragam budaya yang ada di Indonesia. </li>
                        <li>Memberikan informasi terhadap mahasiswa baru bahwa di Universitas Andalas ada beragam latar belakang budaya dari mahasiswa baru. </li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Video berisi kegiatan berkaitan dengan wisata, makanan khas, tarian daerah, atau menyanyikan lagu daerah, video ini diambil boleh berasal dari daerah mana saja yang ada di Indonesia sebagai bentuk peduli dan mengetahui berbagai keberagaman yang ada di Nusantara.</li>
                        <li>Video berdurasi minimal 30 detik dan maksimal 5 menit dengan pengambilan video wajib potrait.</li>
                        <li>Video yang dibuat adalah video karya pribadi mahasiswa baru (originalitas) tanpa adanya melakukan plagiarisme, jika memang terdapat clip dari video yang diambil dari google maupun sumber lainnya harap dicantumkan pada end title video. </li>
                        <li>Jika terdapat kendala pada saat pembuatan maupun pengumpulan, peserta wajib melapor kepada uda-uni mentor kelompok masing-masing, dan disertai dengan bukti yang logis. </li>
                    </ol>

                    <h5>Caption :</h5>
                    <p>Judul : [Challenge Bakti #1 UNAND 2022]</p>
                    <p>(Caption menarik tentang budaya yang terkait dengan video)
                        Saya (Nama) dari (Jurusan)(Fakultas), dengan BAKTI UNAND 2022 saya ikut memberikan kontribusi untuk negeri ini dalam mengenalkan keberagaman budaya Indonesia.
                    </p>
                    <p>#KamiBaktiUntukNegeri <br>
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
                        Tanggal Pengumpulan : 12 Agustus 2022

                    </p>

                    <h5 style="margin-top:15px">Teknis Pengumpulan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Video diupload di Instagram pribadi mahasiswa baru dalam bentuk IGTV dengan mengaktifkan fitur post a preview, akun tidak diperbolehkan privat dan wajib Tag IG @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing. Nantinya mahasiswa baru akan mengumpulkan Link IGTV tersebut ke dalam Link G-Form yang disediakan oleh panitia.

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