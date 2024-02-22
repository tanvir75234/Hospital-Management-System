<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Http\Request;


class UserController extends Controller{

    public function index(){
        $data = UserList::all();
        return view ('user.all',compact('data'));
    }

    public function add(){
        return view ('user.add');
    }

    public function view($id){
        $data = UserList::where('id',$id)->first();
        return view('user.view',compact('data'));
    }

    public function insert(REQUEST $request ) {
        $insert = UserList::insert([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'photo' => $request['photo'],
        ]) ;

        if($insert){
            return redirect('dashboard/user');
        }
    }

   public function edit($id){
        $data = UserList::where('id',$id)->firstOrFail();
        return view('user.edit',compact('data'));
   }

    public function update(Request $request){
        $id = $request['id'];

        $update = UserList::where('id',$id)->update([
            'name' =>$request['name'],
            'phone' =>$request['phone'],
            'email' =>$request['email'],
            'photo' =>$request['photo'],
        ]);

        if($update){
            return redirect('dashboard/user');
        }
    }
}
