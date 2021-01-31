<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    public function store(Request $request)
    {
        $request ->validate([
            'name'=>'required',
            'mobile'=>'required|numeric',
            'alternate-mobile'=>'nullable|numeric',
            'email'=>'required|email',
            'blood-group'=>'required',
            'religion'=>'required',
            'union'=>'required',
            'post-office'=>'required',
            'police-station'=>'required',
            'district'=>'required',
            'weight'=>'required',
            'DOB'=>'required',
            'last-donation'=>'nullable',
        ]);
        $query = DB::table('donors')->insert([
            'name'=>$request->input('name'),
            'mobile'=>$request->input('mobile'),
            'alternate-mobile'=>$request->input('alternate-mobile'),
            'email'=>$request->input('email'),
            'blood-group'=>$request->input('blood-group'),
            'religion'=>$request->input('religion'),
            'union'=>$request->input('union'),
            'post-office'=>$request->input('post-office'),
            'police-station'=>$request->input('police-station'),
            'district'=>$request->input('district'),
            'weight'=>$request->input('weight'),
            'DOB'=>$request->input('DOB'),
            'last-donation'=>$request->input('last-donation'),

            'status'=>'1',

        ]);
        if($query){
            return back()->with('success','Your Request Has Been Forwarded');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        $query->save();
    }
}
