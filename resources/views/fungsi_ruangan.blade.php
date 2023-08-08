<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulasi Hitungan Proyek</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/html2canvas.js" type="text/javascript"></script>
    <style>
        body {
            background-color: #171717;
        }

        .btn-grad-mr {
            background-image: linear-gradient(to right, #50C9C3 0%, #96DEDA 51%, #50C9C3 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-mr:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }



        .btn-grad-pr {
            background-image: linear-gradient(to right, #485563 0%, #29323c 51%, #485563 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-pr:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }


        .btn-grad-ms {
            background-image: linear-gradient(to right, #73C8A9 0%, #373B44 51%, #73C8A9 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-ms:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }

        .btn-grad-kr {
            background-image: linear-gradient(to right, #1A2980 0%, #26D0CE 51%, #1A2980 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-kr:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }


        .btn-grad-gr {
            background-image: linear-gradient(to right, #FF8008 0%, #FFC837 51%, #FF8008 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-gr:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }


        .btn-grad-d {
            background-image: linear-gradient(to right, #4776E6 0%, #8E54E9 51%, #4776E6 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-d:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }

        .btn-grad-c {
            background-image: linear-gradient(to right, #CC95C0 0%, #DBD4B4 51%, #CC95C0 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-c:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }



        .btn-grad-b {
            background-image: linear-gradient(to right, #603813 0%, #b29f94 51%, #603813 100%);
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad-b:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="row mt-3">

        <div class="container mt-3 p-2 rounded"
            style="background-color: #03506F; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <img class="img-fluid" src="images/meeting room.jpg" alt="" width="100%" height="100vh">
                </div>
                <div class="col" style="margin-left: -14px">
                    <h2>Meeting Room</h2>
                    <ul style="margin-left: -10px">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 40/60/80 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-mr"
                        style="font-size: 11px; color: #395B64; width: 100%; height: 32px;" href="/ruang_meeting"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>

            </div>
        </div>

        <div class="container mt-3 p-2 rounded"
            style="background-color: #133B5C; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <h2>Podcast Room</h2>
                    <ul style="margin-left: -14px;">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 40/60/80 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-pr"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/ruang_podcast"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/podcast room.png" alt="" width="100%" height="100vh">
                </div>

            </div>
        </div>

        <div class="container mt-3 p-2 rounded"
            style="background-color: #395B64; color:#EDEDED; font-size: 9px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <img class="img-fluid" src="images/studio.jpeg" alt="" width="100%" height="100vh">
                </div>
                <div class="col" style="margin-left: -14px">
                    <h2>Music Studio</h2>
                    <ul style="margin-left: -20px">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 80/100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-ms"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/ruang_musicstudio"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="container mt-3 p-2 rounded"
            style="background-color: #323232; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <h2>Karaoke Room</h2>
                    <ul style="margin-left: -14px;">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 80/100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-kr"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/ruang_karaoke"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/karaoke.jpeg" alt="" width="100%" height="100vh">
                </div>

            </div>
        </div>

        <div class="container mt-3 p-2 rounded"
            style="background-color: #C87941; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <img class="img-fluid" src="images/gaming room.jpg" alt="" width="100%" height="100vh">
                </div>
                <div class="col" style="margin-left: -14px">
                    <h2>Gaming Room</h2>
                    <ul style="margin-left: -10px">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 60/80/100/120 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-gr"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/ruang_gamingroom"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="container mt-3 p-2 rounded"
            style="background-color: #301B3F; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <h2>DISKOTIK</h2>
                    <ul style="margin-left: -14px;">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 80/100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-d"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/coming_soon"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/Diskotik.jpg" alt="" width="100%" height="100vh">
                </div>

            </div>
        </div>

        <div class="container mt-3 p-2 rounded"
            style="background-color: #AD62AA; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <img class="img-fluid" src="images/church.jpg" alt="" width="100%" height="100vh">
                </div>
                <div class="col" style="margin-left: -14px">
                    <h2>GEREJA</h2>
                    <ul style="margin-left: -10px">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 80/100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-c"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/coming_soon"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>

            </div>
        </div>

        <div class="container mt-3 p-2 rounded"
            style="background-color: #B4A5A5; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <h2>BIOSKOP</h2>
                    <ul style="margin-left: -14px;">
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-b"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/coming_soon"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/cinema.jpg" alt="" width="100%" height="100vh">
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="container mt-3 p-2 rounded"
            style="background-color: #607EAA; color:#EDEDED; font-size: 10px; width:50vh">
            <div class="row justify content center">
                <div class="col">
                    <h2>Custom Walls</h2>
                    <ul style="margin-left: -14px;">
                        <li>Khusus 1-3 Dinding yg ingin di redam</li>
                        <li>Metode Gypsum & Panel Akustik</li>
                        <li>Rockwool Density 40/60/80/100/120/140 Kg/m2</li>
                    </ul>
                    <a class="btn fw-bold btn-grad-b"
                        style="font-size: 11px; color: #EDEDED; width: 100%; height: 32px;" href="/coming_soon"
                        role="button">
                        Pilih Ruangan
                    </a>
                </div>
                <div class="col">
                    <img class="img-fluid" src="images/cinema.jpg" alt="" width="100%" height="100vh">
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="container mt-5 bg">

        <div class="col-lg text-center mb-4">
            <h2 style="color: #EDEDED">Pilih Kegunaan Ruangan anda</h2>
        </div>

        <div class="row">
            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="font-size: 100%; color: #EDEDED; width: 10   0%; height: 100%;"
                    href="#!" role="button">
                    Podcast Room
                    <i class="bi bi-mic" style="color: white;"></i>
                </a>
            </div>

            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="color: #EDEDED; width: 100%; height: 100%;" href="/ruang_meeting"
                    role="button">
                    <i class="bi bi-people-fill" style="color: white;"></i>
                    Meeting Room
                </a>
            </div>

        </div>
        <div class="row">

            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="color: #EDEDED; width: 100%; height: 100%;" href="/ruang_meeting"
                    role="button">
                    <i class="bi bi-music-note-list" style="color: white;"></i>
                    Music Studio
                </a>
            </div>
            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="font-size: 100%; color: #EDEDED; width: 100%; height: 100%;"
                    href="#!" role="button">
                    Karaoke Room
                    <i class="bi bi-mic-fill" style="color: white;"></i>
                </a>
            </div>

        </div>
        <div class="row">

            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="color: #EDEDED; width: 100%; height: 100%;" href="/ruang_meeting"
                    role="button">
                    <i class="bi bi-headset" style="color: white;"></i>
                    Gaming Room
                </a>
            </div>
            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="font-size: 100%; color: #EDEDED; width: 100%; height: 100%;"
                    href="#!" role="button">
                    Discotheque
                    <i class="bi bi-megaphone-fill" style="color: white;"></i>
                </a>
            </div>

        </div>
        <div class="row">

            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="color: #EDEDED; width: 100%; height: 100%;" href="/ruang_meeting"
                    role="button">
                    <i class="bi bi-house-fill" style="color: white;"></i>
                    Church
                </a>
            </div>
            <div class="col text-center mb-3">
                <a class="btn fw-bold btn-grad" style="font-size: 100%; color: #EDEDED; width: 100%; height: 100%;"
                    href="#!" role="button">
                    Cinema
                    <i class="bi bi-film" style="color: white;"></i>
                </a>
            </div>

        </div> --}}


</body>

</html>
