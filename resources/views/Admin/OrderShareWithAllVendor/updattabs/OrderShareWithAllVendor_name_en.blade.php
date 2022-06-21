   <div id="home" class="tab-pane fade in active">

      <h3>{{trans('admin.vendorrescit')}}</h3>



            

 



               <div class="box box-info">

            <div class="box-header">

              <i class="fa fa-check-square	

"></i>

            

              <h3 class="box-title">{{trans('admin.vendorrescit')}}</h3>

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

                <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_email', trans('admin.billing_email'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_email,['class'=>'form-control order_id'])  }}

                     </div> 





















                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_name', trans('admin.billing_name'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_name,['class'=>'form-control billing_name'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_address', trans('admin.billing_address'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_address,['class'=>'form-control billing_address'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_city', trans('admin.billing_city'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_city,['class'=>'form-control billing_city'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_province', trans('admin.billing_province'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_province,['class'=>'form-control billing_province'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_postalcode', trans('admin.billing_postalcode'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_postalcode,['class'=>'form-control billing_postalcode'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_phone', trans('admin.billing_phone'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_phone,['class'=>'form-control billing_phone'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_name_on_card', trans('admin.billing_name_on_card'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_name_on_card,['class'=>'form-control billing_name_on_card'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_discount', trans('admin.billing_discount'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_discount,['class'=>'form-control billing_discount'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_discount_code', trans('admin.billing_discount_code'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_discount_code,['class'=>'form-control billing_discount_code'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_subtotal', trans('admin.billing_subtotal'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_subtotal,['class'=>'form-control billing_subtotal'])  }}

                     </div> 

                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('billing_total', trans('admin.billing_total'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->billing_total,['class'=>'form-control billing_total'])  }}

                     </div> 



                        <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('payment_gateway', trans('admin.payment_gateway'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->payment_gateway,['class'=>'form-control payment_gateway'])  }}

                     </div> 



                        <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

                     {{ Form::label('Invoice', trans('admin.Invoice'))  }}

                    {{ Form::text('order_id',$OrderShareWithAllVendor->order_idd->Invoice,['class'=>'form-control Invoice'])  }}

                     </div> 



                       <div class="form-group col-sm-2 col-lg-2 col-md-2"> 

              

                     {{ Form::label('admin_id', trans('admin.admin_id'))  }}

                    {{ Form::text('admin_id',$OrderShareWithAllVendor->admin_idd->name,['class'=>'form-control admin_id'])  }}

                     </div>

                       <div class="form-group col-sm-12 col-lg-12 col-md-12"> 

              

                     {{ Form::label('ReasonForReturn', trans('admin.couseofreturn'))  }}

                    {{ Form::text('ReasonForReturn',$OrderShareWithAllVendor->ReasonForReturn,['class'=>'form-control ReasonForReturn'])  }}

                     </div>  

 


                      

                </div>

           

            </div>

          

          </div>



    </div>











 



 