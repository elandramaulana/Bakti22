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
                        <button class="uk-button uk-button-default center" uk-toggle="target: #modal-close-default" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">SUBMIT</button>
                    </p>

                    <div id="modal-close-default" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body center mx-auto text-center" style="height:250px; width:600px;border-radius:20px;background: linear-gradient(180deg, #FEFFDF 0%, #D5ECC2 100%),linear-gradient(0deg, #FFFFFF, #FFFFFF);">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <h4>Kelompok</h4>
                            <input id="kel_ompok" maxlength="2" minlength="1" type="number" class="uk-input mt-4" style="background-color:white; color:black; padding:10px 10px;border-radius:10px;margin:20px aut0" placeholder="Ketik nomor kelompokmu">
                            <button onclick="submit()" class="uk-button mt-4" type="button" style="padding:5px 25px;font-size:18px;background-color:#54744F;color:white;weight:800; border-radius:10px">OK</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function submit(){
            var kelompok = document.getElementById("kel_ompok").value
            if(kelompok.length >0 && kelompok.length <3){
                kelompok = parseInt(kelompok)
                var link = [
                    "https://forms.gle/zjC79MFvEqSdhPQr6",
                    "https://forms.gle/nV5FuizUgTdwjfcd6",
                    "https://forms.gle/SeiQQZzTFyGWEtXb6",
                    "https://forms.gle/VXRGr86RtvW1DGSd7",
                    "https://forms.gle/WKswJjEBzbtDvNeS9",
                    "https://forms.gle/GR1Rd2pQsVt3MwD37",
                    "https://forms.gle/88vqHn3fPNmXTeUS6",
                    "https://forms.gle/J16CU5b6HyjXbstk6",
                    "https://forms.gle/1WR6duCe4SM8mvrAA",
                    "https://forms.gle/obZ9684NCNSZXQN27",
                    "https://forms.gle/WZrQz55J2sZV3G4f6",
                    "https://forms.gle/wfbfocvs6uwdnHdZ6",
                    "https://forms.gle/8cJc6hn4bDrGUXwGA",
                    "https://forms.gle/95NMqpAWkuuBUBM48",
                    "https://forms.gle/f2LPb8UxDTzTQWLG8",
                    "https://forms.gle/gHt3H7tKRoP3ZjTE7",
                    "https://forms.gle/zreaKEznL1yWCkV3A",
                    "https://forms.gle/Mei5SZWEGwzQzdda6",
                    "https://forms.gle/nyhhekfgybKRmSns7",
                    "https://forms.gle/tLgdLfnKxuK1YK8F8",
                    "https://forms.gle/VbJ4zAMkoNogvri98",
                    "https://forms.gle/dCh8ULzBm6P9mDXc6",
                    "https://forms.gle/ibjoEihASXpXMQkFA",
                    "https://forms.gle/nSjW1tQLSckiVQPF6",
                    "https://forms.gle/fBKhsQpko6zcHNjCA",
                    "https://forms.gle/o6eTVHPiFqLPCLJRA",
                    "https://forms.gle/svHRqjaKmwhZ4NRUA",
                    "https://forms.gle/nYuv5Q8KcQohnWKB8",
                    "https://forms.gle/qQ2uiM8yhoHcBMpv5",
                    "https://forms.gle/bytdery5Dg8uBQhs7",
                    "https://forms.gle/Wq63dWrqtxsKmhU18",
                    "https://forms.gle/tf32u6EJTUBZvuc27",
                    "https://forms.gle/Jwbv9e9pGJYbtZdk6",
                    "https://forms.gle/Y8iBbmkZMvy8mwjE6",
                    "https://forms.gle/DCiq2TzoxSAfo5m98",
                    "https://forms.gle/jMe9Qp3RAWHSyw5UA",
                    "https://forms.gle/H55SDbEbdro3GZZj7",
                    "https://forms.gle/vJhLedQJWuDCs9y58",
                    "https://forms.gle/3zk1na5u7tdpVp4k9",
                    "https://forms.gle/dpsuuJChkmpcEHG49",
                    "https://forms.gle/XStBE8oCs9YNt3Yr9",
                    "https://forms.gle/pEBem6TiBtKmEWAz6",
                    "https://forms.gle/4Caiu6KE5o1nG8G96",
                    "https://forms.gle/zJu13HZrhpHWf29w7",
                    "https://forms.gle/tvzn3tjwJfMr1wex9",
                    "https://forms.gle/jKhkF53ctfb9dYT38",
                    "https://forms.gle/HhPATEkikUwdMm1f8",
                    "https://forms.gle/z7asWSFF2DWGnwGK9",
                    "https://forms.gle/gCHi38WVG4xyBeNV7",
                    "https://forms.gle/wgToa1oV9PkWP7XR8",
                    "https://forms.gle/9v8PxX8q5rH4HTGJ9",
                    "https://forms.gle/FnWa7yjNxstjTz4X9",
                    "https://forms.gle/XxcpffASwkaoo4Qq8",
                    "https://forms.gle/JuCF67NJNwJKHTEE6",
                    "https://forms.gle/yoo4VBB4sw3CXnWX6"
                ]
                window.open(link[kelompok-1]);
            }
        }
    </script>
</section>
@endsection
