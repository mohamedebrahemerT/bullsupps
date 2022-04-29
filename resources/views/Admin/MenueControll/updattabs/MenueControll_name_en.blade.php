   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.MenueControll')}}</h3>

          
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.MenueControll')}}</h3>
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

  
 

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                     {{ Form::label('admin_name_ar', trans('admin.admin_name_ar'))  }}
                    {{ Form::text('admin_name_ar',$MenueControll->admin_name_ar,['class'=>'form-control admin_name_ar'])  }}
                     </div> 

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('settings_name_ar', trans('admin.settings_name_ar'))  }}
                    {{ Form::text('settings_name_ar',$MenueControll->settings_name_ar,['class'=>'form-control settings_name_ar'])  }}
                     </div>

                         <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('admins_name_ar', trans('admin.admins_name_ar'))  }}
                    {{ Form::text('admins_name_ar',$MenueControll->admins_name_ar,['class'=>'form-control admins_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('user_name_ar', trans('admin.user_name_ar'))  }}
                    {{ Form::text('user_name_ar',$MenueControll->user_name_ar,['class'=>'form-control user_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('user_name_ar', trans('admin.vendor_name_ar'))  }}
                    {{ Form::text('vendor_name_ar',$MenueControll->vendor_name_ar,['class'=>'form-control vendor_name_ar'])  }}
                     </div>

                          <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('company_name_ar', trans('admin.company_name_ar'))  }}
                    {{ Form::text('company_name_ar',$MenueControll->company_name_ar,['class'=>'form-control company_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('imported_name_ar', trans('admin.imported_name_ar'))  }}
                    {{ Form::text('imported_name_ar',$MenueControll->imported_name_ar,['class'=>'form-control imported_name_ar'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Factory_name_ar', trans('admin.Factory_name_ar'))  }}
                    {{ Form::text('Factory_name_ar',$MenueControll->Factory_name_ar,['class'=>'form-control Factory_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Handicraft_name_ar', trans('admin.Handicraft_name_ar'))  }}
                    {{ Form::text('Handicraft_name_ar',$MenueControll->Handicraft_name_ar,['class'=>'form-control Handicraft_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('users_name_ar', trans('admin.users_name_ar'))  }}
                    {{ Form::text('users_name_ar',$MenueControll->users_name_ar,['class'=>'form-control users_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('WhoWeAre_name_ar', trans('admin.WhoWeAre_name_ar1'))  }}
                    {{ Form::text('WhoWeAre_name_ar',$MenueControll->WhoWeAre_name_ar,['class'=>'form-control WhoWeAre_name_ar'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('VisionMission_name_ar', trans('admin.VisionMission_name_ar1'))  }}
                    {{ Form::text('VisionMission_name_ar',$MenueControll->VisionMission_name_ar,['class'=>'form-control VisionMission_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Objectives_name_ar', trans('admin.Objectives_name_ar'))  }}
                    {{ Form::text('Objectives_name_ar',$MenueControll->Objectives_name_ar,['class'=>'form-control Objectives_name_ar'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('newes_name_ar', trans('admin.newes_name_ar11'))  }}
                    {{ Form::text('newes_name_ar',$MenueControll->newes_name_ar,['class'=>'form-control newes_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('counteries_name_ar', trans('admin.counteries_name_ar'))  }}
                    {{ Form::text('counteries_name_ar',$MenueControll->counteries_name_ar,['class'=>'form-control counteries_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('cities_name_ar', trans('admin.cities_name_ar1'))  }}
                    {{ Form::text('cities_name_ar',$MenueControll->cities_name_ar,['class'=>'form-control cities_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('states_name_ar', trans('admin.states_name_ar1'))  }}
                    {{ Form::text('states_name_ar',$MenueControll->states_name_ar,['class'=>'form-control states_name_ar'])  }}
                     </div>
                    

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('departments_name_ar', trans('admin.departments_name_ar'))  }}
                    {{ Form::text('departments_name_ar',$MenueControll->departments_name_ar,['class'=>'form-control departments_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('trademarks_name_ar', trans('admin.trademarks_name_ar'))  }}
                    {{ Form::text('trademarks_name_ar',$MenueControll->trademarks_name_ar,['class'=>'form-control trademarks_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('manufacturers_name_ar', trans('admin.manufacturers_name_ar'))  }}
                    {{ Form::text('manufacturers_name_ar',$MenueControll->manufacturers_name_ar,['class'=>'form-control manufacturers_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('shipping_name_ar', trans('admin.shipping_name_ar'))  }}
                    {{ Form::text('shipping_name_ar',$MenueControll->shipping_name_ar,['class'=>'form-control shipping_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('malls_name_ar', trans('admin.malls_name_ar'))  }}
                    {{ Form::text('malls_name_ar',$MenueControll->malls_name_ar,['class'=>'form-control malls_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('colors_name_ar', trans('admin.colors_name_ar'))  }}
                    {{ Form::text('colors_name_ar',$MenueControll->colors_name_ar,['class'=>'form-control colors_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('sizes_name_ar', trans('admin.sizes_name_ar'))  }}
                    {{ Form::text('sizes_name_ar',$MenueControll->sizes_name_ar,['class'=>'form-control sizes_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('weight_name_ar', trans('admin.weight_name_ar'))  }}
                    {{ Form::text('weight_name_ar',$MenueControll->weight_name_ar,['class'=>'form-control weight_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('productes_name_ar', trans('admin.productes_name_ar'))  }}
                    {{ Form::text('productes_name_ar',$MenueControll->productes_name_ar,['class'=>'form-control productes_name_ar'])  }}
                     </div>

                   

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Coupons_name_ar', trans('admin.Coupons_name_ar'))  }}
                    {{ Form::text('Coupons_name_ar',$MenueControll->Coupons_name_ar,['class'=>'form-control Coupons_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Marketers_name_ar', trans('admin.Marketers_name_ar'))  }}
                    {{ Form::text('Marketers_name_ar',$MenueControll->Marketers_name_ar,['class'=>'form-control Marketers_name_ar'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Jobs_name_ar', trans('admin.Jobs_name_ar1'))  }}
                    {{ Form::text('Jobs_name_ar',$MenueControll->Marketers_name_ar,['class'=>'form-control Jobs_name_ar'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
         {{ Form::label('publicPayment_name_ar', trans('admin.publicPayment_name_ar'))  }}
         {{ Form::text('publicPayment_name_ar',$MenueControll->publicPayment_name_ar,['class'=>'form-control publicPayment_name_ar'])  }}
                     </div>

                        <div class="form-group col-sm-2 col-md-2 col-lg-2">             
         {{ Form::label('MyAcount_name_ar', trans('admin.MyAcount_name_ar'))  }}
         {{ Form::text('MyAcount_name_ar',$MenueControll->MyAcount_name_ar,['class'=>'form-control MyAcount_name_ar'])  }}
                     </div>

     





                </div>
           
            </div>
          
          </div>

    </div>
