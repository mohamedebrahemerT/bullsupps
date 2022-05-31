 @extends('forentend4.index')



@section('content')



 @section('javascript')
 

<script>
function myFunction2() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true)
  {
     defultaddress.style.display = "none";
    giftaddress.style.display = "block";


  } else {
     defultaddress.style.display = "block";
    giftaddress.style.display = "none";


   
  }
}
</script>





@endsection

    
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">{{trans('admin.Home')}}</a></li>
                           
                            <li class="breadcrumb-item"><a href="#">{{trans('admin.Shopping Cart')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('admin.Add Your Address')}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->


    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="custom-container mb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">
                            <ul class="step d-flex flex-nowrap">
                                <li class="step-item active">
                                    <a href="{{url('/')}}/Add_New_Address" class="">{{trans('admin.Shipping Address')}}</a>
                                </li>
                                <li class="step-item ">
                                    <a href="{{url('/')}}/Payment_Method" class="">{{trans('admin.Payment')}}</a>
                                </li>
                                <li class="step-item ">
                                    <a href="#!" class="">{{trans('admin.Order Placed')}} </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="custom-container">
                <div class="row">

                    <div class="col-12 mb-3">
                        <div class="heading_tab_header">
                            <div class="">
<a href="{{url('/')}}/Add_New_Address">
                                <h5 class="mb-0"><img class="back-arrow pe-3" src="{{url('/')}}/assets/images/Back_arrow.svg" alt="">{{trans('admin.Back to Address')}}</h5>
</a>
                            </div>
      <form method="post" action="{{url('/')}}/Save_AddressAddress_Step2">

                                @csrf

          <input type="hidden" name="id" value="{{$user_address->id}}">
                            <div class="view_all">
                                <a href="#">
                                    <h5 class="mb-0"><img class="back-arrow pe-2" src="{{url('/')}}/assets/images/gift_icon.svg" alt="">{{trans('admin.Send my order as a gift')}} <label class="switch" for="myCheck">
             
               <input class="giftcheckbox" type="checkbox"  id="myCheck" onclick="myFunction2()"  name="gift" value="1" @if($user_address->gift == '1') checked @endif/>

                                            <div class="slider round"></div>
                                          </label></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                          

                    <div class="col-12 mb-2 mb-4   " id="defultaddress" 
@if($user_address->gift == '1' )
 style="display:none;"  
@else
 
@endif


                     >

                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">


                            <div class="heading_tab_header pb-3 underline mb-0">
                                <div class="">

                                    <h5 class="mb-0">{{trans('admin.Edit Address')}} </h5>

                                </div>
                                <div class="view_all">

                                 
                          
                                    <div class="custome-checkbox">
  <input class="form-check-input" type="checkbox" name="Primary" id="7"  value="1"    @if($user_address->Primary == '1') checked @endif>
                   <label class="form-check-label" for="7"><span>{{trans('admin.Set As Default Address')}}</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-xs-12 col-md-6">
                                    <h6 class="mb-3">{{trans('admin.Location Information')}} </h6>
                                    <div class="locationbox">
                                        <div class="row justify-content-between ">

                                            <div class="col-8">
                                                <div class="contact_text">
                                                    <div class="row bardhe mb-2">
                                                        <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                            <div class="ikonat-home"> <i class="linearicons-map2"></i> </div>
                                                            <div class="contact_text">
                               <span>
                                @if($user_address->type == 'Home')
                       {{trans('admin.Home1')}}
                                @else
                                 {{trans('admin.work')}}

                                @endif
                              
                               </span>
                                                            </div>
                                                        </div>
                             <h6>{{$user_address->address}}</h6>
                             
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mapimg-box">
                               <a href="{{url('/')}}/edit_New_Address_Map_Step/{{$user_address->id}}" style="color: #fff;">
                        <img class="mapimg" src="{{url('/')}}/assets/images/map_thumb.svg" alt="">
                                                    <div class="editBTN">
                      
                                                 {{trans('admin.Edit')}}   
                                                    </a>
                                                </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                  

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                       <label for="Apartment">{{trans('admin.Apartment/Flat Number, Tower Number, Building Name')}}</label>
                                                    <div class="input-group pt-2">
            <input type="tel" class="form-control" name="additional_info" placeholder="{{trans('admin.Apartment/Flat Number, Tower Number, Building Name')}}" autocomplete="cc-number" required autofocus  value="{{$user_address->additional_info}}" />
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                <input  class="form-check-input" type="radio" name="type" id="inlineRadio1"  value="Home"  
    @if($user_address->type == 'Home') checked @endif>
                                                    <label class="form-check-label" for="inlineRadio1">{{trans('admin.Home1')}}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
   <input class="form-check-input" type="radio" name="type" 
   id="inlineRadio2" value="Work" 
    @if($user_address->type == 'Work') checked @endif>
                                                    <label class="form-check-label" for="inlineRadio2">{{trans('admin.Work')}}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <span class="">({{trans('admin.Optional')}})</span>
                                                </div>
                                            </div>
                                        </div>
                                   
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <h6 class="mb-3">{{trans('admin.Personal Information')}}</h6>
                                    <!-- CREDIT CARD FORM STARTS HERE -->
                                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                            <label for="MobileNumber">{{trans('admin.Mobile Number')}}</label>
                            <div class="input-group pt-2">
                          <input type="tel" class="form-control" name="Mobile" placeholder="{{trans('admin.Mobile Number')}}" autocomplete="cc-number" required autofocus  value="{{$user_address->Mobile}}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="FirstName">{{trans('admin.First Name')}}</label>
                                                    <div class="input-group pt-2">
                                                        <input type="text" class="form-control" name="FirstName" placeholder="{{trans('admin.First Name')}}" autocomplete="cc-number"
                                      value="{{$user_address->FirstName}}"
                                                         required autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="LastName">{{trans('admin.Last Name')}}</label>
                                                    <div class="input-group pt-2">
                                                        <input type="text" class="form-control" name="LastName" placeholder="{{trans('admin.Last Name')}}" autocomplete="cc-number" 
                                   value="{{$user_address->LastName}}"
                                                        required autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>


                                        <!-- <div class="row">
                                            <div class="col-xs-12">
                                                <button class="subscribe btn btn-primary btn-lg btn-block" type="button">Add Card</button>
                                            </div>
                                        </div> -->
                                   
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                            </div>
                            <hr />
                            <div class="col-md-12 mt-3 d-flex justify-content-end">
           <button type="submit" title="Save Address" class="btn btn-primary"   name="submit" value="Submit">{{trans('admin.Save Address')}}</button>
 </form>

                            </div>
                        </div>

                    </div>


 <form method="post" action="{{url('/')}}/Save_AddressAddress_Step2">

                                @csrf

          <input type="hidden" name="id" value="{{$user_address->id}}">

                    <div class="col-12 mb-2 mb-4 " id="giftaddress"
@if($user_address->gift == '1' )

@else
  style="display:none;"  
@endif

                   


                     >

                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">


                            <div class="heading_tab_header pb-3 underline mb-0">
                                <div class="">

                                    <h5 class="mb-0">{{trans('admin.Edit Address')}} </h5>

                                </div>
                                <div class="view_all">

                                    <!-- <label for="checkbox1">
                                                <input type="checkbox" id="checkbox1" />
                                               
                                              </label> -->
                                    <div class="custome-checkbox">
                                       <input class="form-check-input" type="checkbox" name="Primary" id="checkbox2"  value="1"    @if($user_address->Primary == '1') checked @endif>
                                        <label class="form-check-label" for="checkbox2"><span>{{trans('admin.Set As Default Address')}}</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-xs-12 col-md-6  mb-3">
                                    <h6 class="mb-3">{{trans('admin.Location Information')}} </h6>
                                    <div class="locationbox">
                                        <div class="row justify-content-between ">

                                            <div class="col-8">
                                                <div class="contact_text">
                                                    <div class="row bardhe mb-2">
                                                        <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                            <div class="ikonat-home"> <i class="linearicons-map2"></i> </div>
                                                            <div class="contact_text">
                                                                <span>

                                           @if($user_address->type == 'Home')
                       {{trans('admin.Home1')}}
                                @else
                                 {{trans('admin.work')}}

                                @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <h6>{{$user_address->address}}</h6>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mapimg-box">
                                                        <a href="{{url('/')}}/edit_New_Address_Map_Step/{{$user_address->id}}" style="color: #fff;">
                                                    <img class="mapimg" src="{{url('/')}}/assets/images/map_thumb.svg" alt="">
                                                    <div class="editBTN">{{trans('admin.Edit')}}
 </a>
                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                   

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="Apartment">{{trans('admin.Apartment/Flat Number, Tower Number, Building Name')}}</label>
                                                    <div class="input-group pt-2">
                                                             <input type="tel" class="form-control" name="additional_info" placeholder="{{trans('admin.Apartment/Flat Number, Tower Number, Building Name')}}" autocomplete="cc-number" required autofocus  value="{{$user_address->additional_info}}" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                                <div class="col-xs-12 col-md-6 mb-3">
                                    <h6 class="mb-3">{{trans('admin.Gift Recipient’s Information')}}</h6>
                                    <!-- CREDIT CARD FORM STARTS HERE -->
                                  
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="MobileNumber">{{trans('admin.Mobile Number')}}</label>
                                                    <div class="input-group pt-2">
                                                        <input type="tel" class="form-control" name="RecipientMobileNumber" placeholder="{{trans('admin.Mobile Number')}}" autocomplete="cc-number" required autofocus  
                           value="{{$user_address->RecipientMobileNumber}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="RecipientName">{{trans('admin.Recipient Name')}}</label>
                                                    <div class="input-group pt-2">
        <input type="text" class="form-control" name="RecipientName" placeholder="{{trans('admin.Recipient Name')}}" autocomplete="cc-number" required autofocus    value="{{$user_address->RecipientName}}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                 
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                                <hr />
                                <div class="col-xs-12 col-md-12 mt-3">
                                    <h6 class="mb-3">{{trans('admin.Personal Information')}}</h6>
                                    <!-- CREDIT CARD FORM STARTS HERE -->
                                   
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="MobileNumber">{{trans('admin.Mobile Number')}}</label>
                                                    <div class="input-group pt-2">
                                                      <input type="tel" class="form-control" name="Mobile" placeholder="{{trans('admin.Mobile Number')}}" autocomplete="cc-number" required autofocus  value="{{$user_address->Mobile}}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="FirstName">{{trans('admin.First Name')}}</label>
                                                    <div class="input-group pt-2">
                                                         <input type="text" class="form-control" name="FirstName" placeholder="{{trans('admin.First Name')}}" autocomplete="cc-number"
                                      value="{{$user_address->FirstName}}"
                                                         required autofocus />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label for="LastName">{{trans('admin.Last Name')}}</label>
                                                    <div class="input-group pt-2">
                                                        <input type="text" class="form-control" name="LastName" placeholder="{{trans('admin.Last Name')}}" autocomplete="cc-number" 
                                   value="{{$user_address->LastName}}"
                                                        required autofocus />
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline  mb-3">
                                                    <input  class="form-check-input" type="radio" name="type" id="inlineRadio1"  value="Home"  
    @if($user_address->type == 'Home') checked @endif>
                                                    <label class="form-check-label" for="inlineRadio1">{{trans('admin.Home')}}</label>
                                                </div>
                                                <div class="form-check form-check-inline  mb-3">
                                                   <input class="form-check-input" type="radio" name="type" 
   id="inlineRadio2" value="Work" 
    @if($user_address->type == 'Work') checked @endif>
                                                    <label class="form-check-label" for="inlineRadio2">{{trans('admin.Work')}}</label>
                                                </div>
                                                <div class="form-check form-check-inline  mb-3">
                                                    <span class="">({{trans('admin.Optional')}})</span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                            </div>
                            <hr />

         <input   type="hidden"    name="gift" value="1"  />
                            <div class="col-md-12 mt-3 d-flex justify-content-end">
                                <button type="submit" title="Save Address" class="btn btn-primary"   name="submit" value="Submit">{{trans('admin.Save Address')}}</button>
                            </div>
                        </div>

                    </div>
 </form>


                </div>

            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->
@endsection

