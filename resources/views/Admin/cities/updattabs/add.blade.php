   <div id="home" class="tab-pane fade in active">

      <h3>{{trans('admin.cities')}}</h3>



         



               <div class="box box-info">

            <div class="box-header">

              <i class="fa fa-check-square	

"></i>

            

              <h3 class="box-title">{{trans('admin.cities')}}</h3>

              <!-- tools box -->

              <div class="pull-right box-tools">

                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"

                        title="Remove">

                  <i class="fa fa-times"></i></button>

              </div>

              <!-- /. tools -->

            </div>

            <div class="box-body">  

                <div>

                







                     <div class="form-group"> 

  {{ Form::label('cities_name_ar', trans('admin.cities_name_ar'))  }}

                    {{ Form::text('cities_name_ar',$cities->cities_name_ar,['class'=>'form-control'])  }}

                     </div> 

                       <div class="form-group"> 

                     {{ Form::label('cities_name_en', trans('admin.cities_name_en'))  }}

                    {{ Form::text('cities_name_en',$cities->cities_name_en,['class'=>'form-control'])  }}

                     </div> 

                      

                       <div class="form-group"> 

                     {{ Form::label('country_id', trans('admin.country_id'))  }}

{{ Form::select('country_id',App\countries::pluck('countries_name_en','id'),$cities->country_id,['class'=>'form-control',"placeholder"=>"........"] )  }}

                     </div> 

                       <div class="form-group"> 

 <label for="zone">zone:</label>

<select name="zone" id="zone">
  <option value="zone1">zone1</option>
  <option value="zone2">zone2</option>
  <option value="zone3">zone3</option>
 
</select> 
                    
                     </div> 





                </div>

           

            </div>

          

          </div>



    </div>

 









