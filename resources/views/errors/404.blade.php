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
                            <li class="breadcrumb-item active">4O4</li>
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

        <!-- START 404 SECTION -->
        <div class="section mt-5 mb-5">
            <div class="error_wrap">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-10 order-lg-first">
                            <div class="text-center">
                                <div class="error_txt">404</div>
                                <h5 class="mb-2 mb-sm-3">oops! The page you requested was not found!</h5>
                                <p>The page you are looking for was moved, removed, renamed or might never existed.</p>

                                <a href="{{url('/')}}/" class="btn btn-primary">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END 404 SECTION -->



    </div>
    <!-- END MAIN CONTENT -->
@endsection

