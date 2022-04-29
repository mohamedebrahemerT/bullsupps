 

 @extends('forentend4.index')



@section('content')



   

 



    <div class="container">

        @if (session()->has('success_message'))

            <div class="alert alert-success">

                {{ session()->get('success_message') }}

            </div>

        @endif



        @if(count($errors) > 0)

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

    </div>



<div class="breadcrumbs ">

    <div class="container">

        <div class="current-name">    

        </div>

        <ul class="breadcrumb">

              <li><a href="{{url('/')}}/my-profile">{{trans('admin.MyProfile')}}</a></li>

              <li class="active"><a href="{{ route('orders.index') }}">{{trans('admin.MyOrders')}}</a></li>

        </ul>

    </div>

</div>

    



    <div class="products-section my-orders container">

        

        <div class="my-profile">

            <div class="products-header">

                <h1 class="stylish-heading">{{trans('admin.MyOrders')}}</h1>

            </div>



            <div>

            

                <div class="order-container" style="background-color: #fff;

border: 2px solid #000;

margin-right: 1%;

padding: 2%;

height: 450px;

">

                    <div class="order-header">

                        

                        <div class="order-header-items">

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderPlaced')}}</div>

                                <div>{{ presentDate($order->created_at) }}</div>

                            </div>

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderID')}}</div>

                                <div>{{ $order->id }}</div>

                            </div><div>

                                <div class="uppercase font-bold">{{trans('admin.Total')}}</div>

                                <div>{{ presentPrice($order->billing_total) }}</div>

                            </div>

                        </div>

                        <div>

                            <div class="order-header-items">

                                <div><a href="{{ route('orders.show', $order->id) }}">{{trans('admin.OrderDetails')}}</a></div>

                                

                   

                            </div>

                        </div>

                    </div>

                     

                    <div class="order-products">

                        @foreach ($products as $product)

                            <div class="order-product-item col-sm-2">

                                <div>

                        <img src="{{Storage::url($product->photo)}}" alt="Product Image" width="100" height="100"></div>

                                <div>

                                    <div>

         <a href="{{url('/')}}//shop/{{$product->id}}">{{ $product->name }}</a>

                                    </div>

                                    <div>{{ presentPrice($product->price) }}</div>

                                    <div>Quantity: {{ $product->pivot->quantity }}</div>

                                </div>

                            </div>

                        @endforeach



                    </div>

                                        <!-- Button trigger modal -->
<a  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  {{trans('admin.returning')}}
</a>



 

 


<!-- Button trigger modal -->
<a  class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
 {{trans('admin.openticket')}}  
</a>





                    </div>




@php

$status=App\OrderShareWithAllVendor::where('order_id',$order->id)->first()->status;
$ReasonForReturn=App\OrderShareWithAllVendor::where('order_id',$order->id)->first()->ReasonForReturn;
$openticket=App\OrderShareWithAllVendor::where('order_id',$order->id)->first()->openticket;



@endphp

 <br>
 {{trans('admin.product status')}}  
  :



<span style="font-size:15px; " class="label

 {{$status=='neworder'?'label-primary' :'' }}

 {{$status=='waitshiping'?'label-info' :'' }}

  {{$status=='shipped'?'label-success' :'' }}
  {{$status=='returned'?'label-success' :'' }}
  {{$status=='Received'?'label-success' :'' }}



">

   @if($status == 'neworder')
 {{trans('admin.New order')}}
 

   @endif

      @if($status == 'waitshiping')
 {{trans('admin.Waiting for shipment')}}
      

   @endif


      @if($status == 'shipped')
 {{trans('admin.charged')}}
   

   @endif


      @if($status == 'returned')
 {{trans('admin.return')}}
    

   @endif


      @if($status == 'Received')
 {{trans('admin.The recipient')}}

  

   @endif



 </span>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 @if($status == 'returned' )
 {{trans('admin.Reason for return')}}



 :   {{$ReasonForReturn}}

 @endif


  <br>
  <br>
  <br>
 

 @if($status == 'returned' )
 {{trans('admin.product complaint')}}



 :   {{$openticket}}

 @endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">      {{trans('admin.areusureuwanttoreturn')}}      </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
         

          <form method="post" action="{{url('/')}}/returningOrder">

            @csrf

            <input type="hidden" name="orderID" value="{{$order->id}}">

            <label>{{trans('admin.couseofreturn')}}</label>

          <textarea name="ReasonForReturn" class="form-control">
              
          </textarea>
              
   

                  
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.no')}}</button>



        <button type="submit" class="btn btn-primary">{{trans('admin.yes')}}</button>

      </div>
       </form>


    </div>
  </div>
</div>

                

               

            </div>



            <div class="spacer"></div>

        </div>

    </div>

<br>

<br>

<br>

<br>




<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> 

{{trans('admin.Complaints')}}
             </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form method="post" action="{{url('/')}}/openticket">

            @csrf

            <input type="hidden" name="orderID" value="{{$order->id}}">

            <label>{{trans('admin.Do you want to open a complaint for this product?')}} </label>

          <textarea name="openticket" class="form-control">
              
          </textarea>
              
   

                  
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.no')}}</button>



        <button type="submit" class="btn btn-primary">{{trans('admin.yes')}}</button>

      </div>
       </form>
      </div>
      
    </div>
  </div>
</div>

@endsection



 

