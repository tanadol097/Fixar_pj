<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งซ่อมรถ | FIXAR</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-home.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            height: 60px;
            /* กำหนดความสูงที่คุณต้องการ */
            width: auto;
            /* ปรับความกว้างโดยอัตโนมัติตามสัดส่วน */
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu:hover .dropdown-menu {
            display: block;
            /* แสดง submenu เมื่อ hover */
            left: 100%;
            /* ให้อยู่ทางขวาของเมนูหลัก */
            top: 0;
            /* แนวนอน */
        }

        .dropdown-menu {
            display: none;
            /* ปิดการแสดงผลโดยค่าเริ่มต้น */
        }
        
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="home.html" class="navbar-brand">
                <img src="{{ asset('img/Fixar_logo.png') }}" class="navbar-brand img-fluid-round"
                    style="max-width: 150px;" alt="Fixar Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!-- Navbar Links -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">หน้าหลัก</a>
                    </li>
                    <!-- บริการของเรา Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarShop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            บริการของเรา
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarShop">
                            <li><a class="dropdown-item" href="/services">บริการทั้งหมด</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="/report">แจ้งซ่อม</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('repair.history') }}">ประวัติการแจ้งซ่อม</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="booking">จองช่าง</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/services/repair">ประวัติการจอง</a></li>
                                </ul>
                            </li>
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
                    @if (Auth::check())
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
    <div class="container">
        <div class="form-container">
            <h2 class="mb-4">แจ้งซ่อมรถ</h2>
            <form action="/report" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Other input fields... -->
                
                <div class="mb-3">
                    <label for="issueImage" class="form-label">อัปโหลดรูปภาพปัญหา (ถ้ามี)</label>
                    <input type="file" class="form-control-file" id="issueImage" name="issueImage">
                </div>

                @if (Auth::check())
                    <label for="name">ชื่อ:</label>
                    <input type="text" id="name" name="name"
                        value="{{ old('name', Auth::user()->name ?? '') }}" required><br><br>

                    <label for="phone">เบอร์โทรศัพท์:</label>
                    <input type="text" id="phone" name="phone"
                        value="{{ old('phone', Auth::user()->phone ?? '') }}" required><br><br>

                   
                @else
                    <div class="mb-3">
                        <label for="name" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="เบอร์ติดต่อ" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="ที่อยู่" required>
                    </div>
                @endif

                <!-- ประเภทของรถ -->
                <div class="mb-3">
                    <label for="vehicleType" class="form-label">ประเภทของรถ</label>
                    <select class="form-select" id="vehicleType" name="vehicleType" required>
                        <option value="">เลือกประเภทของรถ</option>
                        <option value="car">รถยนต์</option>
                        <option value="motorcycle">รถจักรยานยนต์</option>
                        <option value="electric_vehicle">รถยนต์ไฟฟ้า</option>
                    </select>
                </div>


                <!-- รายละเอียดปัญหา -->
                <div class="mb-3">
                    <label for="issueDetails" class="form-label">รายละเอียดปัญหา</label>
                    <textarea class="form-control" id="issueDetails" name="issueDetails" rows="4"
                        placeholder="โปรดอธิบายปัญหาที่พบ" required></textarea>
                </div>
                

                <!-- พื้นที่ให้บริการ -->
                <div class="mb-3">
                    <label for="serviceArea" class="form-label">พื้นที่ให้บริการ</label>
                    <select class="form-select" id="serviceArea" name="serviceArea" required>
                        <option value="">เลือกพื้นที่ให้บริการ</option>
                        <option value="1">ขอนแก่น</option>
                        <option value="2">นครราชสีมา</option>
                        <option value="3">นครพนม</option>
                        <option value="4">มหาสารคาม</option>
                        <option value="5">กรุงเทพฯ</option>
                    </select>
                </div>

                <!-- ที่อยู่สำหรับให้บริการ -->
                <div class="mb-3">
                    <label for="serviceAddress" class="form-label">ที่อยู่สำหรับให้บริการ</label>
                    <input type="text" class="form-control" id="serviceAddress" name="serviceAddress"
                        placeholder="กรุณากรอกที่อยู่" required>
                </div>

                <!-- วันที่นัดหมาย -->
                <div class="mb-3">
                    <label for="appointmentDate" class="form-label">วันที่ต้องการนัดหมาย</label>
                    <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
                </div>

                <!-- เวลาที่นัดหมาย -->
                <div class="mb-3">
                    <label for="appointmentTime" class="form-label">เวลาที่ต้องการนัดหมาย</label>
                    <input type="time" class="form-control" id="appointmentTime" name="appointmentTime" required>
                </div>

                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="btn btn-custom">ส่งคำขอแจ้งซ่อม</button>
            </form>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
