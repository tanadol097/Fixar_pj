<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile_em3</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles_main.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="logo">FIXAR</div>
        <ul class="nav-links">
            <li><a href="home">หน้าหลัก</a></li>
            <li><a href="ourservices">บริการของเรา</a></li>
            <li><a href="#">รับงาน</a></li>
            <li><a href="#">ตารางงาน</a></li>
            {{-- <li><a href="#" class="profile-icon">&#128100;</a></li> --}}
            <li><button class="logout-btn">Logout</button></li>
        </ul>
    </nav>

    
    <div class="profile-container">
        <div class="profile">
            <img src="{{ asset('img/3.png') }}" alt="ช่างโอ" class="profile-image" >
            <h2>ช่างโอ <span class="verified">&#10004;</span></h2>
            <p>4.8 <span class="star">&#9733;</span></p>
            <p class="online-status">ออนไลน์ <span class="online-dot">&#9679;</span></p>
            <button type="button" class="follow-btn " onclick="window.location.href='booking_em3';">จอง</button>
            {{-- <button class="message-btn">&#128172;</button> --}}
        </div>
    </div>

    <div class="work-history">
        <h3>ประวัติการทำงาน</h3>
        <div class="work-items">
            <div class="technician-card  ">
                <img src="{{ asset('img/9.png') }}" alt="ช่างโอ" class="img-fluid rounded" >
                <div class="info">
                    <p>เปลี่ยนน้ำมันเครื่อง</p>
                </div>
            </div>
            <div class="technician-card  ">
                <img src="{{ asset('img/10.png') }}" alt="ช่างโอ" class="img-fluid rounded" >
                <div class="info">
                    <p>เปลี่ยนล้อรถยนต์</p>
                </div>
            </div>
            <div class="technician-card  ">
                <img src="{{ asset('img/11.png') }}" alt="ช่างโอ" class="img-fluid rounded" >
                <div class="info">
                    <p>เปลี่ยนแบตรถยนต์</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>