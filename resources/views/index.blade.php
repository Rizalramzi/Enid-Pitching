<!doctype html>
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
    <link rel="icon" href="assets/learnifie-icon.png">
    <title>Sipaling IT | Learnifie</title>
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
                  <a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/elearning">E-Learning</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/bootcamp">Bootcamp</a></li>
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

    <!-- Hero -->
    <div class="hero" id="hero" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="300"></header>
    <div class="container">
      <div class="row ms-5">
        <div class="col-md-5 ms-5" style="margin-top: 10%;">
          <b><h1 class="text-dark">Elevate Your Potential
            With <b style="color: #045B53;">Learnifie</b></h1></b>
            <p class="mt-3">Welcome to Learnifie, your go-to platform for boosting your digital skills! We're dedicated to helping you develop the essential capabilities for the modern tech era.</p>
          @if (Auth::check())
            <a href="/about" class="btn btn-custom">Learn More</a>
          @else
            <a href="{{route('register')}}" class="btn btn-custom mt-3">Join now</a>
            <a href="/about" class="btn btn-custom-1 mt-3 ms-2">Learn more</a>
          @endif
        </div>
        <div class="col-md-4 ms-5">
          <img src="assets/model1.png" alt="" width="400">
        </div>
      </div>
    </div>
  </div>  
    <!-- End Hero -->

    <!-- Advantage -->
    <div class="adv" id="adv" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="300"></header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 ms-5"data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="500">
          <img src="assets/model2.png" alt="" width="500">
        </div>
        <div class="col-md-6 mt-3" style="margin-left: 12%; color: #045B53;">
          <h2><b>The Reason Why You Should <br>
            Join Us</b></h2>
            <div class="row mt-5">
              <div class="col-md-6"data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="400">
                <img src="assets/teachers.png" alt="" width="200" class="img-r">
              </div>
              <div class="col-md-6"data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                <img src="assets/task.png" alt="" width="200" class="img-r">
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-6"data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <img src="assets/times.png" alt="" width="200" class="img-r">
              </div>
              <div class="col-md-6" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                <img src="assets/games.png" alt="" width="200" class="img-r">
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    <!-- End Advantage -->

    <!-- Join Courses -->
    <div class="join" id="join">
    <div class="container">
      <div class="row justify-content-center align-item-center">
        <div class="col-md-5 mt-5">
          <h2 style="color: #045B53;"data-aos="fade-up"
          data-aos-anchor-placement="top-bottom" data-aos-duration="500"><b>Learn With Learnifie
            & Achieve a Successful Future</b></h2>
            <p class="mt-3"data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="500">We believe that digital skills are the key to success in this ever-changing world. Therefore, Learnifie is on a mission to help individuals unlock their full potential through focused and relevant learning.</p>
            <a href="/elearning#material" class="btn btn-custom mt-3"data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="800">Browse All Courses</a>
        </div>
        <div class="col-md-4 ms-5">
          <img src="assets/model3.png" alt="" width="500"data-aos="fade-up"
          data-aos-anchor-placement="top-bottom" data-aos-duration="600">
        </div>
      </div>
    </div>
  </div>
    <!-- End Join Courses -->

    <!-- AI -->
    <div class="ai">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
            <h2 style="color: #045B53;"><b>Make It Easier With ChatBot</b></h2>
          </div>
        </div>
        <div class="row mt-2" data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="top-bottom">
          <div class="col-md-6 mx-auto d-flex align-items-center">
            <p class="text-center">Educational chatbot dedicated to enhancing your digital skills, preparing you to face the challenges of the information Technology era.</p>
          </div>
        </div>
        <div class="row mt-4" data-aos="fade-up" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
          <div class="col-md-12 text-center">
            <button class="btn btn-custom" onclick="move()">Try Now!</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End AI -->

    {{-- Questions --}}
    <div class="question">
      <div class="container" style="background-color: #045B53; border-radius:10px">
        <div class="row">
          <div class="col-md-12 mt-5 mb-5">
            <h2 style="color: white;" class="text-center"><b>Any Question?</b></h2>
            <div class="mt-5">
            <form action="" style="max-width: 40%" class="mx-auto">
              <div class="form-group">
                <label for="newsletter1" class="text-white">Name</label>
                <input type="text" class="form-control" id="newsletter1" placeholder="Name" style="box-shadow: none; border-color:#045B53; height:65px" autocomplete="off">
              </div>
              <div class="form-group mt-4">
                <label for="newsletter1" class="text-white">Question</label>
                <input type="text" class="form-control" id="newsletter1" placeholder="Question" style="box-shadow: none; border-color:#045B53; height:65px" autocomplete="off">
              </div>
              <div class="form-group mt-4">
                <label for="newsletter1" class="text-white">Email address</label>
                <input type="email" class="form-control" id="newsletter1" placeholder="Email Address" style="box-shadow: none; border-color:#045B53; height:65px" autocomplete="off">
              </div>
              <button class="btn btn-custom-2 mt-4" type="submit">Send</button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    
    {{-- End Questions --}}
    
    <!-- footer -->
    <div class="footer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="300">
    <div class="container border-top">
      <footer class="py-5">
        <div class="row justify-content-center">

          <div class="col-6 col-md-2 mb-3">
            <h5>Menu</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="/elearning" class="nav-link p-0 text-muted">E-Learning</a></li>
              <li class="nav-item mb-2"><a href="/bootcamp" class="nav-link p-0 text-muted">Bootcamp</a></li>
              <li class="nav-item mb-2"><a href="/quiz" class="nav-link p-0 text-muted">Quiz</a></li>
            </ul>
          </div>

          <div class="col-12 col-md-4 mb-3">
            <h5>Find Us</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@learnifie</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">learnifie@gmail.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">(021) 39500300</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pakuwon Tower, Jl. Raya Casablanca No.Raya, RT.3/RW.14, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870</a></li>
            </ul>
          </div>
          <div class="col-md-5 offset-md-1 mb-3">
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
          <p>&copy; 2023 Learnifie, Inc. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
    <!-- End footer -->


  </body>
  <script>
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navLinks.forEach(navLink => navLink.classList.remove('active'));
        link.classList.add('active');
      });
    });
  </script>

  <script>
      function move() {
          window.location.href = "/elearning#chatbot-section";
      }
  </script>
</html>