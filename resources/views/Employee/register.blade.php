<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนเป็นช่างกับ FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: auto;
            /* ทำให้ฟอร์มอยู่ตรงกลาง */
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

    <div class="header">
        <h1>สมัครเป็นช่างกับ FIXAR รายได้ดี ชีวิตมั่นคง!</h1>
        <p>รับสมัครช่างประจำ | ช่างอาชีพ</p>
    </div>

    <div class="container mt-5">
        <div class="form-container">
            <h1>ลงทะเบียนพนักงาน</h1>

            <form action="/Employee/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="serviceType" class="form-label">ประเภทการทำงาน</label>
                    <select class="form-select" id="serviceType" name="serviceType" required>
                        <option value="">เลือกประเภทการทำงาน</option>
                        <option value="1">ช่างซ่อมรถยนต์ (Automotive Technician)</option>
                        <option value="2">ช่างซ่อมรถจักรยานยนต์ (Motorcycle Mechanic)</option>
                        <option value="3">ช่างซ่อมรถยนต์ไฟฟ้า (Electric Vehicle Technician)</option>
                    </select>
                </div>

                <form action="/submit-info" method="POST">
                    @csrf
                
                    @if (Auth::check())
                        <!-- หากผู้ใช้ล็อกอินแล้ว ตรวจสอบว่ามีข้อมูลที่เคยกรอกหรือไม่ -->
                        <label for="name">ชื่อ:</label>
                        <input type="text" id="name" name="name" 
                               value="{{ old('name', Auth::user()->name ?? '') }}" required><br><br>
                
                        <label for="phone">เบอร์โทรศัพท์:</label>
                        <input type="text" id="phone" name="phone" 
                               value="{{ old('phone', Auth::user()->phone ?? '') }}" required><br><br>
                        
                        {{-- <label for="address">ที่อยู่:</label>
                        <input type="text" id="address" name="address" 
                               value="{{ old('address', Auth::user()->address ?? '') }}" required><br><br> --}}
                    @else
                        <!-- ฟอร์มสำหรับผู้ที่ยังไม่ได้ล็อกอิน -->
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" required>
                        </div>
                
                        <div class="mb-3">
                            <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="เบอร์ติดต่อ" required>
                        </div>
                
                        <div class="mb-3">
                            <label for="address" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="ที่อยู่" required>
                        </div>
                    @endif
                </form>



                    {{-- <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="surname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="surname" name="surname"
                                placeholder="นามสกุล" required>
                        </div>
                    </div> --}}

                    <div class="mb-3">
                        <label for="address" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="ที่อยู่" required>
                    </div>


                    <div class="mb-3">
                        <label for="phone" class="form-label">หมายเลขโทรศัพท์</label>
                        <input type="tel" class="form-control" id="phone" name="phone"  placeholder="หมายเลขโทรศัพท์"  required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="รหัสผ่าน" required>
                    </div>

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

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">ยอมรับเงื่อนไขการใช้งาน</label>
                    </div>


                    <form id="registrationForm" action="/register" method="POST">
                        @csrf

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-custom">ลงทะเบียน</button>
                                <a href="/Employee/login" class="link-primary align-self-center">ลงทะเบียนแล้วใช่ไหม?</a>
                            </div>
                    </form>
                    

                    {{-- <form id="registrationForm" action="/register" method="POST">
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-custom">ลงทะเบียน</button>
                            <a href="/Employee/login" class="link-primary align-self-center">ลงทะเบียนแล้วใช่ไหม?</a>
                        </div>
                    </form> --}}
                    
                    <script>
                        document.getElementById('registrationForm').addEventListener('submit', async function(event) {
                            event.preventDefault(); // ป้องกันการส่งฟอร์มปกติ
                    
                            const formData = {
                                name: document.querySelector('input[name="name"]').value,
                                email: document.querySelector('input[name="email"]').value,
                                password: document.querySelector('input[name="password"]').value,
                            };
                    
                            try {
                                const response = await fetch('/register', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                    },
                                    body: JSON.stringify(formData)
                                });
                    
                                if (response.ok) {
                                    const result = await response.json();
                                    alert('ลงทะเบียนสำเร็จ: ' + result.message);
                                } else {
                                    const errorData = await response.json();
                                    alert('การลงทะเบียนล้มเหลว: ' + errorData.message);
                                }
                            } catch (error) {
                                console.error('Error:', error);
                                alert('เกิดข้อผิดพลาดในการเชื่อมต่อกับเซิร์ฟเวอร์');
                            }
                        });
                    </script>



                    

                    {{-- <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-custom">ลงทะเบียน</button>
                        <a href="/Employee/login" class="link-primary align-self-center">ลงทะเบียนแล้วใช่ไหม?</a>
                    </div>
                </form> --}}

                <!-- แสดงข้อความยืนยัน -->
                {{-- @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif --}}

                
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
