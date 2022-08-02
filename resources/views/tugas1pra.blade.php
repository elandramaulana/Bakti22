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
                    <h5>#KamiBAKTIUntukNegeri</h5>
                    <p style="line-height: 30px;">Membuat video berdurasi minimal 1 menit tentang keberagaman nusantara yang ada di Indonesia boleh berkaitan dengan wisata, makanan khas, tarian daerah, atau menyanyikan lagu daerah. Video yang diambil boleh berasal dari daerah mana saja yang ada di Indonesia sebagai bentuk peduli dan mengetahui berbagai keberagaman yang ada di Nusantara.</p>

                    <h5>Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Membentuk kreativitas mahasiswa dalam membuat video pengenalan budaya dari daerah masing-masing mahasiswa baru.</li>
                        <li>Menciptakan mahasiswa baru yang kreatif dan inovatif dalam pembuatan video pengenalan keberagaman budaya yang ada di Indonesia.</li>
                        <li>Memberikan informasi terhadap mahasiswa baru bahwa di Universitas Andalas ada beragam latar belakang budaya dari mahasiswa baru.</li>
                    </ol>

                    <h5>Ketentuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Video berisi kegiatan berkaitan dengan wisata, makanan khas, tarian daerah, atau menyanyikan lagu daerah, video ini diambil boleh berasal dari daerah mana saja yang ada di Indonesia sebagai bentuk peduli dan mengetahui berbagai kebergaman yang ada di Nusantara.</li>
                        <li>Video berdurasi minimal 1 menit dan maksimal 5 menit</li>
                        <li>Video diupload di Instagram pribadi dalam bentuk IGTV dengan mengaktifkan fitur post a preview atau tampilkan cuplikan dengan format sebagai berikut :</li>
                        Tag @baktiunand @bemkmunand dan akun instagram Uda dan Uni Mentor kelompok masing-masing.</li>
                        <li>Judul Challenge: Bakti UNAND 2022</li>
                    </ol>
                    <h5>Caption :</h5>
                    <p>(Caption menarik tentang budaya yang dan terkait dengan video)</p>
                    <br>
                    <p>Saya (Nama) dari (Jurusan dan Fakultas), dengan BAKTI memberi kontribusi untuk negeri dan mengenalkan keberagaman budaya Indonesia.</p>

                    <h5>Waktu Pelaksanaan :</h5>
                    <p>Video di Upload H-5 Pembukaan Bakti (10 Agustus 2022)</p>

                    <h5>Hadiah :</h5>
                    <p>Sertifikat + Merchandise</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection