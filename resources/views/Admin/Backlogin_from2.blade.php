<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ar" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>{{ trans('admin.login_page') }}</title>
           <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

          <link rel="shortcut icon" href="http://localhost/dashboard/old/alymarket3/forentend3/assets/images/55.ico" type="image/png">

        <link href="{{url('design/admin_panel')}}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('design/admin_panel')}}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('design/admin_panel')}}/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('design/admin_panel')}}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{url('design/admin_panel')}}/assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{url('design/admin_panel')}}/assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{url('design/admin_panel')}}/assets/pages/css/login-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <style type="text/css">
    #bg {
  position: fixed; 
  top: 0; 
  left: 0; 
  
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}

#bg {
  position: fixed; 
  top: -50%; 
  left: -50%; 
  width: 200%; 
  height: 200%;
}
#bg img {
  position: absolute; 
  top: 0; 
  left: 0; 
  right: 0; 
  bottom: 0; 
  margin: auto; 
  min-width: 50%;
  min-height: 50%;
}

  
  </style>

        
    </head>
    <!-- END HEAD -->
    <body class=" login">

         <div id="bg">
  <img src="{{url('/')}}/Desgin/Adminlte/dist/img/background.jpg" alt="">
</div>
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="{{ aurl('login') }}">
            <img src="{{url('design/admin_panel')}}/assets/pages/img/logo.png" alt="" / style="width:200px;height: 200px;"> 
 
        </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="background-color: #FF8E6C">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form"  method="post" action="{{url('admin_form_post')}}">
                {!! csrf_field() !!}
                <h3  style="color: #040406 ">{{ trans('admin.login_page1') }}</h3>
                <div class="alert alert-danger {{ session()->has('error')?'':'display-hide' }} ">
                    <button class="close" data-close="alert"></button>
                    @if(session()->has('error'))
                    <span> {{ session('error') }} </span>
                    @else
                    <span> {{ trans('admin.enter_email_and_password') }} </span>
                    @endif
                </div>
                <div class="alert alert-success {{ session()->has('success')?'':'display-hide' }} ">
                    <button class="close" data-close="alert"></button>
                    @if(session()->has('success'))
                    <span> {{ session('success') }} </span>
                    @endif


                </div>
                   @if(session('success'))
   <div class="alert alert-success ">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger ">
   {{session('danger')}}

     </div>
   @endif
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{ trans('admin.email') }}</label>
                    <input class="form-control" type="text" autocomplete="off" placeholder="{{ trans('admin.email') }}" name="email"  style="background-color:#fff;color:#040406; " /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">{{ trans('admin.password') }}</label>
                        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="{{ trans('admin.password') }}" name="password" style="background-color:#fff;color:#040406 " /> </div>
                        <div class="form-actions">
                            <button type="submit" class="btn green uppercase" style="background-color:#040406;color:#fff ">{{ trans('admin.login') }}</button>
                            <label class="rememberme check mt-checkbox mt-checkbox-outline" style="color:#040406 ">
                                <input type="checkbox" name="rememberme" value="1" />{{ trans('admin.rememberme') }} 
                             
                            </label>
                            <a href="javascript:;" id="forget-password" class="forget-password" style="color:#040406 ">{{ trans('admin.forgot_password') }}</a>
                        </div>
                    </form>
                    <!-- END LOGIN FORM -->
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class="forget-form" action="{{ aurl('reset/password') }}" method="post">
                        {!! csrf_field() !!}
                        <h3 class="font-green">{{ trans('admin.forgot_password') }}</h3>
                        <p> {{ trans('admin.forgot_password_msg') }}  </p>
                        <div class="form-group">
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{ trans('admin.email') }}" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">{{ trans('admin.back') }}</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">{{ trans('admin.reset') }}</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                      <div class="copyright">
 
                        <a style="color:#c33" href="">{{trans('admin.AR')}}</a>
                        <a style="color:#fff" href="">{{trans('admin.en')}}</a>
                  

                
                        <br />
                        <bdi> 2014 © Metronic. Admin Dashboard Template & <a href="http://phpanonymous.com/it" target="_blank">Deployed By It Version 1.0</a>  </bdi></div>
                        <!--[if lt IE 9]>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/respond.min.js"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/excanvas.min.js"></script>
                        <![endif]-->
                        <!-- BEGIN CORE PLUGINS -->
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                        <!-- END CORE PLUGINS -->
                        <!-- BEGIN PAGE LEVEL PLUGINS -->
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
                        <script src="{{url('design/admin_panel')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>

                        <!-- END PAGE LEVEL PLUGINS -->
                        <!-- BEGIN THEME GLOBAL SCRIPTS -->
                        <script src="{{url('design/admin_panel')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
                        <!-- END THEME GLOBAL SCRIPTS -->
                        <!-- BEGIN PAGE LEVEL SCRIPTS -->
                        <script src="{{url('design/admin_panel')}}/assets/pages/scripts/login.min.js" type="text/javascript"></script>
                        <!-- END PAGE LEVEL SCRIPTS -->
                        <!-- BEGIN THEME LAYOUT SCRIPTS -->
                        <!-- END THEME LAYOUT SCRIPTS -->
                    </body>
                </html>