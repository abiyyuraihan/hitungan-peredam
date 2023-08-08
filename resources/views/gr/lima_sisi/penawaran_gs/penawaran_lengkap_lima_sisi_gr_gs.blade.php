<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penawaran {{ $p_ls_gr->nama }}</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/html2canvas.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @media print {
            body {
                zoom: 60%;
            }

            #materialPenawaran {
                display: none;
            }

            input[type=number] {
                display: none;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {

                visibility: hidden;

            }

            #sampahCheckTampil {
                display: none;
            }

            #pilihText {
                display: none;
            }

            #uraianHead,
            #bg_pemasangan,
            #bg_listrik,
            #lainActive {
                background-color: rgb(245, 245, 140);
                -webkit-print-color-adjust: exact;
            }

            #header {
                background-color: rgb(178, 178, 236);
                -webkit-print-color-adjust: exact;
            }
        }

        input {
            font-size: 15px;
        }

        .btn-label {
            position: relative;
            left: -62px;
            display: inline-block;
            padding: 6px 6px;
            background: rgba(0, 0, 0, 0.15);
            border-radius: 3px 0 0 3px;
        }

        .btn-labeled {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn {
            margin-top: 8px;
            margin-bottom: 8px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {

            opacity: 1;

        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container g-0" style="width: 98%;">
        <div class="col" style="font-size: 12px; width: 100%;" id="printArea">
            <center>
                <table class="table table-bordered border-dark">
                    <form id="formPenawaran" action="" method="post" enctype="multipart/form-data"
                        name="perhitungan">
                        @csrf
                        <tr style="LINE-HEIGHT:40px; background-color: rgb(178, 178, 236);" id="header">
                            <th colspan="3"><img src="../images/logo gesang.png" alt="" width="90px"
                                    height="50px"></th>
                            <th colspan="3" class="text-end" style="font-size: 18px;">
                                <b>Standard Quality
                                    (Gypsum)</b>
                            </th>
                        </tr>

                        <tr>
                            <th colspan="6">
                                <div class="text-center">
                                    <h3>GESANG MUSIC PEREDAM</h3>
                                    <p>Jl.Jati Kampung Rawageni No.91 Ratu Jaya Cipayung Depok 16439 <br><a
                                            href="https://goo.gl/maps/Y97T68XT3Gx">https://goo.gl/maps/Y97T68XT3Gx</a>
                                    </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">Nama &nbsp;: {{ $p_ls_gr->nama }} <br>Lokasi :
                                        {{ $p_ls_gr->alamat }}</div>
                                    <div class="col">
                                        <p class="text-end">Depok, {{ $p_ls_gr->updated_at->format('m/d/Y') }}</p>
                                    </div>
                                </div>
                                <center>
                                    <div class="row">
                                        <div class="col"><input id="jabodetabek" type="radio" name="radio"
                                                onclick="Jabodetabek(); TotalHargaProyek();"
                                                checked>&nbsp;&nbsp;JABODETABEK
                                        </div>
                                        <div class="col"><input id="luarJabodetabek" type="radio" name="radio"
                                                onclick="LuarJabodetabek(); TotalHargaProyek();">&nbsp;&nbsp;Luar
                                            JABODETABEK</div>
                                    </div>
                                </center>
                                <div>
                                    Foto Ruangan
                                    <div class="row g-0 m-0">
                                        <div class="col">
                                            <img src="{{ asset('storage/' . $p_ls_gr->foto1) }}"
                                                alt="{{ $p_ls_gr->nama }}" height="100px" onclick="onClick(this)"
                                                style="cursor:pointer" class="w3-hover-opacity">
                                            <img src="{{ asset('storage/' . $p_ls_gr->foto2) }}"
                                                alt="{{ $p_ls_gr->nama }}" height="100px" onclick="onClick(this)"
                                                style="cursor:pointer" class="w3-hover-opacity">
                                            <img src="{{ asset('storage/' . $p_ls_gr->foto3) }}"
                                                alt="{{ $p_ls_gr->nama }}" height="100px" onclick="onClick(this)"
                                                style="cursor:pointer" class="w3-hover-opacity">
                                        </div>
                                    </div>
                                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                                        <span
                                            class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                        <div class="w3-modal-content w3-animate-zoom">
                                            <img id="img01" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <script>
                            function onClick(element) {
                                document.getElementById("img01").src = element.src;
                                document.getElementById("modal01").style.display = "block";
                            }
                        </script>
                        <tr class="text-end">
                            <th colspan="6">
                                Dinding Satu : <span id="dindingSatuPrint" style="display: none;"></span><input
                                    type="number" name="dindingSatu" id="dindingSatu" style="width: 60px; border: none;"
                                    value="{{ $p_ls_gr->dindingSatu }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required>
                                &nbsp;&nbsp;||&nbsp;&nbsp; 
                                Dinding Dua : <span id="dindingDuaPrint" style="display: none;"></span><input
                                    type="number" name="dindingDua" id="dindingDua" style="width: 60px; border: none;"
                                    value="{{ $p_ls_gr->dindingDua }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required>
                                &nbsp;&nbsp;||&nbsp;&nbsp; 
                                Dinding Tiga : <span id="dindingTigaPrint" style="display: none;"></span><input
                                    type="number" name="dindingTiga" id="dindingTiga" style="width: 60px; border: none;"
                                    value="{{ $p_ls_gr->dindingTiga }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required>
                                &nbsp;&nbsp;||&nbsp;&nbsp; 
                                Dinding Empat : <span id="dindingEmpatPrint" style="display: none;"></span><input
                                    type="number" name="dindingEmpat" id="dindingEmpat" style="width: 60px; border: none;"
                                    value="{{ $p_ls_gr->dindingEmpat }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required>
                                &nbsp;&nbsp;||&nbsp;&nbsp; 
                                Dinding Lima : <span id="dindingLimaPrint" style="display: none;"></span><input
                                    type="number" name="dindingLima" id="dindingLima" style="width: 60px; border: none;"
                                    value="{{ $p_ls_gr->dindingLima }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required>
                                &nbsp;&nbsp;||&nbsp;&nbsp; 
                                Tinggi : <span id="tinggiPrint"
                                    style="display: none;"></span><input type="number"
                                    style="width: 60px; border: none;" name="tinggi" id="tinggi"
                                    value="{{ $p_ls_gr->tinggi }}" onFocus="startCalc();" onBlur="stopCalc();"
                                    step="0.1" required></th>

                        </tr>
                        <tr id="uraianHead" class="text-center" style="background-color: rgb(245, 245, 140);">
                            <th colspan="3">Uraian</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                        </tr>
                        <tr>
                            <th colspan="3">Peredam Dinding (m2)</th>
                            <td class="text-center" id="luasDinding">
                                {{-- Luas Dinding --}}
                            </td>
                            <td class="text-end">@currency($gr->gypsum_standard_gr)</td>
                            <td id="jumlahPeredamDinding" hidden>
                                {{-- jumlah peredam dinding --}}
                            </td>
                            <td class="text-end" id="jumlahPeredamDindingTampil">
                                {{-- jumlah Peredam Dinding Tampil --}}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><big><b>Spesifikasi : </b><br><br>1. Rangka Metal Stud U Runner <br>2.
                                    Rockwool Density 60kg/m3 <br>3. Finishing Cat</big></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th colspan="3">Peredam Plafon (m2)</th>
                            <td class="text-center" id="luasPlafon">
                                {{-- Luas Plafon --}}
                            </td>
                            <td class="text-end">@currency($gr->gypsum_standard_gr)</td>
                            <td id="jumlahPeredamPlafon" hidden>
                                {{-- Jumlah Peredam Plafon --}}
                            </td>
                            <td class="text-end" id="jumlahPeredamPlafonTampil">
                                {{-- Jumlah Peredam Plafon Tampil --}}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><big><b>Spesifikasi : </b><br><br>1. Rangka Metal Stud U Runner <br>2.
                                    Rockwool Density 60kg/m3 <br>3. Finishing Cat</big></td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td colspan="6"></td>
                        </tr>

                        {{-- Pintu Peredam --}}

                        <tr id="activePintuPeredam">
                            <th colspan="3" style="font-size: 14px;">Pintu Peredam (pcs)</th>
                            <td class="text-center"><span id="pintuPrint" style="display: none;"></span><input
                                    type="number" value="{{ $p_ls_gr->pintu }}"
                                    style="border: none; width:40px; font-size: 12px;" onFocus="startCalc();"
                                    onBlur="stopCalc();" name="pintu" id="pintu">
                            </td>
                            <td class="text-end" id="hargaPintu">
                                {{-- harga pintu --}}
                            <td id="jumlahPintu" hidden>
                                {{-- Jumlah harga pintu --}}
                            <td class="text-end" id="jumlahPintuTampil">
                                {{-- Jumlah harga pintu tampil --}}
                            </td>
                        </tr>
                        <tr id="activeTebalPintuPeredam">
                            <td colspan="6">
                                <center>
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col fw-bold"><input type="radio"
                                                style="width: 15px; height: 15px;" name="tebal" id="tebal4cm"
                                                checked onclick="calc()"> Tebal 4
                                            cm</div>
                                        <div class="col fw-bold"><input type="radio"
                                                style="width: 15px; height: 15px;" name="tebal" id="tebal7cm"
                                                onclick="calc()"> Tebal 7
                                            cm</div>
                                        <div class="col"></div>
                                    </div>
                                </center>
                            </td>
                            </td>
                        </tr>
                        <tr id="activeJenisPintuPeredam">
                            <td colspan="6">
                                <center>
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col"><input type="radio" name="motifPintu" id="single"
                                                onclick="calc()" checked>
                                            Single</div>
                                        <div class="col"><input type="radio" name="motifPintu" id="double"
                                                onclick="calc()">
                                            Double</div>
                                        <div class="col"><input type="radio" name="motifPintu" id="kkSingle"
                                                onclick="calc()">
                                            Kupu-Kupu Single</div>
                                        <div class="col"><input type="radio" name="motifPintu" id="kkDouble"
                                                onclick="calc()">
                                            Kupu-Kupu Double</div>
                                        <div class="col"></div>
                                    </div>
                                </center>
                            </td>
                        </tr>
                        <tr id="pintuEcActive">
                            <td colspan="6" class="text-center"><b>Tebal 4 cm(Ukuran Pintu : <span
                                        id="panjangPintuEcPrint" style="display: none;"></span><input type="number"
                                        value="210" onFocus="startCalc();" onBlur="stopCalc();"
                                        style="border: none; width:60px; font-size: 12px;" name="panjangPintuEc"
                                        id="panjangPintuEc"> cm x <span id="lebarPintuEcPrint"
                                        style="display: none;"></span><input type="number" value="81"
                                        onFocus="startCalc();" onBlur="stopCalc();"
                                        style="border: none; width:60px; font-size: 12px;" name="lebarPintuEc"
                                        id="lebarPintuEc"> cm)</b>
                                <br>
                                <b>Spesifikasi</b> : Rockwool Density 100 kg/m3 tebal 2,5 cm, Multipleks, Finishing HPL,
                                sudah
                                termasuk Accessoris Standard
                            </td>
                        </tr>

                        <tr style="display: none;" id="pintuTcActive">
                            <td colspan="6" class="text-center"><b>Tebal 7 cm(Ukuran Pintu : <span
                                        id="panjangPintuTcPrint" style="display: none;"></span><input type="number"
                                        value="210" onFocus="startCalc();" onBlur="stopCalc();"
                                        style="border: none; width:60px; font-size: 12px;" name="panjangPintuTc"
                                        id="panjangPintuTc"> cm x <span id="lebarPintuTcPrint"
                                        style="display: none;"></span><input type="number" value="81"
                                        onFocus="startCalc();" onBlur="stopCalc();"
                                        style="border: none; width:60px; font-size: 12px;" name="lebarPintuTc"
                                        id="lebarPintuTc"> cm)</b>
                                <br>
                                <b>Spesifikasi</b> : Rockwool Density 100 kg/m3 tebal 5 cm, Multipleks, Finishing HPL,
                                sudah
                                termasuk Accessoris Standard
                            </td>
                        </tr>

                        <tr id="btnAddPintuDua">
                            <th colspan="6"><button type="button" id="addPintuDua"><i
                                        class="bi bi-plus-square"></i></button> <b>Tambah Pintu</b></th>
                        </tr>

                        {{-- Pintu Dua --}}
                        <tr style="display: none;" id="pintuDuaActive">
                            <th colspan="3" style="font-size: 14px;"><button type="button"
                                    id="deletePintuDua"><i class="bi bi-dash-square-fill"></i></button> Pintu Peredam
                                (pcs)</th>
                            <td class="text-center"><span id="pintuDuaPrint" style="display: none;"></span><input
                                    type="number" value="0" style="border: none; width:40px; font-size: 12px;"
                                    onFocus="startCalc();" onBlur="stopCalc();" name="pintuDua" id="pintuDua">
                            </td>
                            <td class="text-end">
                                <span id="hargaPintuDuaPrint" style="display: none;"></span><input type="number"
                                    class="text-end" value="0" id="hargaPintuDua" onFocus="startCalc();"
                                    onBlur="stopCalc();">
                            </td>
                            <td id="jumlahPintuDua" hidden>
                                {{-- Jumlah Pintu Dua --}}
                            </td>
                            <td class="text-end" id="jumlahPintuDuaTampil">
                                {{-- Jumlah Pintu Dua Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="spekPintuDuaActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekPintuDuaPrint"
                                    style="display: none;"></span>
                                <textarea id="spekPintuDua" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>

                        <tr style="display: none;" id="btnAddPintuTiga">
                            <td colspan="6"><button type="button" id="addPintuTiga"><i
                                        class="bi bi-plus-square"></i></button></td>
                        </tr>

                        {{-- Pintu Tiga --}}
                        <tr style="display: none;" id="pintuTigaActive">
                            <th colspan="3" style="font-size: 14px;"><button type="button"
                                    id="deletePintuTiga"><i class="bi bi-dash-square-fill"></i></button> Pintu Peredam
                                (pcs)</th>
                            <td class="text-center"><span id="pintuTigaPrint" style="display: none;"></span><input
                                    type="number" value="0" style="border: none; width:40px; font-size: 12px;"
                                    onFocus="startCalc();" onBlur="stopCalc();" name="pintuTiga" id="pintuTiga">
                            </td>
                            <td class="text-end">
                                <span id="hargaPintuTigaPrint" style="display: none;"></span><input type="number"
                                    class="text-end" value="0" id="hargaPintuTiga" onFocus="startCalc();"
                                    onBlur="stopCalc();">
                            </td>
                            <td id="jumlahPintuTiga" hidden>
                                {{-- Jumlah Pintu Tiga --}}
                            </td>
                            <td class="text-end" id="jumlahPintuTigaTampil">
                                {{-- Jumlah Pintu Tiga Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="spekPintuTigaActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekPintuTigaPrint"
                                    style="display: none;"></span>
                                <textarea id="spekPintuTiga" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>

                        <tr>
                            <td colspan="6"></td>
                        </tr>


                        {{-- Jendela Peredam --}}
                        <tr id="jendelaActive">
                            <th colspan="3" style="font-size: 14px; width: 30px;">Jendela Peredam (m2) &nbsp;&nbsp;
                                (<span id="panjangJendelaPrint" style="display: none;"></span><input type="number"
                                    value="0" id="panjangJendela" name="panjangJendela" onFocus="startCalc();"
                                    onBlur="stopCalc();" style="width: 65px; height: 23px;"> cm &nbsp;&nbsp;
                                <big><b>x</b></big>
                                &nbsp;&nbsp; <span id="lebarJendelaPrint" style="display: none;"></span><input
                                    type="number" value="0" id="lebarJendela" name="lebarJendela"
                                    onFocus="startCalc();" onBlur="stopCalc();" style="width: 65px; height: 23px;">
                                cm)
                            </th>
                            <td class="text-center" id="qtyJendela">0</td>

                            <td class="text-end">@currency($jendela->harga_jendela)</td>
                            <td class="text-end" hidden id="jumlahJendela">0</td>
                            <td class="text-end" id="jumlahJendelaTampil">0</td>
                        </tr>
                        <tr id="ukuranJendelaActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekJendelaSatuPrint"
                                    style="display: none;"></span>
                                <textarea id="spekJendelaSatu" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>

                        <tr id="btnAddJendelaDua">
                            <th colspan="6"><button type="button" id="addJendelaDua"><i
                                        class="bi bi-plus-square"></i></button> <b>Tambah Jendela</b></th>
                        </tr>

                        <tr style="display: none;" id="jendelaDuaActive">
                            <th colspan="3" style="font-size: 14px; width: 30px;"><button type="button"
                                    id="deleteJendelaDua"><i class="bi bi-dash-square-fill"></i></button> Jendela
                                Peredam (m2) &nbsp;&nbsp; (<span id="panjangJendelaDuaPrint"
                                    style="display: none;"></span><input type="number" value="0"
                                    id="panjangJendelaDua" name="panjangJendelaDua" onFocus="startCalc();"
                                    onBlur="stopCalc();" style="width: 65px; height: 23px;"> cm &nbsp;&nbsp;
                                <big><b>x</b></big>
                                &nbsp;&nbsp; <span id="lebarJendelaDuaPrint" style="display: none;"></span><input
                                    type="number" value="0" id="lebarJendelaDua" name="lebarJendelaDua"
                                    onFocus="startCalc();" onBlur="stopCalc();" style="width: 65px; height: 23px;">
                                cm)
                            </th>
                            <td class="text-center" id="qtyJendelaDua">0</td>
                            <td class="text-end">@currency($jendela->harga_jendela)</td>
                            <td class="text-end" hidden id="jumlahJendelaDua">0</td>
                            <td class="text-end" id="jumlahJendelaDuaTampil">0</td>
                        </tr>
                        <tr style="display: none;" id="ukuranJendelaDuaActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekJendelaDuaPrint"
                                    style="display: none;"></span>
                                <textarea id="spekJendelaDua" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>

                        <tr style="display:none;" id="btnAddJendelaTiga">
                            <td colspan="6"><button type="button" id="addJendelaTiga" onclick=""><i
                                        class="bi bi-plus-square"></i></button></td>
                        </tr>

                        <tr style="display:none;" id="jendelaTigaActive">
                            <th colspan="3" style="font-size: 14px; width: 30px;"><button type="button"
                                    id="deleteJendelaTiga"><i class="bi bi-dash-square-fill"></i></button> Jendela
                                Peredam (m2) &nbsp;&nbsp; (<span id="panjangJendelaTigaPrint"
                                    style="display: none;"></span><input type="number" value="0"
                                    id="panjangJendelaTiga" name="panjangJendelaTiga" onFocus="startCalc();"
                                    onBlur="stopCalc();" style="width: 65px; height: 23px;"> cm &nbsp;&nbsp;
                                <big><b>x</b></big>
                                &nbsp;&nbsp; <span id="lebarJendelaTigaPrint" style="display: none;"></span><input
                                    type="number" value="0" id="lebarJendelaTiga" name="lebarJendelaTiga"
                                    onFocus="startCalc();" onBlur="stopCalc();" style="width: 65px; height: 23px;">
                                cm)
                            </th>
                            <td class="text-center" id="qtyJendelaTiga">0</td>
                            <td class="text-end">@currency($jendela->harga_jendela)</td>
                            <td class="text-end" hidden id="jumlahJendelaTiga">0</td>
                            <td class="text-end" id="jumlahJendelaTigaTampil">0</td>
                        </tr>
                        <tr style="display:none;" id="ukuranJendelaTigaActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekJendelaTigaPrint"
                                    style="display: none;"></span>
                                <textarea id="spekJendelaTiga" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>

                        {{-- End Jendela Peredam --}}

                        <tr id="pekerjaanLantaiLineActive">
                            <td colspan="6"></td>
                        </tr>
                        <tr id="pekerjaanLantaiActive">
                            <th colspan="6">
                                <center><big>Pekerjaan Lantai (m2)</big><br>
                                    <div class="row mt-1 mb-2">
                                        <div class="col"><input type="checkbox" onclick="calc()"
                                                name="karpet_buanna_check" id="karpet_buanna_check" checked> Karpet
                                            Buanna
                                        </div>
                                        <div class="col"><input type="checkbox" onclick="calc()"
                                                name="karpet_kantor_check" id="karpet_kantor_check"> Karpet Kantor
                                        </div>
                                        <div class="col"><input type="checkbox" onclick="calc()"
                                                name="vinyl_check" id="vinyl_check"> Vinyl</div>
                                        <div class="col"><input type="checkbox" onclick="calc()"
                                                name="parket_kayu_check" id="parket_kayu_check"> Parket Kayu</div>
                                        <div class="col"><input type="checkbox" onclick="calc()"
                                                name="panggung_check" id="panggung_check"> Panggung</div>
                                    </div>
                                </center>
                            </th>
                        </tr>
                        <tr id="karpetBuannaActive">
                            <td colspan="3">Karpet Buanna</td>
                            <td class="text-center">
                                <span id="karpet_buannaPrint" style="display: none;"></span><input type="number"
                                    value="0"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="karpet_buanna" id="karpet_buanna" onFocus="startCalc();"
                                    onBlur="stopCalc();">
                            </td>
                            <td class="text-end">@currency($pekerjaanLantai->karpet_buanna)</td>
                            <td class="text-end" id="jumlahKarpetBuanna" hidden>
                                {{-- Jumlah Karpet Buanna --}}
                            </td>
                            <td class="text-end" id="jumlahKarpetBuannaTampil">
                                {{-- Jumlah Karpet Buanna Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="karpetKantorActive">
                            <td colspan="3">Karpet Kantor</td>
                            <td class="text-center">
                                <span id="karpet_kantorPrint" style="display: none;"></span><input type="number"
                                    value="0"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="karpet_kantor" id="karpet_kantor" onFocus="startCalc();"
                                    onBlur="stopCalc();">
                            </td>
                            <td class="text-end">@currency($pekerjaanLantai->karpet_kantor)</td>
                            <td class="text-end" id="jumlahKarpetKantor" hidden>
                                {{-- Jumlah Karpet Kantor --}}
                            </td>
                            <td class="text-end" id="jumlahKarpetKantorTampil">
                                {{-- Jumlah Karpet Kantor Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="vinylActive">
                            <td colspan="3">Vinyl</td>
                            <td class="text-center">
                                <span id="vinylPrint" style="display: none;"></span><input type="number"
                                    value="0"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="vinyl" id="vinyl" onFocus="startCalc();" onBlur="stopCalc();">
                            </td>
                            <td class="text-end">@currency($pekerjaanLantai->vinyl)</td>
                            <td class="text-end" id="jumlahVinyl" hidden>
                                {{-- Jumlah Vinyl --}}
                            </td>
                            <td class="text-end" id="jumlahVinylTampil">
                                {{-- Jumlah Vinyl Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="parketKayuActive">
                            <td colspan="3">Parket Kayu</td>
                            <td class="text-center">
                                <span id="parket_kayuPrint" style="display: none;"></span><input type="number"
                                    value="0"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="parket_kayu" id="parket_kayu" onFocus="startCalc();" onBlur="stopCalc();">
                            </td>
                            <td class="text-end">@currency($pekerjaanLantai->parket_kayu)</td>
                            <td class="text-end" id="jumlahParketKayu" hidden>
                                {{-- Jumlah Parket kayu --}}
                            </td>
                            <td class="text-end" id="jumlahParketKayuTampil">
                                {{-- Jumlah Parket Kayu Tampil --}}
                            </td>
                        </tr>
                        <tr style="display: none;" id="panggungActive">
                            <td colspan="3">Panggung</td>
                            <td class="text-center">
                                <span id="panggungPrint" style="display: none;"></span><input type="number"
                                    value="0"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="panggung" id="panggung" onFocus="startCalc();" onBlur="stopCalc();">
                            </td>
                            <td class="text-end">@currency($pekerjaanLantai->panggung)</td>
                            <td class="text-end" id="jumlahPanggung" hidden>
                                {{-- Jumlah Panggung --}}
                            </td>
                            <td class="text-end" id="jumlahPanggungTampil">
                                {{-- Jumlah Panggung Tampil --}}
                            </td>
                        </tr>
                        {{-- <tr style="display: none;" id="minibarActive">
                        <td></td>
                        <td colspan="2">Minibar</td>
                        <td class="text-center">
                            <span id="minibarPrint" style="display: none;"></span><input type="number" value="0"
                                style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                name="minibar" id="minibar" onFocus="startCalc();" onBlur="stopCalc();">
                        </td>
                        <td hidden id="hargaMinibar"></td>
                        <td class="text-end">@currency($pekerjaanLantai->minibar)</td>
                        <td class="text-end" id="jumlahMinibar" hidden>
                            Jumlah Minibar
                        </td>
                        <td class="text-end" id="jumlahMinibarTampil">
                            Jumlah Minibar Tampil
                        </td>
                    </tr> --}}
                        <tr>
                            <td colspan="6"></td>
                        </tr>
                        <tr style="display: none;" id="diffBassActive">
                            <th colspan="3" style="font-size: 16px; font-weight:bold;"><span id="printInputNamaTambahan"></span><input type="text" name="inputNamaTambahan"
                                id="inputNamaTambahan" placeholder="Nama Tamabahan"></th>
                            <td class="text-center"><span id="qtyDiffBassPrint" style="display: none;"></span><input
                                    type="number" value="0" style="border: none; width:40px; font-size: 12px;"
                                    onFocus="startCalc();" onBlur="stopCalc();" name="qtyDiffBass" id="qtyDiffBass">
                            </td>
                            <td class="text-end"><span id="hargaDiffBassPrint" style="display: none;"></span> <input
                                    type="number" class="text-end" value="0" id="hargaDiffBass"
                                    name="hargaDiffBass" onFocus="startCalc();" onBlur="stopCalc();"></td>
                            <td class="text-end" hidden id="jumlahDiffBass">0</td>
                            <td class="text-end" id="jumlahDiffBassTampil">0</td>
                        </tr>
                        <tr style="display: none;" id="spekDiffBassActive">
                            <th colspan="6"><big><b> Speksifikasi : </b></big><br><span id="spekDiffBassPrint"
                                    style="display: none;"></span>
                                <textarea id="spekDiffBass" type="text" style="width: 100%; height: 40px;"></textarea>
                            </th>
                        </tr>
                        <tr>
                            <div id="totalHargaBarang" hidden></div>
                            <th colspan="4" style="font-size: 12px; margin-top: -5px; margin-bottom: -5px;">Total
                                Harga Barang</th>
                            <th class="text-end" colspan="2"
                                style="font-size: 17px; margin-top: -5px; margin-bottom: -5px;"
                                id="totalHargaBarangTampil"></th>
                        </tr>
                        <tr class="text-center" id="bg_pemasangan"
                            style="font-size: 16px; background-color: rgb(245, 245, 140);">
                            <th colspan="6">Jasa Fabrikasi & Pemasangan</th>
                        </tr>
                        <tr>
                            <th colspan="3">Pemasangan Dinding (m2)</th>
                            <td class="text-center" id="luasDindingPemasangan">
                                {{-- Luas Dinding Pemasangan --}}
                            </td>
                            <td class="text-end">@currency($jasaPeredam->jasa_peredam_dinding)</td>
                            <td id="jumlahPemasanganDinding" hidden>
                                {{-- Jumlah Pemasangan Dinding --}}
                            </td>
                            <td class="text-end" id="jumlahPemasanganDindingTampil">
                                {{-- Jumlah Pemasangan Dinding Tampil --}}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">Pemasangan Plafon (m2)</th>
                            <td class="text-center" id="luasPlafonPemasangan">
                                {{-- Luas Plafon Pemasangan --}}</td>
                            <td class="text-end">@currency($jasaPeredam->jasa_peredam_plafon)</td>
                            <td id="jumlahPemasanganPlafon" hidden>
                                {{-- Jumlah Pemasangan Plafon --}}
                            </td>
                            <td class="text-end" id="jumlahPemasanganPlafonTampil">
                                {{-- Jumlah Pemasangan Plafon Tampil --}}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">Pemasangan Pintu (pcs)</th>
                            <td class="text-center" id="pemasanganPintu">
                                {{-- Qty Pintu Pemasangan --}}</td>
                            <td class="text-end">@currency($pintuPeredam->jasa_pasang_pintu)</td>
                            <td id="jumlahPemasanganPintu" hidden>
                                {{-- Jumlah Pemasangan Pintu --}}
                            </td>
                            <td class="text-end" id="jumlahPemasanganPintuTampil">
                                {{-- Jumlah Pemasangan Pintu Tampil --}}
                            </td>
                        </tr>
                        <tr id="jendelaActive">
                            <th colspan="3">Pemasangan Jendela (m2)</th>
                            <td class="text-center" id="pemasanganJendela">
                                {{-- Qty Jendela Pemasangan --}}0</td>
                            <td class="text-end">@currency($jendela->jasa_pasang_jendela)</td>
                            <td id="jumlahPemasanganJendela" hidden>
                                {{-- Jumlah Pemasangan Jendela --}}
                            </td>
                            <td class="text-end" id="jumlahPemasanganJendelaTampil">0
                                {{-- Jumlah Pemasangan Jendela Tampil --}}
                            </td>
                        </tr>
                        <tr>
                            <div id="totalHargaPemasangan" hidden></div>
                            <th colspan="4" style="font-size: 12px; margin-top: -5px; margin-bottom: -5px;">Total
                                Harga
                                Pemasangan</th>
                            <th class="text-end" colspan="2"
                                style="font-size: 17px; margin-top: -5px; margin-bottom: -5px;"
                                id="totalHargaPemasanganTampil"></th>
                        </tr>

                        <tr class="text-center" id="bg_listrik" style="background-color: rgb(245, 245, 140);">
                            <th colspan="6">
                                <div class="row g-0">
                                    <div class="col-md-1 col-1" style="margin-top: -10px; margin-bottom: -8px;">
                                        <small id="pilihText">pilih</small><br><input type="checkbox"
                                            style="width: 20px; height: 20px;" id="listrik" onclick="activeL()"
                                            checked>
                                    </div>
                                    <div class="col-md-10 col-10 text-center" style="font-size: 14px;">Listrik dan
                                        Penerangan</div>
                                </div>
                            </th>
                        </tr>

                        <tr id="listrikActive">
                            <th colspan="3"><small>A. Instalasi + Material Lampu <br><b>(Lampu LED Downlight
                                        Philips, <span style="color: red;">Tidak Termasuk Kabel
                                            Tufur</span>)</b></small></th>
                            <td hidden><?php
                            $dindingTiga;
                            if ($p_ls_gr->dindingTiga < 3) {
                                $dindingTiga = 1;
                            } elseif ($p_ls_gr->dindingTiga > 2.9 and $p_ls_gr->dindingTiga < 5.1) {
                                $dindingTiga = 2;
                            } elseif ($p_ls_gr->dindingTiga > 5 and $p_ls_gr->dindingTiga < 7.1) {
                                $dindingTiga = 3;
                            } elseif ($p_ls_gr->dindingTiga > 7 and $p_ls_gr->dindingTiga < 9.1) {
                                $dindingTiga = 4;
                            } elseif ($p_ls_gr->dindingTiga > 9 and $p_ls_gr->dindingTiga < 11.1) {
                                $dindingTiga = 5;
                            } elseif ($p_ls_gr->dindingTiga > 11 and $p_ls_gr->dindingTiga < 13.1) {
                                $dindingTiga = 6;
                            } elseif ($p_ls_gr->dindingTiga > 13 and $p_ls_gr->dindingTiga < 15.1) {
                                $dindingTiga = 7;
                            } elseif ($p_ls_gr->dindingTiga > 15 and $p_ls_gr->dindingTiga < 17.1) {
                                $dindingTiga = 8;
                            } elseif ($p_ls_gr->dindingTiga > 17 and $p_ls_gr->dindingTiga < 19.1) {
                                $dindingTiga = 9;
                            } elseif ($p_ls_gr->dindingTiga > 19 and $p_ls_gr->dindingTiga < 21.1) {
                                $dindingTiga = 10;
                            } else {
                                $dindingTiga = 11;
                            }
                            
                            $dindingDua;
                            if ($p_ls_gr->dindingDua < 3) {
                                $dindingDua = 1;
                            } elseif ($p_ls_gr->dindingDua > 2.9 and $p_ls_gr->dindingDua < 5.1) {
                                $dindingDua = 2;
                            } elseif ($p_ls_gr->dindingDua > 5 and $p_ls_gr->dindingDua < 7.1) {
                                $dindingDua = 3;
                            } elseif ($p_ls_gr->dindingDua > 7 and $p_ls_gr->dindingDua < 9.1) {
                                $dindingDua = 4;
                            } elseif ($p_ls_gr->dindingDua > 9 and $p_ls_gr->dindingDua < 11.1) {
                                $dindingDua = 5;
                            } elseif ($p_ls_gr->dindingDua > 11 and $p_ls_gr->dindingDua < 13.1) {
                                $dindingDua = 6;
                            } elseif ($p_ls_gr->dindingDua > 13 and $p_ls_gr->dindingDua < 15.1) {
                                $dindingDua = 7;
                            } elseif ($p_ls_gr->dindingDua > 15 and $p_ls_gr->dindingDua < 17.1) {
                                $dindingDua = 8;
                            } elseif ($p_ls_gr->dindingDua > 17 and $p_ls_gr->dindingDua < 19.1) {
                                $dindingDua = 9;
                            } elseif ($p_ls_gr->dindingDua > 19 and $p_ls_gr->dindingDua < 21.1) {
                                $dindingDua = 10;
                            } else {
                                $dindingDua = 11;
                            }
                            $jmlLampu = $dindingTiga * $dindingDua;
                            $jmlStopKontak = round(($dindingTiga * $dindingDua) / 2);
                            
                            ?></td>
                            <td class="text-center"><span id="lampuPrint" style="display: none;"></span><input
                                    type="number" value="<?php echo $jmlLampu; ?>"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="lampu" id="lampu" onFocus="startCalc();" onBlur="stopCalc();"> titik
                            </td>
                            <td class="text-end" id="hargaLampu">@currency($listrik->material_lampu + $listrik->jasa_instalasi_listrik)</td>
                            <td id="jumlahLampu" hidden>
                                {{-- jumlah lampu --}}
                            </td>
                            <td class="text-end" id="jumlahLampuTampil">
                                {{-- jumlah lampu tampil --}}
                            </td>
                        </tr>
                        <tr id="stopKontakActive">
                            <th colspan="3"><small>B. Instalasi + Material StopKontak <br> <b><span
                                            style="color: red;">(Tidak Termasuk Kabel Tufur)</span></b></small></th>
                            <td class="text-center"><span id="stopKontakPrint" style="display: none;"></span><input
                                    type="number" value="<?php echo $jmlStopKontak; ?>"
                                    style="border: none; width:40px; font-size: 12px; font-weight: bold;"
                                    name="stopKontak" id="stopKontak" onFocus="startCalc();" onBlur="stopCalc();">
                                titik
                            </td>
                            <td class="text-end" id="hargaLampu" hidden>{{ $listrik->material_stopkontak }} +
                                {{ $listrik->jasa_instalasi_listrik }}</td>
                            <td class="text-end">@currency($listrik->material_stopkontak + $listrik->jasa_instalasi_listrik)</td>
                            <td id="jumlahStopKontak" hidden>
                                {{-- jumlah stopkontak --}}
                            </td>
                            <td class="text-end" id="jumlahStopKontakTampil">
                                {{-- jumlah stopkontak tampil --}}
                            </td>
                        </tr>
                        <tr id="lainActive" style="background-color: rgb(245, 245, 140);">
                            <th colspan="6" class="text-center" style="font-size: 14px;">Lain-lain</th>
                        </tr>
                        <tr id="mobilisasiActive">
                            <th colspan="4">Mobilisasi & Demobilisasi</th>
                            <td colspan="2" class="text-end"><span id="mobilisasiPrint"
                                    style="display: none;"></span><input type="number" value="0"
                                    name="mobilisasi" id="mobilisasi" style="border: none;" onFocus="startCalc();"
                                    onBlur="stopCalc();">
                            </td>
                        </tr>
                        <tr id="dropMaterialActive">
                            <th colspan="4">Drop Material</th>
                            <td colspan="2" class="text-end"><span id="dropMaterialPrint"
                                    style="display: none;"></span><input type="number" value="0"
                                    name="dropMaterial" id="dropMaterial" style="border: none;"
                                    onFocus="startCalc();" onBlur="stopCalc();"></td>
                        </tr>
                        <tr id="sampahActive">
                            <th colspan="4">
                                <div class="row">
                                    <div class="col-md-1 col-1" id="sampahCheckTampil"><input type="checkbox"
                                            style="width: 20px; height: 20px;" id="sampahCheck" onclick="Sampah()"
                                            onFocus="startCalc();" onBlur="stopCalc();">
                                    </div>
                                    <div class="col">Sampah</div>
                                </div>
                            </th>
                            <td colspan="2" class="text-end" id="sampahByOwner">By Owner</td>
                            <td colspan="2" class="text-end" style="display: none;" id="sampahTampil"><span
                                    id="sampahPrint" style="display: none;"></span><input type="number"
                                    value="0" name="sampah" id="sampah" onFocus="startCalc();"
                                    onBlur="stopCalc();" style="border: none;"></td>
                        </tr>
                        <tr style="display: none;" id="transportActive">
                            <th colspan="4">Transportasi</th>
                            <td colspan="2" class="text-end"><span id="transportPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="transport" id="transport" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr style="display: none;" id="messActive">
                            <th colspan="4">Mess Tukang</th>
                            <td colspan="2" class="text-end"><span id="messPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="mess" id="mess" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr style="display: none;" id="tiketActive">
                            <th colspan="4">Tiket Pesawat</th>
                            <td colspan="2" class="text-end"><span id="tiketPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="tiket" id="tiket" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr style="display: none;" id="acActive">
                            <th colspan="4">Ac</th>
                            <td colspan="2" class="text-end"><span id="acPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="ac" id="ac" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr style="display: none;" id="bongkarActive">
                            <th colspan="4">Bongkar</th>
                            <td colspan="2" class="text-end"><span id="bongkarPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="bongkar" id="bongkar" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr style="display: none;" id="sipilActive">
                            <th colspan="4">Pekerjaan Sipil</th>
                            <td colspan="2" class="text-end"><span id="sipilPrint"
                                    style="display: none;"></span><input style="border: none;" type="number"
                                    value="0" name="sipil" id="sipil" onFocus="startCalc();"
                                    onBlur="stopCalc();"></td>
                        </tr>
                        <tr id="totalHargaProyekActive">
                            <div id="totalHargaProyek" hidden></div>
                            <th colspan="4" style="font-size: 12px; margin-top: -5px; margin-bottom: -5px;">Total
                                Harga Proyek</th>
                            <th class="text-end" colspan="2"
                                style="font-size: 17px; margin-top: -5px; margin-bottom: -5px;"
                                id="totalHargaProyekTampil"></th>
                        </tr>
                        <tr id="ketentuanActive">
                            <td colspan="6"><big><b class="text-danger fs-5">Ketentuan</b></big> (*Wajib dibaca dan
                                dipahami) <br><br> <span><b>-</b> Lingkup kerja hanya
                                    yang
                                    ditawarkan dengan
                                    qty yang tertera dipenawaran</span> <br>
                                <span><b>-</b> Penawaran berlaku 2 minggu per tanggal tertera dipenawaran</span> <br>
                                <span id="ketAll"><b>- Belum Termasuk <span id="ketPekerjaanLantai"
                                            style="display: none;">Pekerjaan
                                            Lantai, </span><span id="ketBongkar">Bongkar-bongkar, </span><span
                                            id="ketAc">AC, </span><span id="ketSipil">Pekerjaan
                                            Sipil</span></b><br></span>
                                <span id="ket_pemasangan" style="display: none;"><b>-</b> Belum Termasuk Pemasangan
                                    dan
                                    Fabrikasi<br></span>
                                <span id="ket_listrik" style="display: none;"><b>-</b> Belum Termasuk Instalasi Lampu
                                    &
                                    StopKontak<br></span>
                                <span id="ket_sampah"><b>-</b> Sampah By Owner<br></span>
                                <span id="ket_lain" style="display: none;"><b>-</b> Mobilisasi, Drop Material,
                                    Sampah,
                                    Transportasi, Mess
                                    Tukang, Tiket Pesawat, Ditanggung Owner dengan harga yang sudah di
                                    sepakati<br></span>
                                <b>- Belum Termasuk Perangkat Musik, Perangkat Elektronik, Lampu RGB <br></b>
                                <br>

                                <big><b>Pembayaran</b></big><br><br>
                                <div class="row">
                                    <div class="col-md-7 col-7">
                                        <big>Termin 1 (DP) (50%)</big>
                                    </div>
                                    <div class="col-md-1 col-1">
                                        <big>:</big>
                                    </div>
                                    <div class="col-md-1 col-1" id="pembayaranDp">
                                        Rp.0
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-7">
                                        <big>Termin 2 Pabrikasi (25%)</big>
                                    </div>
                                    <div class="col-md-1 col-1">
                                        <big>:</big>
                                    </div>
                                    <div class="col-md-1 col-1" id="terminSatu">
                                        Rp.0
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-7">
                                        <big>Termin 3 50% Pekerjaan Terpasang (20%)</big>
                                    </div>
                                    <div class="col-md-1 col-1">
                                        <big>:</big>
                                    </div>
                                    <div class="col-md-1 col-1" id="terminDua">
                                        Rp.0
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-7">
                                        <big>Termin 4 koreksi pekerjaan (kedua belah pihak) & Serah terima
                                            pekerjaan (5%)</big>
                                    </div>
                                    <div class="col-md-1 col-1">
                                        <big>:</big>
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
                                        <span>:</span>
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
                                        <span>:</span>
                                    </div>
                                    <div class="col-md-1 col-1" id="">
                                        Rp.@currency($jasaPeredam->survei_jabodetabek)
                                    </div>
                                </div>
                                <span style="font-size: 12px;">(biaya survei akan dikembalikan 100% jika proyek
                                    tersebut
                                    DEAL)</span><br><br>
                                <center><b>Diluar JABODETABEK Biaya Survei, Mobilisasi & Demobilisasi menyesuaikan
                                        lokasi
                                        proyek...</b></center>
                            </td>
                        </tr>
                    </form>
                </table>
            </center>

            <center><button type="submit" id="btnDownload" onclick="Show(); window.print();"
                    class="btn btn-labeled mx-4 mb-5"
                    style="background-color: rgb(112, 38, 29); color:white; width:80%">
                    <span class="btn-label"><i class="bi bi-file-earmark-arrow-down-fill"></i></span><small>Download
                        Estimasi Penawaran</small></button></center>
            <div class="p-2 mb-5 border border-dark" id="materialPenawaran" style="width: 30%;">
                <big><b>Material Penawaran</b></big><br><br>
                <div class="row mt-2 mb-2">
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox" checked
                            name="pintuPeredamCheck" id="pintuPeredamCheck" onclick="PintuPeredamCheck()">
                        <big><b>Pintu Peredam</b></big>
                    </div>
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox" checked
                            name="jendelaPeredamCheck" id="jendelaPeredamCheck" onclick="JendelaPeredamCheck()">
                        <big><b>Jendela Peredam</b></big>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox" checked
                            name="pekerjaanLantaiCheck" id="pekerjaanLantaiCheck"
                            onclick="PekerjaanLantaiCheck(); KetAll();">
                        <big><b>Pekerjaan Lantai</b></big>
                    </div>
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox"
                            name="diffBassCheck" id="diffBassCheck" onclick="DiffBassCheck()"> <big><b>Diffuser &
                                Basstrap</b></big>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox" name="acCheck"
                            id="acCheck" onclick="AcCheck(); KetAll();"> <big><b>AC</b></big>
                    </div>
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox"
                            name="bongkarCheck" id="bongkarCheck" onclick="BongkarCheck(); KetAll();">
                        <big><b>Bongkar</b></big>
                    </div>
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col"><input style="width: 15px; height: 15px;" type="checkbox" name="sipilCheck"
                            id="sipilCheck" onclick="SipilCheck(); KetAll();"> <big><b>Pekerjaan Sipil</b></big>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var hargaPintu = document.getElementById('hargaPintu');
    var tebal4cm = document.getElementById('tebal4cm');
    var tebal7cm = document.getElementById('tebal7cm');
    var single = document.getElementById('single');
    var double = document.getElementById('double');
    var kkSingle = document.getElementById('kkSingle');
    var kkDouble = document.getElementById('kkDouble');
    var jumlahPintu = document.getElementById('jumlahPintu');
    var jumlahPintuTampil = document.getElementById('jumlahPintuTampil');
    var pintuEcActive = document.getElementById('pintuEcActive');
    var pintuTcActive = document.getElementById('pintuTcActive');
    var jumlahPeredamDinding = document.getElementById('jumlahPeredamDinding');
    var jumlahPeredamDindingTampil = document.getElementById('jumlahPeredamDindingTampil');
    var jumlahPeredamPlafon = document.getElementById('jumlahPeredamPlafon');
    var jumlahPeredamPlafonTampil = document.getElementById('jumlahPeredamPlafonTampil');
    var jumlahKarpetBuanna = document.getElementById('jumlahKarpetBuanna');
    var jumlahKarpetBuannaTampil = document.getElementById('jumlahKarpetBuannaTampil');
    var jumlahKarpetKantor = document.getElementById('jumlahKarpetKantor');
    var jumlahKarpetKantorTampil = document.getElementById('jumlahKarpetKantorTampil');
    var jumlahVinyl = document.getElementById('jumlahVinyl');
    var jumlahVinylTampil = document.getElementById('jumlahVinylTampil');
    var jumlahParketKayu = document.getElementById('jumlahParketKayu');
    var jumlahParketKayuTampil = document.getElementById('jumlahParketKayuTampil');
    var jumlahPanggung = document.getElementById('jumlahPanggung');
    var jumlahPanggungTampil = document.getElementById('jumlahPanggungTampil');
    var karpet_buanna_check = document.getElementById('karpet_buanna_check');
    var karpetBuannaActive = document.getElementById('karpetBuannaActive');
    var karpet_kantor_check = document.getElementById('karpet_kantor_check');
    var karpetKantorActive = document.getElementById('karpetKantorActive');
    var vinyl_check = document.getElementById('vinyl_check');
    var vinylActive = document.getElementById('vinylActive');
    var parket_kayu_check = document.getElementById('parket_kayu_check');
    var parketKayuActive = document.getElementById('parketKayuActive');
    var panggung_check = document.getElementById('panggung_check');
    var panggungActive = document.getElementById('panggungActive');
    var jumlahPemasanganDinding = document.getElementById('jumlahPemasanganDinding');
    var jumlahPemasanganPlafon = document.getElementById('jumlahPemasanganPlafon');
    var jumlahPemasanganPintu = document.getElementById('jumlahPemasanganPintu');
    var jumlahPemasanganJendela = document.getElementById('jumlahPemasanganJendela');
    var l = document.getElementById('listrik');
    var lActive = document.getElementById('listrikActive');
    var skActive = document.getElementById('stopKontakActive');
    var jumlahLampu = document.getElementById('jumlahLampu');
    var jumlahLampuTampil = document.getElementById('jumlahLampuTampil');
    var jumlahStopKontak = document.getElementById('jumlahStopKontak');
    var jumlahStopKontakTampil = document.getElementById('jumlahStopKontakTampil');
    var totalHargaBarang = document.getElementById('totalHargaBarang');
    var totalHargaBarangTampil = document.getElementById('totalHargaBarangTampil');
    var totalHargaPemasangan = document.getElementById('totalHargaPemasangan');
    var totalHargaPemasanganTampil = document.getElementById('totalHargaPemasanganTampil');
    var totalHargaProyek = document.getElementById('totalHargaProyek');
    var totalHargaProyekTampil = document.getElementById('totalHargaProyekTampil');
    var jabodetabek = document.getElementById('jabodetabek');
    var luarJabodetabek = document.getElementById('luarJabodetabek');
    var mobilisasiActive = document.getElementById('mobilisasiActive');
    var dropMaterialActive = document.getElementById('dropMaterialActive');
    var sampahActive = document.getElementById('sampahActive');
    var sampahTampil = document.getElementById('sampahTampil');
    var sampahCheck = document.getElementById('sampahCheck');
    var sampahCheckTampil = document.getElementById('sampahCheckTampil');
    var sampahByOwner = document.getElementById('sampahByOwner');
    var transportActive = document.getElementById('transportActive');
    var messActive = document.getElementById('messActive');
    var tiketActive = document.getElementById('tiketActive');
    var pembayaranDp = document.getElementById('pembayaranDp');
    var terminSatu = document.getElementById('terminSatu');
    var terminDua = document.getElementById('terminDua');
    var terminTiga = document.getElementById('terminTiga');
    var lamaPengerjaan = document.getElementById('lamaPengerjaan');
    var ket_sampah = document.getElementById('ket_sampah');
    var ket_lain = document.getElementById('ket_lain');
    var ket_listrik = document.getElementById('ket_listrik');

    var jumlahPintuDua = document.getElementById('jumlahPintuDua');
    var jumlahPintuDuaTampil = document.getElementById('jumlahPintuDuaTampil');

    var jumlahPintuTiga = document.getElementById('jumlahPintuTiga');
    var jumlahPintuTigaTampil = document.getElementById('jumlahPintuTigaTampil');

    var jumlahJendela = document.getElementById('jumlahJendela');
    var jumlahJendelaTampil = document.getElementById('jumlahJendelaTampil');

    var jumlahJendelaDua = document.getElementById('jumlahJendelaDua');
    var jumlahJendelaDuaTampil = document.getElementById('jumlahJendelaDuaTampil');

    var jumlahJendelaTiga = document.getElementById('jumlahJendelaTiga');
    var jumlahJendelaTigaTampil = document.getElementById('jumlahJendelaTigaTampil');

    var jumlahDiffBass = document.getElementById('jumlahDiffBass');
    var jumlahDiffBassTampil = document.getElementById('jumlahDiffBassTampil');

    const formatRupiah = (money) => {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(money);
    }

    function Jabodetabek() {
        if (jabodetabek.checked) {
            transportActive.style.display = "none";
            messActive.style.display = "none";
            tiketActive.style.display = "none";
            mobilisasiTampil.innerText = formatRupiah(parseInt(mobilisasi));
            dropMaterialTampil.innerText = formatRupiah(parseInt(dropMaterial));
            // ket_lain.style.display = "none";
        }
    }

    function LuarJabodetabek() {
        if (luarJabodetabek.checked == true) {
            transportActive.style.display = "";
            messActive.style.display = "";
            tiketActive.style.display = "";
            mobilisasiTampil.innerText = "";
            dropMaterialTampil.innerText = "";
            // ket_lain.style.display = "";
            // ket_sampah.style.display = "none";
        }
    }

    function startCalc() {

        interval = setInterval("calc()", 1);
    }

    function calc() {

        dindingSatu = document.perhitungan.dindingSatu.value;
        dindingDua = document.perhitungan.dindingDua.value;
        dindingTiga = document.perhitungan.dindingTiga.value;
        dindingEmpat = document.perhitungan.dindingEmpat.value;
        dindingLima = document.perhitungan.dindingLima.value;
        tinggi = document.perhitungan.tinggi.value;
        pintu = document.perhitungan.pintu.value;
        pintuDua = document.perhitungan.pintuDua.value;
        hargaPintuDua = document.perhitungan.hargaPintuDua.value;
        pintuTiga = document.perhitungan.pintuTiga.value;
        hargaPintuTiga = document.perhitungan.hargaPintuTiga.value;
        panjangPintuEc = document.perhitungan.panjangPintuEc.value;
        lebarPintuEc = document.perhitungan.lebarPintuEc.value;
        panjangPintuTc = document.perhitungan.panjangPintuTc.value;
        lebarPintuTc = document.perhitungan.lebarPintuTc.value;
        lampu = document.perhitungan.lampu.value;
        stopKontak = document.perhitungan.stopKontak.value;
        karpet_buanna = document.perhitungan.karpet_buanna.value;
        karpet_kantor = document.perhitungan.karpet_kantor.value;
        vinyl = document.perhitungan.vinyl.value;
        parket_kayu = document.perhitungan.parket_kayu.value;
        panggung = document.perhitungan.panggung.value;
        mobilisasi = document.perhitungan.mobilisasi.value;
        dropMaterial = document.perhitungan.dropMaterial.value;
        sampah = document.perhitungan.sampah.value;
        transport = document.perhitungan.transport.value;
        mess = document.perhitungan.mess.value;
        tiket = document.perhitungan.tiket.value;
        ac = document.perhitungan.ac.value;
        bongkar = document.perhitungan.bongkar.value;
        sipil = document.perhitungan.sipil.value;
        panjangJendela = document.perhitungan.panjangJendela.value;
        lebarJendela = document.perhitungan.lebarJendela.value;
        panjangJendelaDua = document.perhitungan.panjangJendelaDua.value;
        lebarJendelaDua = document.perhitungan.lebarJendelaDua.value;
        panjangJendelaTiga = document.perhitungan.panjangJendelaTiga.value;
        lebarJendelaTiga = document.perhitungan.lebarJendelaTiga.value;
        qtyDiffBass = document.perhitungan.qtyDiffBass.value;
        hargaDiffBass = document.perhitungan.hargaDiffBass.value;

        //Peredam Dinding
        document.getElementById('luasDinding').innerText = parseFloat((parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
            parseFloat(tinggi)).toFixed(2);
        document.getElementById('jumlahPeredamDinding').innerText = (parseFloat((parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
            parseFloat(tinggi)).toFixed(2)) * {{ $gr->gypsum_standard_gr }};
        document.getElementById('jumlahPeredamDindingTampil').innerText = Intl.NumberFormat().format((parseFloat((
                parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                    dindingEmpat) + parseFloat(dindingLima)) *
            parseFloat(tinggi)).toFixed(2)) * {{ $gr->gypsum_standard_gr }});

        //Peredam Plafon
        document.getElementById('luasPlafon').innerText = parseFloat(parseFloat(dindingSatu) + parseFloat(dindingDua) +
            parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)).toFixed(
            2);
        document.getElementById('jumlahPeredamPlafon').innerText = (parseFloat(parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
            .toFixed(2)) * {{ $gr->gypsum_standard_gr }};
        document.getElementById('jumlahPeredamPlafonTampil').innerText = Intl.NumberFormat().format((parseFloat(
            parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                dindingEmpat) + parseFloat(dindingLima)).toFixed(
            2)) * {{ $gr->gypsum_standard_gr }});

        //Pintu Peredam
        //Tebal 4 cm
        if (tebal4cm.checked == true && tebal7cm.checked == false && single.checked == true && double.checked ==
            false && kkSingle.checked == false && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format(parseInt(panjangPintuEc) * parseInt(lebarPintuEc) *
                {{ $pintuPeredam->tebal_4cm }});
            jumlahPintu.innerText = (parseInt(panjangPintuEc) * parseInt(lebarPintuEc) *
                {{ $pintuPeredam->tebal_4cm }}) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format((parseInt(panjangPintuEc) * parseInt(
                    lebarPintuEc) *
                {{ $pintuPeredam->tebal_4cm }}) * parseInt(pintu));
            pintuEcActive.style.display = "";
            pintuTcActive.style.display = "none";
        } else if (tebal4cm.checked == true && tebal7cm.checked == false && single.checked == false && double.checked ==
            true && kkSingle.checked == false && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2));
            jumlahPintu.innerText = ((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuEc) * parseInt(
                    lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2)) * parseInt(pintu));
            pintuEcActive.style.display = "";
            pintuTcActive.style.display = "none";
        } else if (tebal4cm.checked == true && tebal7cm.checked == false && single.checked == false && double.checked ==
            false && kkSingle.checked == true && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2));
            jumlahPintu.innerText = ((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuEc) * parseInt(
                    lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 2)) * parseInt(pintu));
            pintuEcActive.style.display = "";
            pintuTcActive.style.display = "none";
        } else if (tebal4cm.checked == true && tebal7cm.checked == false && single.checked == false && double.checked ==
            false && kkSingle.checked == false && kkDouble.checked == true) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 4));
            jumlahPintu.innerText = ((parseInt(panjangPintuEc) * parseInt(lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 4)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuEc) * parseInt(
                    lebarPintuEc)) *
                ({{ $pintuPeredam->tebal_4cm }} * 4)) * parseInt(pintu));
            pintuEcActive.style.display = "";
            pintuTcActive.style.display = "none";
        }

        //Tebal 7 cm
        else if (tebal4cm.checked == false && tebal7cm.checked == true && single.checked == true && double.checked ==
            false && kkSingle.checked == false && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format(parseInt(panjangPintuTc) * parseInt(lebarPintuTc) *
                {{ $pintuPeredam->tebal_7cm }});
            jumlahPintu.innerText = (parseInt(panjangPintuTc) * parseInt(lebarPintuTc) *
                {{ $pintuPeredam->tebal_7cm }}) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format((parseInt(panjangPintuTc) * parseInt(
                    lebarPintuTc) *
                {{ $pintuPeredam->tebal_7cm }}) * parseInt(pintu));
            pintuEcActive.style.display = "none";
            pintuTcActive.style.display = "";
        } else if (tebal4cm.checked == false && tebal7cm.checked == true && single.checked == false && double.checked ==
            true && kkSingle.checked == false && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2));
            jumlahPintu.innerText = ((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuTc) * parseInt(
                    lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2)) * parseInt(pintu));
            pintuEcActive.style.display = "none";
            pintuTcActive.style.display = "";
        } else if (tebal4cm.checked == false && tebal7cm.checked == true && single.checked == false && double.checked ==
            false && kkSingle.checked == true && kkDouble.checked == false) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2));
            jumlahPintu.innerText = ((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuTc) * parseInt(
                    lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 2)) * parseInt(pintu));
            pintuEcActive.style.display = "none";
            pintuTcActive.style.display = "";
        } else if (tebal4cm.checked == false && tebal7cm.checked == true && single.checked == false && double.checked ==
            false && kkSingle.checked == false && kkDouble.checked == true) {
            hargaPintu.innerText = Intl.NumberFormat().format((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 4));
            jumlahPintu.innerText = ((parseInt(panjangPintuTc) * parseInt(lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 4)) * parseInt(pintu);
            jumlahPintuTampil.innerText = Intl.NumberFormat().format(((parseInt(panjangPintuTc) * parseInt(
                    lebarPintuTc)) *
                ({{ $pintuPeredam->tebal_7cm }} * 4)) * parseInt(pintu));
            pintuEcActive.style.display = "none";
            pintuTcActive.style.display = "";
        }

        //Pintu Dua
        jumlahPintuDua.innerText = parseInt(pintuDua) * parseInt(hargaPintuDua);
        jumlahPintuDuaTampil.innerText = Intl.NumberFormat().format(jumlahPintuDua.innerText);

        //Pintu Tiga
        jumlahPintuTiga.innerText = parseInt(pintuTiga) * parseInt(hargaPintuTiga);
        jumlahPintuTigaTampil.innerText = Intl.NumberFormat().format(jumlahPintuTiga.innerText);

        //Jendela
        document.getElementById('qtyJendela').innerText = parseFloat((parseInt(panjangJendela) * parseInt(
            lebarJendela)) / 10000).toFixed(1);
        jumlahJendela.innerText = parseFloat((parseInt(panjangJendela) * parseInt(lebarJendela)) / 10000).toFixed(1) *
            {{ $jendela->harga_jendela }};
        jumlahJendelaTampil.innerText = Intl.NumberFormat().format(jumlahJendela.innerText);

        //Jendela Dua
        document.getElementById('qtyJendelaDua').innerText = parseFloat((parseInt(panjangJendelaDua) * parseInt(
            lebarJendelaDua)) / 10000).toFixed(1);
        jumlahJendelaDua.innerText = parseFloat((parseInt(panjangJendelaDua) * parseInt(lebarJendelaDua)) / 10000)
            .toFixed(1) * {{ $jendela->harga_jendela }};
        jumlahJendelaDuaTampil.innerText = Intl.NumberFormat().format(jumlahJendelaDua.innerText);

        //Jendela Tiga
        document.getElementById('qtyJendelaTiga').innerText = parseFloat((parseInt(panjangJendelaTiga) * parseInt(
            lebarJendelaTiga)) / 10000).toFixed(1);
        jumlahJendelaTiga.innerText = parseFloat((parseInt(panjangJendelaTiga) * parseInt(lebarJendelaTiga)) / 10000)
            .toFixed(1) * {{ $jendela->harga_jendela }};
        jumlahJendelaTigaTampil.innerText = Intl.NumberFormat().format(jumlahJendelaTiga.innerText);


        if (karpet_buanna_check.checked == true) {
            karpetBuannaActive.style.display = "";
        } else {
            karpetBuannaActive.style.display = "none";
        }

        if (karpet_kantor_check.checked == true) {
            karpetKantorActive.style.display = "";
        } else {
            karpetKantorActive.style.display = "none";
        }

        if (vinyl_check.checked == true) {
            vinylActive.style.display = "";
        } else {
            vinylActive.style.display = "none";
        }

        if (parket_kayu_check.checked == true) {
            parketKayuActive.style.display = "";
        } else {
            parketKayuActive.style.display = "none";
        }

        if (panggung_check.checked == true) {
            panggungActive.style.display = "";
        } else {
            panggungActive.style.display = "none";
        }

        //Pekerjaan Lantai
        //Karpet Buanna
        jumlahKarpetBuanna.innerText = parseInt(karpet_buanna) * {{ $pekerjaanLantai->karpet_buanna }};
        jumlahKarpetBuannaTampil.innerText = Intl.NumberFormat().format(jumlahKarpetBuanna.innerText);

        //Karpet Kantor
        jumlahKarpetKantor.innerText = parseInt(karpet_kantor) * {{ $pekerjaanLantai->karpet_kantor }};
        jumlahKarpetKantorTampil.innerText = Intl.NumberFormat().format(jumlahKarpetKantor.innerText);

        //Vinyl
        jumlahVinyl.innerText = parseInt(vinyl) * {{ $pekerjaanLantai->vinyl }};
        jumlahVinylTampil.innerText = Intl.NumberFormat().format(jumlahVinyl.innerText);

        //Parket Kayu
        jumlahParketKayu.innerText = parseInt(parket_kayu) * {{ $pekerjaanLantai->parket_kayu }};
        jumlahParketKayuTampil.innerText = Intl.NumberFormat().format(jumlahParketKayu.innerText);

        //Panggung
        jumlahPanggung.innerText = parseInt(panggung) * {{ $pekerjaanLantai->panggung }};
        jumlahPanggungTampil.innerText = Intl.NumberFormat().format(jumlahPanggung.innerText);

        //Diffuser & Basstrap
        jumlahDiffBass.innerText = parseInt(qtyDiffBass) * parseInt(hargaDiffBass);
        jumlahDiffBassTampil.innerText = Intl.NumberFormat().format(jumlahDiffBass.innerText);

        //Total Harga Barang
        totalHargaBarang.innerText = parseInt(jumlahPeredamDinding.innerText) + parseInt(jumlahPeredamPlafon
                .innerText) + parseInt(jumlahPintu.innerText) + parseInt(jumlahPintuDua.innerText) + parseInt(
                jumlahPintuTiga.innerText) + parseInt(jumlahJendela.innerText) + parseInt(jumlahJendelaDua.innerText) +
            parseInt(jumlahJendelaTiga.innerText) + parseInt(jumlahKarpetBuanna.innerText) + parseInt(
                jumlahKarpetKantor.innerText) + parseInt(jumlahVinyl.innerText) + parseInt(jumlahParketKayu.innerText) +
            parseInt(jumlahPanggung.innerText) + parseInt(jumlahDiffBass.innerText);
        totalHargaBarangTampil.innerText = formatRupiah(parseInt(totalHargaBarang.innerText));

        //Pemasangan dinding
        document.getElementById('luasDindingPemasangan').innerText = parseFloat((parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
            parseFloat(tinggi)).toFixed(2);
        document.getElementById('jumlahPemasanganDinding').innerText = (parseFloat((parseFloat(dindingSatu) +
                parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(
                    dindingLima)) *
            parseFloat(tinggi)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_dinding }};
        document.getElementById('jumlahPemasanganDindingTampil').innerText = Intl.NumberFormat().format((parseFloat((
                parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                    dindingEmpat) + parseFloat(dindingLima)) *
            parseFloat(tinggi)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_dinding }});

        //Pemasangan Plafon
        document.getElementById('luasPlafonPemasangan').innerText = parseFloat(parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
            .toFixed(2);
        document.getElementById('jumlahPemasanganPlafon').innerText = (parseFloat(parseFloat(dindingSatu) + parseFloat(
                dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
            .toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }};
        document.getElementById('jumlahPemasanganPlafonTampil').innerText = Intl.NumberFormat().format((parseFloat(
            parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                dindingEmpat) + parseFloat(dindingLima)).toFixed(
            2)) * {{ $jasaPeredam->jasa_peredam_plafon }});

        //Pemasangan Pintu
        if (single.checked == true && double.checked == false && kkSingle.checked == false && kkDouble.checked ==
            false) {
            document.getElementById('pemasanganPintu').innerText = (parseInt(pintu) + parseInt(pintuDua) + parseInt(
                pintuTiga));
            document.getElementById('jumlahPemasanganPintu').innerText = (parseInt(pintu) + parseInt(pintuDua) +
                    parseInt(pintuTiga)) *
                {{ $pintuPeredam->jasa_pasang_pintu }};
            document.getElementById('jumlahPemasanganPintuTampil').innerText = Intl.NumberFormat().format((parseInt(
                    pintu) + parseInt(pintuDua) + parseInt(pintuTiga)) *
                {{ $pintuPeredam->jasa_pasang_pintu }});
        } else if (single.checked == false && double.checked == true && kkSingle.checked == false && kkDouble.checked ==
            false) {
            document.getElementById('pemasanganPintu').innerText = (parseInt(pintu) + parseInt(pintuDua) + parseInt(
                pintuTiga)) * 2;
            document.getElementById('jumlahPemasanganPintu').innerText = ((parseInt(pintu) + parseInt(pintuDua) +
                    parseInt(pintuTiga)) * 2) *
                {{ $pintuPeredam->jasa_pasang_pintu }};
            document.getElementById('jumlahPemasanganPintuTampil').innerText = Intl.NumberFormat().format(((parseInt(
                    pintu) + parseInt(pintuDua) + parseInt(pintuTiga)) * 2) *
                {{ $pintuPeredam->jasa_pasang_pintu }});
        } else if (single.checked == false && double.checked == false && kkSingle.checked == true && kkDouble.checked ==
            false) {
            document.getElementById('pemasanganPintu').innerText = (parseInt(pintu) + parseInt(pintuDua) + parseInt(
                pintuTiga)) * 2;
            document.getElementById('jumlahPemasanganPintu').innerText = ((parseInt(pintu) + parseInt(pintuDua) +
                    parseInt(pintuTiga)) * 2) *
                {{ $pintuPeredam->jasa_pasang_pintu }};
            document.getElementById('jumlahPemasanganPintuTampil').innerText = Intl.NumberFormat().format(((parseInt(
                    pintu) + parseInt(pintuDua) + parseInt(pintuTiga)) * 2) *
                {{ $pintuPeredam->jasa_pasang_pintu }});
        } else if (single.checked == false && double.checked == false && kkSingle.checked == false && kkDouble
            .checked ==
            true) {
            document.getElementById('pemasanganPintu').innerText = (parseInt(pintu) + parseInt(pintuDua) + parseInt(
                pintuTiga)) * 4;
            document.getElementById('jumlahPemasanganPintu').innerText = ((parseInt(pintu) + parseInt(pintuDua) +
                    parseInt(pintuTiga)) * 4) *
                {{ $pintuPeredam->jasa_pasang_pintu }};
            document.getElementById('jumlahPemasanganPintuTampil').innerText = Intl.NumberFormat().format(((parseInt(
                    pintu) + parseInt(pintuDua) + parseInt(pintuTiga)) * 4) *
                {{ $pintuPeredam->jasa_pasang_pintu }});
        }

        document.getElementById('pemasanganJendela').innerText = parseFloat(parseFloat((parseInt(panjangJendela) *
            parseInt(
                lebarJendela)) / 10000) + parseFloat((parseInt(panjangJendelaDua) * parseInt(
            lebarJendelaDua)) / 10000) + parseFloat((parseInt(panjangJendelaTiga) * parseInt(
            lebarJendelaTiga)) / 10000)).toFixed(1);
        document.getElementById('jumlahPemasanganJendela').innerText = parseFloat(parseFloat((parseInt(panjangJendela) *
            parseInt(
                lebarJendela)) / 10000) + parseFloat((parseInt(panjangJendelaDua) * parseInt(
            lebarJendelaDua)) / 10000) + parseFloat((parseInt(panjangJendelaTiga) * parseInt(
            lebarJendelaTiga)) / 10000)).toFixed(1) * {{ $jendela->jasa_pasang_jendela }};
        document.getElementById('jumlahPemasanganJendelaTampil').innerText = Intl.NumberFormat().format(parseFloat(
            parseFloat((parseInt(panjangJendela) * parseInt(
                lebarJendela)) / 10000) + parseFloat((parseInt(panjangJendelaDua) * parseInt(
                lebarJendelaDua)) / 10000) + parseFloat((parseInt(panjangJendelaTiga) * parseInt(
                lebarJendelaTiga)) / 10000)).toFixed(1) * {{ $jendela->jasa_pasang_jendela }});

        //Total Harga Pemasangan
        totalHargaPemasangan.innerText = parseInt(jumlahPemasanganDinding.innerText) + parseInt(jumlahPemasanganPlafon
            .innerText) + parseInt(jumlahPemasanganPintu.innerText) + parseInt(jumlahPemasanganJendela.innerText);
        totalHargaPemasanganTampil.innerText = formatRupiah(parseInt(totalHargaPemasangan.innerText));

        //listrik & penerangan
        //lampu
        jumlahLampu.innerText = parseInt(lampu) * ({{ $listrik->material_lampu }} +
            {{ $listrik->jasa_instalasi_listrik }});
        jumlahLampuTampil.innerText = Intl.NumberFormat().format(jumlahLampu.innerText);
        //Stop Kontak
        jumlahStopKontak.innerText = parseInt(stopKontak) * ({{ $listrik->material_stopkontak }} +
            {{ $listrik->jasa_instalasi_listrik }});
        jumlahStopKontakTampil.innerText = Intl.NumberFormat().format(jumlahStopKontak.innerText);

        // Total Harga Proyek
        totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan.innerText) +
            parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) + parseInt(mobilisasi) + parseInt(
                dropMaterial) + parseInt(sampah) + parseInt(transport) + parseInt(mess) + parseInt(tiket) + parseInt(
                ac) + parseInt(bongkar) + parseInt(sipil);
        totalHargaProyekTampil.innerText = formatRupiah(totalHargaProyek.innerText);

        //Pembayaran
        pembayaranDp.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.5));
        terminSatu.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.25));
        terminDua.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.2));
        terminTiga.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.05));
        lamaPengerjaan.innerText = Math.round(parseInt(totalHargaProyek.innerText) * 0.25 / 1000000) + ' Hari Kerja';
    }

    //Awal (Muncul Pertama Kali)
    dindingSatu = document.perhitungan.dindingSatu.value;
    dindingDua = document.perhitungan.dindingDua.value;
    dindingTiga = document.perhitungan.dindingTiga.value;
    dindingEmpat = document.perhitungan.dindingEmpat.value;
    dindingLima = document.perhitungan.dindingLima.value;
    tinggi = document.perhitungan.tinggi.value;
    pintu = document.perhitungan.pintu.value;
    panjangPintuEc = document.perhitungan.panjangPintuEc.value;
    lebarPintuEc = document.perhitungan.lebarPintuEc.value;
    panjangPintuTc = document.perhitungan.panjangPintuTc.value;
    lebarPintuTc = document.perhitungan.lebarPintuTc.value;
    lampu = document.perhitungan.lampu.value;
    stopKontak = document.perhitungan.stopKontak.value;
    karpet_buanna = document.perhitungan.karpet_buanna.value;
    karpet_kantor = document.perhitungan.karpet_kantor.value;
    vinyl = document.perhitungan.vinyl.value;
    parket_kayu = document.perhitungan.parket_kayu.value;
    panggung = document.perhitungan.panggung.value;
    mobilisasi = document.perhitungan.mobilisasi.value;
    dropMaterial = document.perhitungan.dropMaterial.value;
    sampah = document.perhitungan.sampah.value;
    transport = document.perhitungan.transport.value;
    mess = document.perhitungan.mess.value;
    tiket = document.perhitungan.tiket.value;

    //Peredam Dinding
    //qty
    document.getElementById('luasDinding').innerText = parseFloat((parseFloat(dindingSatu) + parseFloat(dindingDua) +
            parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2);
    // jumlah
    document.getElementById('jumlahPeredamDinding').innerText = (parseFloat((parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2)) * {{ $gr->gypsum_standard_gr }};
    //jumlah tampil
    document.getElementById('jumlahPeredamDindingTampil').innerText = Intl.NumberFormat().format((parseFloat((
            parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2)) * {{ $gr->gypsum_standard_gr }});

    //Peredam Plafon
    //qty
    document.getElementById('luasPlafon').innerText = parseFloat(parseFloat(dindingSatu) + parseFloat(dindingDua) +
        parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)).toFixed(
        2);
    //jumlah
    document.getElementById('jumlahPeredamPlafon').innerText = (parseFloat(parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
        .toFixed(2)) * {{ $gr->gypsum_standard_gr }};
    //jumlah tampil
    document.getElementById('jumlahPeredamPlafonTampil').innerText = Intl.NumberFormat().format((parseFloat(parseFloat(
            dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) +
        parseFloat(dindingLima)).toFixed(
        2)) * {{ $gr->gypsum_standard_gr }});

    //pintu peredam
    hargaPintu.innerText = Intl.NumberFormat().format(parseInt(panjangPintuEc) * parseInt(lebarPintuEc) *
        {{ $pintuPeredam->tebal_4cm }});
    jumlahPintu.innerText = (parseInt(panjangPintuEc) * parseInt(lebarPintuEc) *
        {{ $pintuPeredam->tebal_4cm }}) * parseInt(pintu);
    jumlahPintuTampil.innerText = Intl.NumberFormat().format((parseInt(panjangPintuEc) * parseInt(lebarPintuEc) *
        {{ $pintuPeredam->tebal_4cm }}) * parseInt(pintu));

    //Pekerjaan Lantai
    //Karpet Buanna
    jumlahKarpetBuanna.innerText = parseInt(karpet_buanna) * {{ $pekerjaanLantai->karpet_buanna }};
    jumlahKarpetBuannaTampil.innerText = Intl.NumberFormat().format(jumlahKarpetBuanna.innerText);

    //Karpet Kantor
    jumlahKarpetKantor.innerText = parseInt(karpet_kantor) * {{ $pekerjaanLantai->karpet_kantor }};
    jumlahKarpetKantorTampil.innerText = Intl.NumberFormat().format(jumlahKarpetKantor.innerText);

    //Vinyl
    jumlahVinyl.innerText = parseInt(vinyl) * {{ $pekerjaanLantai->vinyl }};
    jumlahVinylTampil.innerText = Intl.NumberFormat().format(jumlahVinyl.innerText);

    //Parket Kayu
    jumlahParketKayu.innerText = parseInt(parket_kayu) * {{ $pekerjaanLantai->parket_kayu }};
    jumlahParketKayuTampil.innerText = Intl.NumberFormat().format(jumlahParketKayu.innerText);

    //Panggung
    jumlahPanggung.innerText = parseInt(panggung) * {{ $pekerjaanLantai->panggung }};
    jumlahPanggungTampil.innerText = Intl.NumberFormat().format(jumlahPanggung.innerText);

    //Total Harga Barang
    totalHargaBarang.innerText = parseInt(jumlahPeredamDinding.innerText) + parseInt(jumlahPeredamPlafon
            .innerText) + parseInt(jumlahPintu.innerText) + parseInt(jumlahKarpetBuanna.innerText) + parseInt(
            jumlahKarpetKantor.innerText) + parseInt(jumlahVinyl.innerText) + parseInt(jumlahParketKayu.innerText) +
        parseInt(jumlahPanggung.innerText);
    totalHargaBarangTampil.innerText = formatRupiah(parseInt(totalHargaBarang.innerText));

    //Pemasangan dinding
    document.getElementById('luasDindingPemasangan').innerText = parseFloat((parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2);
    document.getElementById('jumlahPemasanganDinding').innerText = (parseFloat((parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_dinding }};
    document.getElementById('jumlahPemasanganDindingTampil').innerText = Intl.NumberFormat().format((parseFloat((
            parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
                dindingEmpat) + parseFloat(dindingLima)) *
        parseFloat(tinggi)).toFixed(2)) * {{ $jasaPeredam->jasa_peredam_dinding }});

    //Pemasangan Plafon
    document.getElementById('luasPlafonPemasangan').innerText = parseFloat(parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
        .toFixed(2);
    document.getElementById('jumlahPemasanganPlafon').innerText = (parseFloat(parseFloat(dindingSatu) + parseFloat(
            dindingDua) + parseFloat(dindingTiga) + parseFloat(dindingEmpat) + parseFloat(dindingLima))
        .toFixed(2)) * {{ $jasaPeredam->jasa_peredam_plafon }};
    document.getElementById('jumlahPemasanganPlafonTampil').innerText = Intl.NumberFormat().format((parseFloat(
        parseFloat(dindingSatu) + parseFloat(dindingDua) + parseFloat(dindingTiga) + parseFloat(
            dindingEmpat) + parseFloat(dindingLima)).toFixed(
        2)) * {{ $jasaPeredam->jasa_peredam_plafon }});

    //Pemasangan Pintu
    document.getElementById('pemasanganPintu').innerText = parseInt(pintu);
    document.getElementById('jumlahPemasanganPintu').innerText = parseInt(pintu) *
        {{ $pintuPeredam->jasa_pasang_pintu }};
    document.getElementById('jumlahPemasanganPintuTampil').innerText = Intl.NumberFormat().format(parseInt(
            pintu) *
        {{ $pintuPeredam->jasa_pasang_pintu }});

    //Total Harga Pemasangan
    totalHargaPemasangan.innerText = parseInt(jumlahPemasanganDinding.innerText) + parseInt(jumlahPemasanganPlafon
        .innerText) + parseInt(jumlahPemasanganPintu.innerText);
    totalHargaPemasanganTampil.innerText = formatRupiah(parseInt(totalHargaPemasangan.innerText));

    //listrik & penerangan
    //lampu
    jumlahLampu.innerText = parseInt(lampu) * ({{ $listrik->material_lampu }} +
        {{ $listrik->jasa_instalasi_listrik }});
    jumlahLampuTampil.innerText = Intl.NumberFormat().format(jumlahLampu.innerText);
    //Stop Kontak
    jumlahStopKontak.innerText = parseInt(stopKontak) * ({{ $listrik->material_stopkontak }} +
        {{ $listrik->jasa_instalasi_listrik }});
    jumlahStopKontakTampil.innerText = Intl.NumberFormat().format(jumlahStopKontak.innerText);

    // Total Harga Proyek
    totalHargaProyek.innerText = parseInt(totalHargaBarang.innerText) + parseInt(totalHargaPemasangan.innerText) +
        parseInt(jumlahLampu.innerText) + parseInt(jumlahStopKontak.innerText) + parseInt(mobilisasi) + parseInt(
            dropMaterial) + parseInt(sampah) + parseInt(transport) + parseInt(mess) + parseInt(tiket);
    totalHargaProyekTampil.innerText = formatRupiah(totalHargaProyek.innerText);

    //Pembayaran
    pembayaranDp.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.5));
    terminSatu.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.25));
    terminDua.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.2));
    terminTiga.innerText = formatRupiah(Math.round(parseInt(totalHargaProyek.innerText) * 0.05));
    lamaPengerjaan.innerText = Math.round(parseInt(totalHargaProyek.innerText) * 0.25 / 1000000) + ' Hari Kerja';

    function stopCalc() {

        clearInterval(interval);
    }

    function Sampah() {
        if (sampahCheck.checked == true) {
            sampahByOwner.style.display = "none";
            sampahTampil.style.display = "";
            ket_sampah.style.display = 'none';
        } else {
            sampahByOwner.style.display = "";
            sampahTampil.style.display = "none";
            ket_sampah.style.display = '';
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

    var btnAddJendelaDua = document.getElementById('btnAddJendelaDua');
    var btnAddJendelaTiga = document.getElementById('btnAddJendelaTiga');
    var addJendelaDua = document.getElementById('addJendelaDua');
    var deleteJendelaDua = document.getElementById('deleteJendelaDua');
    var jendelaDuaActive = document.getElementById('jendelaDuaActive');
    var ukuranJendelaDuaActive = document.getElementById('ukuranJendelaDuaActive');
    var pilihJendelaDuaActive = document.getElementById('pilihJendelaDuaActive');
    var addJendelaTiga = document.getElementById('addJendelaTiga');
    var deleteJendelaTiga = document.getElementById('deleteJendelaTiga');
    var jendelaTigaActive = document.getElementById('jendelaTigaActive');
    var ukuranJendelaTigaActive = document.getElementById('ukuranJendelaTigaActive');
    var pilihJendelaTigaActive = document.getElementById('pilihJendelaTigaActive');

    addJendelaDua.addEventListener("click", function() {
        btnAddJendelaDua.style.display = 'none';
        btnAddJendelaTiga.style.display = '';
        jendelaDuaActive.style.display = '';
        ukuranJendelaDuaActive.style.display = '';
        pilihJendelaDuaActive.style.display = '';
    });
    deleteJendelaDua.addEventListener("click", function() {
        btnAddJendelaDua.style.display = '';
        btnAddJendelaTiga.style.display = 'none';
        jendelaDuaActive.style.display = 'none';
        ukuranJendelaDuaActive.style.display = 'none';
        pilihJendelaDuaActive.style.display = 'none';
    });
    addJendelaTiga.addEventListener("click", function() {
        btnAddJendelaDua.style.display = 'none';
        btnAddJendelaTiga.style.display = 'none';
        deleteJendelaDua.style.display = 'none';
        jendelaTigaActive.style.display = '';
        ukuranJendelaTigaActive.style.display = '';
        pilihJendelaTigaActive.style.display = '';
    });
    deleteJendelaTiga.addEventListener("click", function() {
        btnAddJendelaDua.style.display = 'none';
        btnAddJendelaTiga.style.display = '';
        deleteJendelaDua.style.display = '';
        jendelaTigaActive.style.display = 'none';
        ukuranJendelaTigaActive.style.display = 'none';
        pilihJendelaTigaActive.style.display = 'none';
    });

    var btnAddPintuDua = document.getElementById('btnAddPintuDua');
    var addPintuDua = document.getElementById('addPintuDua');
    var deletePintuDua = document.getElementById('deletePintuDua');
    var deletePintuTiga = document.getElementById('deletePintuTiga');
    var btnAddPintuTiga = document.getElementById('btnAddPintuTiga');
    var addPintuTiga = document.getElementById('addPintuTiga');
    var pintuDuaActive = document.getElementById('pintuDuaActive');
    var spekPintuDuaActive = document.getElementById('spekPintuDuaActive');
    var pintuTigaActive = document.getElementById('pintuTigaActive');
    var spekPintuTigaActive = document.getElementById('spekPintuTigaActive');

    addPintuDua.addEventListener("click", function() {
        btnAddPintuDua.style.display = 'none';
        btnAddPintuTiga.style.display = '';
        pintuDuaActive.style.display = '';
        spekPintuDuaActive.style.display = '';
    });
    deletePintuDua.addEventListener("click", function() {
        btnAddPintuDua.style.display = '';
        btnAddPintuTiga.style.display = 'none';
        pintuDuaActive.style.display = 'none';
        spekPintuDuaActive.style.display = 'none';
    });
    addPintuTiga.addEventListener("click", function() {
        btnAddPintuTiga.style.display = 'none';
        btnAddPintuTiga.style.display = 'none';
        pintuTigaActive.style.display = '';
        spekPintuTigaActive.style.display = '';
        deletePintuDua.style.display = 'none';
    });
    deletePintuTiga.addEventListener("click", function() {
        btnAddPintuTiga.style.display = '';
        pintuTigaActive.style.display = 'none';
        spekPintuTigaActive.style.display = 'none';
        deletePintuDua.style.display = '';
    });

    //Pintu Check
    var pintuPeredamCheck = document.getElementById('pintuPeredamCheck');
    var activePintuPeredam = document.getElementById('activePintuPeredam');
    var activeTebalPintuPeredam = document.getElementById('activeTebalPintuPeredam');
    var activeJenisPintuPeredam = document.getElementById('activeJenisPintuPeredam');
    //Jendela Check
    var jendelaPeredamCheck = document.getElementById('jendelaPeredamCheck');
    var jendelaActive = document.getElementById('jendelaActive');
    var ukuranJendelaActive = document.getElementById('ukuranJendelaActive');
    //Pekerjaan Lantai
    var pekerjaanLantaiCheck = document.getElementById('pekerjaanLantaiCheck');
    var pekerjaanLantaiActive = document.getElementById('pekerjaanLantaiActive');
    var pekerjaanLantaiLineActive = document.getElementById('pekerjaanLantaiLineActive');
    //DiffBass
    var diffBassCheck = document.getElementById('diffBassCheck');
    var diffBassActive = document.getElementById('diffBassActive');
    var spekDiffBassActive = document.getElementById('spekDiffBassActive');
    //Ac Check
    var acCheck = document.getElementById('acCheck');
    var acActive = document.getElementById('acActive');
    //Bongkar Check
    var bongkarCheck = document.getElementById('bongkarCheck');
    var bongkarActive = document.getElementById('bongkarActive');
    //Pekerjaan Sipil
    var sipilCheck = document.getElementById('sipilCheck');
    var sipilActive = document.getElementById('sipilActive');

    function PintuPeredamCheck() {
        if (pintuPeredamCheck.checked == false) {
            activePintuPeredam.style.display = 'none';
            activeTebalPintuPeredam.style.display = 'none';
            activeJenisPintuPeredam.style.display = 'none';
            pintuEcActive.style.display = 'none';
            pintuTcActive.style.display = 'none';
            tebal4cm.removeAttribute("checked");
            tebal7cm.removeAttribute("checked");
        } else {
            activePintuPeredam.style.display = '';
            activeTebalPintuPeredam.style.display = '';
            activeJenisPintuPeredam.style.display = '';
            pintuEcActive.style.display = '';
            pintuTcActive.style.display = '';
        }
    }

    function JendelaPeredamCheck() {
        if (jendelaPeredamCheck.checked == false) {
            jendelaActive.style.display = 'none';
            ukuranJendelaActive.style.display = 'none';

            jendelaDuaActive.style.display = 'none';
            ukuranJendelaDuaActive.style.display = 'none';
            btnAddJendelaDua.style.display = 'none';

            jendelaTigaActive.style.display = 'none';
            ukuranJendelaTigaActive.style.display = 'none';
            btnAddJendelaTiga.style.display = 'none';
        } else {
            jendelaActive.style.display = '';
            ukuranJendelaActive.style.display = '';

            jendelaDuaActive.style.display = '';
            ukuranJendelaDuaActive.style.display = '';
            btnAddJendelaDua.style.display = '';

            jendelaTigaActive.style.display = '';
            ukuranJendelaTigaActive.style.display = '';
            btnAddJendelaTiga.style.display = '';
        }
    }

    var ketPekerjaanLantai = document.getElementById('ketPekerjaanLantai');

    function PekerjaanLantaiCheck() {
        if (pekerjaanLantaiCheck.checked == false) {
            pekerjaanLantaiLineActive.style.display = 'none';
            pekerjaanLantaiActive.style.display = 'none';
            karpetBuannaActive.style.display = 'none';
            karpetKantorActive.style.display = 'none';
            vinylActive.style.display = 'none';
            parketKayuActive.style.display = 'none';
            panggungActive.style.display = 'none';
            ketPekerjaanLantai.style.display = '';
            ketAll.style.display = '';
        } else {
            pekerjaanLantaiLineActive.style.display = '';
            pekerjaanLantaiActive.style.display = '';
            karpetBuannaActive.style.display = '';
            ketPekerjaanLantai.style.display = 'none';
        }
    }

    function DiffBassCheck() {
        if (diffBassCheck.checked == true) {
            diffBassActive.style.display = '';
            spekDiffBassActive.style.display = '';
        } else {
            diffBassActive.style.display = 'none';
            spekDiffBassActive.style.display = 'none';
        }
    }

    var ketAc = document.getElementById('ketAc');

    function AcCheck() {
        if (acCheck.checked == true) {
            acActive.style.display = '';
            ketAc.style.display = 'none';
        } else {
            acActive.style.display = 'none';
            ketAc.style.display = '';
            ketAll.style.display = '';
        }
    }

    var ketBongkar = document.getElementById('ketBongkar');

    function BongkarCheck() {
        if (bongkarCheck.checked == true) {
            bongkarActive.style.display = '';
            ketBongkar.style.display = 'none';
        } else {
            bongkarActive.style.display = 'none';
            ketBongkar.style.display = '';
            ketAll.style.display = '';
        }
    }

    var ketSipil = document.getElementById('ketSipil');

    function SipilCheck() {
        if (sipilCheck.checked == true) {
            sipilActive.style.display = '';
            ketSipil.style.display = 'none';
        } else {
            sipilActive.style.display = 'none';
            ketSipil.style.display = '';
            ketAll.style.display = '';
        }
    }

    var ketAll = document.getElementById('ketAll');

    function KetAll() {
        if (pekerjaanLantaiCheck.checked == true && bongkarCheck.checked == true && acCheck.checked == true &&
            sipilCheck.checked == true) {
            ketAll.style.display = 'none';
        } else if (pekerjaanLantaiCheck.checked == false && bongkarCheck.checked == false && acCheck.checked == false &&
            sipilCheck.checked == false) {
            ketAll.style.display = '';
        }
    }

    function Show() {
        dindingSatu = document.perhitungan.dindingSatu.value;
        dindingDua = document.perhitungan.dindingDua.value;
        dindingTiga = document.perhitungan.dindingTiga.value;
        dindingEmpat = document.perhitungan.dindingEmpat.value;
        dindingLima = document.perhitungan.dindingLima.value;
        tinggi = document.perhitungan.tinggi.value;
        pintu = document.perhitungan.pintu.value;
        panjangPintuEc = document.perhitungan.panjangPintuEc.value;
        lebarPintuEc = document.perhitungan.lebarPintuEc.value;
        panjangPintuTc = document.perhitungan.panjangPintuTc.value;
        lebarPintuTc = document.perhitungan.lebarPintuTc.value;
        pintuDua = document.perhitungan.pintuDua.value;
        hargaPintuDua = document.perhitungan.hargaPintuDua.value;
        pintuTiga = document.perhitungan.pintuTiga.value;
        hargaPintuTiga = document.perhitungan.hargaPintuTiga.value;
        panjangJendela = document.perhitungan.panjangJendela.value;
        lebarJendela = document.perhitungan.lebarJendela.value;
        panjangJendelaDua = document.perhitungan.panjangJendelaDua.value;
        lebarJendelaDua = document.perhitungan.lebarJendelaDua.value;
        panjangJendelaTiga = document.perhitungan.panjangJendelaTiga.value;
        lebarJendelaTiga = document.perhitungan.lebarJendelaTiga.value;
        qtyDiffBass = document.perhitungan.qtyDiffBass.value;
        hargaDiffBass = document.perhitungan.hargaDiffBass.value;
        karpet_buanna = document.perhitungan.karpet_buanna.value;
        karpet_kantor = document.perhitungan.karpet_kantor.value;
        vinyl = document.perhitungan.vinyl.value;
        parket_kayu = document.perhitungan.parket_kayu.value;
        panggung = document.perhitungan.panggung.value;
        lampu = document.perhitungan.lampu.value;
        stopKontak = document.perhitungan.stopKontak.value;
        mobilisasi = document.perhitungan.mobilisasi.value;
        dropMaterial = document.perhitungan.dropMaterial.value;
        sampah = document.perhitungan.sampah.value;
        transport = document.perhitungan.transport.value;
        mess = document.perhitungan.mess.value;
        tiket = document.perhitungan.tiket.value;
        ac = document.perhitungan.ac.value;
        bongkar = document.perhitungan.bongkar.value;
        sipil = document.perhitungan.sipil.value;
        spekPintuDua = document.perhitungan.spekPintuDua.value;
        spekPintuTiga = document.perhitungan.spekPintuTiga.value;
        spekJendelaSatu = document.perhitungan.spekJendelaSatu.value;
        spekJendelaDua = document.perhitungan.spekJendelaDua.value;
        spekJendelaTiga = document.perhitungan.spekJendelaTiga.value;
        spekDiffBass = document.perhitungan.spekDiffBass.value;
        inputNamaTambahan = document.perhitungan.inputNamaTambahan.value;

        document.getElementById('printInputNamaTambahan').innerText = inputNamaTambahan;
        document.getElementById('printInputNamaTambahan').style.display = '';
        document.getElementById('inputNamaTambahan').style.display = 'none';

        document.getElementById('dindingSatuPrint').innerText = parseFloat(dindingSatu).toFixed(2);
        document.getElementById('dindingSatuPrint').style.display = '';
        document.getElementById('dindingSatu').style.display = 'none';

        document.getElementById('dindingDuaPrint').innerText = parseFloat(dindingDua).toFixed(2);
        document.getElementById('dindingDuaPrint').style.display = '';
        document.getElementById('dindingDua').style.display = 'none';

        document.getElementById('dindingTigaPrint').innerText = parseFloat(dindingTiga).toFixed(2);
        document.getElementById('dindingTigaPrint').style.display = '';
        document.getElementById('dindingTiga').style.display = 'none';

        document.getElementById('dindingEmpatPrint').innerText = parseFloat(dindingEmpat).toFixed(2);
        document.getElementById('dindingEmpatPrint').style.display = '';
        document.getElementById('dindingEmpat').style.display = 'none';

        document.getElementById('dindingLimaPrint').innerText = parseFloat(dindingLima).toFixed(2);
        document.getElementById('dindingLimaPrint').style.display = '';
        document.getElementById('dindingLima').style.display = 'none';

        document.getElementById('tinggiPrint').innerText = parseFloat(tinggi).toFixed(2);
        document.getElementById('tinggiPrint').style.display = '';
        document.getElementById('tinggi').style.display = 'none';

        //Pintu
        document.getElementById('pintuPrint').innerText = parseInt(pintu);
        document.getElementById('pintuPrint').style.display = '';
        document.getElementById('pintu').style.display = 'none';

        document.getElementById('panjangPintuEcPrint').innerText = parseInt(panjangPintuEc);
        document.getElementById('panjangPintuEcPrint').style.display = '';
        document.getElementById('panjangPintuEc').style.display = 'none';
        document.getElementById('pintu').style.display = 'none';

        document.getElementById('lebarPintuEcPrint').innerText = parseInt(lebarPintuEc);
        document.getElementById('lebarPintuEcPrint').style.display = '';
        document.getElementById('lebarPintuEc').style.display = 'none';

        document.getElementById('panjangPintuTcPrint').innerText = parseInt(panjangPintuTc);
        document.getElementById('panjangPintuTcPrint').style.display = '';
        document.getElementById('panjangPintuTc').style.display = 'none';
        document.getElementById('pintu').style.display = 'none';

        document.getElementById('lebarPintuTcPrint').innerText = parseInt(lebarPintuTc);
        document.getElementById('lebarPintuTcPrint').style.display = '';
        document.getElementById('lebarPintuTc').style.display = 'none';

        document.getElementById('pintuDuaPrint').innerText = parseInt(pintuDua);
        document.getElementById('pintuDuaPrint').style.display = '';
        document.getElementById('pintuDua').style.display = 'none';

        document.getElementById('hargaPintuDuaPrint').innerText = Intl.NumberFormat().format(parseInt(hargaPintuDua));
        document.getElementById('hargaPintuDuaPrint').style.display = '';
        document.getElementById('hargaPintuDua').style.display = 'none';

        document.getElementById('pintuTigaPrint').innerText = parseInt(pintuTiga);
        document.getElementById('pintuTigaPrint').style.display = '';
        document.getElementById('pintuTiga').style.display = 'none';

        document.getElementById('hargaPintuTigaPrint').innerText = Intl.NumberFormat().format(parseInt(hargaPintuTiga));
        document.getElementById('hargaPintuTigaPrint').style.display = '';
        document.getElementById('hargaPintuTiga').style.display = 'none';

        //Jendela
        document.getElementById('panjangJendelaPrint').innerText = parseInt(panjangJendela);
        document.getElementById('panjangJendelaPrint').style.display = '';
        document.getElementById('panjangJendela').style.display = 'none';

        document.getElementById('lebarJendelaPrint').innerText = parseInt(lebarJendela);
        document.getElementById('lebarJendelaPrint').style.display = '';
        document.getElementById('lebarJendela').style.display = 'none';

        document.getElementById('panjangJendelaDuaPrint').innerText = parseInt(panjangJendelaDua);
        document.getElementById('panjangJendelaDuaPrint').style.display = '';
        document.getElementById('panjangJendelaDua').style.display = 'none';

        document.getElementById('lebarJendelaDuaPrint').innerText = parseInt(lebarJendelaDua);
        document.getElementById('lebarJendelaDuaPrint').style.display = '';
        document.getElementById('lebarJendelaDua').style.display = 'none';

        document.getElementById('panjangJendelaTigaPrint').innerText = parseInt(panjangJendelaTiga);
        document.getElementById('panjangJendelaTigaPrint').style.display = '';
        document.getElementById('panjangJendelaTiga').style.display = 'none';

        document.getElementById('lebarJendelaTigaPrint').innerText = parseInt(lebarJendelaTiga);
        document.getElementById('lebarJendelaTigaPrint').style.display = '';
        document.getElementById('lebarJendelaTiga').style.display = 'none';

        //Pekerjaan Lantai
        document.getElementById('karpet_buannaPrint').innerText = parseInt(karpet_buanna);
        document.getElementById('karpet_buannaPrint').style.display = '';
        document.getElementById('karpet_buanna').style.display = 'none';

        document.getElementById('karpet_kantorPrint').innerText = parseInt(karpet_kantor);
        document.getElementById('karpet_kantorPrint').style.display = '';
        document.getElementById('karpet_kantor').style.display = 'none';

        document.getElementById('vinylPrint').innerText = parseInt(vinyl);
        document.getElementById('vinylPrint').style.display = '';
        document.getElementById('vinyl').style.display = 'none';

        document.getElementById('parket_kayuPrint').innerText = parseInt(parket_kayu);
        document.getElementById('parket_kayuPrint').style.display = '';
        document.getElementById('parket_kayu').style.display = 'none';

        document.getElementById('panggungPrint').innerText = parseInt(panggung);
        document.getElementById('panggungPrint').style.display = '';
        document.getElementById('panggung').style.display = 'none';

        //Diffuser & Basstrap
        document.getElementById('qtyDiffBassPrint').innerText = parseInt(qtyDiffBass);
        document.getElementById('qtyDiffBassPrint').style.display = '';
        document.getElementById('qtyDiffBass').style.display = 'none';

        document.getElementById('hargaDiffBassPrint').innerText = Intl.NumberFormat().format(parseInt(
            hargaDiffBass));
        document.getElementById('hargaDiffBassPrint').style.display = '';
        document.getElementById('hargaDiffBass').style.display = 'none';

        //Listrik
        document.getElementById('lampuPrint').innerText = parseInt(lampu);
        document.getElementById('lampuPrint').style.display = '';
        document.getElementById('lampu').style.display = 'none';

        document.getElementById('stopKontakPrint').innerText = parseInt(stopKontak);
        document.getElementById('stopKontakPrint').style.display = '';
        document.getElementById('stopKontak').style.display = 'none';

        //lain-lain
        document.getElementById('mobilisasiPrint').innerText = Intl.NumberFormat().format(parseInt(
            mobilisasi));
        document.getElementById('mobilisasiPrint').style.display = '';
        document.getElementById('mobilisasi').style.display = 'none';

        document.getElementById('dropMaterialPrint').innerText = Intl.NumberFormat().format(parseInt(
            dropMaterial));
        document.getElementById('dropMaterialPrint').style.display = '';
        document.getElementById('dropMaterial').style.display = 'none';

        document.getElementById('sampahPrint').innerText = Intl.NumberFormat().format(parseInt(
            sampah));
        document.getElementById('sampahPrint').style.display = '';
        document.getElementById('sampah').style.display = 'none';

        document.getElementById('transportPrint').innerText = Intl.NumberFormat().format(parseInt(
            transport));
        document.getElementById('transportPrint').style.display = '';
        document.getElementById('transport').style.display = 'none';

        document.getElementById('messPrint').innerText = Intl.NumberFormat().format(parseInt(
            mess));
        document.getElementById('messPrint').style.display = '';
        document.getElementById('mess').style.display = 'none';

        document.getElementById('tiketPrint').innerText = Intl.NumberFormat().format(parseInt(
            tiket));
        document.getElementById('tiketPrint').style.display = '';
        document.getElementById('tiket').style.display = 'none';

        document.getElementById('acPrint').innerText = Intl.NumberFormat().format(parseInt(
            ac));
        document.getElementById('acPrint').style.display = '';
        document.getElementById('ac').style.display = 'none';

        document.getElementById('bongkarPrint').innerText = Intl.NumberFormat().format(parseInt(
            bongkar));
        document.getElementById('bongkarPrint').style.display = '';
        document.getElementById('bongkar').style.display = 'none';

        document.getElementById('sipilPrint').innerText = Intl.NumberFormat().format(parseInt(
            sipil));
        document.getElementById('sipilPrint').style.display = '';
        document.getElementById('sipil').style.display = 'none';

        //Spesifikasi
        document.getElementById('spekPintuDuaPrint').innerText = spekPintuDua;
        document.getElementById('spekPintuDuaPrint').style.display = '';
        document.getElementById('spekPintuDua').style.display = 'none';

        document.getElementById('spekPintuTigaPrint').innerText = spekPintuTiga;
        document.getElementById('spekPintuTigaPrint').style.display = '';
        document.getElementById('spekPintuTiga').style.display = 'none';

        document.getElementById('spekJendelaSatuPrint').innerText = spekJendelaSatu;
        document.getElementById('spekJendelaSatuPrint').style.display = '';
        document.getElementById('spekJendelaSatu').style.display = 'none';

        document.getElementById('spekJendelaDuaPrint').innerText = spekJendelaDua;
        document.getElementById('spekJendelaDuaPrint').style.display = '';
        document.getElementById('spekJendelaDua').style.display = 'none';

        document.getElementById('spekJendelaTigaPrint').innerText = spekJendelaTiga;
        document.getElementById('spekJendelaTigaPrint').style.display = '';
        document.getElementById('spekJendelaTiga').style.display = 'none';

        document.getElementById('spekDiffBassPrint').innerText = spekDiffBass;
        document.getElementById('spekDiffBassPrint').style.display = '';
        document.getElementById('spekDiffBass').style.display = 'none';

    }

    // //download penawaran as a picture
    // document.getElementById("btnDownload").addEventListener("click", function() {
    //     html2canvas(document.getElementById("printArea")).then(function(canvas) {
    //         var anchorTag = document.createElement("a");
    //         document.body.appendChild(anchorTag);
    //         // document.getElementById("previewImg").appendChild(canvas);
    //         anchorTag.download = "estimasi.png";
    //         anchorTag.href = canvas.toDataURL();
    //         anchorTag.target = '_blank';
    //         anchorTag.click();
    //     });
    // });
</script>


</html>
