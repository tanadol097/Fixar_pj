<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีวิวการแจ้งซ่อม - FIXAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa; /* พื้นหลัง */
        }
        .header {
            background-color: #DC5F00; /* สีพื้นหลังของส่วนหัว */
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px; /* มุมมน */
            margin-bottom: 30px; /* ระยะห่างจากฟอร์ม */
        }
        .form-container {
            background-color: white; /* สีพื้นหลังของฟอร์ม */
            padding: 20px;
            border-radius: 10px; /* มุมมน */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* เงา */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="header">
        <h1>หน้ารีวิว</h1>
    </div>

    <div class="form-container">
        <form action="{{ route('submitReview', $repairRequest->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="rating" class="form-label">คะแนน</label>
                <select class="form-select" id="rating" name="rating" required>
                    <option value="">เลือกคะแนน</option>
                    <option value="1">1 - แย่</option>
                    <option value="2">2 - ปานกลาง</option>
                    <option value="3">3 - ดี</option>
                    <option value="4">4 - ดีมาก</option>
                    <option value="5">5 - ยอดเยี่ยม</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">ความคิดเห็น</label>
                <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">ส่งรีวิว</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
