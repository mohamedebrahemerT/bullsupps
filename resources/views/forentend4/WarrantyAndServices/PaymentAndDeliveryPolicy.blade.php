   @extends('forentend4.index')



@section('content')
 <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Privacy Policy</li>
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

        <!-- STAT SECTION FAQ -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="term_conditions">
                            <h6>Privacy Policy</h6>
                           
                                
     @if(session('lang')=='ar')
                                
 {!! $PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_ar !!}

@endif

  @if(session('lang')=='en')

 {!! $PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_en !!}

@endif  
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION FAQ -->
    </div>
    <!-- END MAIN CONTENT -->


 


 




@endsection

