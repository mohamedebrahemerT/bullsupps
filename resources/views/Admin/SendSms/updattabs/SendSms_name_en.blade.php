   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.SendSms_name_en')}}</h3>

             <div class="form-group"> 
              
                     {{ Form::label('number', trans('admin.number'))  }}
                    {{ Form::text('number',$SendSms->number,['class'=>'form-control number'])  }}
                     </div> 
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.smstext')}}</h3>
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
                  <textarea name="SendSms_name_ar" class="form-control SendSms_name_ar"   
                             >{{$SendSms->SendSms_name_ar}}</textarea>
                </div>
           
            </div>
          
          </div>

    </div>
