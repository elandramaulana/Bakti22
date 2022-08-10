@extends('layouts.main')

@section('merch')

<section class="third1-img" id="merch">


    <div class="col-sm-12">
        <div class="container-fluid">
            <img class="merch-label uk-position-right" src="{{ url("image/merch-label.png") }}" alt="">
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <h5 style="padding-top:200px;"><b>Pilihan Paket</b></h5>
            <div class="uk-slider-container-offset" uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="margin:0 30px">

                    <ul class="uk-slider-items uk-child uk-grid ">
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                        <img class="" src="{{ url("image/paket1.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                        <img src="{{ url("image/paket2.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                        <img src="{{ url("image/paket3.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                        <img src="{{ url("image/paket4.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default" style="border-radius:20px">
                                <div class="uk-card-media-top">
                                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                        <img src="{{ url("image/paket5.png") }}" width="350" height="100" style="border-radius:20px" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>



    <div class="container">
        <h5><b>Koleksi Merchandise</b></h5>
        <div class="col-sm-12">
            <div class="uk-child-width-expand@s d-flex justify-content-center" uk-grid style="margin:0 20px;">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="row1 col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item1.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item2.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class=" merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item3.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item4.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item5.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="row2 col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item6.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">

                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item7.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item8.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="col-sm-2">
                                <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                                <center>
                                    <div class="uk-card mt-3 uk-transition-toggle" tabindex="0" style="border-radius:20px;">
                                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282319407100&text=%5BFORMAT+PEMESANAN+MERCH+BAKTI+UNAND+2022%5D%0A%0ANAMA%3A%0AALAMAT%3A%0A+-Nama+jalan%26+no+rumah%3A%0A+-Rt%2FRw+%3A%0A+-Keluarahan%3A%0A+-Kecamatan%3A%0A+-Kota%3A%0A+-Provinsi%3A%0A+-Negara+%3A%0A+-Kode+pos%3A%0ANo+hp%3A%0ANo+wa%3A%0ADetail+pesanan%0A+-Nama+barang%3A%0A+-Warna%3A%0A+-Ukuran%3A%0A+-Jumlah%3A%0A-+Tambahan+pesanan+%28jika+ada%29+%3A+%0ATf+melalui%3A%0AHarga+barang%3A%0AHarga+ongkir+%3A%0ACp+yg+dihubungi%3A%0A%0ANote%3A%0ABukti+pembayaran+diupload+ke%3A%0Ahttps%3A%2F%2Fdrive.google.com%2Fdrive%2Ffolders%2F1oj4FRLFyPru7dVk0w52m7muaLtHXWYia%0ADengan+format+%3A+%0ANama_tf+melalui_cp+yg+dihubungi%0AContoh%3A+%0Asalsa+puti_Bni%2Fgopay%2Fdana%2Fshopepay_1%2F2&type=phone_number&app_absent=0">
                                            <img class="merch-size uk-transition-scale-up uk-transition-opaque" src="{{ url('image/item1.png') }}">
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection