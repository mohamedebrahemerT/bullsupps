<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
      use App\product;
      use App\Department;
      use App\comment;
      use App\newes;
        use DB;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
         { 
          }




public function blog()
{

            
                  $newess= newes::paginate(12);
                   $randomNewess= newes::inrandomOrder()->take(3)->get();

    return view('forentend4.blog.blog',compact('newess','randomNewess'));
     
}


    public function show($id)
    {
      $randomNewess= newes::with('admin_id')->with('comment')->take(3)->inRandomOrder()->get();
             
              

              
        $newes=newes::find($id);

         $NumberOFcomment=0;

        

        return view('forentend4.blog-single.blog-single',compact('newes','NumberOFcomment','randomNewess'));
    }

  public function addcomment(Request $request)
    {



          if (Auth()->guard('cc')->check())
           {
              //return request();
              $data= $this->validate(request(),[
            'comment'=>'required',
           
          
            ],[],[
          'comment'=>'comment',
  
           
            ]);

          $data['user_id']=auth()->guard('cc')->user()->id;
         $data['newes_id']=Request('newes_id');
             comment::create($data);

               session()->flash('success',' comment add Successfully');

                 return back()->withInput();
     
          }
          else
          {
              session()->flash('errors','shoud register to add comment');

                 return back()->withInput();    
          }
        
    }

       
 
     
}
