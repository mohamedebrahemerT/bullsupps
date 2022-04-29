 <!DOCTYPE html>

<html>

<head>





  



 <!-- .......................................................................... -->



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ trans('admin.Dashboard') }}</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->



    <link rel="shortcut icon" href="http://localhost/dashboard/old/alymarket3/forentend3/assets/images/55.ico" type="image/png">

   

   <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/jstree/dist/themes/default/style.min.css">

 

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





   <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

 

  <!-- Morris chart -->

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



 

     <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">



  <!-- Ionicons -->



  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">



  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/select2.min.css">

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/custom.css">


   <script src="{{url('/')}}/Desgin/ckeditor/ckeditor/ckeditor.js"></script>


  <!-- Theme style -->



         @if(dirction() =='ltr')

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/AdminLTE.min.css">

  @else

    <link rel="stylesheet" 

    href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/AdminLTE.css">

    

    <link rel="stylesheet" 

    href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/AdminLTE.min.css">

    



    <link rel="stylesheet" 

    href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/bootstrap-rtl.min.css">



    <link rel="stylesheet" 

    href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/rtl.css">

    

      <link rel="stylesheet" 

    href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/profile.css">

    <link href="{{url('/')}}/Desgin/Adminlte/dist/css/rtl/cairo.css" rel="stylesheet">



  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/bootstrap-datepicker.css">







 





  





  @endif







  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/skins/_all-skins.min.css">









</head>

<body class="hold-transition skin-blue sidebar-mini" style="font: 400 14px/1.45 Open Sans;

color: #555;">

<div class="wrapper">



  <header class="main-header" style="background-color:#000">

    <!-- Logo -->

    <a href="index2.html" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>A</b>LT</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>{{ trans('admin.admin') }}</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top" style="background-color:#000">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



   



   
   <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">





          
           <li class="dropdown messages-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            <i class="fa fa-shopping-cart"></i>

              <span class="label label-success">{{pendingProductCount()}}</span>

            </a>



            <ul class="dropdown-menu">

              <li class="header">{{trans('admin.Youhave')}} {{pendingProductCount()}} {{trans('admin.productes')}}  </li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">



                  

      @foreach(pendingProduct() as  $product)

               

                  <li><!-- start message -->

                    <a href="{{url('/')}}/admin/productes/{{$product->id}}/edit">

                      <div class="pull-left">

                        <img src="{{Storage::url($product->photo)}}" class="img-circle" alt="User Image">

                      </div>

                    

                      <p>

                         @if(session('lang')=='ar')



{{$product->title_name_ar }}



@endif



  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif

                      </p>

                    </a>

                  </li>

                <!-- end message -->

           

                                          @endforeach 

                

                 

                  

                </ul>

              </li>

              <li class="footer"><a href="{{url('/')}}/admin/NeedAproveproductes" target="_blank">{{trans('admin.SeeAllproductWhoNeedApprove')}}</a></li>

            </ul>

          </li>



          <!-- Messages: style can be found in dropdown.less-->

          <li class="dropdown messages-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-user"></i>

              <span class="label label-success">{{admincount()}}</span>

            </a>



            <ul class="dropdown-menu">

              <li class="header">You have {{admincount()}} messages</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  @foreach(adminNeedAprove() as $admin )

                  <li>

                    <a href="{{url('/')}}/admin/admins/{{$admin->id}}/edit">

                      <div class="pull-left">

                        <img src="{{url('/')}}/Desgin/Adminlte/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                      </div>

                      <h4>

                        {{$admin->name}}

                        <small><i class="fa fa-clock-o"></i> 2 days</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                      @endforeach

                </ul>

              </li>

              <li class="footer"><a href="{{url('/')}}/admin/admins">{{trans('admin.showmore')}}</a></li>

            </ul>

          </li>


         





          

          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-bell-o"></i>

              <span class="label label-warning">10</span>

            </a>



             

              </li>

              



            



            <ul class="dropdown-menu">

              <li class="header">You have 10 notifications</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li>

                    <a href="#">

                      <i class="fa fa-users text-aqua"></i> 5 new members joined today

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the

                      page and may cause design problems

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-users text-red"></i> 5 new members joined

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-user text-red"></i> You changed your username

                    </a>

                  </li>

                </ul>

              </li>

              <li class="footer"><a href="#">View all</a></li>

            </ul>

          </li>

          <!-- Tasks: style can be found in dropdown.less -->

          <li class="dropdown tasks-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-flag-o"></i>

              <span class="label label-danger">9</span>

            </a>

            <ul class="dropdown-menu">

              <li class="header">You have 9 tasks</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Design some buttons

                        <small class="pull-right">20%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">20% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Create a nice theme

                        <small class="pull-right">40%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">40% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Some task I need to do

                        <small class="pull-right">60%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">60% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Make beautiful transitions

                        <small class="pull-right">80%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">80% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                </ul>

              </li>

              <li class="footer">

                <a href="#">View all tasks</a>

              </li>

            </ul>

          </li>

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                
 
                   
            <img src="https://www.xpremo.com/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">
          
   



             



              <span class="hidden-xs" style="font-weight:bold;">xpremo</span>



            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

      

            <img src="https://www.xpremo.com/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

               


 







                <p>

              xpremo
 

                </p>

              </li>

              <!-- Menu Body -->

              <li class="user-body">

                <div class="row">

                  <div class="col-xs-4 text-center">

                    <a href="#">Followers</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Sales</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Friends</a>

                  </div>

                </div>

                <!-- /.row -->

              </li>

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                 

                </div>

                

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->



          

           <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              

              <span class="hidden-xs">language </span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

           

              <!-- Menu Body -->

              <li class="user-body">

                

                 <a href="{{url('admin/lang/en')}}" class="fa fa-flag"> english</a>

               

              </li>

              

              <li class="user-footer">



        <a href="{{url('admin/lang/ar')}}" class="fa fa-flag cheeck">عربي</a>

              </li>

            </ul>



          </li>



          <!-- Control Sidebar Toggle Button -->

          <li>

            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

          </li>

        </ul>

      </div>



    </nav>

  </header>


 
 <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar" style="background-color:#000">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel" style="margin-top: 5%">

        <div class="pull-left image">

                 
    <a href="https://www.xpremo.com/">  
            <img src="https://xpremo.com//storage/app/public/admin1/yyQ7hU0aoQTNpTNPnF9DtSRJy7EnhDPxC3Bc2t5N.png" class="img-circle" alt="User Image" width="30px" height="30px">

       
</a>

  

         

        </div>
    <a href="https://www.xpremo.com/">  

        <div class="pull-left info">

                     

                     

          <p> xpremo </p>

</a>
       

          <a href="#"><i class="fa fa-circle text-success"></i>              {{ trans('admin.online') }}</a>

        </div>

      </div>



      
 









    </section>

    <!-- /.sidebar -->

  </aside>

                

               
 







    </section>

    <!-- /.sidebar -->

  </aside>

                

               


 

   







 @push('js')





    <a onclick="playSound();"> Play</a>

    <script>

    function playSound() {

          var sound = document.getElementById("audio");

          sound.play();

      }

    </script>

  <style>

        /* width */

        ::-webkit-scrollbar {

            width: 7px;

        }



        /* Track */

        ::-webkit-scrollbar-track {

            background: #f1f1f1;

        }



        /* Handle */

        ::-webkit-scrollbar-thumb {

            background: #a7a7a7;

        }



        /* Handle on hover */

        ::-webkit-scrollbar-thumb:hover {

            background: #929292;

        }



        ul {

            margin: 0;

            padding: 0;

        }



        li {

            list-style: none;

        }



        .user-wrapper, .message-wrapper {

            border: 1px solid #dddddd;

            overflow-y: auto;

            background-color: #fff;

        }



        .user-wrapper {

            height: 600px;

        }



        .user {

            cursor: pointer;

            padding: 5px 0;

            position: relative;

        }



        .user:hover {

            background: #eeeeee;

        }



        .user:last-child {

            margin-bottom: 0;

        }



        .pending {

            position: absolute;

            left: 13px;

            top: 9px;

            background: #b600ff;

            margin: 0;

            border-radius: 50%;

            width: 18px;

            height: 18px;

            line-height: 18px;

            padding-left: 5px;

            color: #ffffff;

            font-size: 12px;

        }



        .media-left {

            margin: 0 10px;

        }



        .media-left img {

            width: 64px;

            border-radius: 64px;

        }



        .media-body p {

            margin: 6px 0;

        }



        .message-wrapper {

           padding: 10px;

height: 536px;

background: #eeeeee;

margin-left: -15px;

margin-right: -30px;

        }



        .messages .message {

            margin-bottom: 15px;

        }



        .messages .message:last-child {

            margin-bottom: 0;

        }



        .received, .sent {

            width: 45%;

            padding: 3px 10px;

            border-radius: 10px;

        }



        .received {

            background: #ffffff;

        }



        .sent {

            background: #3bebff;

            float: right;

            text-align: right;

        }



        .message p {

            margin: 5px 0;

        }



        .date {

            color: #777777;

            font-size: 12px;

        }



        .active {

            background: #eeeeee;

        }



        input[type=text] {

            width: 100%;

            padding: 12px 20px;

            margin: 15px 0 0 0;

            display: inline-block;

            border-radius: 4px;

            box-sizing: border-box;

            outline: none;

            border: 1px solid #cccccc;

        }



        input[type=text]:focus {

            border: 1px solid #aaaaaa;

        }

    </style>



    <meta name="csrf-token" content="{{ csrf_token() }}">





 

    <link href="{{url('/')}}/forentend3/emoji/css/emoji.css" rel="stylesheet">

 

  <script src="{{url('/')}}/forentend3/emoji/js/config.js"></script>

    <script src="{{url('/')}}/forentend3/emoji/js/util.js"></script>

    <script src="{{url('/')}}/forentend3/emoji/js/jquery.emojiarea.js"></script>

    <script src="{{url('/')}}/forentend3/emoji/js/emoji-picker.js"></script>



    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>



<script src="https://js.pusher.com/5.0/pusher.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



  <script>

      $(function() {

        // Initializes and creates emoji set from sprite sheet

        window.emojiPicker = new EmojiPicker({

          emojiable_selector: '[data-emojiable=true]',

          assetsPath: '{{url("/")}}/forentend3/emoji/lib/img/',

          popupButtonClasses: 'fa fa-smile-o'

        });

        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields

        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process

        // It can be called as many times as necessary; previously converted input fields will not be converted again

        window.emojiPicker.discover();

      });

    </script>

    <script>

      // Google Analytics

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



      ga('create', 'UA-49610253-3', 'auto');

      ga('send', 'pageview');

    </script>



 

<script>

    var receiver_id = '';

    var my_id = "{{ Auth::id() }}";

    $(document).ready(function () {

        // ajax setup form csrf token

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        // Enable pusher logging - don't include this in production

        Pusher.logToConsole = true;



   var pusher = new Pusher('d32116f16cbced6e1886', {

      cluster: 'ap2',

      forceTLS: true

    });





        var channel = pusher.subscribe('my-channel');

        channel.bind('my-event', function (data) {

            // alert(JSON.stringify(data));

            if (my_id == data.from) {

                $('#' + data.to).click();

            } else if (my_id == data.to) {

                if (receiver_id == data.from) {

                    // if receiver is selected, reload the selected user ...

                    $('#' + data.from).click();

                } else {

                    // if receiver is not seleted, add notification for that user

                    var pending = parseInt($('#' + data.from).find('.pending').html());



                    if (pending) {

                        $('#' + data.from).find('.pending').html(pending + 1);

                    } else {

                        $('#' + data.from).append('<span class="pending">1</span>');

                    }

                }

            }

        });



        $('.user').click(function () {

            $('.user').removeClass('active');

            $(this).addClass('active');

            $(this).find('.pending').remove();



            receiver_id = $(this).attr('id');

            $.ajax({

                type: "get",

                url: "message/" + receiver_id, // need to create this route

                data: "",

                cache: false,

                success: function (data) {

                    $('#messages').html(data);

                    scrollToBottomFunc();

                }

            });

        });



        $(document).on('keyup', '.input-text input', function (e) {

            var message = $(this).val();



            // check if enter key is pressed and message is not null also receiver is selected

            if (e.keyCode == 13 && message != '' && receiver_id != '') {

                $(this).val(''); // while pressed enter text box will be empty



                var datastr = "receiver_id=" + receiver_id + "&message=" + message;

                $.ajax({

                    type: "post",

                    url: "message", // need to create this post route

                    data: datastr,

                    cache: false,

                    success: function (data) {

                        playSound();



                    },

                    error: function (jqXHR, status, err) {

                    },

                    complete: function () {

                        scrollToBottomFunc();

                    }

                })

            }

        });

    });



    // make a function to scroll down auto

    function scrollToBottomFunc() {

        $('.message-wrapper').animate({

            scrollTop: $('.message-wrapper').get(0).scrollHeight

        }, 50);

    }

</script>



             @endpush



 

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-4">

                <div class="user-wrapper">

                    <ul class="users">

                        @foreach($users as $user)

                            <li class="user" id="{{ $user->id }}">

                                {{--will show unread count notification--}}

                                @if($user->unread)

                                    <span class="pending">{{ $user->unread }}</span>

                                @endif



                                <div class="media">

                                    <div class="media-left">

                                        <img src="{{ $user->avatar }}" alt="" class="media-object">

                                    </div>



                                    <div class="media-body">

                                        <p class="name">{{ $user->name }}</p>

                                        <p class="email">{{ $user->email }}</p>

                                    </div>

                                </div>

                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>



            <div class="col-md-6" id="messages">



            </div>

        </div>

    </div>

 <br>

 <br>

 <br>

 <br>





   <audio id="audio" src="{{url('/')}}/forentend3/note.mp3" autoplay="false" ></audio>





 
@include('Admin.layouts.footer'); 

 