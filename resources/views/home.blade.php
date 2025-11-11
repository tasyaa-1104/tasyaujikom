<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Furni — Modern Interior Design Studio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg:#365249;
      --muted:rgba(255,255,255,0.35);
      --accent:#f2b82b;
      --white:#ffffff;
      --container:1200px;
    }

    *{box-sizing:border-box}
    html,body{margin:0;padding:0;font-family:'Poppins',sans-serif;overflow-x:hidden;}

    /* WRAPPER */
    .wrap{max-width:var(--container);margin:0 auto;padding:48px 32px;}

    /* NAVBAR */
    .nav{display:flex;align-items:center;justify-content:space-between;}
    .logo{font-weight:800;font-size:36px;color:var(--white);}
    .nav-menu{display:flex;gap:28px;align-items:center}
    .nav-menu a{color:rgba(255,255,255,0.65);text-decoration:none;font-weight:600}
    .nav-menu a.active{color:var(--white);position:relative}
    .nav-menu a.active::after{content:"";position:absolute;left:0;right:0;height:4px;background:var(--accent);bottom:-14px;border-radius:4px}
    .nav-icons{display:flex;gap:18px;align-items:center;color:rgba(255,255,255,0.9)}
    .nav-icons svg{width:20px;height:20px}

    /* HERO SECTION */
    .hero-section {
      background: var(--bg);
      color: var(--white);
      padding-bottom: 100px;
    }
    .hero{display:grid;grid-template-columns:1fr 560px;align-items:center;gap:32px;min-height:calc(100vh - 120px);position:relative}
    .hero-left{padding-right:40px}
    h1{font-size:72px;line-height:0.95;margin:0 0 22px;font-weight:800}
    p.lead{color:var(--muted);max-width:620px;font-size:18px;line-height:1.8;margin-bottom:28px}
    .cta{display:flex;gap:18px}
    .btn{padding:16px 34px;border-radius:40px;font-weight:700;border:0;cursor:pointer}
    .btn-primary{background:var(--accent);color:#222}
    .btn-outline{background:transparent;border:2px solid rgba(255,255,255,0.18);color:var(--white)}
    .hero-right{position:relative;height:520px}
    .sofa{position:absolute;right:-40px;bottom:0;max-width:820px;height:auto;filter:drop-shadow(0 18px 28px rgba(0,0,0,0.45))}
    .dots{position:absolute;right:160px;top:120px;display:grid;grid-template-columns:repeat(6,12px);gap:18px}
    .dots span{width:8px;height:8px;border-radius:999px;background:rgba(255,255,255,0.06);display:block}

    /* PRODUCT SECTION */
    .products-section{
      background:#f8f9fa;
      color:#222;
      padding:100px 0;
    }
    .products-section .container{
      max-width:1200px;
      margin:auto;
      padding:0 32px;
    }
    .products-header{
      max-width:600px;
      margin-bottom:60px;
    }
    .products-header h2{
      font-size:48px;
      font-weight:700;
      margin-bottom:18px;
    }
    .products-header p{
      color:#6c757d;
      font-size:17px;
      line-height:1.7;
    }
    .product-list{
      display:flex;
      flex-wrap:wrap;
      gap:40px;
      justify-content:center;
    }
    .product-item{
      text-align:center;
      flex:1 1 280px;
    }
    .product-item img{
      width:260px;
      height:auto;
      margin-bottom:20px;
    }
    .product-item h3{
      font-weight:600;
      font-size:20px;
      margin-bottom:8px;
    }
    .product-item p{
      font-weight:700;
      color:#000;
    }
    .btn-dark{
      background:#222;
      color:#fff;
      padding:12px 28px;
      border:none;
      border-radius:40px;
      cursor:pointer;
      font-weight:600;
    }

    /* WHY CHOOSE US SECTION */
    .why-choose-us {
      background: #f3f5f4;
      color: #222;
      padding: 100px 0;
    }
    .why-choose-us .container {
      max-width: 1200px;
      margin: auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 60px;
      padding: 0 32px;
    }
    .choose-left h2 {
      font-size: 48px;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .choose-left .desc {
      color: #6c757d;
      font-size: 17px;
      line-height: 1.7;
      margin-bottom: 40px;
    }
    .features {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px 32px;
    }
    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
    }
    .feature-item .icon {
      font-size: 28px;
      background: rgba(0, 0, 0, 0.05);
      padding: 12px;
      border-radius: 50%;
    }
    .feature-item h4 {
      font-size: 17px;
      margin: 0 0 6px;
      font-weight: 700;
    }
    .feature-item p {
      margin: 0;
      color: #6c757d;
      line-height: 1.5;
      font-size: 15px;
    }
    .choose-right {
      position: relative;
    }
    .choose-right .dots-bg {
      position: absolute;
      left: -40px;
      top: -40px;
      display: grid;
      grid-template-columns: repeat(6, 12px);
      gap: 12px;
    }
    .choose-right .dots-bg span {
      width: 8px;
      height: 8px;
      background: #f2b82b;
      border-radius: 999px;
      display: block;
    }
    .choose-right img {
      width: 100%;
      border-radius: 20px;
    }
  </style>
</head>

<body>

  <!-- HERO SECTION -->
  <section class="hero-section">
    <div class="wrap">
      <header class="nav">
        <div class="logo">Nutri.</div>
        <nav class="nav-menu">
          <a class="active" href="#">Home</a>
          <a href="#">Shop</a>
          <a href="#">About us</a>
          <a href="#">Services</a>
          <a href="#">Blog</a>
          <a href="#">Contact us</a>
        </nav>
        <div class="nav-icons">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2l1.5 4.5"></path>
            <path d="M20 7H8l-1 2-2 5h13.5"></path>
            <circle cx="10.5" cy="20" r="1"></circle>
            <circle cx="18" cy="20" r="1"></circle>
          </svg>
        </div>
      </header>

      <main class="hero">
        <div class="hero-left">
          <h1>Modern Interior Design<br>Studio</h1>
          <p class="lead">
            Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
          </p>
          <div class="cta">
            <button class="btn btn-primary">Shop Now</button>
            <button class="btn btn-outline">Explore</button>
          </div>
        </div>

        <div class="hero-right">
          <div class="dots">
            <span></span><span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span><span></span>
          </div>
          <img class="sofa" src="{{ asset('image/gambar1.jpg') }}" alt="sofa">
        </div>
      </main>
    </div>
  </section>

  <!-- PRODUCTS SECTION -->
  <section class="products-section">
    <div class="container">
      <div class="products-header">
        <h2>Crafted with excellent material.</h2>
        <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
        <button class="btn-dark">Explore</button>
      </div>

      <div class="product-list">
        <div class="product-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a1/Chair_1.jpg" alt="Nordic Chair">
          <h3>Nordic Chair</h3>
          <p>$50.00</p>
        </div>
        <div class="product-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Modern_Lounge_Chair.jpg" alt="Kruzo Aero Chair">
          <h3>Kruzo Aero Chair</h3>
          <p>$78.00</p>
        </div>
        <div class="product-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Green_velvet_chair.jpg" alt="Ergonomic Chair">
          <h3>Ergonomic Chair</h3>
          <p>$43.00</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US SECTION -->
  <section class="why-choose-us">
    <div class="container">
      <div class="choose-left">
        <h2>Why Choose Us</h2>
        <p class="desc">
          Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
          vulputate velit imperdiet dolor tempor tristique.
        </p>

        <div class="features">
          <div class="feature-item">
            <div class="icon">🚚</div>
            <div class="text">
              <h4>Fast & Free Shipping</h4>
              <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="icon">🛍️</div>
            <div class="text">
              <h4>Easy to Shop</h4>
              <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="icon">💬</div>
            <div class="text">
              <h4>24/7 Support</h4>
              <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="icon">🔁</div>
            <div class="text">
              <h4>Hassle Free Returns</h4>
              <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="choose-right">
        <div class="dots-bg">
          <span></span><span></span><span></span><span></span><span></span><span></span>
          <span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Modern_living_room.jpg" alt="interior" />
      </div>
    </div>
  </section>

</body>
</html>
