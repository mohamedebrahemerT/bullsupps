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

        (function(){

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



    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->

    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>

    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

    <script src="{{ asset('js/algolia.js') }}"></script>

    @endpush









<div id="checkout-cart" class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}">

            {{trans('admin.Home')}}

    </a></li>

        <li>

            <a href="{{url('/')}}/wishlist">   {{trans('admin.wishlist')}}</a></li>

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

                       <td>{{trans('admin.operation')}}  </td>

                <td class="text-right" style="text-align: center;"> {{trans('admin.unitprice')}} </td>



                <td class="text-right" style="text-align: center;">{{trans('admin.Total')}} </td>

              </tr>

            </thead>

            <tbody>

                @foreach (Cart::instance('saveForLater')->content() as $item)

            

                        <tr>

              <td class="text-center">

               <a href="{{url('/')}}/shop/{{ $item->model->id}}">



                <?php if(session('SRC'.$item->model->id)) {?>



                <img src="{{url('/')}}/images/{{session('SRC'.$item->model->id)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail"  style="width:47px;height:47px" />



              <?php   }  else {?>

               

                 <img src="{{Storage::url($item->model->photo)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail" style="width:47px;height:47px" />





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

                               </td>

        

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

                           

                       <span>

                           

                                                     {{ csrf_field() }}

                         

                <input type="hidden" name="rowId" value="{{ $item->rowId }}">

<a class="cart-options" id="Removesavforlater"><span class="hidden">{{ $item->rowId }}</span>Remove</a>

                



                            </form>



                            <form action="#" method="POST">

                           

                       <span>

                           

                                                     {{ csrf_field() }}

                         

                <input type="hidden" name="rowId" value="{{ $item->rowId }}">

<a class="cart-options" id="switchToCart"><span class="hidden">{{ $item->rowId }}

</span>Move to Cart</a>

                



                            </form>

          </td>

              <td class="text-right" style="text-align: center;">

     

                <?php if(session('price'.$item->model->id)) {?>

                   {{session('price'.$item->model->id)}} {{trans('admin.pound')}} 



                      <?php   }  else {?>

           {{ $item->model->price }}  {{trans('admin.pound')}}  

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

         
      

      

      </div>

    </div>

</div>



<br>

<br>

 

@endsection





 

