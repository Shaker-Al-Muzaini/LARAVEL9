<?php
namespace App\Http\Controllers\Studends;  
use App\Http\Controllers\Controller;
    
      
class studendController extends Controller 
{ 
    public function  get_studend():string   
    {  
        $name='Is NAme';   
        return view('p1')-> 
            with('name',$name);
    }
    public  function get_studend_name()
    {
        return view('studends.selectstudens');
    }





    public  function store() 
    {
        return redirect('studend_create');

    }



    public  function create()
    {

        return view('studends.selectstudens');
    }


}

