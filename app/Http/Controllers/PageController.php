<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // ชี้ไปที่ view 'home.blade.php'
    }

    public function ourServices()
    {
        return view('ourservices'); // ชี้ไปที่ view 'ourservices.blade.php'
    }

    public function ourServices2()
    {
        return view('ourservices2');
    }

    public function ourServices3()
    {
        return view('ourservices3');
    }

    public function ourServices4()
    {
        return view('ourservices4');
    }


    public function home_em()
    {
        return view('home_em'); 
    }

    public function register_em()
    {
        return view('register_em'); 
    }

    public function register_user()
    {
        return view('register_user'); 
    }

    public function booking_em1()
    {
        return view('booking_em1'); 
    }

    public function booking_em2()
    {
        return view('booking_em2'); 
    }

    public function booking_em3()
    {
        return view('booking_em3'); 
    }

    public function booking_em4()
    {
        return view('booking_em4'); 
    }

    public function booking_em5()
    {
        return view('booking_em5'); 
    }

    public function booking_success()
    {
        return view('booking_success'); 
    }

    public function profile_em1()
    {
        return view('profile_em1'); 
    }

    public function profile_em2()
    {
        return view('profile_em2'); 
    }

    public function profile_em3()
    {
        return view('profile_em3'); 
    }

    public function profile_em4()
    {
        return view('profile_em4'); 
    }

    public function profile_em5()
    {
        return view('profile_em5'); 
    }

    public function home2()
    {
        return view('home2'); 
    }


  

// เปลี่ยน role ของ user id = 1 ให้เป็น admin
    // $user = User::find(1);
    // $user->role = 'admin';
    // $user->save();


}
