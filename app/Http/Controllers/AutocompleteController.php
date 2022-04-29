<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Storage;


class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('autocomplete');
    }

    function search()
    {
      return 0;
     return view('forentend3.search.search');
    }

    

    function fetch(Request $request)
    {



      
        if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('productes')
      
        ->where('title_name_ar', 'LIKE', $query.'%')
        ->orWhere('title_name_en', 'LIKE', $query.'%')
        //->orWhere('content_name_ar', 'LIKE', "%{$query}%")
 

       ->
        get();

        $count=DB::table('productes')
        ->where('title_name_ar', 'LIKE', "%{$query}%")
        ->
        count();

        
      $output = '<ul class="dropdown-menu onhvermenu " style="display:block; position:relative ;">';

      
      foreach($data as $row)
      {
        $output .= '
        
       <li style="list-style: none;
margin: 0;
padding: 5px;">
      
                        
                <div style="display: inline-flex;">
                    
      
                   <div>

                     
                      <span>
                     <a style ="color:#000;"  href='.url('/').'/shop/'.$row->id.'>'.$row->title_name_ar.'</a>
                     </span>
                     <br>
                       <span style="color:red">
                    ' .$row->price. ' <span >ريال </span> <br>
                     </span>
                      <a href='.url('/').'/shop/'.$row->id.' style ="color:#000;">
                      <span class="lisrech" style ="color:#000;">'. substr($row->content_name_ar,0,80).'</span>
 
                       </a>

                   </div>

                   &nbsp;&nbsp;

                    <div>
                     <a href='.url('/').'/shop/'.$row->id.'>
                        <img src="'.Storage::url($row->photo).'" width="40" height="40" style="border-radius: 8px;">
                        </a>
     
      
                     </div>
    

                </div>
       
                

       </li>


       ';
      }


      $output .= ' 
 <hr style="    margin-bottom: 1px;
;width:100%;height:1px;border-width:0;color:gray;background-color:gray">
            <a href="'.url('/').'/search" style="text-align: center;
    margin-right: 50px;
    font-size: 15px;
    color: #eb6625;
 "   target="_blank">
             <span >عرض جميع النتائج   '.$count.'</span>
            </a>

        </ul>';
      echo  $output;
     }



        
     

       

    }


    //////////////////////////////////////////////////////////////////////////////////


     function fetch2(Request $request)
    {

      

      
        if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('productes')
      
        ->where('title_name_ar', 'LIKE', $query.'%')
        ->orWhere('title_name_en', 'LIKE', $query.'%')

        //->orWhere('content_name_ar', 'LIKE', "%{$query}%")
 

       ->
        get();

        $count=DB::table('productes')
           ->where('title_name_ar', 'LIKE', $query.'%')
        ->
        count();

        
      $output = '<ul class="dropdown-menu onhvermenu" style="display: block;
position: relative;
width: 324px;
text-align: end;
">';

      
      foreach($data as $row)
      {
        $output .= '
        
       <li style="list-style: none;
margin: 0;
padding: 5px;">
      
                        
                <div style="display: inline-flex;">
                    
      
                   <div>

                     
                      <span>
                     <a style ="color:#000;"  href='.url('/').'/shop/'.$row->id.'>'.$row->title_name_ar.'</a>
                     </span>
                     <br>
                       <span style="color:red">
                    ' .$row->price. ' <span > ريال </span> <br>
                     </span>
                      <a href='.url('/').'/shop/'.$row->id.' style ="color:#000;">
                      <span class="lisrech" style ="color:#000;">'. substr($row->content_name_ar,0,80).'</span>
 
                       </a>

                   </div>

                   &nbsp;&nbsp;

                    <div>
                     <a href='.url('/').'/shop/'.$row->id.'>
                        <img src="'.Storage::url($row->photo).'" width="40" height="40" style="border-radius: 8px;">
                        </a>
     
      
                     </div>
    

                </div>
       
                

       </li>


       ';
      }


      $output .= ' 
 <hr style="    margin-bottom: 1px;
;width:100%;height:1px;border-width:0;color:gray;background-color:gray">
            <a href="'.url('/').'/search" style="text-align: center;
    margin-right: 50px;
    font-size: 15px;
    color: #eb6625;
 "   target="_blank">
             <span >عرض جميع النتائج   '.$count.'</span>
            </a>

        </ul>';
      echo  $output;
     }



        
     

       

    }


    

}