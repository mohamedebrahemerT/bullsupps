 @include('forentend3.layouts.header')

@include('forentend3.layouts.navbar')

@include('forentend3.layouts.menue')

@include('forentend3.layouts.message')

 


@push('js')




<script type="text/javascript">
   $(window).scroll(function()
{
      $('#zoomContainer').hide();
      $('.zoomContainer').hide();
});
</script>
  



<script type="text/javascript">




  $(document).scroll(function() {





              var span =$(".subP");

    div = $(".mainP");

    spanHeight = span.outerHeight(),

    divHeight = div.height(),

    spanOffset = span.offset().top + spanHeight,

    divOffset = div.offset().top + divHeight;



  if (spanOffset >= divOffset) {

    span.addClass('bottomP');

    var windowScroll = $(window).scrollTop() + $(window).height() - 50;

    if (spanOffset > windowScroll) {

      span.removeClass('bottomP');

    }

  }

});

</script>

  

<style type="text/css">




  .owl-item
  {
    width:50px
  }

  .addBorder

  {

    border:2px solid red;

  }



  .addBorder2

  {

    border:1px solid red;

    padding:5px;

  }

</style>



<script> 

var vid = document.getElementById("myVideo"); 



function playVid() { 

  

  vid.play(); 
  $('#myVideo').show();
$("#ProductPhotoImg").css("display", "none");

                       $("#pplay").css("display", "none");
                       $(".hid").css("display", "none");
                   
                        $("#pplay").hide();
                        $(".hid").hide();




} 



function pauseVid() { 

  vid.pause(); 





} 

</script> 

 



<style type="text/css">

  

.products-section {

  display: grid;

  grid-template-columns: 1fr 3fr;

  margin: 80px auto 80px;

}



.products-section .sidebar li.active {

  font-weight: 500;

}



.products-section .products {

  display: grid;

  grid-template-columns: 1fr 1fr 1fr;

  grid-gap: 60px 30px;

}



.products-section .products .product-price {

  color: #919191;

}



.products-header {

  display: -webkit-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-box-pack: justify;

      -ms-flex-pack: justify;

          justify-content: space-between;

}



.product-section {

  display: grid;

  grid-template-columns: 1fr 1fr;

  grid-gap: 120px;

  padding: 20px 0 120px;

}



.product-section .selected {

  border: 1px solid blue;

}



.product-section-images {

     display: block ruby;

    margin-top: -43px;

    margin-left: -4px;



}



.product-section-images2 {

 display: block ruby;

 margin-left:-113px;

}



.product-section-thumbnail {

  display: -webkit-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-box-align: center;

      -ms-flex-align: center;

          align-items: center;

  border: 1px solid lightgray;

  min-height: 54px;

  cursor: pointer;

            width:54px;

            height:54px;

}



.product-section-thumbnail:hover {

  border: 1px solid red;

}





.product-section-thumbnail2 {

   min-height: 54px;







}



.product-section-thumbnail2:hover {

  border: 2px solid red;

}





.product-section-thumbnail3 {

  display: -webkit-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-box-align: center;

      -ms-flex-align: center;

          align-items: center;

  border: 1px solid lightgray;

  min-height: 54px;

  cursor: pointer;

            width:54px;

            height:54px;

}



.product-section-thumbnail3:hover {

  border: 1px solid red;

}





.product-section-image {

   display: -webkit-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-box-pack: center;

  -ms-flex-pack: center;

  justify-content: center;

  -webkit-box-align: center;

  -ms-flex-align: center;

  align-items: center;

  text-align: center;

  height: 400px;

  border-radius: 10px;

  width: 400px;

 

 

}



.product-section-image img {

  opacity: 0;

  -webkit-transition: opacity .10s ease-in-out;

  transition: opacity .10s ease-in-out;

  max-height: 100%;

 





}



.product-section-image img.active {

  opacity: 1;

}



.product-section-information p {

  margin-bottom: 16px;

}



.product-section-title {

  margin-bottom: 0;

}



.product-section-subtitle {

  font-size: 20px;

  font-weight: bold;

  color: #919191;

}



.product-section-price {

  font-size: 38px;

  color: #212121;

  margin-bottom: 16px;

}





.active2

{

  border: 3px solid red;



 



}

</style>



  

 



     <script>

        (function(){

            const currentImage = document.querySelector('#currentImage');

            const images = document.querySelectorAll('.product-section-thumbnail');



            images.forEach((element) => element.addEventListener('mouseover', thumbnailClick));
            function thumbnailClick(e) {

                currentImage.classList.remove('active');

                currentImage.classList.remove('zoomImg');

                



                currentImage.addEventListener('transitionend', () => {

                    currentImage.src = this.querySelector('img').src;

             

                    currentImage.classList.add('active');

                   

                   
 $('.hid').hide();
      $('#pplay').hide();
      
            

 
       
                    $("#myVideo").css("display", "none");
var vid = document.getElementById("myVideo"); 

  vid.pause(); 

                    

                    $("#myVideo").css("display", "none");

           



                    a =  this.querySelector('img').src

    img = $("#currentImage")

    img.attr("src", a );

    img.magnify()





                     





                })



                images.forEach((element) => element.classList.remove('selected'));

                this.classList.add('selected');

            }



        })();

    </script>





    <script>

        (function(){

            const currentImage = document.querySelector('#ProductPhotoImg');

            const images = document.querySelectorAll('.product-section-thumbnail2');



            images.forEach((element) => element.addEventListener('click', thumbnailClick));

   
                 


            function thumbnailClick(e) {


                      
                    currentImage.src = this.querySelector('img').src;
                    
        $("#ProductPhotoImg").attr("src", this.querySelector('img').src);
        $("#ProductPhotoImg").attr("data-image-id",2212112);
        $("#ProductPhotoImg").attr("data-image-zoom",this.querySelector('img').src);      
  $("#ProductPhotoImg").data('zoom-image', this.querySelector('img').src).elevateZoom();

                       $("#pplay").css("display", "none");
                    $("#myVideo").css("display", "none");
                $("#ProductPhotoImg").css("display", "block");

   

                        
                images.forEach((element) => element.classList.remove('selected'));

                this.classList.add('selected');

            }



        })();

    </script>


<script>
function bigImg() {


 
              fimage = '{{Storage::url($product->photo)}}';
   $("#ProductPhotoImg").attr("src", fimage);
        $("#ProductPhotoImg").attr("data-image-id",2212112);
           $('.zoomContainer').hide();
  

                       $("#pplay").css("display", "block");
                       $("#pplay").css("margin-left", "185px");
      $('.hid').show();
      $('.pplay').show();



   
}
</script>


     <script>

        (function(){

            const currentImage = document.querySelector('#currentImage');

            const images = document.querySelectorAll('.product-section-thumbnail3');



            images.forEach((element) => element.addEventListener('mouseover', thumbnailClick));



            function thumbnailClick(e) {

                currentImage.classList.remove('active');



                currentImage.addEventListener('transitionend', () => {

                    currentImage.src = this.querySelector('img').src;

                    currentImage.classList.add('active');

                   

                  $('#pplay').show();



                    

               



                  



                    

                })



                images.forEach((element) => element.classList.remove('selected'));

                this.classList.add('selected');

            }



        })();

    </script>


    <script type="text/javascript">

 

        
 $(function(){
   bigImg();
});
      

   
    </script>

@endpush







@push('js')



   

   <script type="text/javascript">

             



      $(document).on('click','#sizes',function(){



                      var text =$(this).text();



              text=text.toString();   



               $(".backgroundmenucard").removeClass("backgroundmenucard");

     $(this).addClass("backgroundmenucard");





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

             

             $('.cart_sucess').html(data.success);

            

  $('.productName').html(data.productName);

             $('.productimage').html(data.productimage);

             $('.productprice').html(data.productprice);

             $('.price_offer').html(data.price_offer);

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);

              $('.CF').addClass('hidden');

              $('.price').val(data.success);

              $('.sizes').val(data.sizeType);



            }

        });

             return false;

    

                    

                     

                    });

  </script>











  

   <script type="text/javascript">

             



      $(document).on('click','.product-section-thumbnail2',function(){



                      var text =$(this).text();



                   

                   

                     $(".addBorder").removeClass();

                        $(this).addClass("addBorder"); 



                        



              text=text.toString();    

            

        $.ajax({

            url:"{{ url('changePriceDependOncolors') }}",

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

             

             $('.color').val(data.success);

             $('.SRC').val(data.SRC);

              

           



            }

        });

             return false;

    

                    

                     

                    });

  </script>



 











<style type="text/css">

	/* Create four equal columns that floats next to each other */

.column {

  float: left;

  width: 16.66%;



 

}





.sp {

  float: left;

  

  

}



/* Clear floats after the columns */

.row:after {

  content: "";

  display: table;

  clear: both;

}

</style>







<style>

.icon-bar {

  position: fixed;

  top: 50%;

  -webkit-transform: translateY(-50%);

  -ms-transform: translateY(-50%);

  transform: translateY(-50%);

}



.icon-bar a {

       display: block;

    text-align: center;

    padding-right: 12px;

    transition: all 0.3s ease;

    color: white;

    font-size: 5px;

    margin-top: 3px;

    text-align: center;

    margin-left: 4px;

    padding-left: 10px;



}



.icon-bar a:hover {

  background-color: #000;

}



.facebook {

  background: #3B5998;

  color: white;



}



.twitter {

  background: #55ACEE;

  color: white;

}



.google {

  background: #dd4b39;

  color: white;

}



.linkedin {

  background: #007bb5;

  color: white;

}



.youtube {

  background: #bb0000;

  color: white;

}



.content {

  margin-left: 75px;

  font-size: 30px;

}

</style>









   <script type="text/javascript">

             



      $(document).on('click','#switchToSaveForLaterHome',function(){



                     

                  



                     

                 

              id={{$product->id}};



      

         

            

        $.ajax({

            url:"{{ url('switchToSaveForLaterHome') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:id,



           },

            dataType:"json",

            beforeSend:function(){

                      

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

             







             $('.cart_sucess2').html(data.success);

             $('.productName').html(data.productName);

             $('.productimage').html(data.productimage);

             $('.productprice').html(data.productprice);

             $('.price_offer').html(data.price_offer);

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);













               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>





 

@endpush



      





@section('content')



<div class="icon-bar">

  <a href="#" class="facebook" style="font-size:20px;"><i class="fa fa-facebook"></i></a> 

  <a href="#" class="twitter" style="font-size:20px;"><i class="fa fa-twitter"></i></a> 

  <a href="#" class="google" style="font-size:20px;"><i class="fa fa-google"></i></a> 

  <a href="#" class="linkedin" style="font-size:20px;"><i class="fa fa-linkedin"></i></a>

  <a href="#" class="youtube" style="font-size:20px;"><i class="fa fa-youtube"></i></a> 

</div>





         @if(session('lang')=='ar')

             @include('forentend3.productdetails.productdetailsAR')



               @endif



               @if(session('lang')=='en')

             @include('forentend3.productdetails.productdetailsEN')



               @endif

 



								<div class="text-right button-backtocol">

									<a href="/collections/flash-sale" class="return-link">

					{{trans('admin.BacktoFlashSale')}}



										

									</a>

								</div>



							 

		 

											 

  



                  @if(session('lang') == 'en')

								<div class="grid grid__item product-information" style="background-color:#fff;margin-left: 34px; width: 1162px;">

                      @endif



                       @if(session('lang') == 'ar')

                <div class="grid grid__item product-information" style="background-color: #fff;

width: 86%;

margin-left: 211px;">

                      @endif





 <div style="display:inline-flex;"> 





                   <div style="    width: 16%;

    margin-left: 4px;



">

                  @if(session('lang') == 'en')

                   <div class="grid__item large--one-quarter" style="width:180px">

                      @endif



                      @if(session('lang') == 'ar')

                   <div class="grid__item large--one-quarter" style="width: 183px;padding: 6px;">

                      @endif





                  <div class="group_sidebar">

                    <div class="sb-wrapper link-collections-wrapper clearfix" data-animate="" data-delay="0">

                      <h6 class="sb-title no-icon">

                        <span style="font-size:13px;">{{trans('admin.RelatedCategories')}} </span>

                      </h6>

                      <ul class="list-unstyled sb-content all-collections list-styled">



                        @foreach($RelatedCategories as $RelatedCategory )

                        <li class="site-nav__item site-nav__expanded-item ">

                <a href="{{url('/')}}/shop?id={{$RelatedCategory->id}}" class="site-nav__link" target="_blank">

                            <span>

                              @if(session('lang') == 'ar')

                              {{$RelatedCategory->dep_name_ar}}

                              @endif



                              @if(session('lang') == 'en')

                              {{$RelatedCategory->dep_name_en}}

                              @endif

                            </span>

                          </a>

                        </li>



                        @endforeach

                        

                      </ul>



                        <div class="" data-animate="" data-delay="0">

                      <h6 class="sb-title no-icon">

                        <span>{{trans('admin.Shopby')}}</span>

                      </h6>

                      <div class="shop-by-content" id="tags-filter-content">



                        <div class="filter-tag-group maginttop" >



                      



                          <div class="tag-group color-tags" id="coll-filter-1">

                            <p class="title cfc1 open" data-toggle="collapse" data-target="#cfc1">

                            &nbsp;  {{trans('admin.Colors')}}

                              

                              <span class="ficon">

                                <i class="fa fa-minus"></i>

                              </span>

                            </p>

                            <ul id="cfc1" class="collapse in">

                              <li class="swatch-tag ">

                                <span style="background-color:#FF0000" class="btooltip" data-toggle="tooltip" data-placement="top" title="Red">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Red')}} </span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#0000FF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Blue">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Blue')}} </span>

                              </li>

                              <li class="swatch-tag  white-color">

                                <span style="background-color:#FFFFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="White">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.White')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#FFFF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Yellow">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Yellow')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#00FFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Aqua">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Aqua')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#00FF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Lime">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Lime')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#800080" class="btooltip" data-toggle="tooltip" data-placement="top" title="Purple">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Purple')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#C0C0C0" class="btooltip" data-toggle="tooltip" data-placement="top" title="Silver">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                  </a>

                                </span>

                                <span class="color-text">{{trans('admin.Silver')}}</span>

                              </li>

                              <li class="swatch-tag ">

                                <span style="background-color:#FFA500" class="btooltip" data-toggle="tooltip" data-placement="top" title="Orange">

                                  <a href="#">

                                    <span class"checkbox"=""></span>

                                </a>

                                </span>

                                <span class="color-text">{{trans('admin.Orange')}}</span>

                              </li>

                            </ul>

                          </div>

                          <div class="tag-group " id="coll-filter-2">

                          

                            <ul id="cfc2" class="collapse in">

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Vintage')}} 

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Bohemian')}}  

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Chic')}}  

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Artsy')}}  

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Sexy')}} 

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Casual')}}  

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span>{{trans('admin.Tomboy')}}   

                                </a>

                              </li>

                            </ul>

                          </div>

                         

                          <div class="tag-group " id="coll-filter-4">

                           

                            <ul id="cfc4" class="collapse in">

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span> Under 100

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span> 100 - 200

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span> 200 - 300

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span> 300 - 400

                                </a>

                              </li>

                              <li>

                                <a href="#">

                                  <span class="fe-checkbox"></span> 400 - 500

                                </a>

                              </li>

                            </ul>

                          </div>

                        </div>

                      </div>

                    </div>



                    </div>

                  

                    <div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">

                      <div class="featured-product">

                        <h6 class="sb-title no-icon">

                          <span style="font-size:15px">{{trans('admin.OurSuggestion')}}</span>

                        </h6>

                        <div class="sb-content featured-product-content beauty-health">

                          @foreach($OurSuggestions as $OurSuggestion )



                          <div class="element full_width" data-animate="fadeInUp" data-delay="100">

                            <div class="grid-view-item" style="height:105px">

                              <div class="grid-normal-display grid__item one-half small-one-whole">

                                <div class="grid__image product-image">

                                  <a class="grid-view-item__link" href="{{url('/')}}/shop/{{$OurSuggestion->id}}">

                <img class="grid-view-item__image" src="{{Storage::url($OurSuggestion->photo)}}" 



                alt="

                   @if(session('lang') =='ar')

                    {{$OurSuggestion->title_name_ar}}

                   @endif

                    @if(session('lang') =='en')

                    {{$OurSuggestion->title_name_en}}

                   @endif

                " style="border-radius:0px" height="110">

                                    <img class="hover-image" src="{{url('/')}}/shop/{{$OurSuggestion->id}}" alt="

                                     @if(session('lang') =='ar')

                    {{$OurSuggestion->title_name_ar}}

                   @endif

                    @if(session('lang') =='en')

                    {{$OurSuggestion->title_name_en}}

                   @endif



                                    " title="

                                     @if(session('lang') =='ar')

                    {{$OurSuggestion->title_name_ar}}

                   @endif

                    @if(session('lang') =='en')

                    {{$OurSuggestion->title_name_en}}

                   @endif

                                    " style="border-radius:0px" height="110">

                                  </a>

                                  <div class="product-label">

                                    <div class="label-element new-label">

                                      

                                    </div>

                                  </div>

                                </div>

                              </div>

                            

                            </div>



                            <div style="text-align:center;font-size:13px;">

                              <span style="color:red">{{$OurSuggestion->price}} L.E</span>

                            <span style="color: #6d5585;

text-decoration: line-through;">{{$OurSuggestion->price_offer}} L.E</span>

                            

                            </div>

                          </div>



                          @endforeach



                           

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                   </div>



                   <div style="width:1%;background-color:#eee"></div>



                              <div style="width:79.5%;">



                  <div id="tabs-information">

                    <ul class="nav nav-tabs tabs-left sideways">

                      <li class="description">

                        <a href="#desc" data-toggle="tab" class="active">{{trans('admin.infophoto')}}</a>

                      </li>

                      <li class="warranty">

                        <a href="#size" data-toggle="tab">

                        {{trans('admin.Description')}}</a>

                      </li>

                      <li class="delivery">

                        <a href="#delivery" data-toggle="tab">{{trans('admin.PurchaseAndDeliveryPolicy')}}</a>

                      </li>

                      <li class="payment">

                        <a href="#payment" data-toggle="tab">{{trans('admin.PaymentAndDeliveryPolicy')}}</a>

                      </li>

                      <li class="reviews">

                        <a href="#customerreview" data-toggle="tab">{{trans('admin.CustomerReview')}}</a>

                      </li>

                    </ul>

                    <div class="tab-panel active" id="desc">



             



                      <p style="text-align:center;">  



                          @foreach($filess as $file) 

               

    <img src="{{Storage::url($file->full_file)}}" alt="Reprehenderit qui in ea" width="700" height="775" style="border-radius:0px;">

                       

            <br>

            <br>

                      @endforeach                 

                       

                      </p>



                   

                    </div>









                    <div class="tab-panel fade " id="size" style="background-color:#fff;">





                      <h2>

               @if(session('lang')=='ar')

                                                                                  

{{$product->title_name_ar }}



@endif



  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif           

                      </h2>

                      <p>

                           @if(session('lang')=='ar')

                                                                                  

{{$product->content_name_ar }}



@endif



  @if(session('lang')=='en')

{{$product->content_name_en }} 

@endif

                      </p>

                     

                    </div>

                    <div class="tab-panel fade " id="delivery" style="background-color:#fff">

                      <h2 style="padding:8px">

             

              @if(session('lang')=='ar')

                                                                                  

{{$PurchaseAndDeliveryPolicy->title_name_ar }}



@endif



  @if(session('lang')=='en')

{{$PurchaseAndDeliveryPolicy->title_name_en }} 

@endif             

                      </h2> 



                       <h5 style="padding:8px">

                           @if(session('lang')=='ar')

                                                                                  

{{$PurchaseAndDeliveryPolicy->PurchaseAndDeliveryPolicy_name_ar }}



@endif



  @if(session('lang')=='en')

{{$PurchaseAndDeliveryPolicy->PurchaseAndDeliveryPolicy_name_en }} 

@endif

                       </h5>



                    </div>

                    <div class="tab-panel fade " id="payment" style="background-color:#fff">

                      <h2>

                          @if(session('lang')=='ar')

                                                                                  

{{$PaymentAndDeliveryPolicy->title_name_ar }}



@endif



  @if(session('lang')=='en')

{{$PaymentAndDeliveryPolicy->title_name_en }} 

@endif    

                        

                      </h2> 

                    <h5 style="padding:8px"> 

                      @if(session('lang')=='ar')

                                                                                  

{{$PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_ar }}



@endif



  @if(session('lang')=='en')

{{$PaymentAndDeliveryPolicy->PaymentAndDeliveryPolicy_name_en }} 

@endif 



                    </h5>  



                    </div>

                    <div class="tab-panel fade " id="customerreview" style="background-color:#fff">

                    <h5> 



                        <div class="row" style="padding:8px">

                    <div class="col-md-6">

                      <div class="product-reviews">

                        <div class="single-review">

                          <div class="review-heading">

                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>

                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>

                            <div class="review-rating pull-right">

                               <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star"  style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star-o empty"></i>

                            </div>

                          </div>

                          <div class="review-body">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute

                              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                          </div>

                        </div>



                        <div class="single-review">

                          <div class="review-heading">

                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>

                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>

                            <div class="review-rating pull-right">

                               <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star"  style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star-o empty"></i>

                            </div>

                          </div>

                          <div class="review-body">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute

                              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                          </div>

                        </div>



                        <div class="single-review">

                          <div class="review-heading">

                            <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>

                            <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>

                            <div class="review-rating pull-right">

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star"  style="color:#FFB656"></i>

                              <i class="fa fa-star" style="color:#FFB656"></i>

                              <i class="fa fa-star-o empty"></i>

                            </div>

                          </div>

                          <div class="review-body">

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute

                              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                          </div>

                        </div>



                        <ul class="reviews-pages">

                          <li class="active">1</li>

                          <li><a href="#">2</a></li>

                          <li><a href="#">3</a></li>

                          <li><a href="#"><i class="fa fa-caret-right"></i></a></li>

                        </ul>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <h4 class="text-uppercase">Write Your Review</h4>

                      <p>Your email address will not be published.</p>

                      <form class="review-form">

                        <div class="form-group">

                          <input class="input" type="text" placeholder="Your Name" />

                        </div>

                        <div class="form-group">

                          <input class="input" type="email" placeholder="Email Address" />

                        </div>

                        <div class="form-group">

                          <textarea class="input" placeholder="Your review"></textarea>

                        </div>

                        <div class="form-group">

                          <div class="input-rating">

                            <strong class="text-uppercase">Your Rating: </strong>

                            <div class="stars">

                              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>

                              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>

                              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>

                              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>

                              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>

                            </div>

                          </div>

                        </div>

                        <button class="primary-btn">Submit</button>

                      </form>

                    </div>

                  </div>



                   </h5>

                      

                    </div>



                  </div>





              <!--------------------------------------------------->





                     

                     <div style="background-color:#eee;height:10px;width:109%"></div>

                      





                      <div class="row makegood" style="background-color:#fff; border-radius: 8px; width:101%; " >

                         <h2>{{trans('admin.moreproductwilllike')}}</h2>

  <div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF"  >





       

                            @foreach($newalymarketsmalles1 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>



<div class="sp"></div>





<div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF2" >



       

                            @foreach($newalymarketsmalles2 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>



<div class="sp"></div>



                 



<div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF3" >



       

                            @foreach($newalymarketsmalles3 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>



<div class="sp"></div>



 





<div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF4" >



       

                            @foreach($newalymarketsmalles4 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>



<div class="sp"></div>







<div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF5" >



       

                            @foreach($newalymarketsmalles5 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>







<div class="sp"></div>









<div class="column" style="background-color:#fff;width:16.66%;height:200px;">



      <div id="MF6" >



       

                            @foreach($newalymarketsmalles6 as  $newalymarketsmall)



    <div>

               



               <u style="list-style:none;display: flex;">



     @if(session('lang')=='ar')

              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color:#eb6625;

margin-top:0px;

position:relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



             <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>



              <span style="float: left;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>





                 







                

                           @endif





                           <!-------en--------->   

                            @if(session('lang')=='en')

               



                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

                <i>

                

 <div class="imageBox2">

  <div class="imageInn">

        <span class="mtm">  

    <img src="{{Storage::url($newalymarketsmall->photo)}}" alt="Default Image" width="150" height="140">

               </span>

  </div>

  <div class="hoverImg2">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="140">



        <div style="background-color: #eb6625;

margin-top: -21px;

position: relative;

text-align: center;

margin-left:21px;

">

            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>

              </span>

 </a>





              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 

               <a href="">



              <span class="">

         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

 

        </div>



      

  </div>



            <div class="DFG">

                 <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>



              <span style="float: right;">

                <span style="font-size:13px;color:red">

            L.E {{$newalymarketsmall->price_offer}}.00  </span>

               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$newalymarketsmall->price}}.00

                </span> 

                

              </span>

              

            </div>

</div>



                </i>

               </a>



                  

                           @endif



               </u>

                 

  </div>

                @endforeach



  </div>

  </div>



<div class="sp"></div>





</div>



                     <div style="background-color:#eee;height:10px;width:109%"></div>



                           @if(session('lang') == 'en')



      <div id="product-additional-information" style="margin-top:10px;">



                          @endif



                          @if(session('lang') == 'ar')



      <div id="product-additional-information" style="margin-top:10px;direction: ltr;">



                          @endif





                    <div class="related-products">

                     

                <h2 style="background-color: #fff;

padding: 4px;

color: #000;

font-size: 20px;

font-weight: 700;

margin-bottom: 0px;

border-radius: 8px 8px 0px 0px;">{{trans('admin.pRatatedtothisvendor')}}</h2>

                       

                      <div class="grid-uniform">



                           @if(session('lang') == 'en')

                        <ul class="related-products-items related-slider" style="width:957px">

                          @endif



                           @if(session('lang') == 'ar')

                        <ul class="related-products-items related-slider" style="width:1000px;    margin-left: -19px;

">

                          @endif



                          @foreach($mightAlsoLikes as $mightAlsoLike) 



                          <div class="grid__item">

                            <div class="grid-view-item" style="height:height: 62px;">

                              <div class="grid-normal-display">

            <div class="grid__image product-image">

        <a class="grid-view-item__link" href="./product.html">

        <img class="grid-view-item__image" src="{{Storage::url($mightAlsoLike->photo)}}" alt="Consequuntur magni dolores" width="140" height="140">

    <img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product5x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">

                                  </a>

                                </div>

                                 <div class="quickbuy">

                                <div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">

                          <div class="effect-ajax-cart">

                        <form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">

                                <input type="hidden" name="quantity" value="1">

                   <div class="product-single__add-to-cart" style="background-color:#eb6625" style="text-align:center;">

               <a href="{{url('/')}}/cart/{{$mightAlsoLike->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:30px;color:#fff;margin-right:23px;'></i>

              </span>

 </a>





                    &nbsp;&nbsp;&nbsp;

               <a href="">

                     

             <span class="">

                <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $mightAlsoLike->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 







              </span>

 </a>

                   

                                      </div>



                            </form>

                            </div>

                          </div>

                        </div>

                              </div>

                    <div class="group-information style-">



                      



                        <div class="h4 grid-view-item__title" style="text-align: center;">



          <a href="{{url('/')}}/shop/{{$mightAlsoLike->id}}" target="_blank">



                        @if(session('lang')=='ar')                                                                 



                        {{$mightAlsoLike->title_name_ar }}



                        @endif



                        @if(session('lang')=='en')



                        {{$mightAlsoLike->title_name_en }} 



                        @endif



                      </a>

                    </div>



                        <div class="price-and-ship">

                  <span style="font-size:13px;color:red">

            L.E {{$mightAlsoLike->price_offer}}.00  </span> 



                <span style="font-size:11px;text-decoration: line-through;">{{$mightAlsoLike->price}}.00

                </span> 



                     







                         



                        </div>



      



                       

                        <div class="group-functions">



                          <div class="rating-star grid__item one-half">



                            <span class="spr-badge" data-rating="5.0">



                              <span class="spr-starrating spr-badge-starrating">



                             



                   



                           

 



                              </span>                                   



                            </span>



                          </div>





 

                        </div>





                                 @if($mightAlsoLike->admin_id ==2)

                       <span style="background-color:

#eb6625;

color:

#fff;

padding: 3px;

border-radius: 13px; margin-right:11px; margin-right:8px;"> 

                       {{trans('admin.shipedbyAly')}}

                             </span>



                          @endif



                      </div>

                            </div>

                          </div>

                                            @endforeach





                        </ul>

                      </div>

                    </div>

                  </div>



                  <br>

                



                 

         <div style="background-color:#eee;width:109%;height:10px"></div>

     





@if(session('lang') == 'en')

<div class="html-section index-section product-in-random" style="    width: 109%;

    margin-left: -8px;

">

@endif





@if(session('lang') == 'ar')

<div class="html-section index-section product-in-random" style="    width: 109%;

    margin-left: -62px;

">

@endif



          <div class="">



        <div class="page-width section-product-slider clearfix" style="padding-bottom:50px;">



             

                 <a href="{{url('/')}}/shop" target="_blank"> 



                <h3 style="margin-left:34px" class="padding8">{{trans('admin.Pratedtothisp')}}</h3>

              </a>

 

             



              <div class="grid grid--uniform grid--view-items ">



                <div class="product-grid-random product-grid-1539877863095" id="loadMoreContainer_1539877863095" style="    margin-left: 27px;">                 



                @foreach($Morefeaturedproducts as $Morefeaturedproduct) 



                  <div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none; width: 160px;">



                    <div class="grid-view-item">



                      <div class="grid-normal-display">



                        <div class="grid__image product-image">



                          <a class="grid-view-item__link" href="{{url('/')}}/shop/{{$Morefeaturedproduct->id}}">



      <img class="grid-view-item__image" src="{{Storage::url($Morefeaturedproduct->photo)}}" alt="Consequuntur magni dolores" width="165" height="147">



        <img class="hover-image" src="//cdn.shopify.com/s/files/1/0026/6069/6153/products/p09_380x.jpg?v=1552625424" alt="Consequuntur magni dolores" title="Consequuntur magni dolores" width="165" height="147">



                          </a>



                          <div class="product-label">



                            <div class="label-element deal-label">



                              <!---span style="color:#ff5722; background-color: #ffd839;">20% off</span -->



                            </div>



                          </div>



                        </div>



                         <div class="quickbuy">

                                <div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">

                                  <div class="effect-ajax-cart">

      <form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">

                <input type="hidden" name="quantity" value="1">

              <div class="product-single__add-to-cart" style="background-color:#eb6625" style="text-align:center;">

               <a href="{{url('/')}}/cart/{{$Morefeaturedproduct->id}}">

             

                 <span class="">

               

      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:23px;'></i>

              </span>

 </a>





                    &nbsp;&nbsp;&nbsp;

               <a href="">



             <span class="">

                 



           <a href="" id="switchToSaveForLaterHome" aria-expanded="true">

  <span style="display: none;">{{ $Morefeaturedproduct->id }}</span><span style="font-size:30px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 

                    



                     </a>







              </span>

 </a>

                   

                                      </div>

                                    </form>

                                  </div>

                                </div>

                              </div>



                      </div>



                        <div class="group-information style-">



                      



                        <div class="h4 grid-view-item__title" style="text-align: center;">



          <a href="{{url('/')}}/shop/{{$Morefeaturedproduct->id}}" target="_blank">



                        @if(session('lang')=='ar')                                                                 



                        {{$Morefeaturedproduct->title_name_ar }}



                        @endif



                        @if(session('lang')=='en')



                        {{$Morefeaturedproduct->title_name_en }} 



                        @endif



                      </a>

                    </div>



                        <div class="price-and-ship">

                  <span style="font-size:13px;color:red">

            L.E {{$Morefeaturedproduct->price_offer}}.00  </span> 



                <span style="font-size:11px;text-decoration: line-through;">{{$Morefeaturedproduct->price}}.00

                </span> 



                     







                         



                        </div>



      



                       

                         @if(session('lang') == 'ar')

                         <div class="group-functions">



                          <div class="rating-star grid__item one-half">



                            <span class="spr-badge" data-rating="5.0">



                              <span class="spr-starrating spr-badge-starrating">



                             



                              <a class="wish-list wlc wl-1559291710422" data-wishlistid="1559291710422" title="Add to Wishlist">



                   



            </a>



                           

 



                              </span>                                   



                            </span>



                          </div>





 

                        </div>

                        

                         @endif





                                 @if($Morefeaturedproduct->admin_id ==2)

                       <span class="shiiiped"> 

                       {{trans('admin.shipedbyAly')}}

                             </span>



                          @endif



                      </div>



                    </div>



                  </div>



                @endforeach



                    



                </div>



                <div style="text-align:center">



                  <div id="loadMore_1539877863095" class="btn btn-more">

                    {{trans('admin.LoadMore')}}

                  </div>



                  <div id="showLess_1539877863095" class="btn--secondary btn-less hide">Show Less</div>



                </div>                



              </div>







            </div>



          </div>





              <!--------------------------------------------------------->

                  

                </div>

                                



                              </div>

                      </div>







                <!--------form here----------------->

							</div>

						</div>

					</div>

				</div>

			</div>

	</main>







              @if(session('lang')== 'ar')

<div class="w3-container">

 

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" id="control-qid13228" style="display:none;">Open Modal</button>



  <div id="id01" class="w3-modal">

    <div class="w3-modal-content">

      <header class="w3-container w3-teal"> 

        <span onclick="document.getElementById('id01').style.display='none'" 

        class="w3-button w3-display-topright">&times;</span>

        <h2 style="margin-right:35px;"><span class="productName"> </span></h2>

      </header>

      <div class="w3-container">





                 <div class="homepdata">



                    <u style="list-style:none; display:inline-flex;">



                      <li>  <p><span class="productimage" > </span></p></li>

                      <li style="margin-right:15px;text-align: right;">

                     <span class="cart_sucess2"> </span>



         <p>{{trans('admin.name')}}:<span class="productName"> </span></p>

        <p>{{trans('admin.price')}}:<span class="productprice"> </span></p>

        <p>{{trans('admin.price_offer')}}:<span class="price_offer"> </span></p>

        <p>{{trans('admin.content_name_ar')}}:<span class="content_name_ar"> </span></p>

        <p>{{trans('admin.admin_id')}}:<span class="admin_id"> </span></p>

        <p>{{trans('admin.alymarketcode')}}:<span class="alymarketcode"> </span></p>

        <p>{{trans('admin.department_id')}}:<span class="department_id"> </span></p>









                         <a href="{{ route('shop.index') }}" class="btn--secondary update-cart">

                         {{trans('admin.ContinueShopping')}}

                          <span class="icon icon-arrow-right" aria-hidden="true"></span>

                         

                        </a>



                         <a href="{{ route('wishlist.index') }}" class="btn cart__checkout">

                         {{trans('admin.wishlist')}}

                          <span class="icon icon-arrow-right" aria-hidden="true"></span>

                         

                        </a>





                      </li>

                    </u>



                  

                 </div>



      



      </div>

      <footer class="w3-container w3-teal">

        <p>AlyMarket</p>

      </footer>

    </div>

  </div>

</div>



@endif





 @if(session('lang')== 'en')

<div class="w3-container">

 

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" id="control-qid13228" style="display:none;">Open Modal</button>



  <div id="id01" class="w3-modal">

    <div class="w3-modal-content">

      <header class="w3-container w3-teal"> 

        <span onclick="document.getElementById('id01').style.display='none'" 

        class="w3-button w3-display-topright">&times;</span>

        <h2 style="margin-right:35px;"><span class="productName"> </span></h2>

      </header>

      <div class="w3-container">





                 <div class="homepdata">



                    <u style="list-style:none; display:inline-flex;">





                      <li style="margin-right:15px;text-align:left;">

                     <span class="cart_sucess2"> </span>



         <p>{{trans('admin.name')}}:<span class="productName"> </span></p>

        <p>{{trans('admin.price')}}:<span class="productprice"> </span></p>

        <p>{{trans('admin.price_offer')}}:<span class="price_offer"> </span></p>

        <p>{{trans('admin.content_name_ar')}}:<span class="content_name_ar"> </span></p>

        <p>{{trans('admin.admin_id')}}:<span class="admin_id"> </span></p>

        <p>{{trans('admin.alymarketcode')}}:<span class="alymarketcode"> </span></p>

        <p>{{trans('admin.department_id')}}:<span class="department_id"> </span></p>









                         <a href="{{ route('shop.index') }}" class="btn--secondary update-cart">

                         {{trans('admin.ContinueShopping')}}

                          <span class="icon icon-arrow-right" aria-hidden="true"></span>

                         

                        </a>



                         <a href="{{ route('wishlist.index') }}" class="btn cart__checkout">

                         {{trans('admin.wishlist')}}

                          <span class="icon icon-arrow-right" aria-hidden="true"></span>

                         

                        </a>





                      </li>



                      <li>  <p><span class="productimage" > </span></p></li>



                    </u>



                  

                 </div>



      



      </div>

      <footer class="w3-container w3-teal">

        <p>AlyMarket</p>

      </footer>

    </div>

  </div>

</div>



@endif



 



@push('js')

<style type="text/css">

.magnify-container {

    display: inline-block;

    padding: 25px;

    width auto;

}



.magnify {

    position: relative;

    cursor: none

}



.magnify-large {

    position: absolute;

    display: none;

    width:250px;

    height:250px;



    -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

       -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

            box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

   

    -webkit-border-radius: 100%;

       -moz-border-radius: 100%;

             border-radius: 100%

}

</style>









     <script>

        (function(){

            const currentImage = document.querySelector('#currentImage');

            const images = document.querySelectorAll('.product-section-thumbnail');



            images.forEach((element) => element.addEventListener('mouseover', thumbnailClick));



            function thumbnailClick(e) {

                currentImage.classList.remove('active');



                currentImage.addEventListener('transitionend', () => {

                    currentImage.src = this.querySelector('img').src;

                    currentImage.classList.add('active');

          

    a =  this.querySelector('img').src

    img = $("#currentImage")

    img.attr("src", a );

    img.magnify()







                })



                images.forEach((element) => element.classList.remove('selected'));

                this.classList.add('selected');

            }



        })();

    </script>



 <script type="text/javascript">

  !function ($) { 

    "use strict";



    var Magnify = function (element, options) {

        this.init('magnify', element, options)

    } 

    Magnify.prototype = { 

        constructor: Magnify 

        , init: function (type, element, options) {

            var event = 'mousemove'

                , eventOut = 'mouseleave';



            this.type = type

            this.$element = $(element)

            this.options = this.getOptions(options)

            this.nativeWidth = 0

            this.nativeHeight = 0



            if(!this.$element.parent().hasClass('magnify')) {

                this.$element.wrap('<div class="magnify" \>');

                this.$element.parent('.magnify').append('<div class="magnify-large" \>');

            }           

            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");



            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));

            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));

        } 

        , getOptions: function (options) {

            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

             if (options.delay && typeof options.delay == 'number') {

                options.delay = {

                    show: options.delay

                    , hide: options.delay

                }

            } 

            return options

        }

         , check: function (e) {

            var container = $(e.currentTarget);

            var self = container.children('img');

            var mag = container.children(".magnify-large");



            // Get the native dimensions of the image

            if(!this.nativeWidth && !this.nativeHeight) {

                var image = new Image();

                image.src = self.attr("src");



                this.nativeWidth = image.width;

                this.nativeHeight = image.height;



            } else {



                var magnifyOffset = container.offset();

                var mx = e.pageX - magnifyOffset.left;

                var my = e.pageY - magnifyOffset.top;



                if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {

                    mag.fadeIn(100);

                } else {

                    mag.fadeOut(100);

                } 

                if(mag.is(":visible"))

                {

                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;

                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;

                    var bgp = rx + "px " + ry + "px";



                    var px = mx - mag.width()/2;

                    var py = my - mag.height()/2;



                    mag.css({left: px, top: py, backgroundPosition: bgp});

                }

            }



        }

    } 

    $.fn.magnify = function ( option ) {

        return this.each(function () {

            var $this = $(this)

                , data = $this.data('magnify')

                , options = typeof option == 'object' && option

            if (!data) $this.data('tooltip', (data = new Magnify(this, options)))

            if (typeof option == 'string') data[option]()

        })

    } 

    $.fn.magnify.Constructor = Magnify



    $.fn.magnify.defaults = {

        delay: 0

    }   

  

    $(window).on('load', function () {

        $('[data-toggle="magnify"]').each(function () {

            var $mag = $(this);

            $mag.magnify()

        })

    })



} ( window.jQuery );



$('[data-toggle="magnify"]').each(function () {

    var $mag = $(this);

    $mag.magnify()

})



$('#change').click(SwitchPic)



function SwitchPic() {



    a = 'http://www.mendhammoves.com/articles/rescue_dogs/puppy.png'

    img = $("#currentImage")

    img.attr("src", a );

    img.magnify()

}





 </script>

 


    <script src="{{url('/')}}/forentend3/assets/js/jquery.zoom.min.js"></script>
 
 <script type="text/javascript">
   // PRODUCT ZOOM
    // PRODUCT ZOOM
  $('.product-section-image').zoom();
  $('.imag').zoom();
  


 </script>



@endpush



 





 @include('forentend3.layouts.customfooter')



