@extends('forentend4.index')



@section('content')


 @section('javascript')
 
 

       



<script type="text/javascript">

  

         @if (!session()->has('ceapon'))



           $('#AC').removeClass('hidden');

          

         @endif

</script>





    <script src="{{ asset('js/jquery.min.js') }}"></script>

 



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

 

  
     
<script type="text/javascript">
    $("#quantity").bind("change   keyup", function() {

     var rowId  = $(this).attr("data-id");

          var  qty=$(this).val();


      $.ajax({
            url:"{{url('/cartquantity')}}",
            method:"POST",
           data :{
          _token:'{{ csrf_token() }}',
            id:rowId,
            qty:qty,
          

           },
            dataType:"json",
            beforeSend:function(){
          
 $('.cart_sucess').html('');

            },
            success:function(data)
            {
               $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.tax').html(data.tax);


               
  document.getElementById(data.totIDS).innerHTML = data.totprice;
 // document.getElementById('qty'+data.totIDS).innerHTML = data.qty;
   $('.cart_sucess').html(data.success);  
        

            }
        });
             return false;
    


});

</script>



  <script type="text/javascript">
   

       $(document).on('click','#plusservicesselected',function(){
              
        
 
     var rowId  = $(this).attr("data-id");


        $.ajax({
            url:"{{url('/plusservices')}}",
            method:"POST",
           data :{
          _token:'{{ csrf_token() }}',
            id:rowId,
          

           },
            dataType:"json",
            beforeSend:function(){
          
 $('.cart_sucess').html('');

            },
            success:function(data)
            {
               $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.tax').html(data.tax);


               
  document.getElementById(data.totIDS).innerHTML = data.totprice;
 // document.getElementById('qty'+data.totIDS).innerHTML = data.qty;
   $('.cart_sucess').html(data.success);  
        

            }
        });
             return false;
    
                    
                     
                    });

  </script>


       <script type="text/javascript">
   

       $(document).on('click','#minusservicesselected',function(){
              
     var rowId  = $(this).attr("data-id");

     
        $.ajax({
            url:"{{url('/minusservices')}}",
            method:"POST",
           data :{
          _token:'{{ csrf_token() }}',
            id:rowId,
          

           },
            dataType:"json",
            beforeSend:function(){
          
 $('.cart_sucess').html('');

            },
            success:function(data)
            {
             $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.tax').html(data.tax);


               
  document.getElementById(data.totIDS).innerHTML = data.totprice;
  //document.getElementById('qty'+data.totIDS).innerHTML = data.qty;
         $('.cart_sucess').html(data.success); 

            }
        });
             return false;
    
                    
                     
                    });

  </script>


            <!---------------endselected------------------------------>



<script type="text/javascript">
  
         @if (!session()->has('ceapon'))

           $('#AC').removeClass('hidden');
          
         @endif
</script>

  <script type="text/javascript">
      $(document).on('click','#apply_coupon',function(){

    
    var coupon_code =$('#code').val();

    
        $.ajax({
            url:"{{url('/apply_coupon')}}",
            method:"POST",
           data :{
            _token:'{{ csrf_token() }}',
            coupon_code:coupon_code,

           },
            dataType:"json",
            beforeSend:function(){
                      $('.cart_sucess').html('');
                      $('.cc').addClass('hidden');
                  $('.loading-save-c').removeClass('hidden');

                 $('.cart_sucessCoupon').html(''); 

                      
            },
            success:function(data)
            {
                   


             
             $('.cart_sucessCoupon').html(data.success); 
          


        $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.tax').html(data.tax);
 


            }
        });
             return false;
    
                    
                     
                    });
  </script>




      
@endsection
                


 
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Shopping Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->


    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="custom-container">

                <div class="row">
                    <div class="col-lg-8 mb-4">

                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">

                            <div class="heading_s1 pb-3 underline">
                                <h5 class="">Your Order</h5>
                            </div>
                            <div class="table-responsive shop_cart_table">
                               
   <!--span class="cart_sucess"></span -->

                @if (session()->has('success_message'))

                    <div class="alert alert-success cc">

                        {{ session()->get('success_message') }}

                    </div>

                @endif

                                      @if (Cart::count() > 0)


                                <table class=" table-fill">

                                    <tbody class="table-hover cart">
                @foreach (Cart::content() as $item)

                                        <tr class="noborder">
                                            <td class="product-thumbnail">
                                                <a href="{{url('/')}}/shop/{{ $item->model->id}}"><img src="{{Storage::url($item->model->photo)}}" alt="product1"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="{{url('/')}}/shop/{{ $item->model->id}}">
                                                @if(session('lang')=='ar')

   {{ $item->model->title_name_ar }}



   @endif



   @if(session('lang')=='en')

   {{ $item->model->title_name_en }}



    @endif
 
@isset($item->options)
 {{$item->options}}
@endif
   
     

 
     
 
                                            </a>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
             <input type="button" value="-" class="minus"  
    id="minusservicesselected" data-id="{{$item->rowId}}">
    <input type="text" name="quantity" value="{{$item->qty}}" title="Qty" class="qty" size="4" id="quantity" data-id="{{$item->rowId}}">
         <input type="button" value="+" class="plus" id="plusservicesselected" data-id="{{$item->rowId}}">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
           <span id="{{$item->rowId}}"> AED  {{$item->subtotal}}</span>
                                            </td>
                                            <td class="product-remove" data-title="Remove">

                                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" id="dellshop">
                           
                       <span>
                           
                                                     {{ csrf_field() }}
                         
    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
    
<a class="cart-options" id="Removeshop"><span class="hidden">{{ $item->rowId }}</span> <i class="ti-close"></i></a>
                

                            </form>


                       

                    </td>
                                        </tr>
                @endforeach
                                        
                                    </tbody>

                                </table>

                                  @else
          <h3> {{__('No items in Cart!')}}</h3>
            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">
                            <div class="heading_s1 mb-3">
                                <h5>Add Promo Code</h5>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                        <form action="#" method="post">

                                        <div class="form-row">

                                            <div class="form-group col-lg-12 mb-3">
    <input required="required" placeholder="Add Promo Code" class="form-control" name="code" type="text" id="code" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-12 mb-3">
                         <!--span class="cart_sucessCoupon"></span -->
                                                <button id="apply_coupon"  class="btn btn-primary" type="submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="heading_s1 mb-3">
                                <h6>Order Summary</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody class="">
                                        <tr class="noborder">
                                            <td class="cart_total_label">Subtotal</td>
                                            <td class="cart_total_amount subtotal">AED {{Cart::Subtotal()  }} </td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label">Shipping Fee</td>
                                            <td class="cart_total_amount">Free Shipping</td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label">Total<span class="text_gray float-end"> (Inclusive  of VAT)</span></td>
                                            <td class="cart_total_amount total"><strong>AED {{Cart::Total()  }} </strong></td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label "><span class="text_gray">Estimate VAT</span>
                                            </td>
                                            <td class="cart_total_amount text_gray">
                                                <span class="text_gray tax">AED {{ Cart::tax() }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="d-grid gap-2">
                  
                 <a href="{{url('/')}}/Checkout" class="btn btn-primary m-0" type="button">
                    Proceed To CheckOut</a>
                 

                
                                        <a href="{{url('/')}}/shop" class="btn btn-secondary m-0" type="button">Continue Shopping</a>
                                        

                                    </div>

                                </div>
                            </div>




                            <!-- <a href="#" class="btn btn-primary">Proceed To CheckOut</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->

@endsection





 

