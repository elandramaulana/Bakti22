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
                    <h5 style="margin-top:15px">Penjelasan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Penugasan PPT Life Plan ini adalah PPT yang nantinya berisikan rencana ataupun target-target kedepannya yang akan diraih maupun dilakukan oleh peserta bakti, dalam pembuatannya peserta bakti dibebaskan berkreativitas dalam mendesain maupun menyusun PPT Life Plan mereka masing-masing yang tentunya tetap menjunjung nilai originalitas dalam penugasan ini. Dengan penugasan ini diharapkan peserta bakti memiliki pandangan hidup yang terarah dan membuat mereka lebih percaya diri untuk mengambil keputusan dan bertindak kedepannya.
                    </p>

                    <br>
                    <h5 style="margin-top:15px">Tujuan :</h5>
                    <ol style="line-height: 30px;">
                        <li>Memberikan gambaran kepada mahasiswa baru mengenai pandangan hidup ke depan meliputi target-target yang harus dicapai saat menjadi mahasiswa.</li>
                        <li>Menjadi panduan bagi mahasiswa baru dalam membuat keputusan atau bertindak kedepannya. </li>
                        <li>Menjadi pengingat dan motivasi diri untuk mahasiswa baru dalam mencapai cita-cita atau target yang diinginkan.</li>
                        <li>Membentuk karakter mahasiswa baru untuk bisa berpikir kritis dalam merencanakan kehidupan kedepannya agar terarah dan fokus terhadap hal yang ingin diraih.</li>
                    </ol>

                    <h5 style="margin-top:15px">Ketentuan Penugasan :</h5>
                    <ol style="line-height: 30px;">
                        <li>PPT Life Plan berisi rencana hidupatau target-target yang akan dilakukan kedepannya.</li>
                        <li>Mahasiswa dibebaskan berkreativitas dalam mendesain PPT Life Plan.</li>
                        <li>PPT Life Plan dibuat secara individu sesuai dengan rencana hidup pribadi, tidak diperkenankan untuk men-copas dari internet ataupun meniru teman-teman mahasiswa baru yang lain.</li>
                        <li>Penugasan dikirim dalam format file PDF minimal 5 slide dan maksimal 15 slide, dengan ukuran pdf maksimal 1 mb.</li>
                        <li>Dan Jika terdapat kendala pada saat pembuatan maupun pengumpulan, peserta wajib melapor kepada uda-uni mentor kelompok masing-masing, dan disertai dengan bukti yang logis.</li>

                    </ol>

                    <h5 style="margin-top:15px">Kriteria :</h5>
                    <ol style="line-height: 30px;">
                        <li>Originalitas : dibuat menggunakan karya pribadi (25).</li>
                        <li>Kreativitas (25) </li>
                        <li>Estetika : kerapihan dan keindahan PPT (25).</li>
                        <li>Ketepatan waktu pengumpulan (25).</li>
                    </ol>

                    <h5 style="margin-top:15px">Timeline :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Tanggan Release : 5 Agustus 2022 <br>
                        Tanggal Pengumpulan : 19 Agustus 2022
                    </p>

                    <h5 style="margin-top:15px">Teknis Pengumpulan :</h5>
                    <p style="line-height: 30px;text-align:justify">
                        Peserta bakti akan mengumpulkannya melalui link G-Form yang disediakan oleh uda-uni mentor kelompok masing-masing. Dengan format nama: <br>
                        <b>(Nama_Kelompok) <br>
                            Contoh : Azizah Nur Afifah_Kelompok 3<b>

                    </p>

                    <h5 style="margin-top:15px">Hadiah :</h5>
                    <ol style="line-height: 30px;">
                        <li>Sertifikat.</li>
                        <li>Merchendise</li>
                        <li>Poin Peniilaian</li>
                    </ol>

                    <p uk-margin align="center">
                        <button class="uk-button uk-button-default center" uk-toggle="target: #modal-close-default" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">SUBMIT</button>
                    </p>

                    <div id="modal-close-default" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body center mx-auto text-center" style="height:250px; width:600px;border-radius:20px;background: linear-gradient(180deg, #FEFFDF 0%, #D5ECC2 100%),linear-gradient(0deg, #FFFFFF, #FFFFFF);">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <h4>Kelompok</h4>
                            <input type="text" class="uk-input mt-4" style="background-color:white; color:black; padding:10px 10px;border-radius:10px;margin:20px aut0" placeholder="Ketik nomor kelompokmu">
                            <button class="uk-button mt-4" type="button" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection