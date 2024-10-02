<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


  
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
        if (!Auth::check()) {
            return redirect('/login'); // ถ้าไม่ได้ล็อกอิน ให้ไปหน้า login
        }

        // ตรวจสอบ role ของผู้ใช้
        $user = Auth::user();
        if ($user->role !== $role) {
            return redirect('/no-access'); // ถ้า role ไม่ตรงกัน ให้ redirect ไปหน้า no-access
        }

        return $next($request); // ถ้าตรงกัน ให้ผ่านไปยังขั้นตอนถัดไป
    }
    
    protected $routeMiddleware = [
        // Middleware อื่นๆ ...
        'role' => \App\Http\Middleware\RoleMiddleware::class, // ลงทะเบียน Middleware 'role'
    ];
    
    

    
}

