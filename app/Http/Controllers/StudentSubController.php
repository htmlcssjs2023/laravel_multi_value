<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentSub;

class StudentSubController extends Controller
{
    public function storeSubject(Request $req){
            $sub_name = $req->all();
            $sub_namearr = $sub_name['sub_name'];
            $sub_name['sub_name'] = implode(',',$sub_namearr);
            
            StudentSub::create($sub_name);

            return redirect()->back();
    }
}
