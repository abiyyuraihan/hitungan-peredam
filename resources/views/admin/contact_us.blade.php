<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: rgb(20, 19, 19);
        }

        .btn-grad {
            background-image: linear-gradient(to right, #200122 0%, #6f0000 51%, #200122 100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container p-4">
        <center>
            <div class="contact mb-3">
                <img class="img-fluid" src="./images/logo gesang contractor.jpeg" alt="">
            </div>
            <h4 class="text-white">Hubungi Kami</h4>
            <small class="text-white mb-5">(Pastikan Anda Sudah Mendownload Estimasi Harga)</small>
            <br><br>
            <a style="text-decoration: none; background-color: rgb(20, 19, 19);" href="https://wa.me/6281804671313"><button class="btn-grad">Conctact Us</button></a>
        </center>
    </div>

</body>

</html>
