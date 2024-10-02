<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน - FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px; /* ความกว้างสูงสุดของฟอร์ม */
            margin: auto; /* ทำให้ฟอร์มอยู่กลางหน้า */
            margin-top: 100px; /* ระยะห่างจากด้านบน */
            background-color: white; /* พื้นหลังของฟอร์ม */
            padding: 20px; /* ระยะห่างภายใน */
            border-radius: 10px; /* มุมมน */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* เงา */
        }
        .btn-custom {
            background-color: #DC5F00;
            color: white;
        }
        .btn-custom:hover {
            background-color: #CF0A0A;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="form-container">
        <h1>แก้ไขข้อมูลพนักงาน</h1>

        <form action="{{ url('/admin/employees/'.$employee->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- ใช้เพื่อส่งข้อมูลแบบ PUT -->

            <div class="mb-3">
                <label for="serviceType" class="form-label">ประเภทการทำงาน</label>
                <select class="form-select" id="serviceType" name="serviceType" required disabled>
                    <option value="1" {{ $employee->service_type == 1 ? 'selected' : '' }}>ช่างซ่อมรถยนต์ (Automotive Technician)</option>
                    <option value="2" {{ $employee->service_type == 2 ? 'selected' : '' }}>ช่างซ่อมรถจักรยานยนต์ (Motorcycle Mechanic)</option>
                    <option value="3" {{ $employee->service_type == 3 ? 'selected' : '' }}>ช่างซ่อมรถยนต์ไฟฟ้า (Electric Vehicle Technician)</option>
                </select>
                <small class="text-muted">ไม่สามารถเปลี่ยนประเภทการทำงานได้</small>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="name" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
                </div>
                <div class="col-md-6">
                    <label for="surname" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $employee->surname }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
            </div>

            <div class="mb-3">
                <label for="serviceArea" class="form-label">พื้นที่ให้บริการ</label>
                <select class="form-select" id="serviceArea" name="serviceArea" required disabled>
                    <option value="1" {{ $employee->service_area == 1 ? 'selected' : '' }}>ขอนแก่น</option>
                    <option value="2" {{ $employee->service_area == 2 ? 'selected' : '' }}>นครราชสีมา</option>
                    <option value="3" {{ $employee->service_area == 3 ? 'selected' : '' }}>นครพนม</option>
                    <option value="4" {{ $employee->service_area == 4 ? 'selected' : '' }}>มหาสารคาม</option>
                    <option value="5" {{ $employee->service_area == 5 ? 'selected' : '' }}>กรุงเทพฯ</option>
                </select>
                <small class="text-muted">ไม่สามารถเปลี่ยนพื้นที่บริการได้</small>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-custom">บันทึกการเปลี่ยนแปลง</button>
                <a href="{{ route('admin.repair') }}" class="link-primary align-self-center">กลับไปยังหน้า Repair</a>
            </div>
        </form>

        <!-- แสดงข้อความยืนยัน -->
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
