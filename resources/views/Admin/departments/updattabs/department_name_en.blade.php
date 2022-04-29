   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.department_name_en')}}</h3>

      
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.department_name_en')}}</h3>
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
                 
 <div class="form-group col-md-6 col-lg-6 col-sm-6">
            {!! Form::label('dep_name_ar',trans('admin.dep_name_ar')) !!}
            {!! Form::text('dep_name_ar',$department->dep_name_ar,['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-6 col-lg-6 col-sm-6">
            {!! Form::label('dep_name_en',trans('admin.dep_name_en')) !!}
            {!! Form::text('dep_name_en',$department->dep_name_en,['class'=>'form-control']) !!}
        </div>


      

    

                 <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                 {{ Form::label('country_id', trans('admin.chiosemainprog'))  }}
{{ Form::select('country_id',App\Department::where('parent',null)->pluck('dep_name_ar','id'),$department->country_id,['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
                     </div> 
                                                          

                 <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
 
 <label class="citycity hidden">{{trans('admin.chiosesubprog')}}</label>
   

 

                   <span class="city">
                     
                   </span>

                     </div> 



                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
 
 <label class="priceprice hidden">{{trans('admin.priceguid')}}</label>

                   <span class="price"></span>
                     </div> 
        <div class="clearfix"></div>


        <div class="form-group col-md-6 col-lg-6 col-sm-6">
            {!! Form::label('description',trans('admin.description')) !!}
            {!! Form::textarea('description',$department->description,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6 col-lg-6 col-sm-6">
            {!! Form::label('keyword',trans('admin.keyword')) !!}
            {!! Form::textarea('keyword',$department->keyword,['class'=>'form-control']) !!}
        </div>
       
        

                </div>
           
            </div>
          
          </div>

    </div>
