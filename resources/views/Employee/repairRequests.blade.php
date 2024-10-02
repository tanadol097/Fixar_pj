<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การแจ้งซ่อม</title>
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
            height: 100vh;
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
                <a href="/employee/dashboard"><i class="fa fa-home"></i> หน้าหลัก</a>
                <a href="/employee/repairRequests"><i class="fa fa-pie-chart"></i> รับงาน</a>
                <a href="/employee/table"><i class="fa fa-user"></i> ตารางงาน</a>
            </nav>
            <div class="container mt-5">
                <div class="header">
                    <h1>หน้ารับงาน</h1>
                </div>
                <div class="row">
                    @foreach ($repairRequests as $request)
                    <div class="col-md-4 mb-4"> <!-- เพิ่ม margin-bottom เพื่อให้มีระยะห่างระหว่างการ์ด -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $request->user ? $request->user->name : 'หน่วง' }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $request->phone }}</h6>
                                <p class="card-text">
                                    <strong>ประเภทของรถ:</strong> {{ $request->vehicle_type }}<br>
                                    <strong>รายละเอียดปัญหา:</strong> {{ $request->issue_details }}<br>
                                    <strong>วันที่นัดหมาย:</strong> {{ $request->appointment_datetime }}<br>
                                    <strong>สถานะ:</strong> {{ $request->status }}
                                </p>
                                <div class="d-flex justify-content-center"> <!-- จัดกลางปุ่ม -->
                                    <a href="{{ route('employee.acceptRequest', $request->id) }}" class="btn btn-custom">รับงาน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
    </div>
   
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
