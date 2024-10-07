<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการแจ้งซ่อม - FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa; /* Background color */
        }
        .header {
            background-color: #DC5F00; /* Header background color */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .table-container {
            background-color: white; /* Table background color */
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Shadow */
        }
        .table th, .table td {
            vertical-align: middle; /* Vertical alignment of data */
        }
        

        

        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!-- Navbar Links -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">หน้าหลัก</a>
                    </li>
                
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
        <div class="header">
            <h1>ประวัติการแจ้งซ่อม</h1>
        </div>
        <div class="table-container mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>ประเภทของรถ</th>
                        <th>รายละเอียดปัญหา</th>
                        <th>วันที่นัดหมาย</th>
                        <th>เวลานัดหมาย</th>
                        <th>สถานะ</th>
                        <th>ดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->name }}</td> <!-- Display the name -->
                        <td>{{ $report->phone }}</td> <!-- Display the phone -->
                        <td>{{ $report->vehicle_type }}</td> <!-- Display the vehicle type -->
                        <td>{{ $report->issue_details }}</td> <!-- Display the issue details -->
                        <td>{{ $report->appointment_date }}</td> <!-- Directly display appointment datetime from report -->
                        <td>{{ $report->appointment_time }}</td>
                        <td>{{ $report->status }}</td> <!-- Directly display status from report -->
                        <td>
                            <a href="{{ route('review', $report->id) }}" class="btn btn-success">รีวิว</a> <!-- Review button -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
