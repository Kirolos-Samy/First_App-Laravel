<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmins(){

        $admins = Admin::get();

        return view('Admins.admins',['admins' => $admins]);

    }

    function getAdmin($id) {

        $showAdmin = Admin::find($id);
        // $showAdmin = Admin::where('id',$id)->first();

        return view('Admins.showAdmin', compact('showAdmin'));
    }

    function getAll(){

        $adminsDetails = Admin::get();

        return view('Admins.adminsDetails',['adminsDetails' => $adminsDetails]);

    }

    function destroy($id){
        Admin::find($id)->delete();
        return redirect()->back();
        // return redirect()->route();
    }



}
