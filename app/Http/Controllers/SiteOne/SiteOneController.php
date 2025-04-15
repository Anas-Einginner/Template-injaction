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
    public function postcontact()
    {
        return 'Hallo'
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
