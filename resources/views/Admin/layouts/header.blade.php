<!DOCTYPE html>

<html>

<head>

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

   
  </style>

  @stack('css')
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font: 400 14px/1.45 Open Sans;
color: #555;">
<div class="wrapper">
  <header class="main-header"  >
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>{{ trans('admin.admin') }}</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top" >

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



   



   @include('Admin.layouts.menue'); 



    </nav>

  </header>



           @if(auth()->guard('admin')->user()->level =='admin')

 <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar" >

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

               

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

            


 


         

        </div>

        <div class="pull-left info">

                     

                     

          <p> {{ auth()->guard('admin')->user()->name }} </p>

       

          <a href="#"><i class="fa fa-circle text-success"></i>              {{ trans('admin.online') }}</a>

        </div>

      </div>



      

      <!-- search form -->

      <!--form action="#" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="{{ trans('admin.search') }}">

          <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form-->

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header"> 

          @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif



           </li>

        

   <li class="treeview {{ active_menu('')[0] }}">

        <a href="#">

          <i class="fa fa-list"></i> <span>

              @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif

          </span>

          <span class="pull-right-container">

            <i class="fa fa-angle-left pull-right"></i>

          </span>

        </a>

        <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">

          <li class=""><a href="{{ url('admin') }}">

            <i class="fa fa-cog"></i>

             <span> 

                @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif      

            </span>

            <span class="pull-right-container">

            </span>

          </a>

        </li>



        <li class=""><a href="{{ url('admin/settings') }}">

          <i class="fa fa-cog"></i>

           <span>

              @if(session('lang')== 'ar')

          {{MenueControll()->settings_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->settings_name_en}} 

          @endif

        </span>

          <span class="pull-right-container">

          </span>

        </a>

      </li>





                    <li class=""><a href="{{ url('admin/userRquiest') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.alluserREQuiest') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li>

 

 

  

    </ul>

  </li>



  

        





  <li class="treeview {{ active_menu('ccc')[0] }}">

    <a href="#">

      <i class="fa fa-users"></i> 

      <span>

          {{trans('admin.admin')}}

         

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('ccc')[1] }}">

      <li class=""><a href="{{ url('admin/admins') }}?level=admin"><i class="fa fa-users"></i> 

        {{trans('admin.admin')}}

     

    </a></li>

     



      

    </ul>





  </li>

 
 


        <li class="treeview {{ active_menu('users')[0] }}">

    <a href="#">

      <i class="fa fa-users"></i> 

      <span>

         @if(session('lang')== 'ar')

          {{MenueControll()->users_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->users_name_en}} 

          @endif

       

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('users')[1] }}">

      <li class=""><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> 

         @if(session('lang')== 'ar')

          {{MenueControll()->users_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->users_name_en}} 

          @endif



    </a></li>



       







    </ul>

  </li>



  



    <li class="treeview {{ active_menu('WhoWeAre')[0] }}">

    <a href="#">

      <i class="fa  fa fa-adjust"></i>

       <span>

          @if(session('lang')== 'ar')

          {{MenueControll()->WhoWeAre_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->WhoWeAre_name_en}} 

          @endif

        

     </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('WhoWeAre')[1] }}">

      <li class=""><a href="{{ url('admin/WhoWeAre') }}"><i class="fa fa-flag"></i>

         @if(session('lang')== 'ar')

          {{MenueControll()->WhoWeAre_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->WhoWeAre_name_en}} 

          @endif

       

     </a></li>

 

    </ul>

  </li>

              

  



                      



            <li class="treeview {{ active_menu('VisionMission')[0] }}">

    <a href="#">

      <i class="fa fa-eye"></i> 

      <span>

         {{trans('admin.VisionMission')}}

    

    </span>



      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('VisionMission')[1] }}">

      <li class=""><a href="{{ url('admin/VisionMission') }}"><i class="fa fa-eye"></i>
 {{trans('admin.VisionMission')}}

     

     </a></li>

    

    </ul>

  </li>



 

  



   <li class="treeview {{ active_menu('Objectives')[0] }}">

    <a href="#">

      <i class="fa fa-eye"></i>

     <span>

       {{trans('admin.Objectives')}}
     

   </span>

      <span class="pull-right-container"> 

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('Objectives')[1] }}">

      <li class=""><a href="{{ url('admin/Objectives') }}"><i class="fa fa-eye"></i> 



            {{trans('admin.Objectives')}}
 

    </a></li>
 
    </ul>

  </li>



      <li class="treeview {{ active_menu('newes')[0] }}">

    <a href="#">

      <i class="fa fa-address-book-o"></i>



       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->newes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->newes_name_en}} 

          @endif

      

     </span>



      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('newes')[1] }}">

      <li class=""><a href="{{ url('admin/newes') }}"><i class="fa fa-address-book-o"></i>

         @if(session('lang')== 'ar')

          {{MenueControll()->newes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->newes_name_en}} 

          @endif

 

     </a></li>

      

    </ul>

  </li>



  

    <!--li class="treeview {{ active_menu('admin')[0] }}">

    <a href="#">

      <i class="fa fa-users"></i> 

      <span>

          {{trans('admin.alimarketparteners')}}

         

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">

    

      <li class=""><a href="{{ url('admin/admins') }}?level=affiliate"><i class="fa fa-users"></i> 

       @if(session('lang')== 'ar')

          {{MenueControll()->vendor_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->vendor_name_en}} 

          @endif

    </a></li>

 


     

    </ul>





  </li >






  <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-money"></i>

       <span>

        طلبات سحب الافلييت

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-money"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      



      <li class=""><a href="{{ url('admin/withdrawFromTotalMoney') }}"><i class="fa fa-money"></i>       طلبات سحب الافلييت </a></li>



    

      <li class=""><a href="{{ url('admin/withdrawFromTotalMoney') }}"><i class="fa fa-money"></i>      طلب   سحب   </a></li>


      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=0"><i class="fa fa-money"></i>  المبالغ المطلوب سحبها      </a></li>
      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=1"><i class="fa fa-money"></i>   المبالغ المحصله     </a></li>
      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=2"><i class="fa fa-money"></i>   العمليات المرفوضة   </a></li>


   

    </ul>

  </li -->
 



           <!--li class="treeview {{ active_menu('countries')[0] }}">

    <a href="#">

      <i class="fa fa-flag"></i> 

      <span>



        {{trans('admin.Geographicallocations')}}

        

        

    

    </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('countries')[1] }}">

      <li class=""><a href="{{ url('admin/counteries') }}"><i class="fa fa-flag"></i>

          @if(session('lang')== 'ar')

          {{MenueControll()->counteries_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->counteries_name_en}} 

          @endif

      

     </a></li>



      <li class=""><a href="{{ url('admin/cities') }}"><i class="fa fa-flag"></i>

         @if(session('lang')== 'ar')

          {{MenueControll()->cities_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->cities_name_en}} 

          @endif

    

     </a></li>



      <li class=""><a href="{{ url('admin/states') }}"><i class="fa fa-flag"></i> 

         @if(session('lang')== 'ar')

          {{MenueControll()->states_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->states_name_en}} 

          @endif

     

    </a>
  </li>


   <li class=""><a href="{{ url('admin/zones') }}"><i class="fa fa-flag"></i> 

        
        {{trans('admin.zones')}}

    </a>
  </li>

   





    </ul>







  </li  -->





   





         



  <li class="treeview {{ active_menu('departments')[0] }}">

    <a href="#">

      <i class="fa fa-list"></i> 



      <span>

        categories

           

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">

      <li class=""><a href="{{ url('admin/departments') }}"><i class="fa fa-list"></i> 

         categories

  

    </a></li>



      <li class=""><a href="{{ url('admin/departments/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>



   



    </ul>

  </li>






 <li class="treeview {{ active_menu('attributes')[0] }}">

    <a href="#">

      <i class="fa fa-cube"></i> 



      <span>

         attributes

        

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('attributes')[1] }}">

      <li class=""><a href="{{ url('admin/attributes') }}"><i class="fa fa-cube"></i> 

       attributes

     

    </a></li>

      <li class=""><a href="{{ url('admin/attributes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>


  <li class="treeview {{ active_menu('attribute_values')[0] }}">

    <a href="#">

      <i class="fa fa-cube"></i> 



      <span>

         attribute values

        

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('attribute_values')[1] }}">

      <li class=""><a href="{{ url('admin/attribute_values') }}"><i class="fa fa-cube"></i> 

       attribute values

     

    </a></li>

      <li class=""><a href="{{ url('admin/attribute_values/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>
 



   <li class="treeview {{ active_menu('trademarks')[0] }}">

    <a href="#">

      <i class="fa fa-cube"></i> 



      <span>

         Brands

        

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('trademarks')[1] }}">

      <li class=""><a href="{{ url('admin/trademarks') }}"><i class="fa fa-cube"></i> 

       Brands

     

    </a></li>

      <li class=""><a href="{{ url('admin/trademarks/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>

         <!--li class="treeview {{ active_menu('manufacturers')[0] }}">

    <a href="#">

      <i class="fa fa-user"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->manufacturers_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->manufacturers_name_en}} 

          @endif

     

     </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('manufacturers')[1] }}">

      <li class=""><a href="{{ url('admin/manufacturers') }}"><i class="fa fa-user"></i>

       @if(session('lang')== 'ar')

          {{MenueControll()->manufacturers_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->manufacturers_name_en}} 

          @endif



     </a></li>

      <li class=""><a href="{{ url('admin/manufacturers/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>



           <li class=""><a href="{{ url('admin/departmentsFactories') }}"><i class="fa fa-list"></i> 

           {{trans('admin.departmentsFactories')}}

           

  

    </a></li>



      <li class=""><a href="{{ url('admin/departmentsFactories/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>



                   <li class=""><a href="{{ url('admin/photoesFactory') }}"><i class="fa fa-image"></i> {{ trans('admin.photoes') }}</a></li>



            <li class=""><a href="{{ url('admin/BannerTopFactory') }}"><i class="fa fa-image"></i> {{ trans('admin.BannerTopFactory') }}</a></li>

    </ul>



  </li -->









     <!--li class="treeview {{ active_menu('shipping')[0] }}">

    <a href="#">

      <i class="fa fa-truck"></i> 

      <span>

         @if(session('lang')== 'ar')

          {{MenueControll()->shipping_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->shipping_name_en}} 

          @endif

      

    </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('shipping')[1] }}">

      <li class=""><a href="{{ url('admin/shipping') }}"><i class="fa fa-truck"></i>



    @if(session('lang')== 'ar')

          {{MenueControll()->shipping_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->shipping_name_en}} 

          @endif

     </a></li>

      <li class=""><a href="{{url('admin/shipping/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li -->



     <!--li class="treeview {{ active_menu('malls')[0] }}">

    <a href="#">

      <i class="fa fa-building"></i> 

      <span>

         @if(session('lang')== 'ar')

          {{MenueControll()->malls_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->malls_name_en}} 

          @endif

   

    </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('malls')[1] }}">

      <li class=""><a href="{{url('admin/malls') }}"><i class="fa fa-building"></i>

        @if(session('lang')== 'ar')

          {{MenueControll()->malls_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->malls_name_en}} 

          @endif

     </a></li>

      <li class=""><a href="{{url('admin/malls/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li -->



  







     <!--li class="treeview {{ active_menu('sizes')[0] }}">

    <a href="#">

      <i class="fa fa-camera"></i> 

      <span>

           @if(session('lang')== 'ar')

          {{MenueControll()->sizes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->sizes_name_en}} 

          @endif

     

    </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('sizes')[1] }}">

      <li class=""><a href="{{ url('admin/sizes') }}"><i class="fas fa-camera "></i> 

            @if(session('lang')== 'ar')

          {{MenueControll()->sizes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->sizes_name_en}} 

          @endif

   

    </a></li>

      <li class=""><a href="{{ url('admin/sizes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li -->

 



     <!--li class="treeview {{ active_menu('weight')[0] }}">

    <a href="#">

      <i class="fa fa-building"></i>

       <span>

           @if(session('lang')== 'ar')

          {{MenueControll()->weight_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->weight_name_en}} 

          @endif

   

      

     </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('weight')[1] }}">

      <li class=""><a href="{{ url('admin/weight') }}"><i class="fa fa-building "></i>

        @if(session('lang')== 'ar')

          {{MenueControll()->weight_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->weight_name_en}} 

          @endif

       

     </a></li>

      <li class=""><a href="{{ url('admin/weight/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li -->







         <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-product-hunt"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-product-hunt"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('admin/productes') }}"><i class="fa fa-product-hunt"></i>



      @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

     </a></li>

      <li class=""><a href="{{ url('admin/productes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>



 





   

     <li class="treeview {{ active_menu('newes')[0] }}">

    <a href="#">

      <i class="fa fa-code"></i>

       <span>

         @if(session('lang')== 'ar')

          {{MenueControll()->Coupons_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->Coupons_name_en}} 

          @endif

       </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('Coupons')[1] }}">

      <li class=""><a href="{{ url('admin/Coupons') }}"><i class="fa fa-code"></i>

          @if(session('lang')== 'ar')

          {{MenueControll()->Coupons_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->Coupons_name_en}} 

          @endif

      

     </a></li>

      

    </ul>

  </li>
   <li class="treeview {{ active_menu('colors')[0] }}">

    <a href="#">

      <i class="fa fa-paint-brush"></i> 

      <span>

        tags
 

    </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('colors')[1] }}">

      <li class=""><a href="{{ url('admin/colors') }}"><i class="fa fa-paint-brush"></i> 

tags

    </a></li>

      <li class=""><a href="{{ url('admin/colors/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li >


  <!--li class="treeview {{ active_menu('newes')[0] }}">

    <a href="#">

      <i class="fa fa-user"></i>

       <span>

         @if(session('lang')== 'ar')

          {{MenueControll()->Marketers_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->Marketers_name_en}} 

          @endif

       

     </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('Coupons')[1] }}">

        <li class=""><a href="{{ url('admin/admins') }}?level=Marketers"><i class="fa fa-user"></i>

           @if(session('lang')== 'ar')

          {{MenueControll()->Marketers_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->Marketers_name_en}} 

          @endif

        </a></li>

 

    </ul>

  </li >

  



  <li class="treeview {{ active_menu('MenueControll')[0] }}">

    <a href="#">

     <i class="fa fa-tasks"></i> <span>{{ trans('admin.MenueControll') }}</span>

      <span class="pull-right-container">

        <i class="fa fa-tasks"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('MenueControll')[1] }}">

      <li class=""><a href="{{ url('admin/MenueControll') }}"><i class="fa fa-tasks"></i> {{ trans('admin.MenueControll') }}</a></li>

      

    </ul>

  </li>

<li class="treeview {{ active_menu('photoes')[0] }}">



    <a href="#">



      <i class="fa fa-image"></i> <span>{{ trans('admin.photoes') }}</span>



      <span class="pull-right-container">



        <i class="fa fa-image"></i>



      </span>



    </a>



    <ul class="treeview-menu" style="{{ active_menu('photoes')[1] }}">





      <li class=""><a href="{{ url('admin/photoes') }}"><i class="fa fa-image"></i> {{ trans('admin.photoes_AR') }}</a></li>







      <li class=""><a href="{{ url('admin/photoesEN') }}"><i class="fa fa-image"></i> {{ trans('admin.photoesEN') }}</a></li>



            <li class=""><a href="{{ url('admin/BannerTop') }}"><i class="fa fa-image"></i> {{ trans('admin.BannerTop_AR') }}</a></li>



              <li class=""><a href="{{ url('admin/BannerTopEN') }}"><i class="fa fa-image"></i> {{ trans('admin.BannerTop_EN') }}</a></li>



      



    </ul>



  </li -->

 


 
   <li class="treeview {{ active_menu('Departmentbanners')[0] }}">
    <a href="#">
      <i class="fa fa-image"></i> 
      <span>
 {{ trans('admin.Departmentbanners') }} 
    </span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('Departmentbanners')[1] }}">
      <li class=""><a href="{{ url('admin/Departmentbanners') }}"><i class="fa fa-image"></i>
 {{ trans('admin.Departmentbanners') }} 
     </a></li>
      <li class=""><a href="{{url('admin/Departmentbanners/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }} </a></li>
    </ul>
  </li>


 

 




    <li class="treeview {{ active_menu('PurchaseAndDeliveryPolicy')[0] }}">

    <a href="#">

      <i class="fa  fa fa-adjust"></i> <span>{{ trans('admin.PurchaseAndDeliveryPolicy') }}</span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('PurchaseAndDeliveryPolicy')[1] }}">

      <li class=""><a href="{{ url('admin/PurchaseAndDeliveryPolicy') }}"><i class="fa fa-flag"></i> {{ trans('admin.PurchaseAndDeliveryPolicy') }}</a></li>

      

    </ul>

  </li>





   <li class="treeview {{ active_menu('PaymentAndDeliveryPolicy')[0] }}">

    <a href="#">

      <i class="fa  fa fa-adjust"></i> <span>{{ trans('admin.PaymentAndDeliveryPolicy') }}</span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('PaymentAndDeliveryPolicy')[1] }}">

      <li class=""><a href="{{ url('admin/PaymentAndDeliveryPolicy') }}"><i class="fa fa-flag"></i> {{ trans('admin.PaymentAndDeliveryPolicy') }}</a></li>

 

    </ul>

  </li>

    

  

    

 

 

 

<!-------------------------------------------------------------------------->



    </section>

    <!-- /.sidebar -->

  </aside>



                @elseif(auth()->guard('admin')->user()->level =='imported')

                <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

                 @if(auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

                @endif



                    @if(!auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" >

                @endif



         

        </div>

        <div class="pull-left info">

                     

                     

          <p> {{ auth()->guard('admin')->user()->name }} </p>

       

          <a href="#"><i class="fa fa-circle text-success"></i>              {{ trans('admin.online') }}</a>

        </div>

      </div>



      

      <!-- search form -->

      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="{{ trans('admin.search') }}">

          <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form>

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header"> 

          @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif



           </li>

        

    <li class=""><a href="{{ url('admin') }}">



       <i class="fa fa-cog"></i> <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif</span>



          <span class="pull-right-container">



          </span>



        </a>



      </li> 



  



  <li class=""><a href="{{ url('admin/OrderShareWithAllVendor') }}">



       <i class="fa fa-cog"></i> <span>{{ trans('admin.neworder') }}</span>



          <span class="pull-right-container">



          </span>



        </a>



      </li> 





         <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-product-hunt"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-product-hunt"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('admin/myproductes') }}"><i class="fa fa-product-hunt"></i>



      @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

     </a></li>

      <li class=""><a href="{{ url('admin/myproductes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>



    @if(auth()->guard('admin')->user()->righttoAddDepartment == 1)

     <li class="treeview {{ active_menu('departments')[0] }}">

    <a href="#">

      <i class="fa fa-list"></i> 



      <span>

        categories

           

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">

      <li class=""><a href="{{ url('admin/departments') }}"><i class="fa fa-list"></i> 

         categories

  

    </a></li>

      <li class=""><a href="{{ url('admin/departments/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>



    @endif

 





  <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-product-hunt"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->MyAcount_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->MyAcount_name_en}} 

          @endif

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-product-hunt"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('/') }}/admin/profile"><i class="fa fa-product-hunt"></i>

          

                    {{trans('admin.profile')}}

     </a></li>



         <li class=""><a href="{{ url('/') }}/admin/admins/{{auth()->guard('admin')->user()->id}}/edit"><i class="fa fa-product-hunt"></i>

          @if(session('lang')== 'ar')

          {{MenueControll()->MyAcount_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->MyAcount_name_en}} 

          @endif

     </a></li>

   

    </ul>

  </li>



   <li class="treeview {{ active_menu('Managementchat')[0] }}">

    <a href="#">

      <i class="fa fa-comments-o"></i> <span>{{ trans('admin.Managementchat') }}</span>

      <span class="pull-right-container">

        <i class="fa fa-comments-o"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('admin/Managementchat') }}"><i class="fa fa-comments-o"></i> {{ trans('admin.Managementchat') }}</a></li>



     



    </ul>

  </li> 









    </section>

    <!-- /.sidebar -->

  </aside>

                

               


<!-------------------------------------------------------------------------------------------------------------->

   @elseif(auth()->guard('admin')->user()->level =='affiliate')

                <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

                 @if(auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

                @endif



                    @if(!auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" >

                @endif



         

        </div>

        <div class="pull-left info">

                     

                     

          <p> {{ auth()->guard('admin')->user()->name }} </p>

       

          <a href="#"><i class="fa fa-circle text-success"></i>              {{ trans('admin.online') }}</a>

        </div>

      </div>



      

      <!-- search form -->

      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="{{ trans('admin.search') }}">

          <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form>

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header"> 

          @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif



           </li>

        

    <li class=""><a href="{{ url('/admin/affiliate') }}">



       <i class="fa fa-cog"></i> <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->admin_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->admin_name_en}} 

          @endif</span>



          <span class="pull-right-container">



          </span>



        </a>



      </li> 



  


 


      </li> 





         <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-product-hunt"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-product-hunt"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('admin/productes') }}"><i class="fa fa-product-hunt"></i>



      @if(session('lang')== 'ar')

          {{MenueControll()->productes_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->productes_name_en}} 

          @endif

     </a></li>


    </ul>

  </li>



    @if(auth()->guard('admin')->user()->righttoAddDepartment == 1)

     <li class="treeview {{ active_menu('departments')[0] }}">

    <a href="#">

      <i class="fa fa-list"></i> 



      <span>

        categories

           

      </span>

      <span class="pull-right-container">

        <i class="fa fa-angle-left pull-right"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">

      <li class=""><a href="{{ url('admin/departments') }}"><i class="fa fa-list"></i> 

         categories

  

    </a></li>

      <li class=""><a href="{{ url('admin/departments/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>

    </ul>

  </li>



    @endif

 





  <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-product-hunt"></i>

       <span>

        @if(session('lang')== 'ar')

          {{MenueControll()->MyAcount_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->MyAcount_name_en}} 

          @endif

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-product-hunt"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      <li class=""><a href="{{ url('/') }}/admin/profile"><i class="fa fa-product-hunt"></i>

          

                    {{trans('admin.profile')}}

     </a></li>



         <li class=""><a href="{{ url('/') }}/admin/admins/{{auth()->guard('admin')->user()->id}}/edit"><i class="fa fa-product-hunt"></i>

          @if(session('lang')== 'ar')

          {{MenueControll()->MyAcount_name_ar}} 

          @endif

           @if(session('lang')== 'en')

          {{MenueControll()->MyAcount_name_en}} 

          @endif

     </a></li>

   

    </ul>

  </li>





  <li class="treeview {{ active_menu('product')[0] }}">

    <a href="#">

      <i class="fa fa-money"></i>

       <span>

       طلب   سحب   

    

     </span>

      <span class="pull-right-container">

        <i class="fa fa-money"></i>

      </span>

    </a>

    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">

      



      <li class=""><a href="{{ url('admin/withdrawFromTotalMoney') }}"><i class="fa fa-money"></i>      طلب   سحب   </a></li>


      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=0"><i class="fa fa-money"></i>  المبالغ المطلوب سحبها      </a></li>
      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=1"><i class="fa fa-money"></i>   المبالغ المحصله     </a></li>
      <li class=""><a href="{{ url('/') }}/admin/withdrawFromTotalMoney?status=2"><i class="fa fa-money"></i>   العمليات المرفوضة   </a></li>

    

   

    </ul>

  </li>

 







    </section>

    <!-- /.sidebar -->

  </aside>

                

                @endif



 

   

