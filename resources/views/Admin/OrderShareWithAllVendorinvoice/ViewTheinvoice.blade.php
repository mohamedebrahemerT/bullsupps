

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
  text-align: left;    
}
</style>
 @endpush

  
 
 
<table style="width:100% ;direction:rtl; text-align:left;">

 <tr  > 
  <td  >

    <h4>
      
    Shipping Address
    </h4>

    
               @php

            $user_addresses_id  =$order->address_id;

         if(App\Models\user_addresses::
              where('id',$user_addresses_id)
              ->first())
                                            {
             $user_address=App\Models\user_addresses::
             where('id',$user_addresses_id)
              ->first();  
                                            }
          
                                            @endphp

                                           Name: 
                                       {{$user_address->Name}}<br>
                                                            
                                      {{$user_address->address}} 
                                      <br>
                                        
                                      Mobile Number:
                                                       
                                    {{$user_address->Mobile}} 
                                                  
        
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

     {{$user_address->additional_info}}
                                        




  </td>    </tr>
  
   <tr>     

    <td> 

 

           {{trans('admin.payment_gateway')}}   :{{$order->payment_gateway}}    <br>
   </td> </tr>
   
    <tr>  

      <td>
        
            <strong>billing_name </strong>    : {{$order->billing_name}}  <br>


        
                             @php 
                            $User= App\user::where('id',$order->user_id )->first();
                            @endphp
           {{$User->phone}}
:
             {{trans('admin.phone')}}
                       
            <br>

        {{trans('admin.email')}}    :   {{$order->billing_email}}<br>

              



      </td>


       </tr>
    
</table>

 

  <table  style="width:100% ">

      <caption style="text-align: center;">     Purchasing information </caption>

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

                
            00 {{trans('admin.pound')}}

         

                  



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

