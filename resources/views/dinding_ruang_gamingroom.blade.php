<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulasi Hitungan Proyek</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {}

        .carousel-indicators {
            position: static;
        }

        .carousel-indicators button.thumbnail {
            width: 300px;
            height: 100%;
            opacity: 0.8;
        }
        .carousel-indicators button.thumbnail:not(.active){
            opacity: .7;
        }

        .carousel-indicators button.thumbnail.active{
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="container mt-2 mb-5 p-3">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/gaming room 4 sisi.png" class="card-img-top mt-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Gaming Room 4 Sisi</h5>
                        <a href="/gr_es" class="btn btn-primary">Buat Penawaran</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gaming room 5 sisi.png" class="card-img-top mt-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Gaming Room 5 Sisi</h5>
                        <a href="/gr_ls" class="btn btn-primary">Buat Penawaran</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gaming room 6 sisi.png" class="card-img-top mt-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ruang Gaming Room 6 Sisi</h5>
                        <a href="/gr_ens" class="btn btn-primary">Buat Penawaran</a>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators mt-3">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active thumbnail mx-2" aria-current="true" aria-label="Slide 1"><img
                        src="images/gaming room 4 sisi.png" class="d-block w-100"><b>4 sisi</b></button>
                <button type="button" class="thumbnail mx-2" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="1" aria-label="Slide 2"><img src="images/gaming room 5 sisi.png"
                        class="d-block w-100"><b>5 sisi</b></button>
                <button type="button" class="thumbnail mx-2" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="2" aria-label="Slide 3"><img src="images/gaming room 6 sisi.png"
                        class="d-block w-100"><b>6 sisi</b></button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
