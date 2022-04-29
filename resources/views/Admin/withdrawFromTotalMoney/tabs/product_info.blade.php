 
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
      <h3>{{trans('admin.withdrawFromTotalMoney')}}</h3>

           
 
               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square  
"></i>
            
              <h3 class="box-title">{{trans('admin.withdrawFromTotalMoney')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm  " data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">   



 
        

               <div class="form-group col-md-4 col-lg-4 col-sm-12">
            {!! Form::label('TheAmountToBeWithdrawn',trans('admin.TheAmountToBeWithdrawn')) !!}
            {!! Form::text('TheAmountToBeWithdrawn',$withdrawFromTotalMoney->TheAmountToBeWithdrawn,['class'=>'form-control']) !!}
        </div>

          <div class="form-group col-md-4 col-lg-4 col-sm-12">
            {!! Form::label('TheGoalOfWithdrawingMoney',trans('admin.TheGoalOfWithdrawingMoney')) !!}
            {!! Form::text('TheGoalOfWithdrawingMoney',$withdrawFromTotalMoney->TheGoalOfWithdrawingMoney,['class'=>'form-control']) !!}
        </div>
 

            <div class="form-group col-md-4 col-lg-4 col-sm-12">
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

 
        
                  
                      
            </div>

               

    </div>
     </div>