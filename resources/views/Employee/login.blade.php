<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ - FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f0f4ff; /* สีพื้นหลัง */
        }
        .login-card {
            max-width: 600px; /* ความกว้างสูงสุดของ Card */
            margin: auto; /* ทำให้ Card อยู่กลางหน้า */
            margin-top: 100px; /* ระยะห่างจากด้านบน */
        }
        .login-card .col-md-4 {
            display: flex; /* ใช้ Flexbox */
            justify-content: center; /* จัดแนวแนวนอน */
            align-items: center; /* จัดแนวแนวตั้ง */
        }

        .login-image {
            max-width: 100%; /* ปรับขนาดของภาพให้เต็มความกว้าง */
            max-height: 100%; /* ปรับขนาดของภาพให้เต็มความสูง */
            object-fit: cover; /* รักษาสัดส่วนของภาพและทำให้ภาพไม่ยืด */
            border-radius: 0.25rem 0 0 0.25rem; /* ทำให้มุมภาพโค้ง */
         }
        .btn-custom {
            background-color: #DC5F00; /* ปรับสีตามต้องการ */
            color: white;
        }
        .btn-custom:hover {
            background-color: #CF0A0A;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card login-card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/Car Repair.png') }}" class="img-fluid login-image" alt="Login Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-center">เข้าสู่ระบบพนักงาน</h5>
                    <p class="text-center">กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อ</p>
                    
                    <hr>

                    <!-- แสดงข้อความข้อผิดพลาดที่นี่ -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="/Employee/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">จดจำฉัน</label>
                            <a href="#" class="float-end">ลืมรหัสผ่าน?</a>
                        </div>
                        
                        <button type="submit" class="btn btn-custom w-100">เข้าสู่ระบบ</button>
                    </form>
                    
                    <div class="mt-3 text-center">
                        <p>ยังไม่มีบัญชีใช่ไหม? <a href="/Employee/register">ลงทะเบียน</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
