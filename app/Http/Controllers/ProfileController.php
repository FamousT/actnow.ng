<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use PDF;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profile/form');
    }

    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->name = $request->input('name');
        $profile->state = $request->input('state');
        $profile->lga = $request->input('lga');
        $profile->gender = $request->input('gender');
        $profile->phone_no = $request->input('phone_no');
        $profile->email = $request->input('email');
        $profile->reg_no = random_int(10000000, 99999999);


        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('uploads/profiles'), $filename);
            $profile['image']= $filename;
        }

        $profile->save();        
        
    	$shows = Profile::where('email', $profile->email)->get();
   
        return view('profile/list', compact('shows'));

    }


    public function index()
    {
        $shows = Profile::all();
        return view('profile/list', compact('shows'));
    }


    public function downloadPDF($id) {
        $show = Profile::find($id);
        $pdf = PDF::loadView('profile/pdf', compact('show'));
        return $pdf->download('Actnow-ID.pdf');
    }

}