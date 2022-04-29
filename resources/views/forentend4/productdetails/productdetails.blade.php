    @extends('forentend4.index')



@section('content')

        

   @push('js')



        <script type="text/javascript">

           $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

          $(document).on('click','#button-checkout',function()

  {

                  alert('alymarket');

  }

        </script>







   <script type="text/javascript">



      $(document).on('click','.product-section-thumbnail2',function(){




                      var text =$(this).text();

               sessionStorage.setItem("old", text);



            var old = sessionStorage.getItem("old");


  

                        $('.bbb').css('border-color', '#ddd');



    $('a.thumbnail.active').css('border-color', 'red');

                        



              text=text.toString();    

        $.ajax({



            url:"{{ url('changePriceDependOncolors') }}",



            method:"POST",



           data :{



            _token:'{{ csrf_token() }}',



            id:text,







           },



            dataType:"html",



            beforeSend:function(){



            },



            success:function(data)



            {

               
            
            
       $('.size_and_weight_cc').html(data);
           

             



            }



        });



          $.ajax({



            url:"{{ url('changePriceDependOncolors2') }}",



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

               
            
 
            
               $('#zzzzzzzzzzzzz').addClass('hidden');
             
                   document.getElementById("zzzzzzzzzzzzz2").style.display = "block"; 



             $('.cart_sucess').html(data.success+" {{trans('admin.pound')}}");




 



            

             $('.price_offer').html(data.price_offer);



             $('.content_name_ar').html(data.content_name_ar);



             $('.admin_id').html(data.admin_id);



             $('.alymarketcode').html(data.alymarketcode);



             $('.department_id').html(data.department_id);



                  $('#zzzzzzzzzzzzz').addClass('hidden');

             

             $('.price_size').html(data.colorprice +"{{trans('admin.pound')}}");

                 

                   document.getElementById("ccccccc").style.display = "block"; 


             $('.price_size').html(data.colorprice);





                  $('.price').val(data.success);



                  $('.sizes').val(data.sizeType);

                     

                       




             



            }



        });




             return false;



    



                    



                     



                    });



  </script>







<style type="text/css">


img
{
    max-width: 100%;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #fff;
}

  a.thumbnail:hover {

    border-color:   blue !important;

}

 
@media(max-width:992px){
 .wrapper{
  width:100%;
} 
}
.panel-heading {
  padding: 0;
    border:0;
}
.panel-title>a, .panel-title>a:active{
    display:block;
    padding:15px;
  color:#555;
  font-size:16px;
  font-weight:bold;
    text-transform:uppercase;
    letter-spacing:1px;
  word-spacing:3px;
    text-decoration:none;
}
 
.panel-heading.active a:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    transform: rotate(180deg);
} 

</style>



   <script type="text/javascript">

      $(document).on('click','#sizes',function(){







                      var text =$(this).text();







              text=text.toString();   







               $(".backgroundmenucard").removeClass("backgroundmenucard");



     $(this).addClass("backgroundmenucard");



                 $('.cccc').css('border-color', '#ddd');



    $('a.thumbnail.active').css('border-color', 'red');



var text = parseInt(text, 10); 



      



        $.ajax({



            url:"{{ url('changePriceDependOnsize') }}",



            method:"POST",



           data :{



            _token:'{{ csrf_token() }}',



            id:text,







           },



            dataType:"json",



            beforeSend:function(){



                      



                         $('.cc').addClass('hidden');



                         $('.CF').addClass('hidden');











            }, 



            success:function(data)



            {



               $('#zzzzzzzzzzzzz').addClass('hidden');
             
                   document.getElementById("zzzzzzzzzzzzz2").style.display = "block"; 



             $('.cart_sucess').html(data.success+" {{trans('admin.pound')}}");





            



             $('.productName').html(data.productName);



        



            

             $('.price_offer').html(data.price_offer);



             $('.content_name_ar').html(data.content_name_ar);



             $('.admin_id').html(data.admin_id);



             $('.alymarketcode').html(data.alymarketcode);



             $('.department_id').html(data.department_id);



                  $('#zzzzzzzzzzzzz').addClass('hidden');

             

             $('.price_size').html(data.success +"{{trans('admin.pound')}}");

                 

                   document.getElementById("ccccccc").style.display = "block"; 


             $('.price_size').html(data.success);





                  $('.price').val(data.success);



                  $('.sizes').val(data.sizeType);

                     

                       





            }



        });



             return false;



    



                    



                     



                    });



  </script>























<style type="text/css">

  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info

  {

  margin-right: 130px;

  }



  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {

  width: 120px;

  float: right;

}



a.thumbnail.active, a.thumbnail:focus, a.thumbnail:hover {

    border-color: red;

}



</style>





   <script type="text/javascript">

             



      $(document).on('click','#switchToSaveForLaterHome',function(){



                      var tr = $(this).closest('tr');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });

                  



                      var text =$(this).text();



              text=text.toString();



      

         

            

        $.ajax({

            url:"{{ url('switchToSaveForLaterHome') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

                id:'{{$product->id}}',



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

             







             $('.cart_sucess').html(data.success);

             $('.productName').html(data.productName);

             $('.productimage').html(data.productimage);

             $('.productprice').html(data.productprice);

             $('.price_offer').html(data.price_offer);

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);

                  

  $('#previewModal').modal('show'); 

        $('#previewModal .modal-body').load('index.php?route=extension/soconfig/cart/info&product_id='+ 75);





               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>





 <script type="text/javascript">

             

  





      $(document).on('click','#button-cart',function(){



                      var tr = $(this).closest('tr');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });

                  



                      var text =$(this).text();



              text=text.toString();



      

         

            

        $.ajax({

            url:"{{url('/')}}/addToCart",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:'{{$product->id}}',



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

      

             $('.cart_sucess').html(data.success);

             $('.productName').html(data.productName);

          

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);

             $('.qty').html(data.qty);

 





  $('#previewModal').modal('show'); 

        $('#previewModal .modal-body').load('index.php?route=extension/soconfig/cart/info&product_id='+ 75);





               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>







 





</style>



@endpush

 



 

<div class="breadcrumbs ">

  <div class="container">

       <div class="current-name">   

                          

                  

              

                

           @if(session('lang')=='ar')

{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif  


            

              </div>

      <ul class="breadcrumb">

                <li><a href="{{url('/')}}">{{trans('admin.home2')}}</a></li>

          <li><a href="{{url('/')}}/shop?id={{$product->department_id}}">

              @if(session('lang') == 'ar')

            {{$product->department_name->dep_name_ar}}

            @endif

              @if(session('lang') == 'en')

            {{$product->department_name->dep_name_en}}

            @endif

          </a></li>

                <li><a href="{{url('/')}}/shop/{{$product->id}}">



                 @if(session('lang')=='ar')

{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif

              </a></li>

              </ul>

    </div>

</div>



 


 
<div class="content-main container product-detail  "   >


 
  <div class="row">

    
 

      

                                       @if($product->stock  > 0)

    <div id="content" class="product-view col-md-12 col-sm-12 col-xs-12 fluid-sidebar"> 

    @else
    <div id="content" class="product-view col-md-9 col-sm-12 col-xs-12 fluid-sidebar" style="background-color: #f3ca90"> 

    @endif

                      
 

      <div class="sidebar-overlay "></div>

    



    <div class="content-product-mainheader clearfix"> 

      <div class="row"> 

            <div class="content-product-left  col-md-5 col-sm-12 col-xs-12" >

                  <div class="so-loadeding" ></div>

<div class="large-image  " >

  <img  class="product-image-zoom lazyload" data-sizes="auto" src="{{Storage::url($product->photo)}}" data-src="{{Storage::url($product->photo)}}" data-zoom-image="{{Storage::url($product->photo)}}" title="{{$product->title_name_ar}}" alt="{{$product->title_name_ar}}"  style=" max-width: 100%;
    max-height: 100%;" />
</div>





<div id="thumb-slider" class="full_slider  contentslider" data-rtl="yes" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10"  data-items_column0="5" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="3" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">



       <div class="image-additional">

    <a data-index="0" class="img thumbnail " data-image="{{Storage::url($product->photo)}}" title="Corem ipsum dolor">

      <img class="lazyload" data-sizes="auto" src="{{Storage::url($product->photo)}}" data-src="{{Storage::url($product->photo)}}" title="Corem ipsum dolor" alt="Corem ipsum dolor"   style="height:50px;width: 50px"  />

    </a>

    </div>



       

<script type="text/javascript"><!--

  $(document).ready(function() {

    var zoomCollection = '.large-image img';

    $( zoomCollection ).elevateZoom({

      //value zoomType (window,inner,lens)

            zoomType        : "inner",

            lensSize    :'250',

      easing:false,

      scrollZoom : true,

      gallery:'thumb-slider',

      cursor: 'pointer',

      galleryActiveClass: "active",

    });

    $(zoomCollection).bind('touchstart', function(){

        $(zoomCollection).unbind('touchmove');

    });

    

        $('.large-image img').magnificPopup({

      items: [],

      gallery: { enabled: true, preload: [0,2] },

      type: 'image',

      mainClass: 'mfp-fade',

      callbacks: {

        open: function() {

                      var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));

                    var magnificPopup = $.magnificPopup.instance;

          magnificPopup.goTo(activeIndex);

        }

      }



    });

      });

//--></script>



       

     

     

    

            @foreach($filess as $file)



      <div class="image-additional">

    <a data-index="1" class="img thumbnail " data-image="{{Storage::url($file->full_file)}}" title="Corem ipsum dolor">

      <img class="lazyload" data-sizes="auto" src="{{Storage::url($file->full_file)}}" data-src="{{Storage::url($file->full_file)}}" title="Corem ipsum dolor" alt="Corem ipsum dolor"  style="height:50px;width: 50px" />

    </a>

    </div>



                      @endforeach





    </ul>

</div>


 
                        </div>

          

            <div class="content-product-right col-md-7 col-sm-12 col-xs-12"  >



        <div class="title-product">

             <h1  class="namesadasdads">

                 @if(session('lang')=='ar')

{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif



 <a href="{{url('/')}}/wishlist/{{$product->id}}">
       <img   class="float-ar-en"  src="{{url('/')}}/forentend4/img/heart.png">
</a>


             </h1>
<h5>    360 chochatte</h5>
          </div>

        

                            <div class="box-review"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">

                        
 

          

                          

                      

          </div>

          

                            <div class="product_page_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                          <span class="price-new">

                <span itemprop="price" content="" id="price-old">

                    <div class="price" id="zzzzzzzzzzzzz2" style="display: none;">

                                          

      <span style="float: right; font-size: 25px"> 

    
           <span class="price_size"></span> 

     </span>

     </div>                 

 
 <div class="price  " id="zzzzzzzzzzzzz">

                                          

      <span style="float: right; font-size: 25px"> 

    
             @if($product->price_offer  > 0)   
        {{$product->price_offer }}  {{trans('admin.pound')}}  
            @endif

     </span>


&nbsp;&nbsp;

         @if($product->price_offer  > 0)
         <span style="text-decoration: line-through;

font-size: 17px;

 

color: #c0aec3;

 ">

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>

              @endif                    


         @if($product->price_offer  == 0)
                <span  >

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>
              @endif                    

                            

                                                        </div>

                               

                            

                            </span>

                <meta itemprop="priceCurrency" content="" />

              </span>



                        

             



            

                           

          </div>

                    

 


            <div id="product">  

     
 


    <div class="size_and_weight_cc">
  </div>


<input  type="hidden"   name="price" class="price">



 <input type="hidden"   name="color" class="color">



  <input type="hidden"   name="sizes"   class="sizes">



  <input type="hidden"   name="PID"   value="{{$product->id}}">



  <input type="hidden"   name="SRC" class="SRC">

     

 

    </ul>

</div>

 

               

                    

            

                        

                    

          <div class="box-cart clearfix form-group">

                        

            <div class="form-group box-info-product">



             <div style="display: flex;">
                  <div class="option quantity">
 



                <div class="input-group quantity-control">


                    <span class="input-group-addon product_quantity_down fa fa-minus">

                      

                    </span>

                    

                    <input class="form-control" type="text" name="quantity" value="1" />

                    <input type="hidden" name="product_id" value="101" />                 

                    <span class="input-group-addon product_quantity_up fa fa-plus"></span>

 

              </div>

                      </div>
  <span style="background: #52B788;
flex: none;
margin: 0px 5px;
  margin-top: 0px;
margin-top: 0px;
margin-top: 0px;
width: 2px;
height: 4px;
padding: 5px;
border-radius: 92%;
top: 3px;
margin-top: 10px;"></span>
{{trans('admin.In Stock')}}
 
              
             </div>

      
                    @if($product->stock > 0 )

              <div class="detail-action">
                                <div class="cart">
                  <input type="button" value="{{trans('admin.AddtoCart')}}" data-loading-text="جاري ..." id="button-cart"  
                  class="AddtoCartAddtoCart" 
 >

       

         

         </a>
                </div>

              @else
                      <h1 style="    color: red;
    border: 1px solid #000;
    padding: 6px;
    text-align: center;
    background: border-box;"> تم  نفاذ الكمية</h1>
              @endif
   
 

            </div>

<div class="wrapper center-block">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading  " role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/pro.png">  {{trans('admin.Product Description')}}
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        @if(session('lang')=='ar')
{!! $product->content_name_ar !!}
@endif
  @if(session('lang')=='en')
{!! $product->content_name_ar !!} 
@endif
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="fa fa-angle-double-down"></i><img src="{{url('/')}}/forentend4/img/Ingridients.png">  {{trans('admin.Ingridients')}}  
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/pro.png">  {{ trans('admin.Naturation Values') }}
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</div>


            <div class="clearfix"></div>

                      </div>



                    <!-- Go to www.addthis.com/dashboard to customize your tools -->

          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>

          
 


          

        </div>

      </div>







            </div>

    </div>


<div class="row">


<div class="clearfix module related-horizontal ">

  <h3 class="InsideBox"> 
<img src="{{url('/')}}/forentend4/img/insidebox.png">
    <span>{{trans('admin.What’s Inside the Box')}}  </span></h3>

  

    <div style="margin-top:1%;"  class="related-products products-list  contentslider" data-rtl="yes" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30"  data-items_column0="4" data-items_column1="3" data-items_column2="3"

      data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

    <!-- Products list -->

                  @foreach($ProductFromSamCats  as $Most)

            <div class="product-layout product-grid">

          <div class="product-item-container">

          <div class="left-block">                    

                            

              <div class="square"  >

                          <a href="{{url('/')}}/shop/{{$Most->id}}" target="_self" 

                        title=" @if(session('lang')=='ar')



        {{$Most->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$Most->title_name_en }} 

@endif"  >

                  

                 <img data-sizes="auto" src="{{Storage::url($Most->photo)}}" 
                 data-src="{{Storage::url($Most->photo)}}" alt=" @if(session('lang')=='ar')



        {{$Most->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$Most->title_name_en }} 

@endif"     
style="max-width: 100%;
    max-height: 100%;">

                    

                </a>            

              </div>

              

            <div class="box-label">

                                        </div>



             

              <div class="button-group so-quickview cartinfo--left">

                 

                

                    <a href="{{url('/')}}/cart/{{$Most->id}}" type="button" class="addToCart btn-button" title="اضافة للسلة" ><i class="fa fa-shopping-basket"></i><span>اضافة للسلة </span></a>

                            

                 

                 

                <a href="{{url('/')}}/wishlist/{{$Most->id}}"  type="button" class="wishlist btn-button" title="إضافة لرغباتي"  ><i class="fa fa-heart"></i><span>إضافة لرغباتي</span>
                </a>

                 

              



              

                

              </div>

             

          </div>

     
<div class="jsx-564649128 detailsContainer" style="    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
">

   
  @php

 if(session('lang') == 'ar')
{
       $strlen=$product->title_name_ar;
}

elseif(session('lang') == 'en')
{
   $strlen=$product->title_name_en ;
}
 

    
       @endphp

       

       @if($strlen  < 50)

         <div class="jsx-564649128 name" style="min-height: 32px; margin-bottom: 22px;
">
    <div class="prodycttitle">
      <span class="prodycttitle">
 @if(session('lang') == 'ar')
        {{ str_limit($Most->title_name_ar, $limit = 50, $end = '...') }}  
@elseif(session('lang') == 'en')
        {{ str_limit($Most->title_name_en, $limit = 50, $end = '...') }}  

@endif
 
      </span>
    </div>
  </div>

       @else


  <div class="jsx-564649128 name" style="min-height: 32px; margin-bottom: 4px;
">
    <div style="overflow: hidden;">
      <span class="prodycttitle">

        {{ str_limit($Most->title_name_ar, $limit = 40, $end = '...') }}   
 
      </span>
    </div>
  </div>

  @endif

  

 
        </div>
            
 


        </div>


            </div>

      

       

          

          

          @endforeach

      

    </div>

  

</div>


    
</div>
           
 
  <div class="row" style="margin-bottom: 6%;">
               
               <h4  class="Recommendations">
                                     {{ trans('admin.Recommendations') }}
                                 </h4>
 
      @foreach(App\product::take(4)->get() as  $product)
        <div class="col-sm-3">
           <div class="Component00">
            
            
                  


<div class="heartrelative">

    <a href="{{url('/')}}/shop/{{$product->id}}">
 <img src="{{Storage::url($product->photo)}}" class="img-fluid">
 </a>

  <div class="heartabsolute">
    <a href="{{url('/')}}/wishlist/{{$product->id}}">
       <img     src="{{url('/')}}/forentend4/img/heart.png">
</a>


  </div>
</div>   
         
             

               <h3  class="prodycttitle">
<a href="{{url('/')}}/shop/{{$product->id}}">


 @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
</a>

</h3>

<span class="pfgsl">{{$product->price}} {{trans('admin.pound')}}</span>

<span class="productseccart"   >
<a href="{{url('/')}}/cart/{{$product->id}}">
<img src="{{url('/')}}/forentend4/img/cart.png">
</a>
</span>
         </div>
             
  
        </div>


        @endforeach
                  </div>

      



 <div class="row">
            
              <h6  class="OurAdvantage">
                                     {{ trans('admin.Our Advantages') }}
                                 </h6>


                 @foreach(App\Objectives::take(3)->get() as  $Objectives)
                                 <div class="OurAdvantageFrame132">
                                    <img src="{{Storage::url($Objectives->photo)}}">
                                   
                                       <h3 class="OurAdvantageFrame132txt">
                   @if(session('lang')=='ar')
                                
{!! $Objectives->title_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! $Objectives->title_name_en !!} 

@endif  
                  </h3>
                               <p class="OurAdvantageFrame132pp">
                            @if(session('lang')=='ar')

{!! $Objectives->Objectives_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! $Objectives->Objectives_name_en !!} 

@endif  


                                
                            </p>
                                 </div>
                                 @endforeach

                                  
               
           </div>  


    </div>

         

     </div>

</div>

 



@endsection

