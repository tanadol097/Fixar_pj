<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .upload-btn {
            display: block;
            width: 100%;
            margin-top: 10px;
        }
        .custom-label {
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container">
        <div class="form-container">
            <div class="d-flex align-items-center mb-4">
                <img src="path/to/profile.jpg" alt="Profile Image" class="profile-image">
                <div class="ml-3">
                    <h5>ช่างเอนส์</h5>
                    <span class="text-success">ออนไลน์</span>
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label class="custom-label">เลือกรูปภาพ</label>
                    <input type="file" class="form-control-file upload-btn">
                </div>
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
                </div>
                <button type="submit" class="btn btn-primary btn-block">จอง</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
