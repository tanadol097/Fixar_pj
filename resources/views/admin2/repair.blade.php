<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom fixed-top bg-white">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4"><b>Fixar</b></span>
        </a>
            <ul class="nav nav-pills">
            <!-- Dropdown for Home -->
            <li class="nav-item dropdown">
            <a href="#" class="nav-link active dropdown-toggle" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Home
            </a>
            <!-- Dropdown Menu Items -->
            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                <li><a class="dropdown-item" href="#1">วัดเกาะแก้วสุทธาราม</a></li>
                <li><a class="dropdown-item" href="#2">บ้านช่างทอง ป้าเนื่อง</a></li>
                <li><a class="dropdown-item" href="#3">ตลาดริมน้ำเมืองเพชร</a></li>
                <li><a class="dropdown-item" href="#4">Street Art</a></li>
                <li><a class="dropdown-item" href="#5">Walking Street</a></li>
                <li><a class="dropdown-item" href="#6">ร้านระเบียงริมน้ำ</a></li>
                <li><a class="dropdown-item" href="#7">วัดมหาธาตุวรวิหาร</a></li>
            </ul>
            </li>
            
            <!-- Other Nav Items -->
            <li class="nav-item"><a href="HW09_IT_Sec01_663380165-1.html" class="nav-link">หน้าหลัก</a></li>
            <li class="nav-item"><a href="HW09_Page2.html" class="nav-link">บริการของเรา</a></li>
            <li class="nav-item"><a href="HW09_Page3.html" class="nav-link">สมัครเป็นผู้ให้บริการ</a></li>
            <button type="button" class="btn btn-primary"><i class="bi bi-person-circle"></i></button>
            </ul>
        </header>
    </div>
    <class="container">
        <h1>รายชื่อช่าง</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">Fixar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home2 ">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ourservices">บริการของเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">สมัครเป็นผู้ให้บริการ</a>
                        </li>
                        <li class="nav-item">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAAAXNSR0IArs4c6QAAAzRJREFUSEu9lmfIjmEUx392SUaEbNlRSCgryopCRtkyskeRomyirDIzki0jJLI+CInIlpWSmZCdL/b1r3O/nS738zzvp/fU030/13Wd+f+fc92FKEApVIC+yK+zckBHoAVQC6gIvAOeAdeBC8CnXIHnclYCWAxMD88iWYz9ApYDC4Efmc5lc9Yc2A/Ud8qfgavAfaAx0Boo6/YfAgOBu2kOMzkbDmwDiprSTmCFOfF2pN8ImAMMsg1lNgrYGztMc9bWMFDZPgAjA1bHTVHna4RAqgMvg9EXwF/b62sBKtPfhvGlODL/v3yI8DGgpwjQDHhjB5TBYcsk0VHZ+gF6SqqG//cAEUr6DT1x4sw2A2NNsTtwxt6rmMHSKVh8ARoAb22vD3DU3jcCkxId76xkYN1XY90OK19ybp9hchOYAVwGVO7Vlv0uYIQLZDcw1MpZBviuPe+sf2DYIVNoEpFB2AinacBaZ1SOVwJPgTpuvSlw22V6LHa2DJgVIv8WIo7LpbVSgAISbokMAA4CKqVvgcKGleyoT+fFzvYAQwwn4eVFvdUqEGcdMNVtbAhEmAhcAdpEOmeBLmHi5EHiyygydDUcVB4vwkNKf6wtZLw90M6gUJDC1csqmzyngB5xZgmo6qleKawTCYalrG+3Jo63TgA9gTzy+MyWArOB10C1FKNa0ijq5ppaBj2GXu09UCFMoSWBlXPjzBSFlCU6pOnhRQ2unyaICKCSiqW3gDvRWQWrCSPJ61efWTHrerFKdJ5ph2uHgau6q3EzyQPD5bkdUHtMCWT6CFQKs1O3wn/32VZgjCmILNeAG66HNPPEzJ9AcaClG9ZP7L4TaU6ajU1hskxIIozHlUqkZtRsU801KXpbySYb49RTiejc4FD29bZwBOjgYFDZX2VypnVldDrKWmMpbgdf0jVR/wnPTsBFfyjTfaa+0R2W3M4q7yIfpTMiMiwIhBhtayq19A/EAGe7qTuHbw1N7XqmpGjP23eHJnxloKbdW2KnRLiND6U8l8akXN8gymycfVuoHTKJ8J0PbLFJn3oul7NESdeEMq1rmap0Al6ZPLJMNKyzSn6d5bKTr/0CdfYPWP+kHHI96HsAAAAASUVORK5CYII=" />
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="location">
            <span>ตำแหน่งของคุณ</span>
            <span class="location-icon">📍</span>
            <span>ตึกวิทยวิภาส - มข</span>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="ค้นหาช่าง">
            <div class="filter-icon">🔍</div>
        </div>
        
        <div class="categories">
          <button class="active">ทั้งหมด</button>
          <button>รถยนต์</button>
          <button>รถมอเตอร์ไซ</button>
          <button>รถไฟฟ้า</button>
      </div>

        <section>
            <h4>บริการซ่อมรถ</h4>
            <p>บริการเกี่ยวกับรถครบวงจร โดยผู้ให้บริการใกล้บ้านคุณ </p>
            <p> ที่เดียวครบจัดการได้ทุกปัญหา</p>

        </section>
       

        <section class="technicians">
          <h2>แนะนำช่าง</h2>
          <div class="technician-grid">
              <div class="technician-card">
                  <img src="images/technician1.jpg" alt="ช่างเจมส์">
                  <div class="info">
                      <p>ช่างเจมส์</p>
                      <p>0.6 กม. ⭐ 5.0</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician2.jpg" alt="ช่างแดน">
                  <div class="info">
                      <p>ช่างแดน</p>
                      <p>1.2 กม. ⭐ 4.9</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician3.jpg" alt="ช่างโอ">
                  <div class="info">
                      <p>ช่างโอ</p>
                      <p>1.8 กม. ⭐ 4.8</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician4.jpg" alt="ช่างเควิน">
                  <div class="info">
                      <p>ช่างเควิน</p>
                      <p>2.4 กม. ⭐ 4.7</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician5.jpg" alt="ช่างโบรอัน">
                  <div class="info">
                      <p>ช่างโบรอัน</p>
                      <p>3.0 กม. ⭐ 4.6</p>
                  </div>
              </div>
          </div>
      </section>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</body>
</html>