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
   
   <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/jstree/dist/themes/default/style.min.css">
 

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



 


    <style type="text/css">
          html,body{
            font-family: 'Cairo', sans-serif;
          }
    </style>


  @endif



  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/skins/_all-skins.min.css">




</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{ trans('admin.admin') }}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

   

   @include('Admin.layouts.menue'); 

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
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
        <li class="header">{{ trans('admin.MAINNAVIGATION') }}  </li>
        
   <li class="treeview {{ active_menu('')[0] }}">
        <a href="#">
          <i class="fa fa-list"></i> <span>{{ trans('admin.Dashboard') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
          <li class=""><a href="{{ url('admin') }}">
            <i class="fa fa-cog"></i> <span>{{ trans('admin.Dashboard') }}</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class=""><a href="{{ url('admin/settings') }}">
          <i class="fa fa-cog"></i> <span>{{ trans('admin.settings') }}</span>
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


   <li class=""><a href="{{ url('admin/AfterPyment') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.AfterPyment') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 


       <li class=""><a href="{{ url('admin/AfterPaymentOrders') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.AfterPaymentOrders') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 


       <li class=""><a href="{{ url('admin/AfterPaymentorder_product') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.AfterPaymentorder_product') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 

        <li class=""><a href="{{ url('admin/OrderProduct') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.OrderProduct') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 


       <li class=""><a href="{{ url('admin/Order') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.Order') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 

        <li class=""><a href="{{ url('admin/OrderShareWithAllVendor') }}">

          <i class="fa fa-cog"></i> <span>{{ trans('admin.OrderShareWithAllVendor') }}</span>

          <span class="pull-right-container">

          </span>

        </a>

      </li> 




  
    </ul>
  </li>
  <li class="treeview {{ active_menu('admin')[0] }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>{{ trans('admin.admin') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
      <li class=""><a href="{{ url('admin/admins') }}"><i class="fa fa-users"></i> {{ trans('admin.admin') }}</a></li>
      <li class=""><a href="{{ url('admin/admins') }}?level=user"><i class="fa fa-users"></i> {{ trans('admin.user') }}</a></li>
      <li class=""><a href="{{ url('admin/admins') }}?level=vendor"><i class="fa fa-users"></i> {{ trans('admin.vendor') }}</a></li>

      <li class=""><a href="{{ url('admin/admins') }}?level=company"><i class="fa fa-users"></i> {{ trans('admin.company') }}</a></li>

      <li class=""><a href="{{ url('admin/admins') }}?level=imported"><i class="fa fa-users"></i> {{ trans('admin.imported') }}</a></li>

      <li class=""><a href="{{ url('admin/admins') }}?level=Factory"><i class="fa fa-users"></i> {{ trans('admin.Factory') }}</a></li>
      
      <li class=""><a href="{{ url('admin/admins') }}?level=Handicraft"><i class="fa fa-users"></i> {{ trans('admin.Handicraft') }}</a></li>
    </ul>


  </li>

        <li class="treeview {{ active_menu('users')[0] }}">
    <a href="#">
      <i class="fa fa-users"></i> <span>{{ trans('admin.usersacouts') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('users')[1] }}">
      <li class=""><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> {{ trans('admin.usersacouts') }}</a></li>

       

    


    </ul>
  </li>

  

    <li class="treeview {{ active_menu('WhoWeAre')[0] }}">
    <a href="#">
      <i class="fa  fa fa-adjust"></i> <span>{{ trans('admin.WhoWeAre') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('WhoWeAre')[1] }}">
      <li class=""><a href="{{ url('admin/WhoWeAre') }}"><i class="fa fa-flag"></i> {{ trans('admin.WhoWeAre') }}</a></li>
      <li class=""><a href="{{ url('admin/WhoWeAre/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
              
  

                      

            <li class="treeview {{ active_menu('VisionMission')[0] }}">
    <a href="#">
      <i class="fa fa-eye"></i> <span>{{ trans('admin.VisionMission') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('VisionMission')[1] }}">
      <li class=""><a href="{{ url('admin/VisionMission') }}"><i class="fa fa-eye"></i> {{ trans('admin.VisionMission') }}</a></li>
      <li class=""><a href="{{ url('admin/VisionMission/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

 
  

   <li class="treeview {{ active_menu('Objectives')[0] }}">
    <a href="#">
      <i class="fa fa-eye"></i> <span>{{ trans('admin.Objectives') }}</span>
      <span class="pull-right-container"> 
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('Objectives')[1] }}">
      <li class=""><a href="{{ url('admin/Objectives') }}"><i class="fa fa-eye"></i> {{ trans('admin.Objectives') }}</a></li>
      <li class=""><a href="{{ url('admin/Objectives/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

      <li class="treeview {{ active_menu('newes')[0] }}">
    <a href="#">
      <i class="fa fa-address-book-o"></i> <span>{{ trans('admin.newes') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('newes')[1] }}">
      <li class=""><a href="{{ url('admin/newes') }}"><i class="fa fa-address-book-o"></i> {{ trans('admin.newes') }}</a></li>
      
    </ul>
  </li>

  
   


 

           <li class="treeview {{ active_menu('countries')[0] }}">
    <a href="#">
      <i class="fa fa-flag"></i> <span>{{ trans('admin.country') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('countries')[1] }}">
      <li class=""><a href="{{ url('admin/counteries') }}"><i class="fa fa-flag"></i> {{ trans('admin.country') }}</a></li>
      <li class=""><a href="{{ url('admin/counteries/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>


  <li class="treeview {{ active_menu('cities')[0] }}">
    <a href="#">
      <i class="fa fa-flag"></i> <span>{{ trans('admin.cities') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('cities')[1] }}">
      <li class=""><a href="{{ url('admin/cities') }}"><i class="fa fa-flag"></i> {{ trans('admin.cities') }}</a></li>
      <li class=""><a href="{{ url('admin/cities/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>


        <li class="treeview {{ active_menu('states')[0] }}">
    <a href="#">
      <i class="fa fa-flag"></i> <span>{{ trans('admin.states') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('states')[1] }}">
      <li class=""><a href="{{ url('admin/states') }}"><i class="fa fa-flag"></i> {{ trans('admin.states') }}</a></li>
      <li class=""><a href="{{ url('admin/states/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

  <li class="treeview {{ active_menu('departments')[0] }}">
    <a href="#">
      <i class="fa fa-list"></i> <span>{{ trans('admin.departments') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">
      <li class=""><a href="{{ url('admin/departments') }}"><i class="fa fa-list"></i> {{ trans('admin.departments') }}</a></li>
      <li class=""><a href="{{ url('admin/departments/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

   <li class="treeview {{ active_menu('trademarks')[0] }}">
    <a href="#">
      <i class="fa fa-cube"></i> <span>{{ trans('admin.trademarks') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('trademarks')[1] }}">
      <li class=""><a href="{{ url('admin/trademarks') }}"><i class="fa fa-cube"></i> {{ trans('admin.trademarks') }}</a></li>
      <li class=""><a href="{{ url('admin/trademarks/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
         <li class="treeview {{ active_menu('manufacturers')[0] }}">
    <a href="#">
      <i class="fa fa-user"></i> <span>{{ trans('admin.manufacturers') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('manufacturers')[1] }}">
      <li class=""><a href="{{ url('admin/manufacturers') }}"><i class="fa fa-user"></i> {{ trans('admin.manufacturers') }}</a></li>
      <li class=""><a href="{{ url('admin/manufacturers/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

     <li class="treeview {{ active_menu('shipping')[0] }}">
    <a href="#">
      <i class="fa fa-truck"></i> <span>{{ trans('admin.shipping') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('shipping')[1] }}">
      <li class=""><a href="{{ url('admin/shipping') }}"><i class="fa fa-truck"></i> {{ trans('admin.shipping') }}</a></li>
      <li class=""><a href="{{url('admin/shipping/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

     <li class="treeview {{ active_menu('malls')[0] }}">
    <a href="#">
      <i class="fa fa-building"></i> <span>{{ trans('admin.malls') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('malls')[1] }}">
      <li class=""><a href="{{url('admin/malls') }}"><i class="fa fa-building"></i> {{ trans('admin.malls') }}</a></li>
      <li class=""><a href="{{url('admin/malls/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

     <li class="treeview {{ active_menu('colors')[0] }}">
    <a href="#">
      <i class="fa fa-paint-brush"></i> <span>{{ trans('admin.colors') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('colors')[1] }}">
      <li class=""><a href="{{ url('admin/colors') }}"><i class="fa fa-paint-brush"></i> {{ trans('admin.colors') }}</a></li>
      <li class=""><a href="{{ url('admin/colors/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>



     <li class="treeview {{ active_menu('sizes')[0] }}">
    <a href="#">
      <i class="fa fa-camera"></i> <span>{{ trans('admin.sizes') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('sizes')[1] }}">
      <li class=""><a href="{{ url('admin/sizes') }}"><i class="fas fa-camera "></i> {{ trans('admin.sizes') }}</a></li>
      <li class=""><a href="{{ url('admin/sizes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

     <li class="treeview {{ active_menu('weight')[0] }}">
    <a href="#">
      <i class="fa fa-building"></i> <span>{{ trans('admin.weight') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('weight')[1] }}">
      <li class=""><a href="{{ url('admin/weight') }}"><i class="fa fa-building "></i> {{ trans('admin.weight') }}</a></li>
      <li class=""><a href="{{ url('admin/weight/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>



         <li class="treeview {{ active_menu('product')[0] }}">
    <a href="#">
      <i class="fa fa-product-hunt"></i> <span>{{ trans('admin.product') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-product-hunt"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('product')[1] }}">
      <li class=""><a href="{{ url('admin/productes') }}"><i class="fa fa-product-hunt"></i> {{ trans('admin.product') }}</a></li>
      <li class=""><a href="{{ url('admin/productes/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>

 


   
     <li class="treeview {{ active_menu('newes')[0] }}">
    <a href="#">
      <i class="fa fa-code"></i> <span>{{ trans('admin.Coupons') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('Coupons')[1] }}">
      <li class=""><a href="{{ url('admin/Coupons') }}"><i class="fa fa-code"></i> {{ trans('admin.Coupons') }}</a></li>
      
    </ul>
  </li>

  <li class="treeview {{ active_menu('newes')[0] }}">
    <a href="#">
      <i class="fa fa-user"></i> <span>{{ trans('admin.Marketers') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('Coupons')[1] }}">
        <li class=""><a href="{{ url('admin/admins') }}?level=Marketers"><i class="fa fa-user"></i> {{ trans('admin.Marketers') }}</a></li>
 
    </ul>
  </li>


  


    
<li class="treeview {{ active_menu('Jobs')[0] }}">
    <a href="#">
     <i class="fa fa-tasks"></i> <span>{{ trans('admin.Jobs') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-tasks"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('Jobs')[1] }}">
      <li class=""><a href="{{ url('admin/Jobs') }}"><i class="fa fa-tasks"></i> {{ trans('admin.Jobs') }}</a></li>
      
    </ul>
  </li>


  
    
<li class="treeview {{ active_menu('publicPayment')[0] }}">
    <a href="#">
     <i class="fa fa-tasks"></i> <span>{{ trans('admin.publicPayment') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-tasks"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('publicPayment')[1] }}">
      <li class=""><a href="{{ url('admin/publicPayment') }}"><i class="fa fa-tasks"></i> {{ trans('admin.publicPayment') }}</a></li>
      
    </ul>
  </li>


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



    </section>
    <!-- /.sidebar -->
  </aside>
   
