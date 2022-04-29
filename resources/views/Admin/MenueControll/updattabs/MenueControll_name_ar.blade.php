    <div id="MenueControllen" class="tab-pane fade in">
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
                     {{ Form::label('admin_name_en', trans('admin.admin_name_en'))  }}
                    {{ Form::text('admin_name_en',$MenueControll->admin_name_en,['class'=>'form-control admin_name_en'])  }}
                     </div> 

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('settings_name_en', trans('admin.settings_name_en'))  }}
                    {{ Form::text('settings_name_en',$MenueControll->settings_name_en,['class'=>'form-control settings_name_en'])  }}
                     </div>

                         <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('admins_name_en', trans('admin.admins_name_en'))  }}
                    {{ Form::text('admins_name_en',$MenueControll->admins_name_en,['class'=>'form-control admins_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('user_name_en', trans('admin.user_name_en'))  }}
                    {{ Form::text('user_name_en',$MenueControll->user_name_en,['class'=>'form-control user_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('user_name_en', trans('admin.vendor_name_en'))  }}
                    {{ Form::text('vendor_name_en',$MenueControll->vendor_name_en,['class'=>'form-control vendor_name_en'])  }}
                     </div>

                          <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('company_name_en', trans('admin.company_name_en'))  }}
                    {{ Form::text('company_name_en',$MenueControll->company_name_en,['class'=>'form-control company_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('imported_name_en', trans('admin.imported_name_en'))  }}
                    {{ Form::text('imported_name_en',$MenueControll->imported_name_en,['class'=>'form-control imported_name_en'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Factory_name_en', trans('admin.Factory_name_en'))  }}
                    {{ Form::text('Factory_name_en',$MenueControll->Factory_name_en,['class'=>'form-control Factory_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Handicraft_name_en', trans('admin.Handicraft_name_en'))  }}
                    {{ Form::text('Handicraft_name_en',$MenueControll->Handicraft_name_en,['class'=>'form-control Handicraft_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('users_name_en', trans('admin.users_name_en'))  }}
                    {{ Form::text('users_name_en',$MenueControll->users_name_en,['class'=>'form-control users_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('WhoWeAre_name_en', trans('admin.WhoWeAre_name_en1'))  }}
                    {{ Form::text('WhoWeAre_name_en',$MenueControll->WhoWeAre_name_en,['class'=>'form-control WhoWeAre_name_en'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('VisionMission_name_en', trans('admin.VisionMission_name_en1'))  }}
                    {{ Form::text('VisionMission_name_en',$MenueControll->VisionMission_name_en,['class'=>'form-control VisionMission_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Objectives_name_en', trans('admin.Objectives_name_en'))  }}
                    {{ Form::text('Objectives_name_en',$MenueControll->Objectives_name_en,['class'=>'form-control Objectives_name_en'])  }}
                     </div>

                     <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('newes_name_en', trans('admin.newes_name_en11'))  }}
                    {{ Form::text('newes_name_en',$MenueControll->newes_name_en,['class'=>'form-control newes_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('counteries_name_en', trans('admin.counteries_name_en'))  }}
                    {{ Form::text('counteries_name_en',$MenueControll->counteries_name_en,['class'=>'form-control counteries_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('cities_name_en', trans('admin.cities_name_en1'))  }}
                    {{ Form::text('cities_name_en',$MenueControll->cities_name_en,['class'=>'form-control cities_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('states_name_en', trans('admin.states_name_en1'))  }}
                    {{ Form::text('states_name_en',$MenueControll->states_name_en,['class'=>'form-control states_name_en'])  }}
                     </div>
                    

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('departments_name_en', trans('admin.departments_name_en'))  }}
                    {{ Form::text('departments_name_en',$MenueControll->departments_name_en,['class'=>'form-control departments_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('trademarks_name_en', trans('admin.trademarks_name_en'))  }}
                    {{ Form::text('trademarks_name_en',$MenueControll->trademarks_name_en,['class'=>'form-control trademarks_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('manufacturers_name_en', trans('admin.manufacturers_name_en'))  }}
                    {{ Form::text('manufacturers_name_en',$MenueControll->manufacturers_name_en,['class'=>'form-control manufacturers_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('shipping_name_en', trans('admin.shipping_name_en'))  }}
                    {{ Form::text('shipping_name_en',$MenueControll->shipping_name_en,['class'=>'form-control shipping_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('malls_name_en', trans('admin.malls_name_en'))  }}
                    {{ Form::text('malls_name_en',$MenueControll->malls_name_en,['class'=>'form-control malls_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('colors_name_en', trans('admin.colors_name_en'))  }}
                    {{ Form::text('colors_name_en',$MenueControll->colors_name_en,['class'=>'form-control colors_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('sizes_name_en', trans('admin.sizes_name_en'))  }}
                    {{ Form::text('sizes_name_en',$MenueControll->sizes_name_en,['class'=>'form-control sizes_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('weight_name_en', trans('admin.weight_name_en'))  }}
                    {{ Form::text('weight_name_en',$MenueControll->weight_name_en,['class'=>'form-control weight_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('productes_name_en', trans('admin.productes_name_en'))  }}
                    {{ Form::text('productes_name_en',$MenueControll->productes_name_en,['class'=>'form-control productes_name_en'])  }}
                     </div>

                      

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Coupons_name_en', trans('admin.Coupons_name_en'))  }}
                    {{ Form::text('Coupons_name_en',$MenueControll->Coupons_name_en,['class'=>'form-control Coupons_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Marketers_name_en', trans('admin.Marketers_name_en'))  }}
                    {{ Form::text('Marketers_name_en',$MenueControll->Marketers_name_en,['class'=>'form-control Marketers_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
                   {{ Form::label('Jobs_name_en', trans('admin.Jobs_name_en1'))  }}
                    {{ Form::text('Jobs_name_en',$MenueControll->Marketers_name_en,['class'=>'form-control Jobs_name_en'])  }}
                     </div>

                       <div class="form-group col-sm-2 col-md-2 col-lg-2">             
        {{ Form::label('publicPayment_name_en', trans('admin.publicPayment_name_en'))  }}
                    {{ Form::text('publicPayment_name_en',$MenueControll->publicPayment_name_en,['class'=>'form-control publicPayment_name_en'])  }}
                     </div>

                      <div class="form-group col-sm-2 col-md-2 col-lg-2">             
        {{ Form::label('MyAcount_name_en', trans('admin.MyAcount_name_en'))  }}
                    {{ Form::text('publicPayment_name_en',$MenueControll->MyAcount_name_en,['class'=>'form-control MyAcount_name_en'])  }}
                     </div>

     




                </div>
           
            </div>
          
          </div>

    </div>
