<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIXAR Homepage</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
  .card-custom {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

.card-custom img {
    width: 100%;
    height: 250px; /* กำหนดความสูงของรูปภาพให้เท่ากัน */
    object-fit: cover; /* ทำให้รูปภาพเต็มพื้นที่ของการ์ดโดยไม่บิดเบี้ยว */
}

.card-custom .card-body {
    flex-grow: 1;
}

.site-footer {
    background-color: #f8f9fa;
    padding: 45px 0 20px;
    font-size: 14px;
}

.site-footer h6 {
    color: #ffffff;
    font-size: 16px;
    font-weight: bold;
    margin-top: 5px;
    margin-bottom: 20px;
}

.site-footer ul {
    list-style-type: none;
    padding-left: 0;
}

.site-footer ul li {
    margin-bottom: 10px;
}

.site-footer ul li a {
    color: #6c757d;
    text-decoration: none;
}

.site-footer ul li a:hover {
    color: #343a40;
    text-decoration: underline;
}

.copyright-text {
    margin: 0;
    color: #ffffff;
}

.social-icons {
    list-style-type: none;
    padding-left: 0;
}

.social-icons li {
    display: inline-block;
    margin-right: 10px;
}

.social-icons li a {
    color: #6c757d;
    text-decoration: none;
    font-size: 16px;
}

.social-icons li a:hover {
    color: #343a40;
}
.navbar-brand img {
    height: 60px; /* กำหนดความสูงที่คุณต้องการ */
    width: auto;  /* ปรับความกว้างโดยอัตโนมัติตามสัดส่วน */
}
.carousel-item img {
    border-radius: 15px; /* ปรับค่าให้เหมาะสมตามที่ต้องการ */
}
h2, h3 {
    font-weight: bold
}
.card {
   /* กำหนดความกว้างคงที่ของการ์ด */
    height: 100%; /* ให้การ์ดเต็มความสูง */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* จัดวาง footer ที่ด้านล่าง */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* การเปลี่ยนแปลงที่นุ่มนวล */
}

/* การเปลี่ยนแปลงเมื่อ hover */
.card:hover {
    transform: translateY(-10px); /* ยกการ์ดขึ้นเล็กน้อยเมื่อ hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* เพิ่มเงาเมื่อ hover */
}
</style>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="home" class="navbar-brand">
            <img src="{{ asset('img/Fixar_logo.png') }}" class="navbar-brand img-fluid-round" style="max-width: 150px;" alt="Fixar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Navbar Links -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">หน้าหลัก</a>
                </li>
                <!-- Shop Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" id="navbarShop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        บริการของเรา
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarShop">
                        <li><a class="dropdown-item" href="/services">บริการของเรา</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/report">แจ้งซ่อม</a></li>
                        <li><a class="dropdown-item" href="/booking">จองช่าง</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Employee/register">สมัครเป็นผู้ให้บริการ</a>
                </li>
            </ul>
            <!-- Search Form -->
            <form class="d-flex ms-3">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="ค้นหาช่าง....." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <!-- User Button -->
            <div class="ms-3">
              @if(Auth::check())
                  <span class="navbar-text">{{ Auth::user()->name }}</span>
                  <form action="{{ route('logout') }}" method="POST" class="d-inline">
                      @csrf
                      <button type="submit" class="btn btn-outline-dark">ออกจากระบบ</button>
                  </form>
              @else
                  <a href="/login" class="btn btn-outline-dark">เข้าสู่ระบบ</a>
              @endif
            </div>
        </div>
    </div>
</nav>


 

<!-- Main Section -->
<div class="container"><br>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/Fixar_hp.png') }}" class="d-block w-100" alt="Fixar homepage">
          </div>            
          <div class="carousel-item">
            <img src="{{ asset('img/Fixar_hp.png') }}" class="d-block w-100" alt="flash sale">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/Fixar_hp.png') }}" class="d-block w-100" alt="E-Book sale">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div><br>
    <div class="container">
        <center>
          <h2>บริการซ่อมรถ</h2>
          <p>บริการเกี่ยวกับรถครบวงจร โดยผู้ให้บริการใกล้บ้านคุณ
              ที่เดียวครบจัดการได้ทุกปัญหา</p>
              <a href="/services">
                <button type="button" class="btn btn-outline-danger btn-lg">จองบริการ</button>
            </a>
        </center>
        <br>
        <h3>บริการแนะนำ</h3><hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="{{ asset('img/change oil.png') }}" class="card-img-top" alt="เปลี่ยนน้ำมันเครื่อง">
                <div class="card-body">
                  <h5 class="card-title">เปลี่ยนน้ำมันเครื่อง</h5>
                  <p class="card-text">.....</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{ asset('img/change a tire.png') }}" class="card-img-top" alt="เปลี่ยนล้อรถยนต์">
                <div class="card-body">
                  <h5 class="card-title">เปลี่ยนล้อรถยนต์</h5>
                  <p class="card-text">.....</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{ asset('img/change a car battery.png') }}" class="card-img-top" alt="เปลี่ยนแบตรถยนต์">
                <div class="card-body">
                  <h5 class="card-title">เปลี่ยนแบตรถยนต์</h5>
                  <p class="card-text">......</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <footer class="site-footer">
      <div class="container">
          <div class="col-xs-5 col-md-3">
              <a href="home" class="navbar-brand">
                  <img src="{{ asset('img/Fixar_logo.png') }}" class="navbar-brand img-fluid-round"
                      style="max-width: 150px;" alt="Fixar Logo">
              </a>
          </div>
          <div class="row">
              <div class="col-sm-12 col-md-3">
                  <h6>FIXAR</h6>
                  <ul class="footer-links">
                      <li><a href="home.html">long</a></li>
                      <li><a href="New.html">New</a></li>
                      <li><a href="Promo.html">Promotion</a></li>
                  </ul>
              </div>
              <div class="col-sm-12 col-md-3">
                  <h6>Services</h6>
                  <ul class="footer-links">
                      <li><a href="ourservices">change a tire</a></li>
                      <li><a href="ourservicesl">change a car battery</a></li>
                      <li><a href="ourservices">all services</a></li>
                  </ul>
              </div>

              <div class="col-xs-5 col-md-3">
                  <h6>Support</h6>
                  <ul class="footer-links">
                      <li><a href="">About Us</a></li>
                      <li><a href="Contact_us.html">Contact Us</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                      <li><a href="Help.html">Help</a></li>
                  </ul>
              </div>
          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved</p>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
