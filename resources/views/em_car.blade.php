@extends('layout')

@section('title', 'em_car.blade.php')

@section('content')
    <div class="location">
        <p>ตำแหน่งของคุณ</p>
        <p class="location-icon">📍ตึกวิทยวิภาส - มข</p>

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




    <section class="technicians">
        <h4>แนะนำช่าง</h4>
        <div class="technician-grid">
            <div class="technician-card">
                <img src="{{ asset('img/1.png') }}" alt="ช่างเจมส์" class="img-fluid rounded">
                <div class="info">
                    <p>ช่างเจมส์</p>
                    <p>0.6 กม. ⭐ 5.0</p>
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.location.href='booking_em1';">เลือกช่าง</button>
                </div>
            </div>
            <div class="technician-card">
                <img src="{{ asset('img/2.png') }}" alt="ช่างแดน" class="img-fluid rounded">
                <div class="info">
                    <p>ช่างแดน</p>
                    <p>1.2 กม. ⭐ 4.9</p>
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.location.href='booking_em2';">เลือกช่าง</button>
                </div>
            </div>
            <div class="technician-card">
                <img src="{{ asset('img/4.png') }}" alt="ช่างเควิน" class="img-fluid rounded">
                <div class="info">
                    <p>ช่างเควิน</p>
                    <p>2.4 กม. ⭐ 4.7</p>
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.location.href='booking_em4';">เลือกช่าง</button>
                </div>
            </div>
            <div class="technician-card">
                <img src="{{ asset('img/5.png') }}" alt="ช่างโบรอัน" class="img-fluid rounded">
                <div class="info">
                    <p>ช่างโบรอัน</p>
                    <p>3.0 กม. ⭐ 4.6</p>
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.location.href='booking_em5';">เลือกช่าง</button>
                </div>
            </div>
        </div>
    </section>
    </div>
