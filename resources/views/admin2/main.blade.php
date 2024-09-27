<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการคลังข้อมูลงานวิจัย</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300&amp;subset=thai" rel="stylesheet">

    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
        .navbar {
            background-color: #a3aea6; 
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
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">FIXAR</a>
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
                <a href="#"><i class="fa fa-pie-chart"></i> Dashboard</a>
                <a href="#"><i class="fa fa-user"></i> จัดการข้อมูลผู้ใช้งาน</a>
                <a href="#"><i class="fa fa-bell"></i> ข้อมูล</a>
            </nav>

            <!-- Main content -->
            <main class="col-md-10 main-content">
                <div>
                    <h3>งานที่แจ้งซ่อม</h3>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        ข้อมูลประจำตัวผู้ใช้งาน
                    </div>
                    <div class="card-body text-center">
                        <h5>ชื่อ - นามสกุล: admin</h5>
                        <hr>
                        <h5>ระดับสิทธิ์การใช้งาน: admin</h5>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <h2>Subject List</h2>
    {{-- <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Credit</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->credit }}</td>
                    <td>{{ $subject->faculty }}</td>
                    <td>
                        <form method="GET" action="{{ url('/subject/delete/'. $subject->id) }}" onsubmit="return confirmDelete()">
                            @csrf
                            <button type="delete" class="button-delete">Delete</button>
                        </form>
                        <script>
                        function confirmDelete() {
                        return confirm('Are you sure you want to delete this subject?');
                        }
                    </script>                               
                    </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
