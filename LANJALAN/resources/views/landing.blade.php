<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>LANJALAN</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Favicon.png') }}">
</head>
<body style="background-image: url({{ asset('img/RajaAmpat.png') }}); height: 100vh">
    <nav class="navbar navbar-expand-lg navbar-dark shadow p-2" style="background-color: #199D6B;">
        <div class="container-fluid my-0">
            <img src="{{ asset('img/Lanjalan.png') }}" class="img-fluid mx-4" alt="Logo Lanjalan" style="width: 10rem; height: auto;">
            <div class="d-flex">
                <ul class="navbar-nav mx-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            <button type="button" class="btn btn-primary" style="border-radius: 0.5rem">Register</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <button type="button" class="btn btn-outline-primary" style="border-radius: 0.5rem">Log in</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center">
        <p class="text-center fs-1 fw-bolder" style="color: #FFFFFF; margin-top: 9rem">
            Make The Best Out of Your
            <br>
            Travelling Experience
        </p>
        <p class="text-center fs-3" style="color: #FFFFFF;">
            Travel With Us Now
        </p>
        <a href="">
            <button type="button" class="btn btn-lg btn-primary" style="margin-top: 1rem; border-radius: 0.75rem">Book Now</button>
        </a>
    </div>
</body>
</html>