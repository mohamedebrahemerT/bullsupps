  <!-- notify bootstrap-->
    <script src="{{url('/')}}/assets/js/bootstrap-notify.min.js"></script>
             <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>     
  <script type="text/javascript">
      $(document).on('click','#QuickView',function(){
              var text =$(this).text();
              text=text.toString();
                    var id= text;
        $.ajax({
            url:"{{url('/QuickView')}}",
            method:"POST",
           data :{
            _token:'{{ csrf_token() }}',
            id:text,

           },
            dataType:"json",
            beforeSend:function(){
                      
                      
            },
            success:function(data)
            {
                
   $('.exampleModal_title').html(data.title);
   $('.exampleModal_price_detail').html(data.exampleModal_price_detail);
   $('.color_variant').html(data.color_variant);
   $('.content').html(data.content);
   $('.productbuttons').html(data.productbuttons);
   $('.sizebox').html(data.sizebox);
   $('.quick_view_img').html(data.quick_view_img);


     document.getElementById('test1').click();
  // $('#test1')[0].click();
            }
        });
             return false;
    
                    
                     
                    });
  </script>







  <script type="text/javascript">
      $(document).on('click','#add_to_cart',function(){
              var text =$(this).text();
              text=text.toString();
                    var id= text;

                        
        $.ajax({
            url:"{{url('/addToCart')}}",
            method:"POST",
           data :{
            _token:'{{ csrf_token() }}',
            id:id,
            qty:1,

           },
            dataType:"json",
            beforeSend:function(){
                      
                 $('.cart_sucess').html('');      
            },
            success:function(data)
            {
                $('.cart_sucess').html(data.success);  


$.notify("{{__('product added to cart')}}", "success");


            $('#cartEffect').text("{{__('Data add to cart')}}");
           
             
                $('.cart_count').html(data.count);
               $('.homesubtotal').html(data.total);

             $('.cart_listhide').hide();
             $('.cart_listhide').html('');
               
               $('.Cartcontent').html(data.Cartcontent);
             




                }
        });
             return false;
    
                 
    
                    
                     
                    });
  </script>



   <script type="text/javascript">
      $(document).on('click','#add_to_Wishlist',function(){
              var text =$(this).text();
              text=text.toString();
                    var id= text;

            
        $.ajax({
            url:"{{ url('/') }}/add_wishlist_new",
            method:"POST",
          data :{
            _token:'{{ csrf_token() }}',
            id:id,
          

           },
            dataType:"json",
            beforeSend:function(){
                      $('.cart_sucess').html('');
            },
            success:function(data)
            {
             
             $('.cart_sucess').html(data.success);  
   
$.notify("The product has been saved to my favorites!", "success");

            }
        });
             return false;
    
                    
                     
                    });
  </script>

 

  <script type="text/javascript">

      $(document).on('click','#Removeshop',function(){


 

              var text =$(this).text();
              text=text.toString();
 
          $(this).closest("tr").hide();
              var tr = $(this).closest('div.cart-table-row');
                          tr.fadeOut(1000, function(){ // **addd this
                            $(this).remove();
                        });
           
  
var iib = text;
 
       $("#b"+iib).hide();
            

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
            
   $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.homesubtotal').html(data.total);
   $('.tax').html(data.tax);
   $('.cart_count').html(data.count);



            }

        });

             return false;

    

                    

                     

                    });

  </script>

 @yield('javascript')