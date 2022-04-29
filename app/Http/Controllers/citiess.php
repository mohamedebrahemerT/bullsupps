<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\citiesdatatables;
use App\cities;
use App\otherdatasforShiping;
    
  use Hash;
  use up;
  use Storage;

class citiess extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(citiesdatatables $dataTable)
    {
         return $dataTable->render('Admin.cities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $cities=cities::create(['photo'=>'']);
 

             return redirect('admin/cities/'.$cities->id.'/edit'); 

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                $data= $this->validate(request(),[
               'cities_name_ar' => ['required', 'string', 'max:255'],
                'cities_name_en' => ['required', 'string', 'max:255'],
                'country_id' => ['required', 'string', 'max:255'],
                'ShippingRate' => ['required', 'integer'],

                  
         
            
            ],[],[
          'cities_name_ar'=>trans('admin.cities_name_ar'),
            'cities_name_en'=>trans('admin.cities_name_en'),
            'country_id'=>trans('admin.country_id'),  
            'ShippingRate'=>trans('admin.ShippingRate'),  
          
           ]);
               cities::create($data);
             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

         return redirect('admin/cities');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.city');
        $cities=cities::find($id);

       return view('Admin.cities.update',compact('title','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           
             

            $data= $this->validate(request(),[
               'cities_name_ar' => ['required', 'string', 'max:255'],
                'cities_name_en' => ['required', 'string', 'max:255'],
                'country_id' => ['required', 'string', 'max:255'],

            ],[],[
          'cities_name_ar'=>trans('admin.cities_name_ar'),
            'cities_name_en'=>trans('admin.cities_name_en'),
            'country_id'=>trans('admin.country_id'),

          

            ]);


 
 if (request()->has('input_key') && request()->has('input_value')) 

               {



            $i=0;



            $c=otherdatasforShiping::where('city_id',$id);

             $c->delete();

                $input_key = request('input_key');
      $input_value =request('input_value');
      $price =request('price');
      for($count = 0; $count < count($input_key); $count++)
      {

          otherdatasforShiping::create([

             'city_id'  =>$id,

                'input_key'   =>$input_key[$count],

                'input_value' =>$input_value[$count],
                'price' =>$price[$count],



                     ]);


    
      }
 
               }

              
             
               cities::where('id',$id)->update($data);

            return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>$data],200);
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $cities=cities::find($id);
                
         cities::find($id)->delete();
           session()->flash('success',trans('admin.deletecities'));
       

         return redirect('admin/cities');
    }

        public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) {
            
            cities::destroy(request('item'));

        }
        else
        {
               cities::find(request('item'))->delete();
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/cities');

         
    }
}


