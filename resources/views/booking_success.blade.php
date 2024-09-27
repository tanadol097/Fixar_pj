@extends('layout')

@section('title', 'booking_success')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center">แจ้งซ่อม</h3>
            <form> 
                <div class="mb-3 text-center">
                    <label for="formFile" class="form-label">เลือกภาพ</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Honda City Minor Change รุ่น V ปี 2013 / 2556" aria-label="Vehicle Model">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="16 กทม." aria-label="License Plate">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" placeholder="1500" aria-label="Price">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="เปลี่ยนยาง" aria-label="Issue">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">โพสต์</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
