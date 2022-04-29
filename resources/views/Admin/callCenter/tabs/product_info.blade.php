 
    @push('js')
 


  <script type="text/javascript">        
  $('.datetpicker').datepicker({
        rtl:true,
        language:'{{ session("lang") }}',
        todayBtn:true,
        utoclose:false,
        clearBtn:true,
  });
           
          
        </script>
@endpush


   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.callCenter')}}</h3>

           
 
               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square  
"></i>
            
              <h3 class="box-title">{{trans('admin.newREsrve')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm  " data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">           

               <div class="form-group col-md-3 col-lg-3 col-sm-12">
            {!! Form::label('name',trans('admin.name')) !!}
            {!! Form::text('name',$callCenter->name,['class'=>'form-control']) !!}
        </div>

          <div class="form-group col-md-3 col-lg-3 col-sm-12">
            {!! Form::label('phone',trans('admin.phone')) !!}
            {!! Form::text('phone',$callCenter->phone,['class'=>'form-control']) !!}
        </div>
 

            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                     {{ Form::label('day', trans('admin.day'))  }}
           
                <select name="day" class="form-control">
      <option value="{{trans('admin.Monday')}}">{{trans('admin.Monday')}}  </option>
      <option value="{{trans('admin.Tuesday')}}">{{trans('admin.Tuesday')}}</option>
    <option value="{{trans('admin.Wednesday')}}">{{trans('admin.Wednesday')}}</option>
    <option value="{{trans('admin.Thursday')}}">{{trans('admin.Thursday')}}</option>
 
    <option value="{{trans('admin.Saturday')}}">{{trans('admin.Saturday')}}</option>
    <option value="{{trans('admin.Sunday')}}">{{trans('admin.Sunday')}}</option>
        </select>  

        </div>

 
               <div class="form-group col-md-3 col-lg-3 col-sm-3">
            {!! Form::label('dateOfcome',trans('admin.dateOfcome')) !!}
            {!! Form::text('dateOfcome',$callCenter->dateOfcome,['class'=>'form-control datetpicker','autocomplete'=>'off']) !!}
        </div>
                  
                      
            </div>

               

    </div>
     </div>