
  <div id="department" class="tab-pane fade in active">
      <h3>{{trans('admin.Order_name_ar')}}</h3>

       

 <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-cube  
	
"></i>

              <h3 class="box-title">{{trans('admin.Order_name_arr')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">  

             

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_email', trans('admin.billing_email'))  }}
                    {{ Form::text('billing_email',$Order->billing_email,['class'=>'form-control billing_email'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_name', trans('admin.billing_name'))  }}
                    {{ Form::text('billing_name',$Order->billing_name,['class'=>'form-control billing_name'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_address', trans('admin.billing_address'))  }}
                    {{ Form::text('billing_address',$Order->billing_address,['class'=>'form-control billing_address'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_city', trans('admin.billing_city'))  }}
                    {{ Form::text('billing_city',$Order->billing_city,['class'=>'form-control billing_city'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_province', trans('admin.billing_province'))  }}
                    {{ Form::text('user_id',$Order->billing_province,['class'=>'form-control billing_province'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_postalcode', trans('admin.billing_postalcode'))  }}
                    {{ Form::text('billing_postalcode',$Order->billing_postalcode,['class'=>'form-control billing_postalcode'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_phone', trans('admin.billing_phone'))  }}
                    {{ Form::text('billing_phone',$Order->billing_phone,['class'=>'form-control billing_phone'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_name_on_card', trans('admin.billing_name_on_card'))  }}
                    {{ Form::text('user_id',$Order->billing_name_on_card,['class'=>'form-control billing_name_on_card'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_discount', trans('admin.billing_discount'))  }}
                    {{ Form::text('billing_discount',$Order->billing_discount,['class'=>'form-control billing_discount'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_discount_code', trans('admin.billing_discount_code'))  }}
                    {{ Form::text('billing_discount_code',$Order->billing_discount_code,['class'=>'form-control billing_discount_code'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_subtotal', trans('admin.billing_subtotal'))  }}
                    {{ Form::text('billing_subtotal',$Order->billing_subtotal,['class'=>'form-control billing_subtotal'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_tax', trans('admin.billing_tax'))  }}
                    {{ Form::text('user_id',$Order->billing_tax,['class'=>'form-control billing_tax'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('billing_total', trans('admin.billing_total'))  }}
                    {{ Form::text('billing_total',$Order->billing_total,['class'=>'form-control billing_total'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('payment_gateway', trans('admin.payment_gateway'))  }}
                    {{ Form::text('payment_gateway',$Order->payment_gateway,['class'=>'form-control payment_gateway'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('shipped', trans('admin.shipped'))  }}
                    {{ Form::text('shipped',$Order->shipped,['class'=>'form-control shipped'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('error', trans('admin.error'))  }}
                    {{ Form::text('error',$Order->error,['class'=>'form-control error'])  }}
                     </div> 

                       <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('Invoice', trans('admin.Invoice'))  }}
                    {{ Form::text('Invoice',$Order->Invoice,['class'=>'form-control Invoice'])  }}
                     </div> 

                      <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('PaymentDue', trans('admin.PaymentDue'))  }}
                    {{ Form::text('Invoice',$Order->PaymentDue,['class'=>'form-control PaymentDue'])  }}
                     </div> 


           
            </div>
          
          </div>

</div>