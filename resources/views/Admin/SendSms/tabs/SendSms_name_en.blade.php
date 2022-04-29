   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.SendSms_name_ar')}}</h3>


           <div class="form-group"> 
              
                     {{ Form::label('number', trans('admin.number'))  }}
                    {{ Form::text('number',old('number'),['class'=>'form-control number'])  }}
                     </div> 
 
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>

              <h3 class="box-title">{{trans('admin.SendSms_name_ar')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">  
                <div>
                   <textarea name="SendSms_name_ar" class="form-control SendSms_name_ar"   
                             > </textarea>
                </div>
           
            </div>
          
          </div>

    </div>
