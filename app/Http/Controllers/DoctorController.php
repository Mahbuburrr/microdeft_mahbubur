<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function add(Request $request)
    {


        $doctor=new Doctor;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->fee=$request->fee;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('assets', $imagename);
        $doctor->image = $imagename;
        $doctor->save();


    }
}
