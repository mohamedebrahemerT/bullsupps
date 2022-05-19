 
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
                            <li class="breadcrumb-item active">Sign Up</li>
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
        <!-- START LOGIN SECTION -->
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap border border-radius2 box_shadow1">
                            <div class="padding_eight_all">
                                <div class="heading_s1">
                                    <h3>Create an Account</h3>
                                </div>
                                   @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                           <form action="{{url('/')}}/M_V_L_R_post_register" method="post" enctype="multipart/form-data"  >
        @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                    </div>

                                       <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="lastname" placeholder="Enter Your last name">
                                    </div>

                                    

                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="login_footer form-group mb-3">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" required>
                                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to 
                                              
                                              <a target="_blank" href="{{url('/')}}/term-condition">  terms &amp; Policy.</a>

                                            </span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="{{url('/')}}/auth/redirect/facebook" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                    <li><a href="{{url('/')}}/auth/redirect/google" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Already have an account? <a href="{{url('/')}}/login">Log in</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOGIN SECTION -->
    </div>
    <!-- END MAIN CONTENT -->

@endsection

 