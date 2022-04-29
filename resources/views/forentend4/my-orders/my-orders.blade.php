

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





    



    <div class="products-section my-orders container" style="max-width:1177px;">

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

    

        <div class="my-profile">

            <div class="products-header">

                <h1 class="stylish-heading">{{trans('admin.MyOrders')}}</h1>

            </div>



            <div>

                @foreach ($orders as $order) 

                <div class="order-container col-sm-12" style="background-color: #fff;

border: 2px solid #000;

margin-right: 1%;

padding: 2%;

">

                    <div class="order-header">

                        

                        <div class="order-header-items">

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderPlaced')}} </div>

                                <div>{{ presentDate($order->created_at) }}</div>

                            </div>

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderID')}} </div>

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

                        @foreach ($order->products as $product)

                            <div class="order-product-item col-sm-3">

                                <div>

                        <img src="{{Storage::url($product->photo)}}" alt="Product Image" width="100" height="100"></div>

                                <div>

                                    <div>

         <a href="{{url('/')}}//shop/{{$product->id}}">{{ $product->name }}</a>

                                    </div>

                                    <div>{{ presentPrice($product->price) }}</div>

                                    <div>{{trans('admin.Quantity')}}: {{ $product->pivot->quantity }}</div>

                                </div>

                            </div>

                        @endforeach



                    </div>

                </div> <!-- end order-container -->



                <br>

                <br>

                @endforeach

            </div>



            <div class="spacer"></div>

        </div>

    </div>

<br>

<br>

<br>

<br>





@endsection



 

