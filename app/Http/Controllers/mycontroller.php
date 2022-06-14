<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function get_my_name()
    {
        $name='Shaker';
        $fa='Almazini';
        $ar=[1,2,3,4];
        return view('Profile.man')->with('sname',$name)->
             with('fa',$fa)->
            with('ar',$ar);

    }

    public function get_id ($id){
        return view('Profile.id_page')->with('id',$id);
    }


}
