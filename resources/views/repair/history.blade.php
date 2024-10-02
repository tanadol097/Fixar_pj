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
            background-color: #f8f9fa; /* พื้นหลัง */
        }
        .header {
            background-color: #DC5F00; /* สีพื้นหลังของส่วนหัว */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .table-container {
            background-color: white; /* สีพื้นหลังของตาราง */
            padding: 20px;
            border-radius: 10px; /* มุมมน */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* เงา */
        }
        .table th, .table td {
            vertical-align: middle; /* จัดตำแหน่งแนวตั้งของข้อมูล */
        }
    </style>
</head>
<body>

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
                        <th>สถานะ</th>
                        <th>ดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($repairRequests as $request)
                    <tr>
                        <td>{{ $request->user ? $request->user->name : 'ไม่ระบุ' }}</td>
                        <td>{{ $request->phone }}</td>
                        <td>{{ $request->vehicle_type }}</td>
                        <td>{{ $request->issue_details }}</td>
                        <td>{{ $request->appointment_datetime }}</td>
                        <td>{{ $request->status }}</td>
                        <td>
                            <a href="{{ route('review', $request->id) }}" class="btn btn-success">รีวิว</a> <!-- ปุ่มรีวิว -->
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
