 
 @extends('forentend3.index')

@section('content')

   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   

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


    

    <div class="products-section my-orders container">
        <div class="sidebar">

            <ul class="ordermenue">
              <li><a href="{{url('/')}}/my-profile">{{trans('admin.MyProfile')}}</a></li>
              <li class="active"><a href="{{ route('orders.index') }}">{{trans('admin.MyOrders')}}</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">{{trans('admin.MyOrders')}}</h1>
            </div>

            <div>
            
                <div class="order-container">
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
                                <div>|</div>
                                <div><a href="#">{{trans('admin.Invoice')}}</a></div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="order-products">
                        @foreach ($products as $product)
                            <div class="order-product-item">
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
                    </div>
                
               
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection

 
