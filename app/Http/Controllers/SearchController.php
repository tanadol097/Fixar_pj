<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // สมมติว่าเรามีตาราง Users


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // รับค่าจากคำค้นหาที่ส่งมาจาก Frontend

        // ค้นหาในตาราง Users โดยค้นหาจากชื่อ
        $results = User::where('name', 'LIKE', '%' . $query . '%')->get();

        // ส่งผลลัพธ์กลับเป็น JSON
        return response()->json($results);
    }

    
}

