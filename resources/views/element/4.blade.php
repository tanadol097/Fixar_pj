<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technician Search Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .search-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .filter-btn {
            border-radius: 20px;
            padding: 5px 15px;
            margin: 5px;
        }
        .tech-card {
            text-align: center;
        }
        .tech-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .star-rating {
            color: #ffcc00;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">FIXAR</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">หน้าหลัก</a></li>
            <li class="nav-item"><a class="nav-link" href="#">บริการของเรา</a></li>
            <li class="nav-item"><a class="nav-link" href="#">สมัครเป็นผู้ให้บริการ</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a></li>
        </ul>
    </div>
</nav>

<div class="container search-container">
    <div class="d-flex justify-content-between align-items-center">
        <h5>ตำแหน่งของคุณ <span class="text-danger"><i class="fas fa-map-marker-alt"></i> ตักวิทยวิศาส - มข</span></h5>
        <button class="btn btn-outline-secondary"><i class="fas fa-filter"></i></button>
    </div>
    <input type="text" class="form-control mt-3" placeholder="ค้นหาช่าง">
    <div class="mt-3">
        <button class="btn btn-danger filter-btn">ทั้งหมด</button>
        <button class="btn btn-light filter-btn">รถยนต์</button>
        <button class="btn btn-light filter-btn">รถมอเตอร์ไซ</button>
        <button class="btn btn-light filter-btn">รถไฟฟ้า</button>
    </div>
</div>

<div class="container mt-4">
    <h5>แนะนำช่าง</h5>
    <div class="row">
        <div class="col-6 col-md-3 col-lg-2 mb-3">
            <div class="card tech-card">
                <img src="path/to/image.jpg" alt="Technician Image" class="tech-image mt-3">
                <div class="card-body p-2">
                    <h6 class="card-title">ช่างเอนส์</h6>
                    <p class="mb-1">0.6 กม. <span class="star-rating">5.0★</span></p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2 mb-3">
            <div class="card tech-card">
                <img src="path/to/image2.jpg" alt="Technician Image" class="tech-image mt-3">
                <div class="card-body p-2">
                    <h6 class="card-title">ช่างแดน</h6>
                    <p class="mb-1">1.2 กม. <span class="star-rating">4.9★</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
</body>
</html>
