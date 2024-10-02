<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองช่าง</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa;
        }
        .header {
            background-color: #DC5F00;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .service-container {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: white;
            margin: 20px auto;
            max-width: 600px;
        }
        .btn-custom {
            background-color: #DC5F00;
            color: white;
        }
        .btn-custom:hover {
            background-color: #CF0A0A;
        }
        .site-footer {
            background-color: #f8f9fa;
            padding: 45px 0 20px;
            font-size: 14px;
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
        .navbar-brand img {
            height: 60px; /* กำหนดความสูงที่คุณต้องการ */
            width: auto;  /* ปรับความกว้างโดยอัตโนมัติตามสัดส่วน */
        }
    </style>
</head>
<body>

   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="home.html" class="navbar-brand">
            <img src="{{ asset('img/Fixar_logo.png') }}" class="navbar-brand img-fluid-round" style="max-width: 150px;" alt="Fixar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Navbar Links -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                </li>
                <!-- Shop Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/services" id="navbarShop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        บริการของเรา
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarShop">
                        <li><a class="dropdown-item" href="/services">บริการของเรา</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Bestseller.html">แจ้งซ่อม</a></li>
                        <li><a class="dropdown-item" href="New.html">จองช่าง</a></li>
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

<div class="container mt-5">
    <h1>จองช่าง</h1>
    <p>กรุณาเลือกช่างที่ต้องการจอง:</p>

    <div class="row">
        @foreach ($technicians as $technician)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/technician_placeholder.png') }}" class="card-img-top" alt="{{ $technician->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $technician->name }} {{ $technician->surname }}</h5>
                        <p class="card-text">โทรศัพท์: {{ $technician->phone }}</p>
                        <p class="card-text">อีเมล: {{ $technician->email }}</p>
                        <p class="card-text">ประเภทการทำงาน: {{ $technician->serviceType->type_name }}</p> <!-- แสดงประเภทการทำงาน -->
                        <a href="{{ route('bookdetail', $technician->id) }}" class="btn btn-primary">จอง</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
