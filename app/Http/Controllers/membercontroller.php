<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use App\user;
use Crypt;
use PDF;

class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function savedata(Request $request){

            $member=new member;
            $member->name=$request->name;
            $member->lastname=$request->lastname;
            $member->email=$request->email;
            $member->ccode=$request->ccode;
            $member->phone=$request->phone;
            $member->address=$request->address;
            $member->username=$request->username;
            $member->password=Crypt::encrypt($request->password);
            $member->save();
            return redirect('index');
     }
     public function certificate()
     {
        $user=member::all();
        return view('generate',compact('user'));

 
     }
    public function show()
    {
        $user=member::all();
        return view('show',compact('user'));

    }
   
    public function getdata(Request $request)
    {
        $this->validation($request,['email'=>'required|email|.']);
    }

    public function downloadPDF(){
        $user=member::all();
        $pdf=PDF::loadView('show',compact('user'));
        return $pdf ->download('userdata.pdf');
    }

   
}