Thatchaphon Khamkamjon
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <style>
        /* กำหนดสไตล์สำหรับตัวอักษร และการจัดวางขอบของ body */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 2%;
        }

        /* กำหนดสไตล์ของ legend */
        legend {
            font-weight: bold;
            font-size: 1.7em;
        }

        /* กำหนดสไตล์ของหัวข้อ (h3) */
        h3 {
            margin: 0;
            font-weight: bold;
        }

        /* จัดการแสดงผลของ .row ให้เรียงซ้ายขวา (flex) */
        .row {
            display: flex;
            justify-content: space-between;
        }

        /* จัดสัดส่วนความกว้างของ .col-1 และ .col-2 */
        .col-1, .col-2 {
            flex: 1;
            padding: 10px;
        }

        /* จำกัดความกว้างสูงสุดของ .col-1 */
        .col-1 {
            max-width: 50%;
        }

        /* จำกัดความกว้างสูงสุดของ .col-2 */
        .col-2 {
            max-width: 45%;
        }

        /* กำหนดระยะห่างด้านล่างของ .mb-3 */
        .mb-3 {
            margin-bottom: 1rem;
        }

        /* สไตล์ของ label และทำให้ข้อความตัวหนา */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        /* เพิ่มเครื่องหมาย * สีแดงหลังจาก label ที่จำเป็นต้องกรอกข้อมูล */
        label.required::after {
            content: "*";
            color: red;
        }

        /* สไตล์ของ input และ select เพื่อให้ความกว้างเป็น 30% */
        input, select {
            width: 30%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* ปรับสไตล์สำหรับ input radio */
        input[type="radio"] {
            width: auto;
        }

        /* สไตล์สำหรับ input ชนิด email และ url ให้ยาว 80% ของหน้าจอ */
        input[type="email"], input[type="url"] {
            width: 80%;
        }

        /* ปรับสไตล์สำหรับ input ชนิดไฟล์ */
        input[type='file']{
            border: none;
        }

        /* ปรับสไตล์ select ให้ไม่มีขอบและมีเส้นใต้ */
        select {
            border: none;
            border-bottom: 1px solid #ccc;
            background-color: transparent;
            appearance: none;
        }

        /* สไตล์สำหรับปุ่ม submit */
        button {
            padding: 10px 20px;
            background-color: #3966e4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* เปลี่ยนสีพื้นหลังเมื่อ hover บนปุ่ม */
        button:hover {
            background-color: #4de7ff;
        }

        /* การจัดการแถวสำหรับ input ชื่อ โดยให้มีช่องว่างระหว่างกัน */
        .name-row {
            display: flex;
            gap: 10px;
        }

        /* กำหนดความกว้างของช่องชื่อให้ 40% */
        .name-row input {
            width: 40%;
        }

        /* การจัดการแถวสำหรับ input เบอร์โทรศัพท์ */
        .tel-inputs {
            display: flex;
            gap: 5px;
        }

        /* กำหนดความกว้างของ input เบอร์โทรศัพท์ */
        .tel-inputs input {
            width: 10%;
            padding: 8px;
        }

        /* กำหนดระยะห่างของ span ระหว่างเลขเบอร์โทร */
        .tel-inputs span {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <form action="#">
        <fieldset>
            <legend>Employment Application</legend>
            <div class="row">
                <div class="col-1">
                    <!-- ช่องกรอกข้อมูลตำแหน่งงานที่สมัคร -->
                    <div class="mb-3">
                        <label class="required">Which position are you applying for?</label>
                        <select class="position" required>
                            <option value="">-choose position-</option>
                            <option value="student">Student</option>
                            <option value="developer">Developer</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    <!-- ช่องเลือกว่ายอมย้ายที่อยู่หรือไม่ -->
                    <div class="mb-3">
                        <label class="required">Are you willing to relocate?</label>
                        <input type="radio" name="relocate" value="yes" required> Yes <br>
                        <input type="radio" name="relocate" value="no" required> No
                    </div>
                    <!-- ช่องเลือกวันที่สามารถเริ่มงานได้ -->
                    <div class="mb-3">
                        <label class="required">When can you start?</label>
                        <input type="date" name="startdate" required>
                    </div>
                    <!-- ช่องกรอกเว็บไซต์ portfolio -->
                    <div class="mb-3">
                        <label>Portfolio Web Site</label>
                        <input type="url" name="website" placeholder="http://">
                    </div>
                    <!-- ช่องแนบไฟล์ resume -->
                    <div class="mb-3">
                        <label>Attach a Copy of Your Resume</label>
                        <input type="file" name="resume">
                    </div>
                </div>  
                <div class="col-2">
                    <h3>Your Contact Information</h3>
                    <!-- ช่องกรอกชื่อและนามสกุล -->
                    <div class="mb-3">
                        <label class="required">Name</label>
                        <div class="name-row">
                            <input type="text" name="firstname" placeholder="First" required>
                            <input type="text" name="lastname" placeholder="Last" required>
                        </div>
                    </div>
                    <!-- ช่องกรอกอีเมล -->
                    <div class="mb-3">
                        <label class="required">Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                    <!-- ช่องกรอกเบอร์โทรศัพท์ -->
                    <div class="mb-3">
                        <label class="required">Phone</label>
                        <div class="tel-inputs">
                            <input type="tel" name="area-code" placeholder="###" maxlength="3" required>
                            <span>-</span>
                            <input type="tel" name="prefix" placeholder="###" maxlength="3" required>
                            <span>-</span>
                            <input type="tel" name="line-number" placeholder="####" maxlength="4" required>
                        </div>
                    </div>
                    <!-- ปุ่ม submit -->
                    <button type="submit">Submit</button>
                </div>  
            </div>
        </fieldset>
    </form>
</body>
</html>