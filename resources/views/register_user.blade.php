@extends('layout')

@section('title', 'register_user')

@section('content')
<body>
    <div class="container">
        <h2 class="form-title">ลงทะเบียน</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="first-name">ชื่อ</label>
                <input type="text" id="first-name" name="first-name" value="มีชัย" required>
            </div>
            <div class="form-group">
                <label for="last-name">นามสกุล</label>
                <input type="text" id="last-name" name="last-name" value="มีสุข" required>
            </div>
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" id="email" name="email" value="meshi@kkumail.com" required>
            </div>
            <div class="form-group">
                <label for="phone">เบอร์โทรศัพท์</label>
                <input type="text" id="phone" name="phone" value="0521454897" required>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" value="123456789" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">ยืนยันรหัสผ่าน</label>
                <input type="password" id="confirm-password" name="confirm-password" value="123456789" required>
            </div>
            <div class="radio-group">
                <label>เพศ</label>
                <label><input type="radio" name="gender" value="male" checked> ชาย</label>
                <label><input type="radio" name="gender" value="female"> หญิง</label>
            </div>
            <button type="submit" class="submit-btn">SUBMIT</button>
        </form>
    </div>

@endsection
