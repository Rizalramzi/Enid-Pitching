<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- End AOS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootcamp.css')}}">
    <link rel="icon" href="assets/learnifie-icon.png">
    <title>Bootcamp | Learnifie</title>
</head>
<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init()
    </script>
    <!-- Nav -->
    <header id="header" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="300"></header>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffff;">
          <div class="container">
            <a class="navbar-brand" href="index.html"><b style="color: #045B53; font-size: 2rem;">Learnifie</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/elearning">E-Learning</a></li>
                <li class="nav-item">
                  <a class="nav-link active" href="/bootcamp">Bootcamp</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/quiz">Quiz</a></li>
              </ul>
              <ul class="navbar-nav ms-auto">
                <li>@auth
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color:rgb(75, 75, 75);">
                    {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="border: none">
                    <li>
                      <a href="/profile" class="btn btn-custom mb-2">Profile</a>
                    </li>
                    <li>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-custom">Logout</button>
                      </form>
                    </li>
                  </ul>
              @else
                  <li class="nav-item ">
                      <a href="{{ route('login') }}" class="btn btn-custom-1">Log in</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item ms-2">
                          <a href="{{ route('register') }}" class="btn btn-custom">Register</a>
                      </li>
                  @endif
              @endauth</li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <!-- End Nav -->

    <!-- Bootcamp -->
    <div class="learn">
        <div class="container">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-6 mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500">
                    <img src="assets/model4.png" alt="" width="360" class="img-model4">
                </div>
                <div class="col-md-6 mt-5">
                <h2 style="color: #045B53;"data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="500"><b>Join Class Learnifie and Forge a Promising Career Path.</b></h2>
                <p class="mt-3"data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="700">Learnifie is passionately dedicated to empowering individuals to unleash their full potential through targeted and practical bootcamp experiences.</p>
                <a href="#comingsoon" class="btn btn-custom mt-3"data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="900">Find Classes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bootcamp -->

    {{--  --}}
    <div class="container" id="comingsoon" style="margin-top:30%">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-muted text-center">Coming Soon!</h3>
        </div>
      </div>
    </div>
    {{--  --}}
</body>
</html>