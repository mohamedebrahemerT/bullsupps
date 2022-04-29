 

@extends('Admin.index')

@section('content')



       @push('js')

              <script type="text/javascript">

                $(document).ready(function() {

        $('.mall_select2').select2();

});

              </script>

              @endpush





    @push('js')

 





  <script type="text/javascript">        

  $('.datetpicker').datepicker({

        rtl:true,

        language:'{{ session("lang") }}',

        todayBtn:true,

        utoclose:false,

        clearBtn:true,

  });

           

             

             

        </script>

@endpush



 @push('js')

            <script type="text/javascript">



              





               $(document).on('click','.DELET_PRODUCT',function(){

                   



                $.ajax({

              url:'{{ url('admin/DELET_PRODUCT/' ) }}',

              dataType:'json',

              type:'post',

              data:{

                _token:'{{ csrf_token()  }}'

              } ,



             beforeSend:function(){

               $('.loading-save-c').removeClass('hidden');

                   $('.sucess_message').html('');

                   $('.sucess_message').addClass('hidden');



                  $('.DELET_PRODUCT0').addClass('hidden');

                   $('.sucess_danger').addClass('hidden');

                  

                

              },

              success:function(data){

                  $('.DELET_PRODUCT0').removeClass('hidden');

                      if (data.status==true)

                  {

          $('.DELET_PRODUCT1').html('<h1>'+data.message+'</h1>');



                

             $('#myModal').modal('show');

                      

                  }



                       else if(data.status==false)

                  {

                     $('.sucess_danger').html('<h1>'+data.message+'</h1>').removeClass('hidden');



                  }





              },

              error:function(response){

              



              },

                });



                return false;

               });

             

             $(document).on('click','#save_from_data1',function(){

              

               var From_data=$('#save_from_data').serialize();





               

               $.ajax({

                

              url:'{{ url('admin/searchAll') }}',

              dataType:'json',

              type:'post',

              data:From_data,

              beforeSend:function(){

                $('.loading-save-c').removeClass('hidden');

                   $('.sucess_message').html('');

                   $('.sucess_message').addClass('hidden');

                   $('.sucess_danger').addClass('hidden');







              },

              success:function(data){

                $('.loading-save-c').addClass('hidden');

                 $('.validate_message').html('');

                 

               $('.error_messages').addClass('hidden');

                 

                 if (data.status==true)

                  {

          $('.sucess_message').html('<h1>'+data.message+'</h1>').removeClass('hidden');

                  }

                   else if(data.status==false)

                  {

                     $('.sucess_danger').html('<h1>'+data.message+'</h1>').removeClass('hidden');



                  }





               

               

              },

              error:function(response){

               $('.loading-save-c').addClass('hidden');

               var error_li='';

               $.each(response.responseJSON.errors,function(index,value)

               {

                 error_li +='<li>'+value+'</li>';



               });



               $('.validate_message').html(error_li);

                 

               $('.error_messages').removeClass('hidden');





              },



               });





               

                

                return false;

             });



              

            </script>

            @endpush

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

         

         {{trans('admin.Dashboard')}}

        



        <span  class="alert alert-denger">

          

          

          @if(session('success'))

   <div class="alert alert-success ">

   {{session('success')}}



     </div>

   @endif



        </span>

        <small> {{trans('admin.Controlpanel')}}</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('admin.home')}} </a></li>

        <li class="active">{{trans('admin.Dashboard')}}</li>

      </ol>

                         @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



    </section>



    <!-- Main content -->

    <section class="content">

    

            <h1>{{trans('admin.todayreport')}}</h1>

      

        <div class="row">

           <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{NewOrdersaffiliate( auth()->guard('admin')->user()->id )}}</h3>



              <p>{{trans('admin.orders')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=neworder" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{waitshipingaffiliate(auth()->guard('admin')->user()->id)}}</h3>



              <p>{{trans('admin.waitshiping')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=waitshiping" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{shippedaffiliate(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.shiped')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=shipped" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

         <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{returnedaffiliate(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.return')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=returned" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

       
         <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{Receivedaffiliate(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.recived')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=Received" class="small-box-footer">{{trans('admin.more')}}  <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

      </div>

      <!-- /.row -->

<!------------------------------------------------------------------------------------------------------------------------------>

            <h1>رصيد    الحساب </h1>

      

        <div class="row">

           <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{NewOrdersaffiliateBalance(auth()->guard('admin')->user()->id)}}</h3>



              <p>{{trans('admin.orders')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=neworder" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{waitshipingaffiliateBalance(auth()->guard('admin')->user()->id)}}</h3>



              <p>{{trans('admin.waitshiping')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=waitshiping" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{shippedaffiliateBalance(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.shiped')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=shipped" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

         <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{returnedaffiliateBalance(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.return')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=returned" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

       
         <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{ReceivedaffiliateBalance(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.recived')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=Received" class="small-box-footer">{{trans('admin.more')}}  <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->



        <!------------------------------------------------------------------------------------------------------------->

        <!-------------------------------------------------------------------------------------------------------------->

      </div>

      <!-- /.row -->





<!------------------------------------------------------------------------------------------------------------------------------>

            <h1> المالية  </h1>

      

        <div class="row">

    
   <div class="col-lg-6 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{AmountsInprogress(auth()->guard('admin')->user()->id)}}</h3>



              <p>{{trans('admin.AmountsInprogress')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=neworder" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>
        <!-- ./col -->

       
         <div class="col-lg-6 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{Withdrawable(auth()->guard('admin')->user()->id)}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.Withdrawable')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="https://www.xpremo.com/admin/OrderShareWithAllVendor?status=Received" class="small-box-footer">{{trans('admin.more')}}  <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

      
      </div>


      <div class="row">

          <div class="col-lg-12 col-sm-12 col-xs-12">

              <div class="box box-primary">

            <div class="box-header">

              <h4 class="box-title"> {{trans('admin.OSBDP')}} <i class="fa fa-search"></i></h4>

            </div>

            <div class="box-body">
        


   <table class="table">
  <thead>
    <tr>
   
      <th scope="col"> الرابيط </th>
      <th scope="col">تاريخ  البداية </th>
      <th scope="col"> تايخ  الانتهاء </th>
      <th scope="col">  الوقت المتبقي   </th>
      <th scope="col">  مده  الرابط </th>
    </tr>
  </thead>
  <tbody>

                    @foreach(App\affilaiateLinks::where('adminID',auth()->guard('admin')->user()->id)->orderBy('id','desc')->get() as $links )

    <tr>
      
      <td> <h4>  <a href="{{url('/')}}/{{ $links->link }}" target="_balnk"> {{url('/')}}/{{ $links->link }}  </a>  </h4></td>
      <td>{{ $links->created_at }} </td>
      <td>  {!! $links->created_at->addDays(7) !!} </td>

      <td>


 @php
$today = \Carbon\Carbon::now();

        $difference = $today->diffInDays($links->created_at->addDays(7), false);
 @endphp

{{ $difference }}   يوم 


       </td>


      <td>  اسبوع</td>
    </tr>
           @endforeach
  
    
  </tbody>
</table>




             


        

          

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

           

         </div>

      </div>



         

         

      @include('Admin.layouts.message');





    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



  @endsection

  