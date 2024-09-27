<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Card with Review Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
    }
    .card img {
      border-radius: 5px;
    }
    .review-stars i {
      font-size: 24px;
      color: lightgray;
    }
    .review-stars i.active {
      color: gold;
    }
    .form-control {
      border-radius: 10px;
    }
    .btn-review {
      border-radius: 20px;
    }
  </style>
</head>
<body>

<div class="card shadow">
  <div class="card-body">
    <div class="d-flex align-items-center mb-3">
      <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Profile Picture">
      <div>
        <h6 class="card-subtitle mb-2 text-muted">นายดี มาก</h6>
      </div>
    </div>
    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Car Image">
    <h5 class="card-title mt-3">Honda City Minor Change รุ่น V ปี 2013 /2556</h5>

    <form action="#" method="POST" class="mt-3">
      <div class="mb-3">
        <label for="rating" class="form-label">ประเมินความพึงพอใจ :</label>
        <div class="review-stars">
          <i class="bi bi-star" onclick="setRating(1)"></i>
          <i class="bi bi-star" onclick="setRating(2)"></i>
          <i class="bi bi-star" onclick="setRating(3)"></i>
          <i class="bi bi-star" onclick="setRating(4)"></i>
          <i class="bi bi-star" onclick="setRating(5)"></i>
        </div>
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">ความคิดเห็นเพิ่มเติม :</label>
        <textarea class="form-control" id="comment" rows="3" placeholder="ช่างบริการไว พูดจาสุภาพเป็นกันเอง"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-review">ส่งรีวิว</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function setRating(rating) {
    const stars = document.querySelectorAll('.review-stars i');
    stars.forEach((star, index) => {
      if (index < rating) {
        star.classList.add('active');
      } else {
        star.classList.remove('active');
      }
    });
  }
</script>
</body>
</html>
