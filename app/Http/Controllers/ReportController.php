<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'vehicleType' => 'required|string|max:50',
            'issueDetails' => 'required|string',
            'serviceArea' => 'required|string|max:50',
            'serviceAddress' => 'required|string|max:255',
            'appointmentDate' => 'required|date',
            'appointmentTime' => 'required|date_format:H:i',
            'issueImage' => 'nullable|image|max:2048',
        ]);

        // Check if the file is uploaded
        $issueImagePath = null;
        if ($request->hasFile('issueImage')) {
            $issueImagePath = $request->file('issueImage')->store('images');
        }

        // Create a new report entry in the database
        Report::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'vehicle_type' => $validatedData['vehicleType'],
            'issue_details' => $validatedData['issueDetails'],
            'service_area' => $validatedData['serviceArea'],
            'service_address' => $validatedData['serviceAddress'],
            'appointment_date' => $validatedData['appointmentDate'],
            'appointment_time' => $validatedData['appointmentTime'],
            'issue_image' => $issueImagePath, // Store the image path if uploaded
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'รายงานของคุณถูกส่งเรียบร้อยแล้ว');
    }


    public function repairHistory()
    {
        // Fetch all reports with the user relationship
        $reports = Report::with('user')->get(); // Ensure the relationship is defined in your Report model
    
        // Return the view with the reports data
        return view('repair.history', compact('reports')); // Pass $reports to the view
    }

    public function history()
    {
        $reports = Report::all(); // Ensure you fetch all necessary fields
        return view('repair.history', compact('reports'));
    }
    
}
