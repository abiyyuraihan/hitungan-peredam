<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="/images/logo gesang.png
            " alt="" width="50" height="24" class="d-inline-block align-text-top">
           &nbsp;&nbsp;&nbsp;&nbsp; Register Admin Gesang Contractor
          </a>
        </div>
      </nav>
    <div class="row justify-content-center">
        <div class="col-md-4 bg-light mt-5 p-5">
            <main class="form-signin mt-4">
                <h1 class="h3 mb-3 fw-normal text-center">Register Admin</h1>
                <form action="/register_admin" method="post">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror" id="tlp"
                            placeholder="tlp" required value="{{ old('tlp') }}">
                        <label for="tlp">Telp.</label>
                        @error('tlp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Register</button>
                    <small class="d-block text-center mt-3 mb-4">
                        Back to <a href="/login_admin">Login</a>
                    </small>
                </form>
            </main>
        </div>
    </div>
</body>
</html>