

@extends('Admin.index')

@section('content')

   <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
 
 
    <section class="invoice">

 @push('js')
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
 @endpush

  
 
 
<table style="width:100% ;direction:ltr;">

 <tr  > 
  <td  >

    <h4>
      
      عنوان الشحن
    </h4>

    @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address1')


                @if(App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first())
  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first()->countries_name_ar  }}

          @endif
 

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

           @if( App\states::where('id',App\user::where('id',$order->user_id)->first()->stat_id2 )->first())
                  المركز : {{ App\states::where('id',App\user::where('id',$order->user_id)->first()->stat_id2 )->first()->states_name_ar  }}
           @endif

   
           <br>

          {{trans('admin.MoreDetailsAboutYourAddress')}}:  : {{ App\user::where('id',$order->user_id)->first()->MoreDetailsAboutYourAddress2 }}

          @endif

        
   </td> 


   <td >
     <b> {{trans('admin.Invoice')}} {{$order->Invoice}}</b><br>

          <br>

          <b> {{trans('admin.OrderID')}}:</b>{{$order->id}}<br>

          <b>{{trans('admin.PaymentDue')}}:</b> {{$order->PaymentDue}}<br>
          <b>{{trans('admin.billing_total')}}:</b> 
          @if($order->payment_gateway == ' الدفع عند الاستلام  ')
          {{$order->billing_total}}.00   {{trans('admin.pound')}} <br>

          @else
           {{$order->billing_subtotal + 30 }}.00   {{trans('admin.pound')}} <br>

          @endif




   </td> </tr>
 
  <tr> <td rowspan="3">

       @if( App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first()) 
    
     @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address1')
  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id )->first()->countries_name_ar  }}

   @endif
        
   @if(App\user::where('id',$order->user_id)->first()->shapingplace     == 'address2')


  الدولة     :{{ App\countries::where('id',App\user::where('id',$order->user_id)->first()->country_id2 )->first()->countries_name_ar  }}

   @endif


   @endif




  </td>    </tr>
  
   <tr>     

    <td> 

 

           {{trans('admin.payment_gateway')}}   :{{$order->payment_gateway}}    <br>
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

 

  <table  style="width:100% ">

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

             <table  style="width: 100%">

              <tr>

                <th  style="width:50% ; text-align: left;">{{trans('admin.billing_subtotal')}}:</th>

                <td>{{$order->billing_subtotal}}.00 {{trans('admin.pound')}} </td>

              </tr>

             

              <tr>

                <th style="text-align: left;">{{trans('admin.Shipping')}}:</th>
            @if(auth()->guard('admin')->user()->level ==  'admin')

                <td>

                 @if($order->payment_gateway == ' الدفع عند الاستلام  ')
         {{TotalAfterShipingPriceadmin($order->user_id)}} {{trans('admin.pound')}}

          @else
            30 {{trans('admin.pound')}}

          @endif

                  



                </td>
                    @endif

              </tr>

              <tr>

                <th style="text-align: left;">{{trans('admin.billing_total')}}:</th>

                <td>
                   @if($order->payment_gateway == ' الدفع عند الاستلام  ')
          {{$order->billing_total}}.00 {{trans('admin.pound')}}

          @else
             {{$order->billing_subtotal + 30 }}.00 {{trans('admin.pound')}}

          @endif
                 
                </td>

              </tr>

            </table>

        <a href="{{url('/')}}/admin/ViewTheinvoiceprint/{{$id}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>{{trans('admin.Print')}} </a>


    </section>

    <!-- /.content -->

    <div class="clearfix"></div>

  </div>



  @endsection

