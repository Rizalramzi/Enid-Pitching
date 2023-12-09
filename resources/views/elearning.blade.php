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
    <link rel="stylesheet" href="{{ asset('css/elearning.css')}}">
    <link rel="icon" href="assets/learnifie-icon.png">
    <title>E - Learning | Learnifie</title>

    <!-- System ChatBot -->
    @if (Auth::check())
    <script>
      function sleep(ms) {
          return new Promise(resolve => setTimeout(resolve, ms));
      }

      async function typeMessage(message, elementId, className) {
          var chatbox = document.getElementById(elementId);
          var newMessage = document.createElement("div");
          newMessage.className = className;
          chatbox.appendChild(newMessage);

          for (let i = 0; i < message.length; i++) {
              newMessage.innerHTML += `<span class="typing-animation">${message.charAt(i)}</span>`;
              await sleep(15);
          }
      }

      async function sendMessage() {
          var userInput = document.getElementById("userInput");
          var message = userInput.value.trim();

          if (message === "") {
              alert("Please enter a message.");
              return;
          }

          appendMessage("{{ Auth::user()->name }}", message, "user-message");
          await sleep(500);
          typeMessage(generateResponse(message), "chatbox", "chatbot-message");
          userInput.value = "";
      }

      function appendMessage(sender, message, className) {
          var chatbox = document.getElementById("chatbox");
          var newMessage = document.createElement("div");
          newMessage.innerHTML = `<strong>${sender}:</strong> ${message}`;
          newMessage.className = className;
          chatbox.appendChild(newMessage);
      }

      function generateResponse(userMessage) {
          // Contoh respons sederhana
          if (userMessage.includes("halo")) {
              return "Halo! Dengan BotFie Disini! Ada yang bisa dibantu?";
          } else if (userMessage.includes("apa itu html")) {
              return "HTML, singkatan dari HyperText Markup Language, adalah bahasa markah standar untuk membuat halaman web. Ini menyediakan seperangkat tag yang mendefinisikan struktur dan konten halaman web, memungkinkan browser web untuk menafsirkan dan menampilkan halaman dengan benar. HTML bukan bahasa pemrograman, melainkan bahasa markah yang digunakan untuk menggambarkan konten dan struktur halaman web.";
          } else if (userMessage.includes("siapa presiden pertama indonesia")){
            return "Presiden Pertama Indonesia Adalah Ir. Soekarno";
          } else if (userMessage.includes("bagaimana cara print di python")){
            return "Di Python, Anda dapat menggunakan pernyataan print untuk mencetak output ke konsol atau terminal. Format umum dari perintah 'print'";
          }else if (userMessage.includes("apa itu web development")){
            return "Web development, atau pengembangan web, merujuk pada proses pembuatan dan pemeliharaan situs web atau aplikasi web. Ini melibatkan serangkaian tugas yang mencakup desain, pengembangan, pengujian, dan pemeliharaan situs atau aplikasi tersebut. Pengembangan web dapat mencakup berbagai aspek, termasuk tampilan (frontend) dan logika bisnis (backend) dari suatu situs web atau aplikasi."
          }else {
            return "GAADA! yang bener kalo input!";
          }
      }
  </script>
  @endif
  <!-- End System ChatBot -->

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
                  <a class="nav-link " href="/">Home</a></li>
                <li class="nav-item">
                  <a class="nav-link active" href="/elearning">E-Learning</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/bootcamp">Bootcamp</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/quiz">Quiz</a></li>
              </ul>
              <ul class="navbar-nav ms-auto">
                <li>
                  @auth
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
              @endauth
            </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
<!-- End Nav -->

<!-- E-Learning -->
<div class="learn">
    <div class="container">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-6 mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500">
                <img src="assets/model3.png" alt="" width="400" class="img-model3">
            </div>
            <div class="col-md-6 mt-5">
            <h2 style="color: #045B53;"data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="500"><b>Learn With Learnifie
            & Achieve a Successful Future</b></h2>
            <p class="mt-3"data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="700">We believe that digital skills are the key to success in this ever-changing world. Therefore, Learnifie is on a mission to help individuals unlock their full potential through focused and relevant learning.</p>
            <a href="#material" class="btn btn-custom mt-3"data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="900">Browse All Courses</a>
            </div>
        </div>
    </div>
</div>
<!-- End E-Learning -->

<!-- Material -->
<div class="material" id="material">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                <h3 style="color: #045B53;"><b>Upgrade Your Skill With Learnifie</b></h3>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="/elearning/digital-marketing"><img src="assets/digital-marketing.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="500"></a>
          </div>
          <div class="col-md-4">
            <a href="/elearning/web-development"><img src="assets/web-dev.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"></a>
          </div>
          <div class="col-md-4">
            <a href="/elearning/artificial-intelligence"><img src="assets/ai.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="700"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="/elearning/uiux"><img src="assets/uiux.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="500"></a>
          </div>
          <div class="col-md-4">
            <a href="/elearning/graphic-design"><img src="assets/graphic-design.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"></a>
          </div>
          <div class="col-md-4">
            <a href="/elearning/mobile-app-developer"><img src="assets/mobile-app-dev.png" class="rounded mx-auto d-block mt-5 learn__material" width="250" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="700"></a>
          </div>
        </div>
    </div>
</div>
<!-- End Material -->

<!-- ChatBot -->
@if (Auth::check())
<div class="chatbot-container" id="chatbot-section">
  <div class="container">
    <h3 style="color: #045B53;" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500"><b>Chat With BotFie</b></h3>
      <div id="chatbox" class="mb-3 mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
        <h5 style="color: #045B53;" class="text-center"><b>Learnifie.</b></h5>
      </div>
      <div id="inputBox" class="form-inline">
          <input type="text" id="userInput" class="form-control mr-2 mt-2" placeholder="Ask BotFie!" style="box-shadow: none; border-color:#045B53;" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
          <button onclick="sendMessage()" class="btn btn-custom mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1100">Send</button>
      </div>
  </div>
</div>
@else
<div class="chatbot-container" id="chatbot-section">
  <div class="container mt-3">
    <div class="alert alert-success" role="alert">
    Anda perlu <a href="{{ route('login') }}">login</a> terlebih dahulu untuk menggunakan chatbot.
    </div>
  </div>
</div>
@endif
<!-- End ChatBot -->

<!-- Footer -->
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
<!-- End Footer -->
</div>
</body>
</html>