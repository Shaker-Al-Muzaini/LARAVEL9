<?php
namespace App\Http\Controllers\Studends; 
use App\Http\Controllers\Controller; 
use App\Models\studend; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
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
         //model
        $image=$request->file('image');
        $path='up_lodes/images';
        $names=time()+rand(1,10000000).'.'.$image->getClientOriginalExtension();
        Storage::disk('local')->put($path.$names,file_get_contents($image));


        $studend=new studend();
        $studend->name=$nema;
        $studend->Brith_Date=$Brith_Date;
        $studend->Nationality=$Nationality;
        $studend->image=$path.$names;

        //check
        // $resalt=Storage::disk('local')->exists($path.$name);

        $studend->save();
        return redirect('studend_create');

    }

    //select

    #[NoReturn] public function index (Request $request)
    {
        //يمكن  استخدام  statement بدل  select ولكن  select افضل  من حيث الحماية

        //model
        //withTrashed   الجميع
        //onlyTrashed    فقط المحذوف
/*
        //لعمل Pagination  ل جميع الصفحات :
        1.استخدام  paginate بدل get
        2.إرسال  request مع البيانات

*/
        $paginate=10;
        $studends=studend::withTrashed()->select('*')
            ->paginate($paginate);
        foreach($studends as $studend) {
            $im =Storage::url($studend->image);
            $studend->image=$im;

            }
//        dd($studends->toArray());

       return view('studends.studend')->with('studend',$studends);
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
        $im =Storage::url($studend->image);
        $studend->image=$im;
        $key=['pl'=>'فلسطين','ag'=>'مصر','ar'=>'الأردن'];
        return view('studends.edit')->with('studend',$studend)->with('key' ,$key);

    }


    public function  update (Request $request,$id){

        $name=$request['name'];
        $Brith_Date=$request['Brith_Date'];
        $Nationality=$request['Nationality'];

        $image=$request->file('image');
        $path='up_lodes/images';
        $names=time()+rand(1,10000000).'.'.$image->getClientOriginalExtension();
        Storage::disk('local')->put($path.$names,file_get_contents($image));

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
        $studend->image=$path.$names;
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


