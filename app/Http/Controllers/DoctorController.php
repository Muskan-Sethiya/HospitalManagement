<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function doctor(){
        $doctor1=Doctor::all();
        return view('user.doctors',compact('doctor1'));
    }

    public function searchdoctor(Request $request) {
        $query = $request->input('query');
        $searchResults = Doctor::where('doctor_name', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->orWhere('phone', 'like', '%' . $query . '%')
            ->orWhere('speciality', 'like', '%' . $query . '%')
            ->orWhere('room_no', 'like', '%' . $query . '%')
            ->get();
    
        return view('admin.manage_doctors', ['data' => $searchResults, 'query' => $query]);
    }
    
}
