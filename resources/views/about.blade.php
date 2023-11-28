<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- End AOS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="assets/learnifie-icon.png">
    <title>About Us | Learnifie</title>
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

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mt-5" style="color: #045B53;"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="400">What Is <b>Learnifie?</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-5"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                    <img src="assets/about.png" alt="" width="600">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <p style="font-size:20px;"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">Learnifie is a comprehensive e-learning platform that offers a holistic learning experience from basic concepts to practical applications. Through instructional videos, practical assignments, and the involvement of professional mentors, Learnifie ensures that theoretical knowledge is applied in real-world contexts.</p>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 20px;"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">The Bootcamp feature creates a collaborative learning community, while quiz features stimulate concept reinforcement. The presence of mentors provides industry insights and personal guidance, and a responsive chatbot assistant offers instant support. Project collaboration enriches the learning experience, while personalized learning utilizes user data to deliver more relevant content. With a comprehensive, adaptive, and interactive approach, Learnifie adds significant value to users on their learning journey.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Reason -->
    <div class="reason">
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <h2>Why <b style="color: #045B53;">Learnifie</b></h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500">
            <h4><b>Comprehensive Learning Experience</b></h4>
            <p>Learnifie presents learning materials from basic concepts to practical applications, ensuring that theoretical knowledge is applied in real-world contexts.</p>
          </div>
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
            <h4><b>Involvement of Professional Mentors</b></h4>
            <p>The presence of professional mentors not only provides industry insights but also valuable personal guidance, helping students connect theory with practical experiences.</p>
          </div>
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
            <h4><b>Quizzes for Reinforcement</b></h4>
            <p>The quiz feature serves not only as a progress measurement tool but also as a dynamic means to deepen understanding, ensuring comprehension of concepts before moving on to the next stage.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1100">
            <h4><b>Responsive Chatbot Assistant</b></h4>
            <p>The chatbot assistant provides instant support in overcoming learning obstacles, creating a user-friendly learning environment and reducing frustration.</p>
          </div>
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <h4><b>Project Collaboration</b></h4>
            <p>The project collaboration feature enables users to work together to solve problems and produce creative work, enriching their learning experience.</p>
          </div>
          <div class="col-md-4 advantage" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
            <h4><b>Personalized Learning</b></h4>
            <p>Using user data, the personalized learning feature delivers more relevant content tailored to the unique needs of each user, enhancing the effectiveness of learning.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Reason -->

    <!-- Footer -->
    <div class="footer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="300">
      <div class="container border-top">
        <footer class="py-5">
          <div class="row justify-content-center">
  
            <div class="col-6 col-md-2 mb-3">
              <h5>Menu</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E-Learning</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bootcamp</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Quiz</a></li>
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
    <!-- End Footer -->
</body>
</html>