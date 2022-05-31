 @extends('forentend4.index')



@section('content')

@section('javascript')
        <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAGlTpZIZ49RVV5VX8KhzafRqjzaTRbnn0&language={{session("lang")}}'></script>
  <script type="text/javascript" src="{{url('/')}}/Desgin/Adminlte/dist/js/locationpicker.jquery.js"></script>

<?php
    $lat = !empty(old('lat')) ? old('lat') : '25.206801726395895';
    $lng = !empty(old('lng')) ? old('lng') : '55.271889686584466';

?>
 <script>
  $('#us1').locationpicker({
      location: {
          latitude: {{ $lat }},
          longitude:{{ $lng }}
      },
      radius: 300,
      markerIcon:   "{{url('/')}}/assets/images/marker.png",
       
      inputBinding: {
        latitudeInput: $('#lat'),
        longitudeInput: $('#lng'),
       // radiusInput: $('#us2-radius'),
        locationNameInput: $('#address')
      },
      enableAutocomplete: true

  });
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
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('admin.Home')}}</a></li>
                          
                            <li class="breadcrumb-item"><a href="{{url('/')}}/cart">{{trans('admin.Shopping Cart')}}</a></li>
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

                    <div class="col-12 mb-2">
                        <div class="heading_tab_header">
                            <div class="">
  <a href="{{url('/')}}/Add_New_Address">
                                <h5 class="mb-0">
       
                  <img class="back-arrow pe-3" src="{{url('/')}}/assets/images/Back_arrow.svg" alt="">{{trans('admin.Back to Address')}}

              </h5>
                  </a>


                            </div>

       <form  method="post" action="Add_New_Address_Map">
       @csrf 
                            <!--div class="view_all">
                                <a href="#">
                                    <h5 class="mb-0"><img class="back-arrow pe-2" src="assets/images/gift_icon.svg" alt="">Send my order as a gift <label class="switch" for="checkbox">
        <input type="checkbox" id="checkbox" name="gift" value="1" />
                                            <div class="slider round"></div>
                                          </label></h5>
                                </a>
                            </div -->
                        </div>
                    </div>
                    <div class="col-12 mb-2 mb-4">

                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">

                            <div class="heading_s1 pb-3 underline mb-0">
                                <h5 class="">{{trans('admin.Add a New Address')}}</h5>
                            </div>
                            <div class="row">

                                <div class="col-lg-12 pt-2 pt-lg-0 mt-4 mt-lg-0">
                                         <div id="us1" style="width: 100%; height: 400px;"></div>
     </div>

         

                                </div>
                            </div>





    <input type="hidden" value="{{ $lat }}" id="lat" name="lat">
    <input type="hidden" value="{{ $lng }}" id="lng" name="lng">
    

                            <div class="col-md-12 ">
              {!! Form::label('address',trans('admin.address0')) !!}
        {!! Form::text('address',old('address'),['class'=>'form-control address']) !!}
                            </div>
                            <div class="col-md-12 mt-3 d-flex justify-content-end">

                               

                                <button type="submit" title="Confirm Location" class="btn btn-primary"   name="submit" value="Submit">{{trans('admin.Confirm Location')}}</button>
                            </div>

                            </form>
                        </div>

                    </div>



                </div>

            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->
 

@endsection

