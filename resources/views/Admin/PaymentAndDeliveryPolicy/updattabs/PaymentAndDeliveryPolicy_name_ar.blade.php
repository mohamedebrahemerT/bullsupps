
  <div id="department" class="tab-pane fade">
      <h3>{{trans('admin.PaymentAndDeliveryPolicy_name_ar')}}</h3>

        <div class="form-group"> 
              
                     {{ Form::label('title_name_ar', trans('admin.title_name_ar'))  }}
                    {{ Form::text('title_name_ar',$PaymentAndDeliveryPolicy->title_name_ar,['class'=>'form-control title_name_ar'])  }}
                     </div> 

 <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-cube  
	
"></i>

              <h3 class="box-title">{{trans('admin.PaymentAndDeliveryPolicy_name_arr')}}</h3>
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
                  <textarea name="PaymentAndDeliveryPolicy_name_ar"  class="form-control PaymentAndDeliveryPolicy_name_ar" > {{$PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_ar}}</textarea>
                </div>
           
            </div>
          
          </div>

</div>