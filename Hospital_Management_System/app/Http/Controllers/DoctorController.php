<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class DoctorController extends Controller{

    public function index(){
        $data = Doctors::all();
        return view('doctors.all',compact('data'));
    }

    public function add(){
        return view('doctors.add');
    }

    public function insert(Request $request){
        $insert = Doctors::insert([
            'name' =>$request['name'],
            'phone' =>$request['phone'],
            'email' =>$request['email'],
            'total_appointment' =>$request['total_appointment'],
            'total_staff' =>$request['total_staff'],
        ]);

        if($insert){
            return redirect('dashboard/doctor');
        }
    }
}
