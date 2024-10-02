<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนเป็นช่างกับ FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 60%;
            margin: auto;
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
        <h1>สมัครเข้าสู่ระบบ </h1>
        <p>FIXAR</p>
    </div>

    <div class="container mt-5">
        <div class="form-container">
            <h1>ลงทะเบียนผู้ใช้งาน</h1>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="register">
                @csrf

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <x-label for="name" value="{{ __('ชื่อ') }}" />
                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="col-md-6">
                        <x-label for="surname" value="{{ __('นามสกุล') }}" />
                        <x-input id="surname" class="form-control" type="text" name="surname" :value="old('surname')" required />
                    </div>
                </div>

                <div class="mb-3">
                    <x-label for="phone" value="{{ __('หมายเลขโทรศัพท์') }}" />
                    <x-input id="phone" class="form-control" type="tel" name="phone" :value="old('phone')" required />
                </div>

                <div class="mb-3">
                    <x-label for="email" value="{{ __('อีเมล') }}" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mb-3">
                    <x-label for="password" value="{{ __('รหัสผ่าน') }}" />
                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mb-3">
                    <x-label for="password_confirmation" value="{{ __('ยืนยันรหัสผ่าน') }}" />
                    <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mb-3 form-check">
                    <x-checkbox name="terms" id="terms" required />
                    <label class="form-check-label" for="terms">ยอมรับเงื่อนไขการใช้งาน</label>
                </div>

                <div class="d-flex justify-content-between">
                    <x-button class="btn btn-custom">ลงทะเบียน</x-button>
                    <a href="login" class="link-primary align-self-center">ลงทะเบียนแล้วใช่ไหม?</a>
                </div>
            </form>

            <!-- แสดงข้อความยืนยัน -->
            @if(session('success'))
                <script>
                    Swal.fire({
                        title: 'ลงทะเบียนสำเร็จ!',
                        text: 'คุณได้ลงทะเบียนเรียบร้อยแล้ว',
                        icon: 'success',
                        confirmButtonText: 'ตกลง'
                    });
                </script>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
