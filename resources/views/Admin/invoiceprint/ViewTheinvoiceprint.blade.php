
<!DOCTYPE html>

<html>

<head>





  



 <!-- .......................................................................... -->



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title> لوحه التحكم الرئيسه </title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->



    <link rel="shortcut icon" href="http://localhost/dashboard/old/alymarket3/forentend3/assets/images/55.ico" type="image/png">

   

   <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/jstree/dist/themes/default/style.min.css">

 

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





   <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

 

  <!-- Morris chart -->

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



 

     <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">



  <!-- Ionicons -->



  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">



  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/dist/css/select2.min.css">

  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/dist/css/custom.css">


   <script src="https://www.xpremo.com/Desgin/ckeditor/ckeditor/ckeditor.js"></script>


  <!-- Theme style -->



         
    <link rel="stylesheet" 

    href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/AdminLTE.css">

    

    <link rel="stylesheet" 

    href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/AdminLTE.min.css">

    



    <link rel="stylesheet" 

    href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/bootstrap-rtl.min.css">



    <link rel="stylesheet" 

    href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/rtl.css">

    

      <link rel="stylesheet" 

    href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/profile.css">

    <link href="https://www.xpremo.com/Desgin/Adminlte/dist/css/rtl/cairo.css" rel="stylesheet">



  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/dist/css/bootstrap-datepicker.css">

 

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="https://www.xpremo.com/Desgin/Adminlte/dist/css/skins/_all-skins.min.css">


 <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: right;    
}
   </style>
</head>


<body onload="window.print();">


   <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper container">

    <!-- Content Header (Page header) -->
 
 
 
    <section class="invoice">


<img src="{{url('/')}}/forentend4/iconified/apple-touch-icon-180x180.png" style="text-align: center;">
 
 
<table style="width:100% ;direction:ltr;">

 <tr  > 
  <td  >

    <h4>
      
      عنوان الشحن
    </h4>

    @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address1')

  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first()->countries_name_ar  }}
 

           <br>
           المحافظة: {{ App\cities::where('id',App\user::where('id',$order->user_id)->first()->city_id )->first()->cities_name_ar  }}
           <br>
             @isset(App\states::where('id',App\user::where('id',$order->user_id)->first()->stat_id )->first()->states_name_ar)
          المركز : {{ App\states::where('id',App\user::where('id',$order->user_id)->first()->stat_id )->first()->states_name_ar  }}
           <br>
           @endisset

          {{trans('admin.MoreDetailsAboutYourAddress')}}:  : {{ App\user::where('id',$order->user_id)->first()->MoreDetailsAboutYourAddress }}

          @endif



           @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address2')
  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id2 )->first()->countries_name_ar  }}


           <br>
           المحافظة: {{ App\cities::where('id',App\user::where('id',$order->user_id)->first()->city_id2 )->first()->cities_name_ar  }}
           <br>

          المركز : {{ App\states::where('id',App\user::where('id',$order->user_id)->first()->stat_id2 )->first()->states_name_ar  }}
           <br>

          {{trans('admin.MoreDetailsAboutYourAddress')}}:  : {{ App\user::where('id',$order->user_id)->first()->MoreDetailsAboutYourAddress2 }}

          @endif

        
   </td> 


   <td >
     <b> {{trans('admin.Invoice')}} {{$order->Invoice}}</b><br>

          <br>

          <b> {{trans('admin.OrderID')}}:</b>{{$order->id}}<br>

          <b>{{trans('admin.PaymentDue')}}:</b> {{$order->PaymentDue}}<br>
          <b>{{trans('admin.billing_total')}}:</b> {{$order->billing_total}}.00   {{trans('admin.pound')}} <br>




   </td> </tr>
 
  <tr> <td rowspan="3">
    
     @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address1')
  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first()->countries_name_ar  }}

   @endif

   @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address2')
  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id2 )->first()->countries_name_ar  }}

   @endif

  </td>    </tr>
  
   <tr>     

    <td> 

 

             {{trans('admin.payment_gateway')}} :   {{$order->payment_gateway}}  <br>
   </td> </tr>
   
    <tr>  

      <td>
        
           <strong>{{$order->billing_name}}  </strong>    :   الاسم  <br>


          {{trans('admin.phone')}}:
                             @php 
                            $User= App\User::where('id',$order->user_id )->first();
                            @endphp
           {{$User->phone}}
                       
            <br>

         {{$order->billing_email}}   :  {{trans('admin.email')}}<br>

              

      </td>


       </tr>
    
</table>

 

 <table style="width:100% ; ">

      <caption style="text-align: center;">    معلومات المشتريات   </caption>

            <thead>

            <tr>

              <th>{{trans('admin.quantity')}}</th>

              <th>{{trans('admin.Productname')}}</th>

              <th>{{trans('admin.price')}}</th>

              <th>{{trans('admin.photo')}}</th>

              <th>{{trans('admin.Subtotal')}}</th>

            </tr>

            </thead>

            <tbody>

 



              

              @foreach($OrderProducts as $OrderProduct)

            <tr>

              <td>{{$OrderProduct->quantity}}</td>

              <td>

                @if(session('lang')=='ar')

                {{$OrderProduct->product_idd->title_name_ar}}

                @endif

                 @if(session('lang')=='en')

                {{$OrderProduct->product_idd->title_name_en}}

                @endif

              </td>

              <td>{{$OrderProduct->price}}</td>



              <td>



               

              <img src="{{Storage::url($OrderProduct->product_idd->photo)}}" width="100" height="100">

             

               



              </td>



              <td>{{$OrderProduct->Subtotal}}</td>

            </tr>

            @endforeach

            </tbody>

          </table>

         <table style="width:100% ; ">

              <tr>

                <th  style="width:50% ; text-align: left;">{{trans('admin.billing_subtotal')}}:</th>

                <td>{{$order->billing_subtotal}}.00 {{trans('admin.pound')}} </td>

              </tr>

             

              <tr>

                <th style="text-align: left;">{{trans('admin.Shipping')}}:</th>
            @if(auth()->guard('admin')->user()->level ==  'admin')

                <td>

                

                  {{TotalAfterShipingPriceadmin($order->user_id)}} {{trans('admin.pound')}}



                </td>
                    @endif

              </tr>

              <tr>

                <th style="text-align: left;">{{trans('admin.billing_total')}}:</th>

                <td>{{$order->billing_total}}.00 {{trans('admin.pound')}}</td>

              </tr>

            </table>

        <a href="{{url('/')}}/admin/ViewTheinvoiceprint/{{$id}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>{{trans('admin.Print')}} </a>


    </section>

    <!-- /.content -->

    <div class="clearfix"></div>

  </div>

 
 </body>
 </html>