<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIXAR Admin</title>
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
        .card-header {
            background-color: gainsboro;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .sidebar {
                height: auto; /* ทำให้ sidebar สูงตามเนื้อหาภายใน */
                padding: 10px;
            }
            .navbar {
                padding: 10px; /* ลด padding สำหรับ navbar */
            }
        }
        .navbar-brand img {
            height: 50px; /* กำหนดความสูงที่คุณต้องการ */
            width: auto;  /* ปรับความกว้างโดยอัตโนมัติตามสัดส่วน */
            padding-left: 10px;
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
                    <a class="nav-link" href="#">ยินดีต้อนรับ : admin</a>
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
                <a href="/admin/table"><i class="fa fa-pie-chart"></i> ตารางงานพนักงาน</a>
                <a href="/admin/edit"><i class="fa fa-user"></i> จัดการข้อมูลพนักงาน</a>
            </nav>

            <div class="col-md-10 main-content">
                <h1>รายชื่อพนักงาน</h1>
                <div class="table-responsive"> <!-- ทำให้ตารางเลื่อนในมือถือ -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>รหัส</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->surname }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td><a href="{{ route('admin.edit', $employee->id) }}" class="btn btn-warning">แก้ไข</a></td>
                                <td>
                                    <button class="btn btn-danger" onclick="confirmDelete({{ $employee->id }})">ลบ</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal สำหรับการยืนยันการลบ -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">ยืนยันการลบ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    คุณแน่ใจหรือไม่ว่าต้องการลบพนักงานนี้?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <form id="deleteForm" method="POST" action="" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(employeeId) {
            const form = document.getElementById('deleteForm');
            form.action = '/admin/employees/' + employeeId;
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        }
    </script>
</body>
</html>
