<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulasi Hitungan Proyek</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/mr_es.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {
            background-color: #171717;
        }
    </style>

    <script>
        function PenawaranEmpatSisiMrGs() {
            document.forms['perhitungan'].action = "/mr_penawaran_es_gs";
        }

        function PenawaranEmpatSisiMrGm() {
            document.forms['perhitungan'].action = "/mr_penawaran_es_gm";
        }

        function PenawaranEmpatSisiMrAs() {
            document.forms['perhitungan'].action = "/mr_penawaran_es_as";
        }

        function PenawaranEmpatSisiMrAm() {
            document.forms['perhitungan'].action = "/mr_penawaran_es_am";
        }

        function PenawaranEmpatSisiMrAh() {
            document.forms['perhitungan'].action = "/mr_penawaran_es_ah";
        }
    </script>
</head>

<body>
    <form class="form-horizontal" action="" method="GET" name="perhitungan">
        <div class="row">
            <div class="col">
                <div class="container pb-2 g-3" style="background-color: #064663; ">
                    <div class="row">
                        <div class="col" style="margin-left: -12px;">

                            <div class="row g-2">
                                <div class="col">
                                    <label for="" class="mb-1 text-warning" style="font-size: 12px;">Panjang
                                        (cm)</label>
                                    <input type="number" name="panjang" id="panjang" class="form-control"
                                        value="0" onFocus="startCalc();" onBlur="stopCalc();" required
                                        style="height : 25px">
                                </div>
                                <div class="col">
                                    <label for="" class="mb-1 text-warning" style="font-size: 12px;">Lebar
                                        (cm)</label>
                                    <input type="number" name="lebar" id="lebar" class="form-control"
                                        value="0" onFocus="startCalc();" onBlur="stopCalc();" required
                                        style="height : 25px">
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col">
                                    <label for="" class="mb-1 text-warning" style="font-size: 12px;">Tinggi
                                        (cm)</label>
                                    <input type="number" name="tinggi" id="tinggi" class="form-control"
                                        value="0" onFocus="startCalc();" onBlur="stopCalc();" required
                                        style="height : 25px">
                                </div>
                                <div class="col">
                                    <label for="" class="mb-1 text-warning"
                                        style="font-size: 12px;"><small>Jumlah Pintu</small></label>
                                    <input type="number" name="pintu" id="pintu" class="form-control"
                                        value="0" onFocus="startCalc();" onBlur="stopCalc();" required
                                        style="height : 25px">
                                </div>
                            </div>
                        </div>

                        <div class="col pt-1 pb-1 mt-2 rounded"
                            style='background-color: #0c597c; font-size: small; color: white;'>
                            <table>
                                <tr>
                                    <td colspan="3"><b>Details
                                            Ruangan
                                            Anda</b></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Luas Dinding</td>
                                    <td>:</td>
                                    <td id="Ldinding">m2</td>
                                </tr>
                                <tr>
                                    <td>Luas Plafon</td>
                                    <td>:</td>
                                    <td id="Lplafon">m2</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pintu</td>
                                    <td>:</td>
                                    <td id="jmlPintu">pcs</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Content section-->
        <section class="pt-2" id="metode">
            <div class="container g-1">
                <div class="row g-1 justify-content-center">
                    <div class="col-lg-14">
                        <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="gypsum-tab" data-bs-toggle="tab"
                                    data-bs-target="#gypsum" type="button" role="tab" aria-controls="gypsum"
                                    aria-selected="false">Partisi Gypsum</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="akustik-tab" data-bs-toggle="tab"
                                    data-bs-target="#akustik" type="button" role="tab" aria-controls="akustik"
                                    aria-selected="false">Partisi Panel
                                    Akustik</button>
                            </li>
                        </ul>

                        <div class="tab-content mb-2 mt-1 rounded" id="myTabContent">

                            <!-- Metode Gypsum -->
                            <div class="tab-pane fade show active rounded" id="gypsum" role="tabpanel"
                                aria-labelledby="gypsum-tab" style="width: 100%; height: 50px;">
                                <section class="pt-2 pb-2" id="spesifikasii">
                                    <div class="container mb-2">
                                        <div class="row">
                                            <div class="col-lg-15">
                                                <ul class="nav nav-pills nav-fill rounded" id="myTab"
                                                    role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="standard-gypsum-tab"
                                                            data-bs-toggle="tab" data-bs-target="#standardGypsum"
                                                            type="button" role="tab" aria-controls="standardGypsum"
                                                            aria-selected="true">Standard Quality</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="medium-gypsum-tab"
                                                            data-bs-toggle="tab" data-bs-target="#mediumGypsum"
                                                            type="button" role="tab" aria-controls="mediumGypusm"
                                                            aria-selected="false">Medium
                                                            Quality</button>
                                                    </li>
                                                </ul>

                                                <div class="tab-content mt-2 rounded pr-4 justify-content-center"
                                                    id="myTabContent">

                                                    <!-- Metode Gypsum Standard-->
                                                    <div class="tab-pane fade show active p-2" id="standardGypsum"
                                                        role="tabpanel" aria-labelledby="standard-gypsum-tab">
                                                        <div class="col text-center">
                                                            <img src="images/mr-g-s.jpg" alt=""
                                                                class="rounded mb-3" style="width: 70%; height:70%;">

                                                            <div class="row justify-content-center">

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Matrial</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGSbarang" style="margin-top: -12px;">
                                                                        Rp
                                                                        0</h6>
                                                                </div>

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Pemasangan</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGSpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <div class="col mt-2">
                                                                    <p class="text-light">Harga Matrial & Pemasangan
                                                                    </p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGSbarangDANpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </center>
                                                        </div>
                                                        <center><input class="mt-2 pb-1 rounded-pill" type="submit"
                                                                onclick="PenawaranEmpatSisiMrGs()"
                                                                value="Lanjut Penawaran"
                                                                style="font-weight: bold; color: #cecccc; background-color:#064663; border: none; width: 200px; height: 40px;">
                                                        </center>
                                                    </div>
                                                    <!-- Akhir Metode Gypsum Standard-->

                                                    <!-- Metode Gypsum Medium-->
                                                    <div class="tab-pane fade show p-2" id="mediumGypsum"
                                                        role="tabpanel" aria-labelledby="medium-gypsum-tab">
                                                        <div class="col text-center">
                                                            <img src="images/mr-g-m.jpg" alt=""
                                                                class="rounded mb-3" style="width: 70%; height:70%;">

                                                            <div class="row justify-content-center">

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Matrial</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGMbarang" style="margin-top: -12px;">
                                                                        Rp
                                                                        0</h6>
                                                                </div>

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Pemasangan</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGMpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <div class="col mt-2">
                                                                    <p class="text-light">Harga Matrial & Pemasangan
                                                                    </p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalGMbarangDANpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </center>
                                                        </div>
                                                        <center><input class="mt-2 pb-1 rounded-pill" type="submit"
                                                                onclick="PenawaranEmpatSisiMrGm()"
                                                                value="Lanjut Penawaran"
                                                                style="font-weight: bold; color: #cecccc; background-color:#064663; border: none; width: 200px; height: 40px;">
                                                        </center>
                                                    </div>
                                                    <!-- Akhir Metode Gypsum Medium-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                            <!-- Akhir Metode Gypsum -->

                            <!-- Metode Panel Akustik -->
                            <div class="tab-pane fade rounded" id="akustik" role="tabpanel"
                                aria-labelledby="akustik-tab">
                                <section class="pt-2 pb-2" id="spesifikasi">
                                    <div class="container mb-2">
                                        <div class="row">
                                            <div class="col-lg-15">
                                                <ul class="nav nav-pills nav-fill rounded" id="myTab"
                                                    role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="standard-akustik-tab"
                                                            data-bs-toggle="tab" data-bs-target="#standardAkustik"
                                                            type="button" role="tab" aria-controls="standardAkustik"
                                                            aria-selected="true">Standard Quality</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="medium-akustik-tab"
                                                            data-bs-toggle="tab" data-bs-target="#mediumAkustik"
                                                            type="button" role="tab" aria-controls="mediumAkustik"
                                                            aria-selected="false">Medium
                                                            Quality</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="high-akustik-tab"
                                                            data-bs-toggle="tab" data-bs-target="#highAkustik"
                                                            type="button" role="tab" aria-controls="highAkustik"
                                                            aria-selected="false">High Quality</button>
                                                    </li>
                                                </ul>

                                                <div class="tab-content mt-2 rounded pr-4 justify-content-center"
                                                    id="myTabContent">

                                                    <!-- Metode Panel Akustik Standard-->
                                                    <div class="tab-pane fade show active p-2" id="standardAkustik"
                                                        role="tabpanel" aria-labelledby="standard-akustik-tab">
                                                        <div class="col text-center">
                                                            <img src="images/mr-a-s.jpg" alt=""
                                                                class="rounded mb-3" style="width: 70%; height:70%;">

                                                            <div class="row justify-content-center">

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Matrial</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalASbarang" style="margin-top: -12px;">
                                                                        Rp
                                                                        0</h6>
                                                                </div>

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Pemasangan</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalASpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <div class="col mt-2">
                                                                    <p class="text-light">Harga Matrial & Pemasangan
                                                                    </p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalASbarangDANpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </center>
                                                        </div>
                                                        <center><input class="button mt-2 pb-1 rounded-pill" type="submit"
                                                                onclick="PenawaranEmpatSisiMrAs()"
                                                                value="Lanjut Penawaran"
                                                                style="font-weight: bold; color: #cecccc; background-color:#064663; border: none; width: 200px; height: 40px;">
                                                        </center>
                                                    </div>
                                                    <!-- Akhir Metode Panel Akustik Standard-->

                                                    <!-- Metode Panel Akustik Medium-->
                                                    <div class="tab-pane fade show p-2" id="mediumAkustik"
                                                        role="tabpanel" aria-labelledby="medium-Akustik-tab">
                                                        <div class="col text-center">
                                                            <img src="images/mr-a-m.jpg" alt=""
                                                                class="rounded mb-3" style="width: 70%; height:70%;">

                                                            <div class="row justify-content-center">

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Matrial</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAMbarang" style="margin-top: -12px;">
                                                                        Rp
                                                                        0</h6>
                                                                </div>

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Pemasangan</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAMpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <div class="col mt-2">
                                                                    <p class="text-light">Harga Matrial & Pemasangan
                                                                    </p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAMbarangDANpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </center>
                                                        </div>
                                                        <center><input class="mt-2 pb-1 rounded-pill" type="submit"
                                                                onclick="PenawaranEmpatSisiMrAm()"
                                                                value="Lanjut Penawaran"
                                                                style="font-weight: bold; color: #cecccc; background-color:#064663; border: none; width: 200px; height: 40px;">
                                                        </center>
                                                    </div>
                                                    <!-- Akhir Metode Panel Akustik Medium-->

                                                    <!-- Metode Panel Akustik High-->
                                                    <div class="tab-pane fade show p-2" id="highAkustik"
                                                        role="tabpanel" aria-labelledby="high-Akustik-tab">
                                                        <div class="col text-center">
                                                            <img src="images/mr-a-h.jpg" alt=""
                                                                class="rounded mb-3" style="width: 70%; height:70%;">

                                                            <div class="row justify-content-center">

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Matrial</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAHbarang" style="margin-top: -12px;">
                                                                        Rp
                                                                        0</h6>
                                                                </div>

                                                                <div class="col">
                                                                    <p class="text-light" style="font-size: 14px;">
                                                                        Harga Pemasangan</p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAHpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </div>
                                                            <center>
                                                                <div class="col mt-2">
                                                                    <p class="text-light">Harga Matrial & Pemasangan
                                                                    </p>
                                                                    <h6 class="fw-bold text-warning"
                                                                        id="totalAHbarangDANpemasangan"
                                                                        style="margin-top: -12px;">Rp 0</h6>
                                                                </div>
                                                            </center>
                                                        </div>
                                                        <center><input class="mt-2 pb-1 rounded-pill" type="submit"
                                                                onclick="PenawaranEmpatSisiMrAh()"
                                                                value="Lanjut Penawaran"
                                                                style="font-weight: bold; color: #cecccc; background-color:#064663; border: none; width: 200px; height: 40px;">
                                                        </center>
                                                    </div>
                                                    <!-- Akhir Metode Panel Akustik High-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                            <!-- Akhir Metode Panel Akustik -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- hitungan -->
    <script>
        const formatRupiah = (money) => {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(money);
        }

        function startCalc() {

            interval = setInterval("calc()", 1);
        }

        function calc() {

            panjang = document.perhitungan.panjang.value / 100;
            lebar = document.perhitungan.lebar.value / 100;
            tinggi = document.perhitungan.tinggi.value / 100;
            jmlPintu = document.perhitungan.pintu.value;

            //Perhitungan
            document.getElementById('Ldinding').innerText = parseFloat(2 * (parseFloat(panjang) + parseFloat(lebar)) *
                parseFloat(tinggi)).toFixed(2) + " m2";
            document.getElementById('Lplafon').innerText = parseFloat(parseFloat(panjang) * parseFloat(lebar)).toFixed(
                2) + " m2";
            document.getElementById('jmlPintu').innerText = parseInt(jmlPintu) + " pcs";

            //Gypsum Standard
            document.getElementById('totalGSbarang').innerText = formatRupiah((parseFloat(((2 * (parseFloat(panjang) +
                    parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) * parseFloat(lebar))) *
                {{ $mr->gypsum_standard_mr }}) + (
                parseInt(jmlPintu) * ((81 * 210) * {{ $pintuPeredam->tebal_4cm }})));
            document.getElementById('totalGSpemasangan').innerText = formatRupiah(((parseFloat(2 * (parseFloat(panjang) +
                parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_dinding }}) + (
                (parseFloat(parseFloat(panjang) *
                    parseFloat(lebar)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }}) + (parseInt(
                jmlPintu) * {{ $pintuPeredam->jasa_pasang_pintu }}));

            document.getElementById('totalGSbarangDANpemasangan').innerText = formatRupiah((((parseFloat(2 * (parseFloat(
                    panjang) + parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + ((parseFloat(
                    parseFloat(panjang) * parseFloat(lebar)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_plafon }})) + ((parseFloat(((2 * (parseFloat(
                panjang) + parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) *
                parseFloat(lebar))) * {{ $mr->gypsum_standard_mr }}) + ((parseInt(jmlPintu) * ((81 * 210) *
                {{ $pintuPeredam->tebal_4cm }})) + (parseInt(jmlPintu) *
                {{ $pintuPeredam->jasa_pasang_pintu }}))));

            //Gypsum Medium
            document.getElementById('totalGMbarang').innerText = formatRupiah((parseFloat(((2 * (parseFloat(panjang) +
                    parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) * parseFloat(lebar))) *
                {{ $mr->gypsum_medium_mr }}) + (
                parseInt(jmlPintu) * ((81 * 210) * {{ $pintuPeredam->tebal_4cm }})));
            document.getElementById('totalGMpemasangan').innerText = formatRupiah(((parseFloat(2 * (parseFloat(panjang) +
                    parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + (
                (parseFloat(parseFloat(panjang) *
                    parseFloat(lebar)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }}) + (parseInt(
                jmlPintu) * {{ $pintuPeredam->jasa_pasang_pintu }}));

            document.getElementById('totalGMbarangDANpemasangan').innerText = formatRupiah((((parseFloat(2 * (parseFloat(
                    panjang) + parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + ((parseFloat(
                    parseFloat(panjang) * parseFloat(lebar)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_plafon }})) + ((parseFloat(((2 * (parseFloat(
                panjang) + parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) *
                parseFloat(lebar))) * {{ $mr->gypsum_medium_mr }}) + ((parseInt(jmlPintu) * ((81 * 210) *
                {{ $pintuPeredam->tebal_4cm }})) + (parseInt(jmlPintu) *
                {{ $pintuPeredam->jasa_pasang_pintu }}))));

            //Panel Akustik Standard
            document.getElementById('totalASbarang').innerText = formatRupiah((parseFloat(((2 * (parseFloat(panjang) +
                    parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) * parseFloat(lebar))) *
                {{ $mr->panel_standard_mr }}) + (
                parseInt(jmlPintu) * ((81 * 210) * {{ $pintuPeredam->tebal_4cm }})));
            document.getElementById('totalASpemasangan').innerText = formatRupiah(((parseFloat(2 * (parseFloat(panjang) +
                    parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + (
                (parseFloat(parseFloat(panjang) *
                    parseFloat(lebar)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }}) + (parseInt(
                jmlPintu) * {{ $pintuPeredam->jasa_pasang_pintu }}));

            document.getElementById('totalASbarangDANpemasangan').innerText = formatRupiah((((parseFloat(2 * (parseFloat(
                    panjang) + parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + ((parseFloat(
                    parseFloat(panjang) * parseFloat(lebar)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_plafon }})) + ((parseFloat(((2 * (parseFloat(
                panjang) + parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) *
                parseFloat(lebar))) * {{ $mr->panel_standard_mr }}) + ((parseInt(jmlPintu) * ((81 * 210) *
                {{ $pintuPeredam->tebal_4cm }})) + (parseInt(jmlPintu) *
                {{ $pintuPeredam->jasa_pasang_pintu }}))));

            //Panel Akustik Medium
            document.getElementById('totalAMbarang').innerText = formatRupiah((parseFloat(((2 * (parseFloat(panjang) +
                    parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) * parseFloat(lebar))) *
                {{ $mr->panel_medium_mr }}) + (
                parseInt(jmlPintu) * ((81 * 210) * {{ $pintuPeredam->tebal_4cm }})));
            document.getElementById('totalAMpemasangan').innerText = formatRupiah(((parseFloat(2 * (parseFloat(panjang) +
                    parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + (
                (parseFloat(parseFloat(panjang) *
                    parseFloat(lebar)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }}) + (parseInt(
                jmlPintu) * {{ $pintuPeredam->jasa_pasang_pintu }}));

            document.getElementById('totalAMbarangDANpemasangan').innerText = formatRupiah((((parseFloat(2 * (parseFloat(
                    panjang) + parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + ((parseFloat(
                    parseFloat(panjang) * parseFloat(lebar)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_plafon }})) + ((parseFloat(((2 * (parseFloat(
                panjang) + parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) *
                parseFloat(lebar))) * {{ $mr->panel_medium_mr }}) + ((parseInt(jmlPintu) * ((81 * 210) *
                {{ $pintuPeredam->tebal_4cm }})) + (parseInt(jmlPintu) *
                {{ $pintuPeredam->jasa_pasang_pintu }}))));

            //Panel Akustik High
            document.getElementById('totalAHbarang').innerText = formatRupiah((parseFloat(((2 * (parseFloat(panjang) +
                    parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) * parseFloat(lebar))) *
                {{ $mr->panel_high_mr }}) + (
                parseInt(jmlPintu) * ((81 * 210) * {{ $pintuPeredam->tebal_4cm }})));
            document.getElementById('totalAHpemasangan').innerText = formatRupiah(((parseFloat(2 * (parseFloat(panjang) +
                    parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + (
                (parseFloat(parseFloat(panjang) *
                    parseFloat(lebar)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }}) + (parseInt(
                jmlPintu) * {{ $pintuPeredam->jasa_pasang_pintu }}));

            document.getElementById('totalAHbarangDANpemasangan').innerText = formatRupiah((((parseFloat(2 * (parseFloat(
                    panjang) + parseFloat(lebar)) * parseFloat(tinggi)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_dinding }}) + ((parseFloat(
                    parseFloat(panjang) * parseFloat(lebar)).toFixed(2)) *
                {{ $jasaPeredam->jasa_peredam_plafon }})) + ((parseFloat(((2 * (parseFloat(
                panjang) + parseFloat(lebar))) * parseFloat(tinggi)) + (parseFloat(panjang) *
                parseFloat(lebar))) * {{ $mr->panel_high_mr }}) + ((parseInt(jmlPintu) * ((81 * 210) *
                {{ $pintuPeredam->tebal_4cm }})) + (parseInt(jmlPintu) *
                {{ $pintuPeredam->jasa_pasang_pintu }}))));


        }

        function stopCalc() {

            clearInterval(interval);
        }
    </script>

</body>

</html>
