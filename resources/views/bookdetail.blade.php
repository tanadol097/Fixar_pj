<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองช่าง - {{ $technician->name }}</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body   {
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
    <h1>จองช่าง: {{ $technician->name }} {{ $technician->surname }}</h1>
    <p>โทรศัพท์: {{ $technician->phone }}</p>
    <p>อีเมล: {{ $technician->email }}</p>
    
    <form method="POST" action="{{ route('confirmBooking') }}">
        @csrf
        <input type="hidden" name="technician_id" value="{{ $technician->id }}">

        <!-- อัปโหลดรูปภาพ -->
        <div class="mb-3">
            <label for="issueImage" class="form-label">อัปโหลดรูปภาพปัญหา (ถ้ามี)</label>
            <input type="file" class="form-control-file" id="issueImage" name="issueImage">
        </div>
        
        <div class="mb-3">
            <label for="issueDetails" class="form-label">รายละเอียดปัญหา</label>
            <textarea class="form-control" id="issueDetails" name="issueDetails" rows="4" placeholder="โปรดอธิบายปัญหาที่พบ" required></textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">วันที่ต้องการจอง</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">เวลาที่ต้องการจอง</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่สำหรับให้บริการ</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="กรุณากรอกที่อยู่" required>
        </div>

        <button type="submit" class="btn btn-primary">ยืนยันการจอง</button>
    </form>
</div>
 <!-- Modal สำหรับการจองสำเร็จ -->
 <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">สำเร็จ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // แสดง modal ถ้ามีข้อความ success
    @if(session('success'))
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    @endif
</script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
