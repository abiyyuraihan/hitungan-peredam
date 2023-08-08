<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penawaran Anda</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/html2canvas.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @media screen and (min-width: 800px) {
            #printArea {
                zoom: 200%;
            }

            #btnDownload {
                zoom: 200%;
            }

            #errorMassage {
                zoom: 200%;
            }

            #zoomIn {
                display: inline;
            }
        }

        @media screen and (max-width: 800px) {
            #zoomIn {
                display: none;
            }
        }
    </style>
    <script>
        function isEmpty() {
            var name = document.getElementById('nama').value;
            var alamat = document.getElementById('alamat').value;

            if (name != "" && alamat != "") {
                document.getElementById('btnDownload').removeAttribute("disabled");
            }

        }

        // function generatepdf() {
        //     var element = document.getElementById("perhitungan4sisiMrGs");
        //     var opt = {
        //         margin: [-4.77,0,0,0.1],
        //         filename: 'Penawaran_Empat_Sisi_mr_gs.pdf',
        //         image: {
        //             type: 'jpeg',
        //             quality: 0.98
        //         },
        //         html2canvas: {
        //             scale: 1
        //         },
        //         jsPDF: {
        //             unit: 'in',
        //             format: 'letter',
        //             orientation: 'portrait'
        //         },
        //         pagebreak: {
        //             mode: ['avoid-all', 'css']
        //         }
        //     };
        //     html2pdf().set(opt).from(element).save();
        //     html2pdf(element, opt);
        // }
    </script>
</head>

<body>
    <div class="container g-0" style="width: 98%;">
        <div class="col" style="font-size: 12px; width: 100%;">
            <table class="table table-bordered border-dark" id="printArea">
                <form id="formPenawaran" method="post" action="/ms_penawaran_o_e_gm@store"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="mrType" name="mrType" value="gm" hidden>
                    <tr style="LINE-HEIGHT:20px; background-color: rgb(18, 57, 80);">
                        <th colspan="3"><img src="images/logo gesang.png" alt="" width="60px"
                                height="30px"></th>
                        <th colspan="3" class="text-end" style="color:rgb(252, 234, 168); font-size: 14px;">
                            Medium Quality
                            (Gypsum)
                        </th>
                    </tr>

                    <tr>
                        <th colspan="6" style="background-color: rgb(233, 231, 231);">*Nama
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                type="text" name="nama" id="nama" style="width: 72%;" class="mb-1"
                                placeholder="Masukan Nama Lengkap Anda" autofocus value="{{ old('nama') }}"
                                onkeyup="isEmpty()" required><br>
                            *Lokasi Proyek &nbsp;<input type="text" name="alamat" id="alamat" style="width: 72%;"
                                placeholder="Isi Alamat Proyek" autofocus value="{{ old('alamat') }}"
                                onkeyup="isEmpty()" class="mb-1" required><br>
                            <center><span class="text-danger"><big><b>**
                                            Nama, Alamat, dan Foto Ruangan
                                            Wajib Dimasukan **</b></big><br><br></span></center><br>
                            <center>
                                <div class="row">
                                    <div class="col"><input id="jabodetabek" type="radio" name="radio"
                                            onclick="Jabodetabek(); TotalHargaProyek();" checked>&nbsp;&nbsp;JABODETABEK
                                    </div>
                                    <div class="col"><input id="luarJabodetabek" type="radio" name="radio"
                                            onclick="LuarJabodetabek(); TotalHargaProyek();">&nbsp;&nbsp;Luar
                                        JABODETABEK</div>
                                </div>
                            </center>
                        </th>
                    </tr>

                    <tr style="background-color: rgb(233, 231, 231);">
                        <td colspan="6" class="m-0">
                            <div class="row g-0 m-0" style="margin-top: -5px;">
                                <div class="col m-0"><b>*Foto Ruangan <span style="color: red;">(max : 2 mb)</span></b>
                                </div>
                                <div class="col" id="wrapper1"
                                    style="width: 30px; height:50px; background-repeat: no-repeat; background-size: cover;">
                                    <input type="file" name="foto1" id="foto1"
                                        accept="image/png, image/jpg, image/jpeg"
                                        style="width: 100%; margin-top: -15px;" required hidden>

                                    <label style="width: 100%; cursor: pointer;" class="text-center" for="foto1">
                                        <center><i class="bi bi-cloud-arrow-down-fill"></i></center><b>Foto 1</b>
                                        <center><small>Klik Disini</small></center>
                                    </label>
                                </div>
                                <div class="col" id="wrapper2"
                                    style="width: 30px; height:50px; background-repeat: no-repeat; background-size: cover;">
                                    <input type="file" name="foto2" id="foto2"
                                        accept="image/png, image/jpg, image/jpeg"
                                        style="width: 100%; margin-top: -15px;" required hidden>

                                    <label style="width: 100%; cursor: pointer;" class="text-center" for="foto2">
                                        <center><i class="bi bi-cloud-arrow-down-fill"></i></center><b>Foto 2</b><br>
                                        <center><small>Klik Disini</small></center>
                                    </label>
                                </div>
                                <div class="col" id="wrapper3"
                                    style="width: 30px; height:50px; background-repeat: no-repeat; background-size: cover;">
                                    <input type="file" name="foto3" id="foto3"
                                        accept="image/png, image/jpg, image/jpeg"
                                        style="width: 100%; margin-top: -15px;" required hidden>

                                    <label style="width: 100%; cursor: pointer;" class="text-center" for="foto3">
                                        <center><i class="bi bi-cloud-arrow-down-fill"></i></center><b>Foto 3</b>
                                        <center><small>Klik Disini</small></center>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr style="background-color: rgb(233, 231, 231);">
                        <?php
                        $panjangStudio = $_GET['panjangStudio'] / 100;
                        $lebarStudio = $_GET['lebarStudio'] / 100;
                        $panjangOperator = $_GET['panjangOperator'] / 100;
                        $lebarOperator = $_GET['lebarOperator'] / 100;
                        $tinggi = $_GET['tinggi'] / 100;
                        ?>
                        <th hidden>Panjang Studio :<input type="text" value="<?= $panjangStudio ?>"
                                style="border: none; width:25px; font-size: 12px; font-weight: bold;" name="panjangStudio"
                                readonly hidden></th>
                        <th hidden>Lebar Studio :<input type="text" value="<?= $lebarStudio ?>"
                                style="border: none; width:25px; font-size: 12px; font-weight: bold;" name="lebarStudio"
                                readonly hidden></th>
                        <th hidden>Panjang Operator :<input type="text" value="<?= $panjangOperator ?>"
                                style="border: none; width:25px; font-size: 12px; font-weight: bold;" name="panjangOperator"
                                readonly hidden></th>
                        <th hidden>Lebar Operator :<input type="text" value="<?= $lebarOperator ?>"
                                style="border: none; width:25px; font-size: 12px; font-weight: bold;" name="lebarOperator"
                                readonly hidden></th>
                        <th hidden>Tinggi :<input type="text" value="<?= $tinggi ?>"
                                style="border: none; width:25px; font-size: 12px; font-weight: bold;" name="tinggi"
                                readonly hidden></th>
                        <th colspan="6">
                            Panjang Studio : <?= $panjangStudio ?>
                            &nbsp;&nbsp;||&nbsp;&nbsp;
                            Lebar Studio : <?= $lebarStudio ?>
                            &nbsp;&nbsp;||&nbsp;&nbsp;
                            Panjang Operator : <?= $panjangOperator ?>
                            &nbsp;&nbsp;||&nbsp;&nbsp;
                            Lebar Operator : <?= $lebarOperator ?>
                            &nbsp;&nbsp;||&nbsp;&nbsp; Tinggi : <?= $tinggi ?></th>

                    </tr>
                    <tr class="text-center" style="background-color: rgb(32, 45, 74); color: white;">
                        <th colspan="3">Uraian</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr style="background-color: rgb(255, 246, 215);">
                        <th colspan="3">Peredam Dinding (m2)</th>
                        <td class="text-center">
                            <?= ((2 * (($_GET['panjangStudio'] / 100) + ($_GET['lebarStudio'] / 100))) + (2 * (($_GET['panjangOperator'] / 100) + ($_GET['lebarOperator'] / 100)))) * ($_GET['tinggi'] / 100) ?>
                        </td>
                        <td class="text-end">@currency($ms->gypsum_medium_ms)</td>
                        <td id="jumlahPeredamDinding" hidden>
                            <?= (((2 * (($_GET['panjangStudio'] / 100) + ($_GET['lebarStudio'] / 100))) + (2 * (($_GET['panjangOperator'] / 100) + ($_GET['lebarOperator'] / 100)))) * ($_GET['tinggi'] / 100)) * $ms->gypsum_medium_ms ?>
                        </td>
                        <td class="text-end">
                            <?= number_format((((2 * (($_GET['panjangStudio'] / 100) + ($_GET['lebarStudio'] / 100))) + (2 * (($_GET['panjangOperator'] / 100) + ($_GET['lebarOperator'] / 100)))) * ($_GET['tinggi'] / 100)) * $ms->gypsum_medium_ms, 0, ',', '.') ?>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="6" style="background-color: rgb(255, 246, 215);">spek : <small>Rangka
                                Metal
                                Stud
                                U
                                Runner, Rockwool
                                Density 100 kg/m3, Finishing Cat</small></td>
                    </tr>


                    <tr style="background-color: rgb(252, 234, 168);">
                        <th colspan="3">Peredam Plafon (m2)</th>
                        <td class="text-center"><?= (($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100)) ?></td>
                        <td class="text-end">@currency($ms->gypsum_medium_ms)</td>
                        <td id="jumlahPeredamPlafon" hidden>
                            <?= ((($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100))) * $ms->gypsum_medium_ms ?>
                        </td>
                        <td class="text-end">
                            <?= number_format(((($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100))) * $ms->gypsum_medium_ms, 0, ',', '.') ?>
                        </td>
                    </tr>

                    <tr style="background-color: rgb(252, 234, 168);">
                        <td colspan="6">spek : <small>Rangka
                                Metal
                                Stud
                                U
                                Runner, Rockwool
                                Density 100 kg/m3, Finishing Cat</small></td>
                    </tr>

                    <tr style="background-color: rgb(232, 218, 165);">
                        <th colspan="3">Pintu Peredam (pcs)</th>
                        <td hidden><input type="text" value="<?= $_GET['pintu'] ?>"
                                style="border: none; width:25px; font-size: 12px;" name="pintu" readonly hidden>
                        </td>
                        <td class="text-center"><?= $_GET['pintu'] ?></td>
                        <td class="text-end">
                            <?= number_format(81 * 210 * $pintuPeredam->tebal_4cm, 0, ',', '.') ?></td>
                        <td id="jumlahPintu" hidden>
                            <?= $_GET['pintu'] * (81 * 210 * $pintuPeredam->tebal_4cm) ?></td>
                        <td class="text-end">
                            <?= number_format($_GET['pintu'] * (81 * 210 * $pintuPeredam->tebal_4cm), 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr style="background-color: rgb(232, 218, 165);">
                        <td colspan="6"><small><b>Tebal 4 cm(Ukuran Pintu : 210 x 81 cm)</b>
                                <br>
                                <b>spek</b> : Rockwool Density 100 kg/m3 tebal 2,5 cm, Multipleks, Finishing HPL, sudah
                                termasuk Accessoris Standard</small></td>
                    </tr>
                    <tr style="background-color: rgb(18, 57, 80); color: white;">
                        <div id="totalHargaBarang" hidden></div>
                        <th colspan="4"
                            style="font-size: 12px; margin-top: -5px; margin-bottom: -5px; color: white;">Total
                            Harga Barang</th>
                        <th class="text-end" colspan="2"
                            style="font-size: 17px; margin-top: -5px; margin-bottom: -5px; color: rgb(252, 234, 168);"
                            id="totalHargaBarangTampil"></th>
                    </tr>
                    <tr class="text-center" id="bg_pemasangan"
                        style="background-color: rgb(32, 45, 74); color: white;">
                        <th colspan="6" class="text-center">
                            <div class="row g-0">
                                <div class="col-md-1 col-1" style="margin-bottom: -8px; margin-top: -10px;"><small
                                        style="color: white;">pilih</small><br><input type="checkbox" id="pemasangan"
                                        style="width: 20px; height: 20px;" onclick="Pemasangan(); TotalHargaProyek();"
                                        checked></div>
                                <div class="col-md-10 col-10 text-center" style="font-size: 14px;">Jasa Fabrikasi
                                    &
                                    Pemasangan</div>
                            </div>
                        </th>
                    </tr>
                    <tr id="activePemasanganDinding"
                        style="display: inline-flexbox; background-color: rgb(255, 246, 215);">
                        <th colspan="3">Pemasangan Dinding (m2)</th>
                        <td class="text-center">
                            <?= ((2 * ($_GET['panjangStudio'] / 100 + $_GET['lebarStudio'] / 100)) + (2 * ($_GET['panjangOperator'] / 100 + $_GET['lebarOperator'] / 100))) * ($_GET['tinggi'] / 100) ?>
                        </td>
                        <td class="text-end">@currency($jasaPeredam->jasa_peredam_dinding)</td>
                        <td id="jumlahPemasanganDinding" hidden>
                            <?= (((2 * ($_GET['panjangStudio'] / 100 + $_GET['lebarStudio'] / 100)) + (2 * ($_GET['panjangOperator'] / 100 + $_GET['lebarOperator'] / 100))) * ($_GET['tinggi'] / 100)) * $jasaPeredam->jasa_peredam_dinding ?>
                        </td>
                        <td class="text-end">
                            <?= number_format(((2 * ($_GET['panjangStudio'] / 100 + $_GET['lebarStudio'] / 100)) + (2 * ($_GET['panjangOperator'] / 100 + $_GET['lebarOperator'] / 100))) * ($_GET['tinggi'] / 100) * $jasaPeredam->jasa_peredam_dinding, 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr id="activePemasanganPlafon"
                        style="display: inline-flexbox; background-color: rgb(252, 234, 168);">
                        <th colspan="3">Pemasangan Plafon (m2)</th>
                        <td class="text-center">
                            <?= (($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100)) ?></td>
                        <td class="text-end">@currency($jasaPeredam->jasa_peredam_plafon)</td>
                        <td id="jumlahPemasanganPlafon" hidden>
                            <?= ((($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100))) * $jasaPeredam->jasa_peredam_plafon ?>
                        </td>
                        <td class="text-end">
                            <?= number_format(((($_GET['panjangStudio'] / 100) * ($_GET['lebarStudio'] / 100)) + (($_GET['panjangOperator'] / 100) * ($_GET['lebarOperator'] / 100))) * $jasaPeredam->jasa_peredam_plafon, 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr id="activePemasanganPintu"
                        style="display: inline-flexbox; background-color: rgb(232, 218, 165);">
                        <th colspan="3">Pemasangan Pintu (pcs)</th>
                        <td class="text-center"><?= $_GET['pintu'] ?></td>
                        <td class="text-end">@currency($pintuPeredam->jasa_pasang_pintu)</td>
                        <td id="jumlahPemasanganPintu" hidden>
                            <?= $_GET['pintu'] * $pintuPeredam->jasa_pasang_pintu ?></td>
                        <td class="text-end">
                            <?= number_format($_GET['pintu'] * $pintuPeredam->jasa_pasang_pintu, 0, ',', '.') ?>
                        </td>
                    </tr>

                    <tr id="activeTotalHargaPemasangan" style="background-color: rgb(18, 57, 80); color: white;">
                        <div id="totalHargaPemasangan" hidden></div>
                        <th colspan="4"
                            style="font-size: 12px; margin-top: -5px; margin-bottom: -5px; color: white;">Total
                            Harga
                            Pemasangan</th>
                        <th class="text-end" colspan="2"
                            style="font-size: 17px; margin-top: -5px; margin-bottom: -5px; color: rgb(252, 234, 168);"
                            id="totalHargaPemasanganTampil"></th>
                    </tr>

                    <tr class="text-center" id="bg_listrik"
                        style="background-color: rgb(112, 38, 29); color: white;">
                        <th colspan="6">
                            <div class="row g-0">
                                <div class="col-md-1 col-1" style="margin-top: -10px; margin-bottom: -8px;"><small
                                        style="color: white;">pilih</small><br><input type="checkbox"
                                        style="width: 20px; height: 20px;" id="listrik"
                                        onclick="activeL(); TotalHargaProyek();">
                                </div>
                                <div class="col-md-10 col-10 text-center" style="font-size: 14px;">Listrik dan
                                    Penerangan</div>
                            </div>
                        </th>
                    </tr>

                    <tr id="listrikActive" style="display: none; background-color: rgb(255, 246, 215);">
                        <th colspan="3"><small>A. Instalasi + Material Lampu <br><b>(Lampu LED Downlight
                                    Philips, <span style="color: red;">Tidak Termasuk Kabel Tufur</span>)</b></small></th>
                        <td hidden><?php
                        $panjang;
                        if ($_GET['panjangStudio'] / 100 < 3) {
                            $panjang = 1;
                        } elseif ($_GET['panjangStudio'] / 100 > 2.9 and $_GET['panjangStudio'] / 100 < 5.1) {
                            $panjang = 2;
                        } elseif ($_GET['panjangStudio'] / 100 > 5 and $_GET['panjangStudio'] / 100 < 7.1) {
                            $panjang = 3;
                        } elseif ($_GET['panjangStudio'] / 100 > 7 and $_GET['panjangStudio'] / 100 < 9.1) {
                            $panjang = 4;
                        } elseif ($_GET['panjangStudio'] / 100 > 9 and $_GET['panjangStudio'] / 100 < 11.1) {
                            $panjang = 5;
                        } elseif ($_GET['panjangStudio'] / 100 > 11 and $_GET['panjangStudio'] / 100 < 13.1) {
                            $panjang = 6;
                        } elseif ($_GET['panjangStudio'] / 100 > 13 and $_GET['panjangStudio'] / 100 < 15.1) {
                            $panjang = 7;
                        } elseif ($_GET['panjangStudio'] / 100 > 15 and $_GET['panjangStudio'] / 100 < 17.1) {
                            $panjang = 8;
                        } elseif ($_GET['panjangStudio'] / 100 > 17 and $_GET['panjangStudio'] / 100 < 19.1) {
                            $panjang = 9;
                        } elseif ($_GET['panjangStudio'] / 100 > 19 and $_GET['panjangStudio'] / 100 < 21.1) {
                            $panjang = 10;
                        } else {
                            $panjang = 11;
                        }
                        
                        $lebar;
                        if (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 3) {
                            $lebar = 1;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 2.9 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 5.1) {
                            $lebar = 2;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 5 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 7.1) {
                            $lebar = 3;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 7 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 9.1) {
                            $lebar = 4;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 9 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 11.1) {
                            $lebar = 5;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 11 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 13.1) {
                            $lebar = 6;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 13 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 15.1) {
                            $lebar = 7;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 15 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 17.1) {
                            $lebar = 8;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 17 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 19.1) {
                            $lebar = 9;
                        } elseif (($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) > 19 and ($_GET['lebarStudio'] / 100) + ($_GET['lebarOperator'] / 100) < 21.1) {
                            $lebar = 10;
                        } else {
                            $lebar = 11;
                        }
                        $jmlLampu = $panjang * $lebar;
                        $jmlStopKontak = round(($panjangStudio * $lebar) / 2);
                        
                        ?><input type="number" value="<?php echo $jmlLampu; ?>"
                                style="border: none; width:40px; font-size: 10px; font-weight: bold;" name="lampu"
                                id="titikLampu" readonly hidden></td>
                        <td id="qtyLampu" class="text-center"><?php echo $jmlLampu; ?> titik</td>
                        <td class="text-end">@currency($listrik->material_lampu + $listrik->jasa_instalasi_listrik)</td>
                        <td id="jumlahLampu" hidden>
                            <?= $jmlLampu * ($listrik->material_lampu + $listrik->jasa_instalasi_listrik) ?>
                        </td>
                        <td class="text-end">
                            <?= number_format($jmlLampu * ($listrik->material_lampu + $listrik->jasa_instalasi_listrik), 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr id="stopKontakActive" style="display: none; background-color: rgb(252, 234, 168);">
                        <th colspan="3"><small>B. Instalasi + Material StopKontak <br><span style="color: red;">(Tidak Termasuk Kabel Tufur)</span></small></th>
                        <td hidden><input type="number" value="<?php echo $jmlStopKontak; ?>"
                                style="border: none; width:40px; font-size: 10px; font-weight: bold;"
                                name="stopKontak" readonly hidden></td>
                        <td id="qtyStopKontak" class="text-center"><?php echo $jmlStopKontak; ?> titik</td>
                        <td class="text-end">@currency($listrik->material_stopkontak + $listrik->jasa_instalasi_listrik)</td>
                        <td id="jumlahStopKontak" hidden>
                            <?= $jmlStopKontak * ($listrik->material_stopkontak + $listrik->jasa_instalasi_listrik) ?>
                        </td>
                        <td class="text-end">
                            <?= number_format($jmlStopKontak * ($listrik->material_stopkontak + $listrik->jasa_instalasi_listrik), 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr style="background-color: rgb(32, 45, 74); color: white;" id="lainActive">
                        <th colspan="6" class="text-center" style="font-size: 14px;">Lain-lain</th>
                    </tr>
                    <tr style="background-color: rgb(255, 246, 215);" id="mobilisasiActive">
                        <input type="text" value="0" name="mobilisasi" id="mobilisasi" hidden>
                        <th colspan="4">Mobilisasi & Demobilisasi</th>
                        <td colspan="2" class="text-end" id="mobilisasiTampil"></td>
                    </tr>
                    <tr style="background-color: rgb(252, 234, 168);" id="dropMaterialActive">
                        <input type="text" value="0" name="dropMaterial" id="dropMaterial" hidden>
                        <th colspan="4">Drop Material</th>
                        <td colspan="2" class="text-end" id="dropMaterialTampil">Rp 0</td>
                    </tr>
                    <tr style="background-color: rgb(232, 218, 165);" id="sampahActive">
                        <input type="text" value="0" name="sampah" id="sampah" hidden>
                        <th colspan="4">
                            <div class="row">
                                <div class="col-md-1 col-1" id="sampahCheckTampil"><input type="checkbox"
                                        style="width: 20px; height: 20px;" id="sampahCheck"
                                        onclick="TotalHargaProyek()">
                                </div>
                                <div class="col">Sampah</div>
                            </div>
                        </th>
                        <td colspan="2" class="text-end" id="sampahTampil">By Owner</td>
                    </tr>
                    <tr style="background-color: rgb(255, 246, 215); display: none;" id="transportActive">
                        <input type="text" value="0" name="transport" id="transport" hidden>
                        <th colspan="4">Transportasi</th>
                        <td colspan="2" class="text-end" id="transportTampil"></td>
                    </tr>
                    <tr style="background-color: rgb(252, 234, 168); display: none;" id="messActive">
                        <input type="text" value="0" name="mess" id="mess" hidden>
                        <th colspan="4">Mess Tukang</th>
                        <td colspan="2" class="text-end" id="messTampil"></td>
                    </tr>
                    <tr style="background-color: rgb(252, 234, 168); display: none;" id="tiketActive">
                        <input type="text" value="0" name="tiket" id="tiket" hidden>
                        <th colspan="4">Tiket Pesawat</th>
                        <td colspan="2" class="text-end" id="tiketTampil"></td>
                    </tr>
                    <tr style="background-color: rgb(18, 57, 80);" id="totalHargaProyekActive">
                        <div id="totalHargaProyek" hidden></div>
                        <th colspan="4"
                            style="font-size: 12px; margin-top: -5px; margin-bottom: -5px; color: white;">Total
                            Harga Proyek</th>
                        <th class="text-end" colspan="2"
                            style="font-size: 17px; margin-top: -5px; margin-bottom: -5px; color: rgb(252, 234, 168);"
                            id="totalHargaProyekTampil"></th>
                    </tr>
                    <tr id="ketentuanActive">
                        <td colspan="6"><big><b class="text-danger fs-5">Ketentuan</b></big> (*Wajib dibaca dan
                            dipahami) <br> <small><b>-</b> Lingkup kerja hanya
                                yang
                                ditawarkan dengan
                                qty yang tertera dipenawaran</small> <br>
                            <small><b>-</b> Penawaran berlaku 2 minggu per tanggal tertera dipenawaran</small> <br>
                            <small><b>- Belum Termasuk Pekerjaan Lantai, Bongkar2, AC, Sipil,
                                    Dll</b></small><br>
                            <small id="ket_pemasangan" style="display: none;"><b>-</b> Belum Termasuk Pemasangan
                                dan
                                Fabrikasi<br></small>
                            <small id="ket_listrik"><b>-</b> Belum Termasuk Instalasi Lampu &
                                StopKontak<br></small>
                            <small id="ket_sampah"><b>-</b> Sampah By Owner<br></small>
                            <small id="ket_lain" style="display: none;"><b>-</b> Mobilisasi, Drop Material, Sampah,
                                Transportasi, Mess
                                Tukang, Tiket Pesawat, Ditanggung Owner dengan harga yang sudah di sepakati<br></small>
                                <b>- Belum Termasuk Perangkat Musik, Perangkat Elektronik, Lampu RGB <br></b>
                                <br>
                            <big><b>Pembayaran</b></big>
                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <small>Termin 1 (DP) (50%)</small>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-1 col-1" id="pembayaranDp">
                                    Rp.0
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <small>Termin 2 Pabrikasi (25%)</small>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-1 col-1" id="terminSatu">
                                    Rp.0
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <small>Termin 3 50% Pekerjaan Terpasang (20%)</small>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-1 col-1" id="terminDua">
                                    Rp.0
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <small>Termin 4 koreksi pekerjaan (kedua belah pihak) & Serah terima
                                        pekerjaan (5%)</small>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-1 col-1" id="terminTiga">
                                    Rp.0
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <b>Estimasi Waktu Pengerjaan</b>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-3 col-3" id="lamaPengerjaan">
                                    3 hari
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-7 col-7">
                                    <b>Biaya Survei Wilayah JABODETABEK</b><br>
                                </div>
                                <div class="col-md-1 col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-md-1 col-1">
                                    Rp.@currency($jasaPeredam->survei_jabodetabek)
                                </div>
                            </div>
                            <small style="font-size: 8px;">(biaya survei akan dikembalikan 100% jika proyek
                                tersebut
                                DEAL)</small><br><br>
                            <center><b>Diluar JABODETABEK Biaya Survei, Mobilisasi & Demobilisasi menyesuaikan
                                    lokasi
                                    proyek...</b></center>
                        </td>
                    </tr>
            </table>
        </div>
        <center><span class="text-danger" id="errorMassage"><small><b>**
                        Data Akan Tersimpan Jika Nama, Alamat, dan Foto Ruangan Dimasukan **</b></small></span></center>
        <button disabled type="button" id="btnDownload" onclick="ErrorMassage(); simpanPenawaran();"
            onfocus="startKlik()" onblur="stopKlik()" class="btn btn-labeled mb-5 mt-2"
            style="background-color: rgb(1, 2, 39); color:white; width:100%;">
            <span class="btn-label"><i class="bi bi-file-earmark-arrow-down-fill"></i></span><small>
                Download & Kirim Estimasi Harga <br><small id="zoomIn">(zoom in layar ke 100% untuk mendapatkan
                    kualitas download terbaik)</small></small></button>
        <button type="submit" id="btnPenawaran" onclick="ErrorMassage()" class="btn btn-labeled"
            style="background-color: rgb(112, 38, 29); color:white; width:100%; display: none;">
            <span class="btn-label"><i class="bi bi-file-earmark-arrow-down-fill"><br></i></span><small>
                Simpan dan Kirim</small></button>

        </form>
        <div id="tokopedia" style="display: none;">
            <center><b style="color: rgb(7, 76, 79)"><small>Jika tidak menggunakan Jasa Pasang Kami, Maka Pembelian
                        Panel Peredam di lakukan di Tokopedia kami</small></b></center>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/tokopedia dashboard.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/tokopedia product1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/tokopedia product2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <center><a
                    href="https://www.tokopedia.com/gesang-contractors/panel-akustik-sound-absorbent-100x40cm-tebal-3-6-cm-d60-d80-d100-kg-m3-3cm-d40kg-m3">
                    <button type="submit" id="btnTokopedia" class="btn btn-labeled mb-4"
                        style="background-color: rgb(80, 136, 80); color:rgb(255, 255, 255); width:80%">
                        <span class="btn-label"><img src="images/tokopedia.png" alt=""></span>Buy
                        Here!</button></a></center>
        </div>
    </div>

    <script>
        var input_Image1 = document.getElementById("foto1");
        var upload_Image1 = '';
        // iss string me hi toh url hoga na image ka 
        input_Image1.addEventListener("change", () => {
            const reader = new FileReader();
            const file = document.querySelector('#foto1').files[0];
            // isme bi eventlistener ise listen krne ka 
            reader.addEventListener("load", (files) => {
                upload_Image1 = reader.result;
                document.getElementById("wrapper1").style.backgroundImage = `url(${upload_Image1})`;
            });
            reader.readAsDataURL(file);

        });
    </script>
    <script>
        var input_Image2 = document.getElementById("foto2");
        var upload_Image2 = '';
        // iss string me hi toh url hoga na image ka 
        input_Image2.addEventListener("change", () => {
            const reader = new FileReader();
            const file = document.querySelector('#foto2').files[0];
            // isme bi eventlistener ise listen krne ka 
            reader.addEventListener("load", (files) => {
                upload_Image2 = reader.result;
                document.getElementById("wrapper2").style.backgroundImage = `url(${upload_Image2})`;
            });
            reader.readAsDataURL(file);

        });
    </script>
    <script>
        var input_Image3 = document.getElementById("foto3");
        var upload_Image3 = '';
        // iss string me hi toh url hoga na image ka 
        input_Image3.addEventListener("change", () => {
            const reader = new FileReader();
            const file = document.querySelector('#foto3').files[0];
            // isme bi eventlistener ise listen krne ka 
            reader.addEventListener("load", (files) => {
                upload_Image3 = reader.result;
                document.getElementById("wrapper3").style.backgroundImage = `url(${upload_Image3})`;
            });
            reader.readAsDataURL(file);

        });
    </script>
    <script>
        const formatRupiah = (money) => {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(money);
        }
        var jumlahPintu = document.getElementById('jumlahPintu');
        var jumlahPemasanganDinding = document.getElementById('jumlahPemasanganDinding');
        var jumlahPemasanganPlafon = document.getElementById('jumlahPemasanganPlafon');
        var jumlahPemasanganPintu = document.getElementById('jumlahPemasanganPintu');
        var jumlahPeredamDinding = document.getElementById('jumlahPeredamDinding');
        var jumlahPeredamPlafon = document.getElementById('jumlahPeredamPlafon');
        var activePemasanganDinding = document.getElementById('activePemasanganDinding');
        var activePemasanganPlafon = document.getElementById('activePemasanganPlafon');
        var activePemasanganPintu = document.getElementById('activePemasanganPintu');
        var totalHargaBarang = document.getElementById('totalHargaBarang');
        var totalHargaBarangTampil = document.getElementById('totalHargaBarangTampil');
        var totalHargaPemasangan = document.getElementById('totalHargaPemasangan');
        var totalHargaPemasanganTampil = document.getElementById('totalHargaPemasanganTampil');
        var jumlahLampu = document.getElementById('jumlahLampu');
        var jumlahStopKontak = document.getElementById('jumlahStopKontak');
        var totalHargaProyek = document.getElementById('totalHargaProyek');
        var totalHargaProyekTampil = document.getElementById('totalHargaProyekTampil');
        var pemasangan = document.getElementById('pemasangan');
        var jumlahLampu = document.getElementById('jumlahLampu');
        var jumlahStopKontak = document.getElementById('jumlahStopKontak');
        var l = document.getElementById('listrik');
        var lActive = document.getElementById('listrikActive');
        var skActive = document.getElementById('stopKontakActive');
        var activeTotalHargaPemasangan = document.getElementById('activeTotalHargaPemasangan');
        var pembayaranDp = document.getElementById('pembayaranDp');
        var terminSatu = document.getElementById('terminSatu');
        var terminDua = document.getElementById('terminDua');
        var terminTiga = document.getElementById('terminTiga');
        var ket_pemasangan = document.getElementById('ket_pemasangan');
        var ket_sampah = document.getElementById('ket_sampah');
        var ket_lain = document.getElementById('ket_lain');
        var bg_pemasangan = document.getElementById('bg_pemasangan');
        var ket_listrik = document.getElementById('ket_listrik');
        var bg_listrik = document.getElementById('bg_listrik');
        var totalHargaProyekActive = document.getElementById('totalHargaProyekActive');
        var ketentuanActive = document.getElementById('ketentuanActive');
        var lamaPengerjaan = document.getElementById('lamaPengerjaan');
        var tokopedia = document.getElementById('tokopedia');
        var btnPenawaran = document.getElementById('btnPenawaran');
        var btnDownload = document.getElementById('btnDownload');
        var jabodetabek = document.getElementById('jabodetabek');
        var luarJabodetabek = document.getElementById('luarJabodetabek');
        var mobilisasi = document.getElementById('mobilisasi').value;
        var mobilisasiActive = document.getElementById('mobilisasiActive');
        var mobilisasiTampil = document.getElementById('mobilisasiTampil');
        var dropMaterial = document.getElementById('dropMaterial').value;
        var dropMaterialActive = document.getElementById('dropMaterialActive');
        var dropMaterialTampil = document.getElementById('dropMaterialTampil');
        var sampah = document.getElementById('sampah').value;
        var sampahActive = document.getElementById('sampahActive');
        var sampahTampil = document.getElementById('sampahTampil');
        var sampahCheck = document.getElementById('sampahCheck');
        var sampahCheckTampil = document.getElementById('sampahCheckTampil');
        var transportActive = document.getElementById('transportActive');
        var messActive = document.getElementById('messActive');
        var tiketActive = document.getElementById('tiketActive');
        var lainActive = document.getElementById("lainActive");

        function simpanPenawaran() {
            setInterval(function() {
                document.getElementById("btnPenawaran").click();
            }, 2000);
        }

        function Jabodetabek() {
            if (jabodetabek.checked) {
                transportActive.style.display = "none";
                messActive.style.display = "none";
                tiketActive.style.display = "none";
                mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
                dropMaterialTampil.innerText = formatRupiah(parseInt(dropMaterial));
                ket_lain.style.display = "none";
            }
        }

        function LuarJabodetabek() {
            if (luarJabodetabek.checked == true) {
                transportActive.style.display = "";
                messActive.style.display = "";
                tiketActive.style.display = "";
                mobilisasiTampil.innerText = "";
                dropMaterialTampil.innerText = "";
                ket_lain.style.display = "";
                ket_sampah.style.display = "none";
            }
        }

        //Harga Barang
        totalHargaBarang.innerText = parseInt(jumlahPeredamDinding.innerText) + parseInt(jumlahPeredamPlafon
            .innerText) + parseInt(jumlahPintu.innerText);
        totalHargaBarangTampil.innerText = formatRupiah(parseInt(totalHargaBarang.innerText));

        //Harga Pemasangan
        totalHargaPemasangan.innerText = parseInt(jumlahPemasanganDinding.innerText) + parseInt(jumlahPemasanganPlafon
            .innerText) + parseInt(jumlahPemasanganPintu.innerText);
        totalHargaPemasanganTampil.innerText = formatRupiah(parseInt(totalHargaPemasangan.innerText));

        //mobilisasi
        if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) >= 0 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 40000000) {
            mobilisasi = 2000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 40000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 70000000) {
            mobilisasi = 3000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 70000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 121000000) {
            mobilisasi = 4000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 121000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 160000000) {
            mobilisasi = 5000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 161000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 200000000) {
            mobilisasi = 6000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 201000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 240000000) {
            mobilisasi = 7000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 241000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 280000000) {
            mobilisasi = 8000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 281000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 320000000) {
            mobilisasi = 9000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else if (parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) > 321000000 && parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
                .innerText) <= 360000000) {
            mobilisasi = 10000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        } else {
            mobilisasi = 16000000;
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
        }

        dropMaterial = parseInt(mobilisasi) * 0.2;
        dropMaterialTampil.innerText = formatRupiah(parseInt(dropMaterial));

        totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial);
        totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));

        pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.5);

        terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.25);

        terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.2);

        terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.05);

        lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan
            .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.25 / 1000000) + ' Hari Kerja';


        function Pemasangan() {
            if (pemasangan.checked == true) {
                activePemasanganDinding.style.display = "";
                activePemasanganPlafon.style.display = "";
                activePemasanganPintu.style.display = "";
                activeTotalHargaPemasangan.style.display = "";
                ket_pemasangan.style.display = "none";
                bg_pemasangan.style.backgroundColor = "rgb(32, 45, 74)";
                totalHargaPemasangan.innerText = parseInt(jumlahPemasanganDinding.innerText) + parseInt(
                    jumlahPemasanganPlafon
                    .innerText) + parseInt(jumlahPemasanganPintu.innerText);
                totalHargaPemasanganTampil.innerText = formatRupiah(parseInt(totalHargaPemasangan.innerText));

                bg_listrik.style.display = "";
                lActive.style.display = "";
                skActive.style.display = "";
                mobilisasiActive.style.display = "";
                dropMaterialActive.style.display = "";
                sampahActive.style.display = "";
                lainActive.style.display = "";
                totalHargaProyekActive.style.display = "";
                ketentuanActive.style.display = "";
                btnDownload.style.display = "";
                tokopedia.style.display = "none";

            } else {
                activePemasanganDinding.style.display = "none";
                activePemasanganPlafon.style.display = "none";
                activePemasanganPintu.style.display = "none";
                activeTotalHargaPemasangan.style.display = "none";
                ket_pemasangan.style.display = "";
                bg_pemasangan.style.backgroundColor = "rgb(112, 38, 29)";
                totalHargaPemasangan.innerText = 0;
                totalHargaPemasanganTampil.innerText = formatRupiah(parseInt(totalHargaPemasangan.innerText));

                bg_listrik.style.display = "none";
                lActive.style.display = "none";
                skActive.style.display = "none";
                mobilisasiActive.style.display = "none";
                dropMaterialActive.style.display = "none";
                sampahActive.style.display = "none";
                lainActive.style.display = "none";
                totalHargaProyekActive.style.display = "none";
                ketentuanActive.style.display = "none";
                btnDownload.style.display = "none";
                tokopedia.style.display = "";
            }
        }

        function activeL() {
            if (l.checked == true) {
                lActive.style.display = "";
                bg_listrik.style.backgroundColor = "rgb(32, 45, 74)";
                skActive.style.display = "";
                ket_listrik.style.display = "none";
            } else {
                lActive.style.display = "none";
                bg_listrik.style.backgroundColor = "rgb(112, 38, 29)";
                skActive.style.display = "none";
                ket_listrik.style.display = "";
            }
        }

        function TotalHargaProyek() {

            if (sampahCheck.checked == false && jabodetabek.checked == true && luarJabodetabek.checked == false &&
                pemasangan.checked == true && l
                .checked == true) {
                sampahCheckTampil.style.display = "";
                sampahTampil.innerText = "By Owner";
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) + parseInt(
                    mobilisasi) + parseInt(dropMaterial);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial)) * 0.25 / 1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                ket_sampah.style.display = "";
            } else if (sampahCheck.checked == false && jabodetabek.checked == true && luarJabodetabek.checked == false &&
                pemasangan.checked == true && l
                .checked == false) {
                sampahCheckTampil.style.display = "";
                sampahTampil.innerText = "By Owner";
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial)) * 0.25 / 1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                ket_sampah.style.display = "";
            }

            // Sampah
            else if (sampahCheck.checked == true && jabodetabek.checked == true && luarJabodetabek.checked == false &&
                pemasangan.checked == true && l
                .checked == true) {
                sampahCheckTampil.style.display = "";
                sampah = parseInt(mobilisasi) * 0.22;
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) + parseInt(
                    mobilisasi) + parseInt(dropMaterial) + parseInt(sampah);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) +
                    parseInt(
                        mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.25 / 1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                sampahTampil.innerText = formatRupiah(parseInt(sampah));
                ket_sampah.style.display = "none";
            } else if (sampahCheck.checked == true && jabodetabek.checked == true && luarJabodetabek.checked == false &&
                pemasangan.checked == true && l
                .checked == false) {
                sampahCheckTampil.style.display = "";
                sampah = parseInt(mobilisasi) * 0.22;
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(mobilisasi) + parseInt(dropMaterial) + parseInt(sampah)) * 0.25 /
                    1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                sampahTampil.innerText = formatRupiah(parseInt(sampah));
                ket_sampah.style.display = "none";
            }

            //luar jabodetabek
            else if (jabodetabek.checked == false && luarJabodetabek.checked == true && pemasangan.checked == true && l
                .checked == true) {
                sampahCheckTampil.style.display = "none";
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                        totalHargaPemasangan
                        .innerText) + parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText)) * 0.25 /
                    1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                sampahTampil.innerText = "";
            } else if (jabodetabek.checked == false && luarJabodetabek.checked == true && pemasangan.checked == true && l
                .checked == false) {
                sampahCheckTampil.style.display = "none";
                totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText);
                pembayaranDp.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText)) * 0.5);
                terminSatu.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText)) * 0.25);
                terminDua.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText)) * 0.2);
                terminTiga.innerText = formatRupiah((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText)) * 0.05);
                lamaPengerjaan.innerText = Math.round((parseInt(totalHargaBarang.innerText) + parseInt(
                    totalHargaPemasangan
                    .innerText)) * 0.25 / 1000000) + ' Hari Kerja';
                totalHargaProyekTampil.innerText = formatRupiah(parseInt(totalHargaProyek.innerText));
                sampahTampil.innerText = "";
            }
        }
        var nama = document.getElementById('nama').value;
        var alamat = document.getElementById('alamat').value;
        var foto1 = document.getElementById('foto1').value;
        var foto2 = document.getElementById('foto2').value;
        var foto3 = document.getElementById('foto3').value;
        var errorMassage = document.getElementById('errorMassage');

        function ErrorMassage() {
            if (nama == "" && alamat == "" && foto1 == "" && foto2 == "" && foto3 == "") {
                errorMassage.style.display = '';
            }
        }

        //download penawaran as a picture
        document.getElementById("btnDownload").addEventListener("click", function() {
            html2canvas(document.getElementById("printArea")).then(function(canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                // document.getElementById("previewImg").appendChild(canvas);
                anchorTag.download = "estimasi.png";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.width = 20;
                anchorTag.height = 100;
                anchorTag.click();
            });
        });

        //active Btn Penawaran
        document.getElementById('btnDownload').addEventListener("click", function() {
            document.getElementById('btnPenawaran').removeAttribute('disabled');
        });
    </script>
</body>

</html>
