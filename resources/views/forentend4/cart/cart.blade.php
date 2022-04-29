@extends('forentend4.index')



@section('content')



                 @push('js')

 





<script type="text/javascript">

  

         @if (!session()->has('ceapon'))



           $('#AC').removeClass('hidden');

          

         @endif

</script>





    <script src="{{ asset('js/jquery.min.js') }}"></script>

 

  <script type="text/javascript">

      $(document).on('click','#Removeshop',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

                  

            

        $.ajax({

            url:"{{ route('cart.destroy') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:text,



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                       

                      $('.cc').addClass('hidden');

                     

                

                      

            },

            success:function(data)

            {

             

             $('.cart_sucess').html(data.success);  



            }

        });

             return false;

    

                    

                     

                    });

  </script>



  <script type="text/javascript">

      $(document).on('click','#saveForLater',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

      

         

            

        $.ajax({

            url:"{{ url('switchToSaveForLater') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:text,



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

             

             $('.cart_sucess').html(data.success);  



            }

        });

             return false;

    

                    

                     

                    });

  </script>

    

  <script type="text/javascript">

      $(document).on('click','#Removesavforlater',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

            

        $.ajax({

            url:"{{ route('cart.Deletelater') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:text,



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

             

             $('.cart_sucess').html(data.success);  



            }

        });

             return false;

    

                    

                     

                    });

  </script>





    <script type="text/javascript">

      $(document).on('click','#switchToCart',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

            

        $.ajax({

            url:"{{ url('switchToCart') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:text,



           },

            dataType:"html",

            beforeSend:function(){

                      $('.cart_sucess').html('');

            },

            success:function(data)

            {

             

             $('.cart_sucess').html(data.success);  



            }

        });

             return false;

    

                    

                     

                    });

  </script>

   <script type="text/javascript">

      $(document).on('click','#Apply',function(){



                  

                  var coupon=$('#coupon_code').val();



               

       

        $.ajax({

            url:"{{ route('coupon.store') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            coupon_code:coupon,



           },

            dataType:"json",

            beforeSend:function(){

                      $('#coupon_sucess').html('');

                   $('.RemoveCO').html('');



            },

            success:function(data)

            {

             

            $('#coupon_sucess').html(data.success);

             $('#DC10').html(data.DC10);

           $('#cheeckHaveCoupon').addClass('hidden');

           $('#coupon_code').val('');



             

        

            }

        });

             return false;

    

                    

                     

                    });

  </script>



    <script type="text/javascript">

      $(document).on('click','#Remove_coupon',function(){

       

        $.ajax({

            url:"{{ route('coupon.destroy') }}",

            method:"delete",

           data :{

            _token:'{{ csrf_token() }}',

            

           },

            dataType:"html",

            beforeSend:function(){

                   $('.RemoveCO').html('');

                      $('#coupon_sucess').html('');



            },

            success:function(data)

            {

                

                X="'<div class='alert alert-danger'>coupon has been removed!</div>'";

           $('.RemoveCO').html(data);

           $('#EFC').addClass('hidden');

           $('#FVV').addClass('hidden');



           $('#AC').removeClass('hidden');

           $('#cheeckHaveCoupon').removeClass('hidden');





           



           

           

         





            }

        });

             return false;

    

                    

                     

                    });

  </script>



  

  



</script>



    <script src="{{ asset('js/app.js') }}"></script>

    <script>

        (function()
        {

            const classname = document.querySelectorAll('.quantity')



            Array.from(classname).forEach(function(element) {

                element.addEventListener('change', function() {

                    const id = element.getAttribute('data-id')

                    const productQuantity = element.getAttribute('data-productQuantity')

                     

                    axios.post(`{{ url('/cart/update')}}/${id}`, {

                        quantity: this.value,

                        productQuantity: productQuantity

                    })



                   

                    .then(function (response) {

                      //  console.log(response);

                        window.location.href = '{{ route('cart.index') }}'

                    })

                    .catch(function (error) {

                       //console.log(error);

                      window.location.href = '{{ route('cart.index') }}'

                    });

                })

            })

        })();

    </script>

 

  

    @endpush









<div id="checkout-cart" class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}">

            {{trans('admin.Home')}}

    </a></li>

        <li>

            <a href="{{url('/')}}/cart">{{trans('admin.cart')}}</a></li>

      </ul>

    

                                                                                 

                              

    <div class="row">

                <div id="content" class="col-sm-12">

     


          <span class="cart_sucess"></span>

            @if (session()->has('success_message'))

                <div class="alert alert-success cc">

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

      <form action="{{url('/')}}/cart/edit" method="post" enctype="multipart/form-data">

        <div class="table-responsive">

          <table class="table table-bordered" 
           @if(session('lang') == 'ar') style="direction: rtl !important;" @endif >

            <thead>

              <tr>

                <td class="text-center">{{trans('admin.picture')}}</td>

                <td class="text-left">{{trans('admin.name')}}</td>

       

                <td class="text-left">{{trans('admin.Quantity')}} </td>

                       <td>{{trans('admin.operation')}}</td>

                <td class="text-right" style="text-align: center;"> {{trans('admin.unitprice')}} </td>



                <td class="text-right" style="text-align: center;">{{trans('admin.Total')}} </td>

              </tr>

            </thead>

            <tbody>

                @foreach (Cart::content() as $item)

            

                        <tr>

              <td class="text-center">

               <a href="{{url('/')}}/shop/{{ $item->model->id}}">



                <?php if(session('SRC'.$item->model->id)) {?>



                <img src="{{url('/')}}/{{session('SRC'.$item->model->id)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail"  style="width:47px;height:47px" />



              <?php   }  else {?>

               

                 <img src="{{Storage::url($item->model->photo)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail" style=" height:100px" />





               <?php  } ?>





            </a> 

            </td>

              <td class="text-left">

                <a href="{{url('/')}}/shop/{{ $item->model->id}}">



               @if(session('lang')=='ar')

   {{ $item->model->title_name_ar }}



   @endif



   @if(session('lang')=='en')

   {{ $item->model->title_name_en }}



    @endif



          </a>                                  <br />

                <small>

         



            </small>                 </td>

       

              <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">



                  <div class="input-group quantity-control">

  <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">

                                @for ($i = 1; $i < 5 + 1 ; $i++)

                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>

                                @endfor

                            </select>

&nbsp;

&nbsp;

 



   

          

                       











                </div>



                @push('js')

                <style type="text/css">

     .quantity-control {

    position: relative;

    border: 1px solid #d6d6d6;

    border-radius: 0px;

}



.quantity-control span {

    width: 33px;

    height: 32px;

    border: none;

    color: #999;

    float: left;

    line-height: 32px;

    padding: 0;

    background-color: #f9f9f9;

    border-radius: 0px;

}



 .quantity-control input.form-control {

    float: left;

    width: 40px;

    height: 32px;

    line-height: 32px;

    padding: 0;

    text-align: center;

    font-size: 16px;

    background-color: #fff;

    border-left: 1px solid #d6d6d6;

    border-right: 1px solid #d6d6d6;

}

                </style>

                @endpush

&nbsp;



                  



                  <!--button type="submit" data-toggle="tooltip" title="{{trans('admin.Updatequantity')}}" class="btn btn-primary"><i class="fa fa-refresh">

                      

                  </i>

              </button -->



                 

                 

              </div>

                 



          </td>



          <td>

        

               <form action="#" method="POST">

                                {{ csrf_field() }}                  

        <a class="cart-options" id="saveForLater"><span class="hidden">{{ $item->rowId }}</span>Save for Later </a>

                            </form>





                              <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" id="dellshop">

                           

                       <span>

                           

                                                     {{ csrf_field() }}

                         

                <input type="hidden" name="rowId" value="{{ $item->rowId }}">

<a class="cart-options" id="Removeshop"><span class="hidden">{{ $item->rowId }}</span>Remove</a>

                



                            </form>

          </td>

              <td class="text-right" style="text-align: center;">

     

                <?php if(session('price'.$item->model->id)) {?>

                   {{session('price'.$item->model->id)}} {{trans('admin.pound')}} 



                      <?php   }  else {?>


         @if($item->model->price_offer  > 0)

           {{ $item->model->price_offer }}  {{trans('admin.pound')}}  
            @else
            
           {{ $item->model->price }}  {{trans('admin.pound')}}  

            @endif




                              <?php  } ?>

              

               



          </td>

              <td class="text-right" style="text-align: center;">

               {{$item->subtotal}} {{trans('admin.pound')}}

          </td>

            </tr>

          @endforeach







                                      </tbody>

            

          </table>

        </div>

      </form>

            <!--h2>

               {{trans('admin.Cartoptions')}}

             



         </h2>

      <p>{{trans('admin.Cartoptions2')}}

  </p>

      <div class="panel-group" id="accordion">         <div class="panel panel-default">

  

  <div id="collapse-shipping" class="panel-collapse collapse">

    <div class="panel-body">

      <p>

       {{trans('admin.Expectedshipping2')}}



       



  </p>

      <div class="form-horizontal">

        

     

       

        <button type="button" id="button-quote" data-loading-text="جاري ..." class="btn btn-primary">

      {{trans('admin.update')}} 



    </button>

      </div>



    </div>

  </div>

</div>



                <div class="panel panel-default">

  <div class="panel-heading">

    <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">

      {{trans('admin.Usegiftvouchers')}} 

       

 



     <i class="fa fa-caret-down"></i></a></h4>

  </div>

  <div id="collapse-voucher" class="panel-collapse collapse">

    <div class="panel-body">

      <label class="col-sm-2 control-label" for="input-voucher">

      {{trans('admin.Pleaseenterthegiftvouchercode')}} 

   </label>

   
@if(session()->has('success') )
  <div class="alert alert-success">

    {{session('success')}}
    
  </div>
@endif


   
@if(session()->has('danger') )
  <div class="alert alert-danger">

    {{session('danger')}}
    
  </div>
@endif

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('coupon.store') }}" method="POST">
                        {{ csrf_field() }}

      <div class="input-group">

        <input type="text" name="coupon_code" value="" placeholder=" {{trans('admin.Pleaseenterthegiftvouchercode')}}" id="input-voucher" class="form-control" />

        <span class="input-group-btn">

        <input type="submit" value="أرسل"   data-loading-text="جاري ..."  class="btn btn-primary" />

        </span> </div>

                    </form>


     

    </div>

  </div>

</div>



         </div -->

       <br />

      <div class="row">

        <div class="col-sm-4 col-sm-offset-8">

          <table class="table table-bordered" 
           @if(session('lang') == 'ar') style="direction: rtl !important;" @endif>

                        <tr>

              <td class="text-right"><strong>{{trans('admin.totol')}}  ..</strong></td>

              <td class="text-right">{{Cart::Total()}} {{trans('admin.pound')}}</td>

            </tr>

                        <!--tr>

              <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>

              <td class="text-right">$2.00</td>

            </tr -->

                        <tr>

              <td class="text-right"><strong>{{trans('admin.shipingprice')}} :</strong></td>

              <td class="text-right">
                        @if( auth()->guard('web')->user())
       
                          @php

                          if(  auth()->user()->country_id  and  auth()->user()->city_id )
                          {

                      
              $city_id=App\cities::where('id',auth()->user()->city_id )->first()->id;
                    }

                    if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                    {

                         $zone_id=App\statDistrebutionToZones::where('city_id',$city_id)->first()->zone_id;

              $zoneprice=App\zones::where('id',$zone_id)->first()->price;

                    }

           

                 


                 @endphp

                 @if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                

                {{$zoneprice}}
             {{trans('admin.pound')}}

            
           @else
               @php
$zoneprice = DB::table('zones')->max('price');


               @endphp

                         {{$zoneprice}}
             {{trans('admin.pound')}}

           @endif

   
                

           @endif


           </td>
            

            </tr>

            @php
          $vat_value=0;
  foreach (Cart::content() as $item)
  { 
     if($item->model->vat == 1)
     {
          $vat_value=$vat_value + $item->model->vat_value; 

     }
   }
@endphp
           @isset($vat_value)
               <tr>

              <td class="text-right"><strong>    {{trans('admin.vat')}}  </strong></td>
              <td class="text-right">{{$vat_value}} {{trans('admin.pound')}}</td>
           

            
            </tr>
            @endisset

                        <tr>

              <td class="text-right"><strong>{{trans('admin.Final')}}</strong></td>

              @php
              $zoneprice=0;
              $vat_value=0;
              @endphp

              @if(auth()->guard('web')->user())

              <td class="text-right">{{Cart::Total() +      $zoneprice + $vat_value  }} {{trans('admin.pound')}}</td>
           @else
              <td class="text-right">{{Cart::Total()  }} {{trans('admin.pound')}}</td>

           @endif



            
            </tr>
 

    




   @if(session('cpn'))


               <tr>

              <td class="text-right"><strong> مجموع العربيه بعد الخصم هو  </strong></td>
              <td class="text-right">{{session('newsubtotalcpn')}} {{trans('admin.pound')}}</td>
           

            
            </tr>
     @endif
                      </table>

        </div>

      </div>

      <div class="buttons clearfix">

        <div class="pull-left"><a href="{{url('/')}}/shop" class="btn btn-default">{{trans('admin.continushoping')}}</a></div>

        <div class="pull-right">

            <a href="{{url('/')}}/Checkout" class="btn btn-primary">{{trans('admin.payment')}} </a></div>

      </div>

      </div>

    </div>

</div>



<br>

<br>

 

@endsection





 

