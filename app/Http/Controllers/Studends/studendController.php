<?php
namespace App\Http\Controllers\Studends;  
use App\Http\Controllers\Controller;
use App\Models\studend; 
use Illuminate\Http\Request;  
use JetBrains\PhpStorm\NoReturn; 
 

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

    //view

    public  function create()
    {
        $key=['pl'=>'فلسطين','ag'=>'مصر','ar'=>'الأردن'];
        return view('studends.selectstudens')->with('key' ,$key);
    }

    //create

     #[NoReturn] public function store(Request $request)
    {
        $nema=$request['name'];
        $Brith_Date=$request['Brith_Date'];
        $Nationality=$request['Nationality'];

        //row


//        $query="INSERT INTO studend (name,Brith_Date,Nationality) VALUES
//                ('$nema','$Brith_Date','$Nationality')";
//       $result= DB::insert($query);
//        dd($result);


        ////Query Builder


//       DB::table('studend')
//->insert(['name'=>$nema,'Brith_Date'=>$Brith_Date,'Nationality'=>$Nationality]);



         //model

         $studend=new studend();
         $studend->name=$nema;
         $studend->Brith_Date=$Brith_Date;
         $studend->Nationality=$Nationality;
         $studend->save();
        return redirect('studend_create');

    }

    //select

    #[NoReturn] public function index ()
    {
        //يمكن  استخدام  statement بدل  select ولكن  select افضل  من حيث الحماية
//        $query="SELECT * FROM studend ";
//       $result= DB::select($query);

        //Query Builder
//ممكن  تاخد  ->where('id',11)

//        $result= DB::table('studend')
//            ->select('*')
//            ->get();
//        return view('studends.studend')->with('studend',$result);



        //model
        //withTrashed   الجميع
        //onlyTrashed    فقط المحذوف


        $result=studend::select('*')
            ->get();
       return view('studends.studend')->with('studend',$result);
    }

    //edit

    public function  edit ($id)
    {
//        $query="SELECT * FROM studend WHERE  id = $id limit 1";
//        $result=  DB::select($query);
//        $studend=$result[0];

            //Query Builder
//        $studend= DB::table('studend')
//            ->where('id',$id)
//            ->first();
//        $key=['pl'=>'فلسطين','ag'=>'مصر','ar'=>'الأردن'];
//        return view('studends.edit')->with('studend',$studend)->with('key' ,$key);



//model

        $studend=studend::where('id',$id)
            ->first();
        $key=['pl'=>'فلسطين','ag'=>'مصر','ar'=>'الأردن'];
        return view('studends.edit')->with('studend',$studend)->with('key' ,$key);

    }


    public function  update (Request $request,$id){
        $name=$request['name'];
        $Brith_Date=$request['Brith_Date'];
        $Nationality=$request['Nationality'];


        //row


//            $query="UPDATE  studend SET  name='$name',Brith_Date='$Brith_Date',
//                    Nationality='$Nationality' where  id = $id";
//        DB::statement($query);



        ////Query Builder


//        DB::table('studend')
//            ->where('id',$id)
//            ->update(['name'=>$name,'Brith_Date'=>$Brith_Date,'Nationality'=>$Nationality]);



          //model

        $studend=studend::where('id',$id)->first();
        $studend->name=$name;
        $studend->Brith_Date=$Brith_Date;
        $studend->Nationality=$Nationality;
        $studend->save();
        return redirect('studend');
    }

    public  function  destroy ($id)
    {

        //row Builder

//        $query=" DELETE FROM studend WHERE id =$id";
//        DB::delete($query);
      //  dd($reselt.'yes is  delete');



      //  Query Builder
//        DB::table('studend')
//            ->where('id',$id)
//            ->delete();



        //model

        studend::where('id',$id)
            ->delete();
        return redirect('studend');




    }


}


