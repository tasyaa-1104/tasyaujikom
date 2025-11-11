<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Yummy — Healthy Delicious Food</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      color: #444;
      background-color: #fff;
    }

    /* Navbar */
    .navbar {
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      font-family: 'Poppins', sans-serif;
      font-size: 28px;
      font-weight: 700;
      color: #ce1212;
    }
    .navbar-nav .nav-link {
      color: #333;
      font-weight: 500;
      margin-right: 20px;
      transition: 0.3s;
    }
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #ce1212;
    }

    /* Hero section */
    .hero {
      position: relative;
      height: 100vh;
      background: url('https://files.oaiusercontent.com/file_00000000a7dc71fa9e9a765020501ffa') no-repeat right center;
      background-size: 550px auto;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 80px;
    }

    .hero-content {
      max-width: 600px;
    }
    .hero h1 {
      font-family: 'Poppins', sans-serif;
      font-size: 56px;
      font-weight: 700;
      color: #212529;
    }
    .hero h1 span {
      color: #ce1212;
    }
    .hero p {
      margin-top: 15px;
      font-size: 18px;
      color: #555;
    }
    .btn-book {
      background-color: #ce1212;
      color: white;
      border-radius: 50px;
      padding: 10px 25px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: 0.3s;
    }
    .btn-book:hover {
      background-color: #a00d0d;
    }
    .btn-video {
      background: none;
      color: #333;
      font-weight: 600;
      margin-left: 20px;
      border: none;
      text-decoration: underline;
      cursor: pointer;
    }

    /* Menu Section */
    .menu-section {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.8s ease-in-out;
      padding: 100px 0;
    }
    .menu-section.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .menu-section p.text-muted {
      letter-spacing: 2px;
    }
    .menu-section h2 {
      font-family: 'Poppins', sans-serif;
      font-size: 36px;
      font-weight: 700;
    }
    .menu-section .nav-link {
      font-size: 18px;
      font-weight: 500;
      color: #555;
      border-bottom: 2px solid transparent;
      transition: all 0.3s;
    }
    .menu-section .nav-link.active,
    .menu-section .nav-link:hover {
      color: #ce1212;
      border-bottom: 2px solid #ce1212;
    }

    footer {
      background-color: #f9f9f9;
      text-align: center;
      padding: 30px 0;
      margin-top: 80px;
      border-top: 1px solid #eee;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Yummy<span style="color:#000;">.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Chefs</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Enjoy Your Healthy <br><span>Delicious Food</span></h1>
      <p>We serve fresh and healthy meals every day with love and passion. Book your table now and enjoy a tasty experience.</p>
      <div class="mt-4">
        <a href="#" class="btn btn-book">Book a Table</a>
        <button class="btn-video">Watch Video ▶</button>
      </div>
    </div>
  </section>

  <!-- Menu Section -->
  <section id="menu" class="menu-section text-center">
    <div class="container">
      <p class="text-muted mb-2">OUR MENU</p>
      <h2 class="fw-bold mb-5">
        Check Our <span class="text-danger">Yummy Menu</span>
      </h2>

      <!-- Tabs -->
      <ul class="nav justify-content-center border-0 mb-4">
        <li class="nav-item mx-3">
          <a class="nav-link active" href="#">Starters</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Breakfast</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Lunch</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Dinner</a>
        </li>
      </ul>

      <div class="menu-content">
        <p class="text-muted">Choose a category above to see our special dishes.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Yummy. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Scroll Animation Script -->
  <script>
    window.addEventListener("scroll", function() {
      const menuSection = document.querySelector(".menu-section");
      const sectionTop = menuSection.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      if (sectionTop < windowHeight - 100) {
        menuSection.classList.add("visible");
      }
    });
  </script>
</body>
</html>
