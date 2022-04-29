 
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
      <h3>{{trans('admin.tbl_employee')}}</h3>

           
 
               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square  
"></i>
            
              <h3 class="box-title">{{trans('admin.tbl_employee')}}</h3>
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
            {!! Form::label('Name',trans('admin.Name')) !!}
            {!! Form::text('Name',$tbl_employee->Name,['class'=>'form-control']) !!}
        </div>

          <div class="form-group col-md-3 col-lg-3 col-sm-12">
            {!! Form::label('NetSalarry',trans('admin.NetSalarry')) !!}
            {!! Form::text('NetSalarry',$tbl_employee->NetSalarry,['class'=>'form-control']) !!}
        </div>
 

            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                     {{ Form::label('day', trans('admin.Day'))  }}
           
                <select name="Day" class="form-control">
      <option value="{{trans('admin.Monday')}}">{{trans('admin.Monday')}}  </option>
      <option value="{{trans('admin.Tuesday')}}">{{trans('admin.Tuesday')}}</option>
    <option value="{{trans('admin.Wednesday')}}">{{trans('admin.Wednesday')}}</option>
    <option value="{{trans('admin.Thursday')}}">{{trans('admin.Thursday')}}</option>
 
    <option value="{{trans('admin.Saturday')}}">{{trans('admin.Saturday')}}</option>
    <option value="{{trans('admin.Sunday')}}">{{trans('admin.Sunday')}}</option>
        </select>  

        </div>

 
               <div class="form-group col-md-3 col-lg-3 col-sm-3">
            {!! Form::label('DateOfatten',trans('admin.DateOfatten')) !!}
            {!! Form::text('DateOfatten',$tbl_employee->DateOfatten,['class'=>'form-control datetpicker','autocomplete'=>'off']) !!}
        </div>
                  
                      
            </div>


          <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12"> 


                     <p>{{trans('admin.Status')}}</p>
  <input type="radio" name="Status" value="{{trans('admin.attenddd')}}">  {{trans('admin.attenddd')}}<br>
  <input type="radio" name="Status" value="{{trans('admin.absent')}}">  {{trans('admin.absent')}}<br>
 

                     </div> 

               

    </div>
     </div>