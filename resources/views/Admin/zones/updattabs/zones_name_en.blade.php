       @push('js')
              <script type="text/javascript">
                $(document).ready(function() {
        $('.mall_select2').select2();
});
              </script>
              @endpush

   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.zones_name_en')}}</h3>

 


             <div class="form-group col-sm-4"> 
              
                     {{ Form::label('title_name_ar', trans('admin.zone_name_ar'))  }}
                    {{ Form::text('title_name_ar',$zones->title_name_ar,['class'=>'form-control title_name_ar'])  }}
                     </div> 
 
             <div class="form-group col-sm-4"> 
              
                     {{ Form::label('title_name_en', trans('admin.zone_name_en'))  }}
                    {{ Form::text('title_name_en',$zones->title_name_en,['class'=>'form-control title_name_en'])  }}
                     </div> 



                      <div class="form-group col-sm-4"> 
              
                     {{ Form::label('price', trans('admin.price'))  }}
                    {{ Form::text('price',$zones->price,['class'=>'form-control price'])  }}
                     </div> 


@php

            $city_iddsss=[];
            foreach(App\statDistrebutionToZones::get() as $data)
                      {
                       
                            $thiscityid=$data->city_id;

                        array_push($city_iddsss, $thiscityid );


                      }



@endphp

                       <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
                      
                         {!! Form::label('regon',trans('admin.regon')) !!}
                      
                      <select name="city_id[]" class="form-control mall_select2" multiple="multiple" style="width: 100%">
                        @foreach(App\countries::all() as $country)

                        <optgroup label="{{ $country->countries_name_ar }}"> 




                       @foreach(App\cities::whereNotIn('id', $city_iddsss)->get() as $city)
                          
                           <option value="{{$city->id }}">{{ $city->cities_name_ar }}</option>

 
                            @endforeach
                        </optgroup> 
                        @endforeach



                      </select>

<br>
<br>


<table class="table">
  <thead>
    <tr>
      <th scope="col"> المدينة </th>
      <th scope="col"> حذف</th>
      
    </tr>
  </thead>
  <tbody>
            @foreach($zones->statDistrebutionToZonesfun()->get() as $data)

    <tr>
     
      <td><button type="button" class="btn btn-primary"> {{$data->city_idd->cities_name_ar}} </button></td>
      <td>

        <a href="">
<i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
</a>
</td>
     
    </tr>
                        @endforeach

    
  </tbody>
</table>
                         
                         




<br>

                    
                  </div> 
 
 

    </div>
