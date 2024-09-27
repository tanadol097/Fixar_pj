<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Card Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      max-width: 400px;
      margin: 20px auto;
    }
    .card img {
      border-radius: 5px;
    }
    .review-stars {
      color: gold;
    }
  </style>
</head>
<body>

<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center mb-3">
      <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Profile Picture">
      <div>
        <h6 class="card-subtitle mb-2 text-muted">นายดี มาก</h6>
        <small>1 เดือนที่แล้ว</small>
      </div>
    </div>
    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Car Image">
    <h5 class="card-title mt-3">Honda City Minor Change รุ่น V ปี 2013 /2556</h5>
    <p class="card-text">
      สถานที่: มักกะสันวิภาว - มบ.<br>
      ราคา: 1500 บาท<br>
      รายละเอียด: เปลี่ยนแบต
    </p>
    <div>
      <span>คะแนนการรีวิว:</span>
      <span class="review-stars">★★★★★</span>
    </div>
    <p class="card-text mt-2">
      ความคิดเห็นจากลูกค้า: <br> ช่างบริการไว พูดจาสุภาพเป็นกันเอง
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
