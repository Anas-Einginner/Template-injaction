<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home()
    {
     return view('SiteOne.home');
    }
    function about()
    {
        return view('SiteOne.about');
    }
    function contact()
    {
        return view('SiteOne.contact');
    }
    public function postcontact(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
            'image' =>'required'
        ]);
        $NameSite ='SiteOne'. '-'. time() . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads'), $NameSite);
        return redirect()->route('site1.Transporter');
        }
    function Transporter(){
        return view('SiteOne.Transporter');
    }
    function msg($id=null)
    {
        /*
        
        */
        return view('SiteOne.msg')->with('id',$id);
        /*
        Way 2
        return view('SiteOne.msg',[
            'id' =>$id
        ]);
        */

    }
}
