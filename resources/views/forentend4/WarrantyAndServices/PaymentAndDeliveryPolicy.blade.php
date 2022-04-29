   @extends('forentend4.index')



@section('content')



 <div class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}/"> {{ trans('admin.Home') }}</a></li>

        <li><a href="{{url('/')}}/PaymentAndDeliveryPolicy">{{ trans('admin.PaymentAndDeliveryPolicy') }}</a></li>

      </ul>

  <div class="row">

                <div id="content" class="col-sm-12 item-article">

    

      <div class="page_warranity">

    <!--div class="title-box">

        <h1 class="text-left text-uppercase title-under">Warranty and services</h1>

    </div-->

    <h3 class="color title-decimal font30" data-content="1">

             {{trans('admin.PaymentAndDeliveryPolicy')}}...
</h3>

     @if(session('lang')=='ar')
                                
 {!! $PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_ar !!}

@endif

  @if(session('lang')=='en')

 {!! $PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_en !!}

@endif  
       
        <br>

         <div class="image-about-us">

        <img src="{{Storage::url($PaymentAndDeliveryPolicy->photo)}}" 
                 data-src="{{Storage::url($PaymentAndDeliveryPolicy->photo)}}" alt="Image Client">
             </div>
        <br>
</div>



    </div>

    </div>

</div>





@endsection

