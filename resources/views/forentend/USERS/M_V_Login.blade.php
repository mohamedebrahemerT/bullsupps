 @extends('forentend.index2')

@section('content')
        
    <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>checkout method</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="checkout.html">Checkout Method</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->

         

          

        
        <!--================End Categories Banner Area =================-->
        <section class="checkout_method_area p_100">
            <div class="container">
                <div class="row">
                    <div class="checkout_main_area">
                        <div class="checkout_prosses">
                            <div class="row m0">
                                <div class="col-md-6">
                                    <div class="checkout_method">
                                        <h3>check as a guest or register</h3>
                                        <h4>Register with us for future convenience:</h4>
                                         <form role="form" class="radio_area">
                                            <ul class="radio_style">
                                                <li>
                                                     


             <a class="update_btn" href="{{ route('guestCheckout.index') }}"><span>checkt as guest</span></a>
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

                                                 <button type="submit" class="auth-button">Login</button>
                     <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>

                               
                                                <h4>Forgot Your Password ?</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->

@endsection


 
