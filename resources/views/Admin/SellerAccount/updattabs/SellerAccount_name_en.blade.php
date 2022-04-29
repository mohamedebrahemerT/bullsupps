   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.SellerAccount_name_en')}}</h3>

            
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.SellerAccount_name_en')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body"> 
















                 <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('TelephoneNumber', trans('admin.TelephoneNumber'))  }}
                    {{ Form::text('TelephoneNumber',$SellerAccount->TelephoneNumber,['class'=>'form-control TelephoneNumber'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('FirstAndLastName', trans('admin.FirstAndLastName'))  }}
                    {{ Form::text('FirstAndLastName',$SellerAccount->FirstAndLastName,['class'=>'form-control FirstAndLastName'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('TheNameOftheStore', trans('admin.TheNameOftheStore'))  }}
                    {{ Form::text('TheNameOftheStore',$SellerAccount->TheNameOftheStore,['class'=>'form-control TheNameOftheStore'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('TheOtherEmailThatNominatedyou', trans('admin.TheOtherEmailThatNominatedyou'))  }}
                    {{ Form::text('TheOtherEmailThatNominatedyou',$SellerAccount->TheOtherEmailThatNominatedyou,['class'=>'form-control TheOtherEmailThatNominatedyou'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('EmailAddress', trans('admin.EmailAddress'))  }}
                    {{ Form::text('EmailAddress',$SellerAccount->EmailAddress,['class'=>'form-control EmailAddress'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('RetypeTheEmailAddress', trans('admin.RetypeTheEmailAddress'))  }}
                    {{ Form::text('RetypeTheEmailAddress',$SellerAccount->RetypeTheEmailAddress,['class'=>'form-control RetypeTheEmailAddress'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('password', trans('admin.password'))  }}
                    {{ Form::text('password',$SellerAccount->password,['class'=>'form-control password'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('City', trans('admin.City'))  }}
                    {{ Form::text('City',$SellerAccount->City,['class'=>'form-control City'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('Country', trans('admin.Country'))  }}
                    {{ Form::text('Country',$SellerAccount->Country,['class'=>'form-control Country'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('postcode', trans('admin.postcode'))  }}
                    {{ Form::text('postcode',$SellerAccount->postcode,['class'=>'form-control postcode'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('personIncharge', trans('admin.personIncharge'))  }}
                    {{ Form::text('personIncharge',$SellerAccount->personIncharge,['class'=>'form-control personIncharge'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('BusinessRegistrationNumber', trans('admin.BusinessRegistrationNumber'))  }}
                    {{ Form::text('BusinessRegistrationNumber',$SellerAccount->BusinessRegistrationNumber,['class'=>'form-control BusinessRegistrationNumber'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('VatinformationFie', trans('admin.VatinformationFie'))  }}
                    {{ Form::text('VatinformationFie',$SellerAccount->VatinformationFie,['class'=>'form-control VatinformationFie'])  }}
                     </div> 


       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('TaxCard', trans('admin.TaxCard'))  }}
                    {{ Form::text('TaxCard',$SellerAccount->TaxCard,['class'=>'form-control TaxCard'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('CommercailRegistrationNo', trans('admin.CommercailRegistrationNo'))  }}
                    {{ Form::text('CommercailRegistrationNo',$SellerAccount->CommercailRegistrationNo,['class'=>'form-control CommercailRegistrationNo'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('sellerVat', trans('admin.sellerVat'))  }}
                    {{ Form::text('sellerVat',$SellerAccount->sellerVat,['class'=>'form-control sellerVat'])  }}
                     </div> 









               
                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('Address1', trans('admin.Address1'))  }}
                    {{ Form::text('Address1',$SellerAccount->Address1,['class'=>'form-control Address1'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('Address2', trans('admin.Address2'))  }}
                    {{ Form::text('Address2',$SellerAccount->Address2,['class'=>'form-control Address2'])  }}
                     </div> 

                       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('floorNumber', trans('admin.floorNumber'))  }}
                    {{ Form::text('floorNumber',$SellerAccount->floorNumber,['class'=>'form-control floorNumber'])  }}
                     </div> 

                       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('NationalID', trans('admin.NationalID'))  }}
                    {{ Form::text('NationalID',$SellerAccount->NationalID,['class'=>'form-control NationalID'])  }}
                     </div> 

                       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('bank', trans('admin.bank'))  }}
                    {{ Form::text('bank',$SellerAccount->bank,['class'=>'form-control NationalID'])  }}
                     </div> 

                       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('SWIFT', trans('admin.SWIFT'))  }}
                    {{ Form::text('SWIFT',$SellerAccount->SWIFT,['class'=>'form-control SWIFT'])  }}
                     </div> 

                       <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('IBAN', trans('admin.IBAN'))  }}
                    {{ Form::text('IBAN',$SellerAccount->IBAN,['class'=>'form-control IBAN'])  }}
                     </div> 

                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('AcountName', trans('admin.AcountName'))  }}
                    {{ Form::text('AcountName',$SellerAccount->AcountName,['class'=>'form-control AcountName'])  }}
                     </div> 


                      <div class="form-group col-sm-2 col-md-2 col-lg-2"> 
                     {{ Form::label('AcountNumber', trans('admin.AcountNumber'))  }}
                    {{ Form::text('AcountNumber',$SellerAccount->AcountNumber,['class'=>'form-control NationalID'])  }}
                     </div> 

                      

           





            </div>
          
          </div>

    </div>
