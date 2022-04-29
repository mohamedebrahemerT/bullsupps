   @extends('forentend4.index')



@section('content')



 <div class="container">

<ul class="breadcrumb">

        <li><a href="{{url('/')}}/"> {{ trans('admin.Home') }}</a></li>

        <li><a href="{{url('/')}}/PurchaseAndDeliveryPolicy">{{ trans('admin.PurchaseAndDeliveryPolicy') }}</a></li>

      </ul>

  <div class="row">

                <div id="content" class="col-sm-12 item-article">

    

      <div class="page_warranity">

    <!--div class="title-box">

        <h1 class="text-left text-uppercase title-under">Warranty and services</h1>

    </div-->

    <h3 class="color title-decimal font30" data-content="1">

             {{trans('admin.PurchaseAndDeliveryPolicy')}}
</h3>

 @if(session('lang')=='ar')
                                
    {!! $PurchaseAndDeliveryPolicy->PurchaseAndDeliveryPolicy_name_ar !!}

@endif

  @if(session('lang')=='en')

    {!! $PurchaseAndDeliveryPolicy->PurchaseAndDeliveryPolicy_name_en !!}

@endif 
            
        
     
        
        <br>

         <div class="image-about-us">

        <img src="{{Storage::url($PurchaseAndDeliveryPolicy->photo)}}" 
                 data-src="{{Storage::url($PurchaseAndDeliveryPolicy->photo)}}" alt="Image Client">
             </div>
        <br>
</div>



    </div>

    </div>

</div>





@endsection

