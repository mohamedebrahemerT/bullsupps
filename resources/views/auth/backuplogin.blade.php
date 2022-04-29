@extends('forentend3.index')

@section('content')

       @push('js')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
       
       
        @endpush

  
         
                      @if(session('lang')== 'ar')

          <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
              <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs" style="float: right;">
             
<span>{{trans('admin.checkoutmethod')}}</span>
                <span aria-hidden="true">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
                 <a href="{{url('/')}}" title="Back to the frontpage">{{trans('admin.Home')}}</a>
                

              </nav>
            </div>
          </header>

                      @endif

                            @if(session('lang')== 'en')

          <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
              <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs" style="float: right;">
                  <a href="{{url('/')}}" title="Back to the frontpage">{{trans('admin.Home')}}</a>
                <span aria-hidden="true">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            
                
<span>{{trans('admin.checkoutmethod')}}</span>

              </nav>
            </div>
          </header>

                      @endif
        
        <!--================End Categories Banner Area =================-->
        <section class="checkout_method_area p_100">
            <div class="container">
                <div class="row">
                    <div class="checkout_main_area">
                        <div class="checkout_prosses">

                            @if(session('lang')== 'ar')

                            <div class="row m0">
                               

                                <div class="col-md-9" style="text-align: right;">
                                    <div class="row checkout_from_area">
                                       <h2>{{trans('admin.alreadyregisted?')}}</h2>
                                       <p>{{trans('admin.pl')}}</p>
                                  
                   <form action="{{ route('login') }}" method="POST">
                        @csrf
                                            <div class="form-group">
                  <label for="email">{{trans('admin.email')}} <span>*</span></label>
             <input type="email" class="form-control" id="email" name="email">
   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">{{trans('admin.Password')}} <span>*</span></label>
                                                <input type="password" class="form-control" id="pwd" name="password">

                                                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                            <h5> {{trans('admin.RequiredFilelds')}} *</h5>
                                              @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                                            <div class="forgot_area">
                                                <button type="submit" class="btn update_btn btn-default">{{trans('admin.SignIn')}}</button>

                            {{trans('admin.RememberMe')}}                     
                     <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                    </label>

                               
                               <h6> {{trans('admin.ForgotYourPassword?')}}</h6>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                 <div class="col-md-3" style="text-align: right;">
                                    <div class="checkout_method">
                                        <h5>{{trans('admin.checkasaguestorregister')}} </h5>
                                        <h5>{{trans('admin.Registerwithusforfutureconvenience')}} </h5>
                                         <form role="form" class="radio_area">
                                            <ul class="radio_style">
                                                <li>
                                                     

             <a class="update_btn" href="{{ route('guestCheckout.index') }}"><span>{{trans('admin.checktasguest')}} </span></a>
                                                </li>
                                               
                                            </ul>
                                          </form>
                                          <h5>{{trans('admin.registerandsavetime!')}}</h5>
                                          


    <a class="site-nav__link site-nav__link--icon js-login-modal site-nav__link" data-mfp-src="#LoginModal" style="color:
    #eb6625;
    position: absolute;
    margin-left: -150px;
    margin-top: 5px;
}" href="">
             <span style="color:#eb6625">{{trans('admin.register')}}</span>
          <i class="fa fa-user" style="font-size:35px;color:#eb6625"></i>
           
                   
                  </a>
                                    </div>
                                </div>

                            </div>

                      @endif


                         @if(session('lang')== 'en')

                            <div class="row m0">
                                <div class="col-md-6">
                                    <div class="checkout_method">
                                        <h3>{{trans('admin.checkasaguestorregister')}} </h3>
                                        <h4>{{trans('admin.Registerwithusforfutureconvenience')}} </h4>
                                         <form role="form" class="radio_area">
                                            <ul class="radio_style">
                                                <li>
                                                     

             <a class="update_btn" href="{{ route('guestCheckout.index') }}"><span>{{trans('admin.checktasguest')}} </span></a>
                                                </li>
                                               
                                            </ul>
                                          </form>
                                          <h5>register and save time !</h5>
                                          <h6>Register with us for future convenience:</h6>
                                          <a class="checkout_list" href="#"><i class="arrow_carrot-right"></i> Fast and easy check out</a>
                                          <a class="checkout_list" href="#"><i class="arrow_carrot-right"></i> Easy access to your order history and status</a>

   <a class="update_btn" href="{{ route('register') }}"><span>Create Account</span></a>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="row checkout_from_area">
                                       <h2>already registed ?</h2>
                                       <p>Please log in below :</p>
                                  
                   <form action="{{ route('login') }}" method="POST">
                        @csrf
                                            <div class="form-group">
                                                <label for="email">Email address <span>*</span></label>
             <input type="email" class="form-control" id="email" name="email">
   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password <span>*</span></label>
                                                <input type="password" class="form-control" id="pwd" name="password">

                                                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                            <h3>* Required Filelds</h3>
                                              @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                                            <div class="forgot_area">
                                                <button type="submit" class="btn update_btn btn-default">log in</button>

                                                  
                     <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>

                               
                                                <h4>Forgot Your Password ?</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                      @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
                      @include('forentend3.layouts.login')

@endsection


 
