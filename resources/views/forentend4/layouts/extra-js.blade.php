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


 


            $('#cartEffect').text("{{__('Data add to cart')}}");
           
             
                $('.cart_count').html(data.count);
               $('.homesubtotal').html(data.total);

             $('.cart_listhide').hide();
             $('.cart_listhide').html('');
             $('.cart_listhide2').html('');
               
               $('.Cartcontent2').html(data.Cartcontent2);
               $('.Cartcontent').html(data.Cartcontent);
             

$('.js-menu-toggle').trigger('click');


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
   
//$.notify("The product has been saved to my favorites!", "success");

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
       $("#b2"+iib).hide();
            

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
   $('.subtotal').html(data.subtotal);
   $('.homesubtotal').html(data.total);
   $('.tax').html(data.tax);
   $('.cart_count').html(data.count);



            }

        });

             return false;

    

                    

                     

                    });

  </script>



 <script type="text/javascript">
      $(document).on('click','#cartEffect2',function(){

       

     var produt_id  = $(this).attr("data-produt-id");

      var frm= $("#frm"+produt_id).serialize() ;
      
         
        
            
         $.ajax({
            url:"{{ url('/') }}/addToCart",
            method:"POST",
           data :frm,
            dataType:"json",
            beforeSend:function(){
                      $('.cart_sucess').html('');
            },
            success:function(data)
            {
             
             $('.cart_sucess').html(data.success);  


//$.notify("{{__('product added to cart')}}", "success");


           // $('#cartEffect').text("{{__('Data add to cart')}}");
           
             
                $('.cart_count').html(data.count);
               $('.homesubtotal').html(data.total);

             $('.cart_listhide').html('');
             $('.cart_listhide2').html('');
               
               $('.Cartcontent2').html(data.Cartcontent2);
               $('.Cartcontent').html(data.Cartcontent);
             

$('.js-menu-toggle').trigger('click');
             
   
             

            }
        });
             return false;
    
    
                    
                     
                    });
  </script>


  <script type="text/javascript">
    $('.product_color_switch span,.product_size_switch span')
    .on("click", function() {
        $(this).siblings(this).removeClass('active').end().addClass('active');

 
 
var arr = [] //create arry
     $(".product_size_switch span.active").each(function() {
  arr.push($(this).attr('data-attribute_value_id')) //push value in array
})

       

     var produt_id  = $(this).attr("data-attribute_value-produt-id");

   

      if (produt_id == null) 
      {

 

         $('input[name="attribute_value_ids_Filter"]').val(arr);
      var From_data=$('#Filter_form').serialize();


    $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });


    return 0 
      }

      else
      {
   
    document.getElementById("attribute_value_ids"+produt_id).value = arr;
        
      }

        
   

  
    });
      
  </script>



 @yield('javascript')