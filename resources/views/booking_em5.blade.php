@extends('layout')

@section('title', 'booking_em5')

@section('content')
<body class="bg-light">

    <div class="container">
        <div class="form-container">
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('img/5.png') }}" alt="ช่างโบรอัน" class="profile-image" >
                <div class="ml-3">
                    <h5>ช่างโบรอัน</h5>
                    <span class="text-success">ออนไลน์</span<br><br>
                        <button type="submit" class="btn btn-info" onclick="window.location.href='profile_em5';">Profile</button>
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label class="custom-label">เลือกรูปภาพ</label>
                    <input type="file" class="form-control-file upload-btn">
                </div><br>
                <div class="form-group">
                    <label for="carModel" class="custom-label">ยี่ห้อ รุ่น</label>
                    <input type="text" class="form-control" id="carModel" value="Honda City Minor Change รุ่น V ปี 2013 /2556">
                </div>
                <div class="form-group">
                    <label for="issue" class="custom-label">อาการ</label>
                    <input type="text" class="form-control" id="issue" value="ดักฝนถี่หลุด = หมบ.">
                </div>
                <div class="form-group">
                    <label for="price" class="custom-label">ราคา</label>
                    <input type="number" class="form-control" id="price" value="1500">
                </div>
                <div class="form-group">
                    <label for="details" class="custom-label">รายละเอียดงาน</label>
                    <input type="text" class="form-control" id="details" value="เปลี่ยนแบต">
                </div>
                <div class="form-group">
                    <label for="date" class="custom-label">วันที่</label>
                    <input type="date" class="form-control" id="date" value="2025-02-22">
                </div>
                <div class="form-group">
                    <label for="time" class="custom-label">เวลา</label>
                    <input type="time" class="form-control" id="time" value="00:00">
                </div><br>
                <button type="submit" class="btn btn-primary btn-lg">จอง</button>
            </form>
        </div>
    </div>
@endsection
