<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการงานที่ได้รับการยืนยัน</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300&amp;subset=thai" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
        .navbar {
            background-color: #DC5F00; 
        }
        .sidebar {
            background-color: #343a40;
            height: 150vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }
        .main-content {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .user-info {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .card {
            margin-top: 20px;
        }
        .card-header{
            background-color: gainsboro;
        }
        .navbar-brand img {
            height: 60px; /* กำหนดความสูงที่คุณต้องการ */
            width: auto;  /* ปรับความกว้างโดยอัตโนมัติตามสัดส่วน */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="home.html" class="navbar-brand">
            <img src="{{ asset('img/Fixar_logo.png') }}" class="navbar-brand img-fluid-round" style="max-width: 150px;" alt="Fixar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">ยินดีต้อนรับ : พนักงาน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
                <a href="#"><i class="fa fa-home"></i> หน้าหลัก</a>
                <a href="/employee/repairRequests"><i class="fa fa-pie-chart"></i> รับงาน</a>
                <a href="#"><i class="fa fa-user"></i> ตารางงาน</a>
            </nav>


<div class="container mt-5">
    <div class="header">
        <h1>ตารางงาน</h1>
        <p>แสดงรายการงานที่ได้รับการยืนยันทั้งหมด</p>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ชื่อผู้แจ้ง</th>
                <th>เบอร์โทรศัพท์</th>
                <th>ประเภทของรถ</th>
                <th>รายละเอียดปัญหา</th>
                <th>ราคา</th>
                <th>สถานะ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acceptedRequests as $request)
            <tr>
                <td>{{ $request->repairRequest->user ? $request->repairRequest->user->name : 'เพชร' }}</td>
                <td>{{ $request->repairRequest->phone }}</td>
                <td>{{ $request->repairRequest->vehicle_type }}</td>
                <td>{{ $request->repairRequest->issue_details }}</td>
                <td>{{ $request->price }}</td>
                <td>{{ $request->repairRequest->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
