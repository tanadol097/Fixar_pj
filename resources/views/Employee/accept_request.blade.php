<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับงานช่าง</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
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
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="header">
        <h1>รับงาน: {{ $repairRequest->user ? $repairRequest->user->name : 'หน่วง' }}</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <h3>รายละเอียดการแจ้งซ่อม</h3>
            <ul class="list-group mb-4">
                <li class="list-group-item"><strong>เบอร์โทรศัพท์:</strong> {{ $repairRequest->phone }}</li>
                <li class="list-group-item"><strong>ประเภทของรถ:</strong> {{ $repairRequest->vehicle_type }}</li>
                <li class="list-group-item"><strong>รายละเอียดปัญหา:</strong> {{ $repairRequest->issue_details }}</li>
                <li class="list-group-item"><strong>วันที่นัดหมาย:</strong> {{ $repairRequest->appointment_datetime }}</li>
            </ul>

            <form action="{{ route('employee.confirmRequest') }}" method="POST">
                @csrf
                <input type="hidden" name="repair_request_id" value="{{ $repairRequest->id }}">

                <div class="mb-3">
                    <label for="price" class="form-label">ราคา</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">ยืนยันรับงาน</button>
                    <a href="{{ route('employee.dashboard') }}" class="btn btn-secondary">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
