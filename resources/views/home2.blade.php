<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles_main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    </head>

    <body>
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
                            <a class="nav-link active" aria-current="page" href="/home ">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ourservices">บริการของเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register_em">สมัครเป็นผู้ให้บริการ</a>
                        </li>
                        <li class="nav-item">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAAAXNSR0IArs4c6QAAAzRJREFUSEu9lmfIjmEUx392SUaEbNlRSCgryopCRtkyskeRomyirDIzki0jJLI+CInIlpWSmZCdL/b1r3O/nS738zzvp/fU030/13Wd+f+fc92FKEApVIC+yK+zckBHoAVQC6gIvAOeAdeBC8CnXIHnclYCWAxMD88iWYz9ApYDC4Efmc5lc9Yc2A/Ud8qfgavAfaAx0Boo6/YfAgOBu2kOMzkbDmwDiprSTmCFOfF2pN8ImAMMsg1lNgrYGztMc9bWMFDZPgAjA1bHTVHna4RAqgMvg9EXwF/b62sBKtPfhvGlODL/v3yI8DGgpwjQDHhjB5TBYcsk0VHZ+gF6SqqG//cAEUr6DT1x4sw2A2NNsTtwxt6rmMHSKVh8ARoAb22vD3DU3jcCkxId76xkYN1XY90OK19ybp9hchOYAVwGVO7Vlv0uYIQLZDcw1MpZBviuPe+sf2DYIVNoEpFB2AinacBaZ1SOVwJPgTpuvSlw22V6LHa2DJgVIv8WIo7LpbVSgAISbokMAA4CKqVvgcKGleyoT+fFzvYAQwwn4eVFvdUqEGcdMNVtbAhEmAhcAdpEOmeBLmHi5EHiyygydDUcVB4vwkNKf6wtZLw90M6gUJDC1csqmzyngB5xZgmo6qleKawTCYalrG+3Jo63TgA9gTzy+MyWArOB10C1FKNa0ijq5ppaBj2GXu09UCFMoSWBlXPjzBSFlCU6pOnhRQ2unyaICKCSiqW3gDvRWQWrCSPJ61efWTHrerFKdJ5ph2uHgau6q3EzyQPD5bkdUHtMCWT6CFQKs1O3wn/32VZgjCmILNeAG66HNPPEzJ9AcaClG9ZP7L4TaU6ajU1hskxIIozHlUqkZtRsU801KXpbySYb49RTiejc4FD29bZwBOjgYFDZX2VypnVldDrKWmMpbgdf0jVR/wnPTsBFfyjTfaa+0R2W3M4q7yIfpTMiMiwIhBhtayq19A/EAGe7qTuHbw1N7XqmpGjP23eHJnxloKbdW2KnRLiND6U8l8akXN8gymycfVuoHTKJ8J0PbLFJn3oul7NESdeEMq1rmap0Al6ZPLJMNKyzSn6d5bKTr/0CdfYPWP+kHHI96HsAAAAASUVORK5CYII=" />
                        </li>

                        
                         {{-- <div class="profile-icon" onclick="openSidebar()" >P</div>

                       
                          <div id="mySidebar" class="sidebar">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="#">Messages</a>
                            <a href="#">Logout</a>
                          </div>
                        
                         <script>
                           
                            function openSidebar() {
                                document.getElementById("mySidebar").style.width = "250px";
                            }

                           
                            function closeSidebar() {
                                document.getElementById("mySidebar").style.width = "0";
                            }
                          </script> --}}
                       
                    </ul>
                </div>
            </div>
        </nav>

        {{-- <li>
            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                <li><a class="dropdown-item" href="#1">วัดเกาะแก้วสุทธาราม</a></li>
                <li><a class="dropdown-item" href="#2">บ้านช่างทอง ป้าเนื่อง</a></li>
                <li><a class="dropdown-item" href="#3">ตลาดริมน้ำเมืองเพชร</a></li>
                <li><a class="dropdown-item" href="#4">Street Art</a></li>
            </ul>
        </li> --}}

        </div>
        <div class="container ">
            <img src="{{ asset('img/6.png') }}" alt="Image" class="img-fluid rounded mx-auto d-block">
            <div class="card text">
                <img src="{{ asset('img/7.png') }}" alt="Image" class="img-fluid rounded mx-auto d-block">
                <div class="card-img-overlay">
                    <div class="card-body text-secondary">
                        <h4>บริการซ่อมรถ</h4>
                        <p>บริการเกี่ยวกับรถครบวงจร โดยผู้ให้บริการใกล้บ้านคุณ </p>
                        <p> ที่เดียวครบจัดการได้ทุกปัญหา</p>
                        <button type="button" class="btn btn-danger"
                            onclick="window.location.href='/ourservices';">จองบริการ คลิก</button>




                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 All Rights Reserved by FIXAR Co., Ltd.</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
