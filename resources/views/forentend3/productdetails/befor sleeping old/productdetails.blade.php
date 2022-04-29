 @include('forentend3.layouts.header')
@include('forentend3.layouts.navbar')
@include('forentend3.layouts.menue')
@include('forentend3.layouts.message')

 




@push('js')


  

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

  $('#pplay').hide();
  $('#myVideo').show();

$(".active").css("display", "none");

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
  padding: 100px 0 120px;
}

.product-section .selected {
  border: 1px solid blue;
}

.product-section-images {
  display: block ruby;
  margin-top:15px;
  margin-left:60px;
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
 height: 50px;
 
width: 50px;


}

.product-section-thumbnail2  img
{
 height: 45px;
width: 45px;


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
                    currentImage.classList.add('zoomImg');
                   

                    $("#pplay").css("display", "none");
                    $("#myVideo").css("display", "none");
                $(".active").css("display", "block");


                     


                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>


    <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail2');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                    $("#pplay").css("display", "none");

                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
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

  	<script src="{{url('/')}}/forentend3/assets/js/jquery.zoom.min.js"></script>
 
 <script type="text/javascript">
 	 // PRODUCT ZOOM
    // PRODUCT ZOOM
  $('.product-section-image').zoom();
  $('.imag').zoom();
  


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
 
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
   
    <style>
 
    #exzoom {
                 width: 400px;
        /*height: 400px;*/
    }
  
    .hidden { display: none; }


    .exzoom {
  box-sizing: border-box; }
  .exzoom * {
    box-sizing: border-box; }
  .exzoom .exzoom_img_box {
    background: #eee;
    position: relative; }
    .exzoom .exzoom_img_box .exzoom_main_img {
      display: block;
      width: 100%; 


  }
    .exzoom .exzoom_img_box span {
      }
  .exzoom .exzoom_preview 
  {
    margin: 0;
    position: absolute;
    top:0;
    overflow: hidden;
    left:20;
    margin-left:-400px;
 
    background-color: red;
    border: 1px solid #ddd;
    display: none; 
}
    .exzoom .exzoom_preview .exzoom_preview_img {
      position: relative;
      max-width: initial !important;
      max-height: initial !important;
      left:50;
      top: 60; }
  .exzoom .exzoom_nav {
    margin-top: 10px;
    overflow: hidden;
    position: relative;
    left: 15px; }
    .exzoom .exzoom_nav .exzoom_nav_inner {
      position: absolute;
      left: 0;
      top: 0;
      margin: 0; }
      .exzoom .exzoom_nav .exzoom_nav_inner span {
        border: 1px solid #ddd;
        overflow: hidden;
        position: relative;
        float: left; }
        .exzoom .exzoom_nav .exzoom_nav_inner span.current {
          border: 1px solid #f60; }
        .exzoom .exzoom_nav .exzoom_nav_inner span img {
          max-width: 100%;
          max-height: 100%;
          position: relative; }
  .exzoom .exzoom_btn {
    position: relative;
    margin: 0; }
    .exzoom .exzoom_btn a {
      display: block;
      width: 15px;
      border: 1px solid #ddd;
      height: 60px;
      line-height: 60px;
      background: #eee;
      text-align: center;
      font-size: 18px;
      position: absolute;
      left: 0;
      top: -62px;
      text-decoration: none;
      color: #999; }
    .exzoom .exzoom_btn a:hover {
      background: #f60;
      color: #fff; }
    .exzoom .exzoom_btn a.exzoom_next_btn {
      left: auto;
      right: 0; }
  .exzoom .exzoom_zoom {
    position: absolute;
    left: 0;
    top: 0;
    display: none;
    z-index: 5;
    cursor: pointer; 
}
  @media screen and (max-width: 768px) {
    .exzoom .exzoom_zoom_outer {
      display: none; } }
  .exzoom .exzoom_img_ul_outer {
    border: 1px solid #ddd;
    position: absolute;
    overflow: hidden; }
    .exzoom .exzoom_img_ul_outer .exzoom_img_ul {
      padding: 0;
      margin: 0;
      overflow: hidden;
      position: absolute; }
      .exzoom .exzoom_img_ul_outer .exzoom_img_ul li {
        list-style: none;
        display: inline-block;
        text-align: center;
        float: left; }
        .exzoom .exzoom_img_ul_outer .exzoom_img_ul li img {
          width: 100%; }

</style>


<script type="text/javascript">

    $('.container').imagesLoaded( function() {
  $("#exzoom").exzoom({
        autoPlay: false,
    });
  $("#exzoom").removeClass('hidden')
});

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();



  ;(function ($, window) {
    let ele = null,
        exzoom_img_box = null,
        boxWidth = null,
        boxHeight = null,
        exzoom_img_ul_outer = null,//用于限制 ul 宽度,又不影响放大镜区域
        exzoom_img_ul = null,
        exzoom_img_ul_position = 0,//循环图片区域的边距,用于移动时跟随光标
        exzoom_img_ul_width = 0,//循环图片区域的最大宽度
        exzoom_img_ul_max_margin = 0,//循环图片区域的最大外边距,应该是图片数量减一乘以boxWidth
        exzoom_nav = null,
        exzoom_nav_inner = null,
        navHightClass = "current",//当前图片的类,
        exzoom_navSpan = null,
        navHeightWithBorder = null,
        images = null,
        exzoom_prev_btn = null,//导航上一张图片
        exzoom_next_btn = null,//导航下一张图片
        imgNum = 0,//图片的数量
        imgIndex = 0,//当前图片的索引
        imgArr = [],//图片属性的数字
        exzoom_zoom = null,
        exzoom_main_img = null,
        exzoom_zoom_outer = null,
        exzoom_preview = null,//预览区域
        exzoom_preview_img = null,//预览区域的图片
        autoPlayInterval = null,//用于控制自动播放的间隔时间
        startX = 0,//移动光标的起始坐标
        startY = 0,//移动光标的起始坐标
        endX = 0,//移动光标的终止坐标
        endY = 0,//移动光标的终止坐标
        g = {},//全局变量
        defaults = {
            "navWidth": 60,//列表每个宽度,该版本中请把宽高填写成一样
            "navHeight": 60,//列表每个高度,该版本中请把宽高填写成一样
            "navItemNum": 5,//列表显示个数
            "navItemMargin": 7,//列表间隔
            "navBorder": 1,//列表边框，没有边框填写0，边框在css中修改
            "autoPlay": true,//是否自动播放
            "autoPlayTimeout": 2000,//播放间隔时间
        };


    let methods = {
        init: function (options) {
            let opts = $.extend({}, defaults, options);

            ele = this;
            exzoom_img_box = ele.find(".exzoom_img_box");
            exzoom_img_ul = ele.find(".exzoom_img_ul");
            exzoom_nav = ele.find(".exzoom_nav");
            exzoom_prev_btn = ele.find(".exzoom_prev_btn");//缩略图导航上一张按钮
            exzoom_next_btn = ele.find(".exzoom_next_btn");//缩略图导航下一张按钮

            //todo 以后可以分开宽度和高度的限制
            boxHeight = boxWidth = ele.outerWidth();  //在小屏幕中,有 padding 的情况下,计算不准,需要手动指定 ele 的宽度

            // console.log("boxWidth::" + boxWidth);
            // console.log("ele.parent().width()::" + ele.parent().width());
            // console.log("ele.parent().outerWidth()::" + ele.parent().outerWidth());
            // console.log("ele.parent().innerWidth()::" + ele.parent().innerWidth());

            //todo 缩略图导航的高度和宽度可以改为根据 导航栏宽度 和 navItemNum 计算出来,但是对于不同尺寸的不好处理
            g.navWidth = opts.navWidth;
            g.navHeight = opts.navHeight;
            g.navBorder = opts.navBorder;
            g.navItemMargin = opts.navItemMargin;
            g.navItemNum = opts.navItemNum;
            g.autoPlay = opts.autoPlay;
            g.autoPlayTimeout = opts.autoPlayTimeout;

            images = exzoom_img_box.find("img");
                 imgNum = images.length;//图片的数量
            checkLoadedAllImages(images)//检查图片是否健在完成,全部加载完成的会执行初始化
        },
        prev: function () {             //上一张图片
            moveLeft()
        },
        next: function () {            //下一张图片
            moveRight();
        },
        setImg: function () {            //设置大图
            let url = arguments[0];

            getImageSize(url, function (width, height) {
                exzoom_preview_img.attr("src", url);
                exzoom_main_img.attr("src", url);

                //todo 未测试
                //判断已有的图片数量是否合最初的一致,不是的话就先删除最后一个
                if (exzoom_img_ul.find("li").length === imgNum + 1) {
                    exzoom_img_ul.find("li:last").remove();
                }
                exzoom_img_ul.append('<li style="width: ' + boxWidth + 'px;">' +
                    '<img src="' + url + '"></li>');

                let image_prop = copute_image_prop(url, width, height);
                previewImg(image_prop);
            });
        },
    };

    $.fn.extend({
        "exzoom": function (method, options) {
            if (arguments.length === 0 || (typeof method === 'object' && !options)) {
                if (this.length === 0) {
                    // alert("调用 jQuery.exzomm 时的选择器为空");
                    $.error('Selector is empty when call jQuery.exzomm');
                } else {
                    return methods.init.apply(this, arguments);
                }
            } else if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else {
                // alert("调用了 jQuery.exzomm 中不存在的方法");
                $.error('Method ' + method + 'does not exist on jQuery.exzomm');
            }
        }
    });

    /**
     * 初始化
     */
    function init() {
        exzoom_img_box.append("<div class='exzoom_img_ul_outer'></div>");
        exzoom_nav.append("<p class='exzoom_nav_inner'></p>");
        exzoom_img_ul_outer = exzoom_img_box.find(".exzoom_img_ul_outer");
        exzoom_nav_inner = exzoom_nav.find(".exzoom_nav_inner");

        //把 exzoom_img_ul 移动到 exzoom_img_ul_outer 里
        exzoom_img_ul_outer.append(exzoom_img_ul);

        //循环所有图片,计算尺寸,添加缩略图导航
        for (let i = 0; i < imgNum; i++) {
            imgArr[i] = copute_image_prop(images.eq(i));//记录图片的尺寸属性等
            console.log(imgArr[i]);
            let li = exzoom_img_ul.find("li").eq(i);
            li.css("width", boxWidth);//设置图片上级的 li 元素的宽度
            li.find("img").css({
                "margin-top": imgArr[i][5],
                "width": imgArr[i][3]
            });
        }

        //缩略图导航
        exzoom_navSpan = exzoom_nav.find("span");
        navHeightWithBorder = g.navBorder * 2 + g.navHeight;
        g.exzoom_navWidth = (navHeightWithBorder + g.navItemMargin) * g.navItemNum;
        g.exzoom_nav_innerWidth = (navHeightWithBorder + g.navItemMargin) * imgNum;

        exzoom_navSpan.eq(imgIndex).addClass(navHightClass);
        exzoom_nav.css({
            "height": navHeightWithBorder + "px",
            "width": boxWidth - exzoom_prev_btn.width() - exzoom_next_btn.width(),
        });
        exzoom_nav_inner.css({
            "width": g.exzoom_nav_innerWidth + "px"
        });
        exzoom_navSpan.css({
            "margin-left": g.navItemMargin + "px",
            "width": g.navWidth + "px",
            "height": g.navHeight + "px",
        });

        //设置滚动区域的宽度
        exzoom_img_ul_width = boxWidth * imgNum;
        exzoom_img_ul_max_margin = boxWidth * (imgNum - 1);
        exzoom_img_ul.css("width", exzoom_img_ul_width);
        //添加放大镜
        exzoom_img_box.append(`
<div class='exzoom_zoom_outer'>
    <span class='exzoom_zoom'></span>
</div>
<p class='exzoom_preview'>
    <img class='exzoom_preview_img' src='' />
</p>
            `);
        exzoom_zoom = exzoom_img_box.find(".exzoom_zoom");
        exzoom_main_img = exzoom_img_box.find(".exzoom_main_img");
        exzoom_zoom_outer = exzoom_img_box.find(".exzoom_zoom_outer");
        exzoom_preview = exzoom_img_box.find(".exzoom_preview");
        exzoom_preview_img = exzoom_img_box.find(".exzoom_preview_img");

        //设置大图和预览图区域
        exzoom_img_box.css({
            "width": boxHeight + "px",
            "height": boxHeight + "px",
        });

        exzoom_img_ul_outer.css({
            "width": boxHeight + "px",
            "height": boxHeight + "px",
        });

        exzoom_preview.css({
            "width": boxHeight + "px",
            "height": boxHeight + "px",
            "left": boxHeight + 5 + "px",//添加个边距
        });

        previewImg(imgArr[imgIndex]);
        autoPlay();//自动播放
        bindingEvent();//绑定事件
    }

    /**
     * 检测图片是否加载完成
     * @param images
     */
    function checkLoadedAllImages(images) {
        let timer = setInterval(function () {
            let loaded_images_counter = 0;
            let all_images_num = images.length;
            images.each(function () {
                if (this.complete) {
                    loaded_images_counter++;
                }
            });
            if (loaded_images_counter === all_images_num) {
                clearInterval(timer);
                init();
            }
        }, 100)
    }

    /**
     * 获取光标坐标,如果是 touch 事件,只处理第一个
     */
    function getCursorCoords(event) {
        let e = event || window.event;
        let coords_data = e, //记录坐标的数据,默认为 event 本身,移动端的 touch 会修改
            x,//x 轴
            y;//y 轴

        if (e["touches"] !== undefined) {
            if (e["touches"].length > 0) {
                coords_data = e["touches"][0];
            }
        }

        x = coords_data.clientX || coords_data.pageX;
        y = coords_data.clientY || coords_data.pageY;

        return {'x': x, 'y': y}
    }

    /**
     * 检查移动端触摸滑动的位置
     */
    function checkNewPositionLimit(new_position) {
        if (-new_position > exzoom_img_ul_max_margin) {
            //限制向右的范围
            new_position = -exzoom_img_ul_max_margin;
            imgIndex = 0;//向右超出范围的回到第一个
        } else if (new_position > 0) {
            //限制向左的范围
            new_position = 0;
        }
        return new_position
    }

    /**
     * 绑定各种事件
     */
    function bindingEvent() {
        //移动端大图区域的 touchend 事件
        exzoom_img_ul.on("touchstart", function (event) {
            let coords = getCursorCoords(event);
            startX = coords.x;
            startY = coords.y;

            let left = exzoom_img_ul.css("left");
            exzoom_img_ul_position = parseInt(left);

            window.clearInterval(autoPlayInterval);//停止自动播放
        });

        //移动端大图区域的 touchmove 事件
        exzoom_img_ul.on("touchmove", function (event) {
            let coords = getCursorCoords(event);
            let new_position;
            endX = coords.x;
            endY = coords.y;

            //只跟随光标移动
            new_position = exzoom_img_ul_position + endX - startX;
            new_position = checkNewPositionLimit(new_position);
            exzoom_img_ul.css("left", new_position);

        });

        //移动端大图区域的 touchend 事件
        exzoom_img_ul.on("touchend", function (event) {
            //触屏滑动,根据移动方向按倍数对齐元素
            console.log(endX < startX);
            if (endX < startX) {
                //向左滑动
                moveRight();
            } else if (endX > startX) {
                //向右滑动
                moveLeft();
            }

            autoPlay();//恢复自动播放
        });

        //大屏幕在放大区域点击,判断向左还是向右移动
        exzoom_zoom_outer.on("mousedown", function (event) {
            let coords = getCursorCoords(event);
            startX = coords.x;
            startY = coords.y;

            let left = exzoom_img_ul.css("left");
            exzoom_img_ul_position = parseInt(left);
        });

        exzoom_zoom_outer.on("mouseup", function (event) {
            let offset = ele.offset();

            if (startX - offset.left < boxWidth / 2) {
                //在放大镜的左半部分点击
                moveLeft();
            } else if (startX - offset.left > boxWidth / 2) {
                //在放大镜的右半部分点击
                moveRight();
            }
        });

        //进入 exzoom 停止自动播放
        ele.on("mouseenter", function () {
            window.clearInterval(autoPlayInterval);//停止自动播放
        });
        //离开 exzoom 开始自动播放
        ele.on("mouseleave", function () {
            autoPlay();//恢复自动播放
        });

        //大屏幕进入大图区域
        exzoom_zoom_outer.on("mouseenter", function () {
            exzoom_zoom.css("display", "block");
            exzoom_preview.css("display", "block");
        });

        //大屏幕在大图区域移动
        exzoom_zoom_outer.on("mousemove", function (e) {
            let width_limit = exzoom_zoom.width() / 2,
                max_X = exzoom_zoom_outer.width() - width_limit,
                max_Y = exzoom_zoom_outer.height() - width_limit,
                current_X = e.pageX - exzoom_zoom_outer.offset().left,
                current_Y = e.pageY - exzoom_zoom_outer.offset().top,
                move_X = current_X - width_limit,
                move_Y = current_Y - width_limit;

            if (current_X <= width_limit) {
                move_X = 0;
            }
            if (current_X >= max_X) {
                move_X = max_X - width_limit;
            }
            if (current_Y <= width_limit) {
                move_Y = 0;
            }
            if (current_Y >= max_Y) {
                move_Y = max_Y - width_limit;
            }
            exzoom_zoom.css({"left": move_X + "px", "top": move_Y + "px"});

            exzoom_preview_img.css({
                "left": -move_X * exzoom_preview.width() / exzoom_zoom.width() + "px",
                "top": -move_Y * exzoom_preview.width() / exzoom_zoom.width() + "px"
            });
        });

        //大屏幕离开大图区域
        exzoom_zoom_outer.on("mouseleave", function () {
            exzoom_zoom.css("display", "none");
            exzoom_preview.css("display", "none");
        });

        //大屏幕光宝进入放大预览区域
        exzoom_preview.on("mouseenter", function () {
            exzoom_zoom.css("display", "none");
            exzoom_preview.css("display", "none");
        });

        //缩略图导航
        exzoom_next_btn.on("click", function () {
            moveRight();
        });
        exzoom_prev_btn.on("click", function () {
            moveLeft();
        });

        exzoom_navSpan.hover(function () {
            imgIndex = $(this).index();
            move(imgIndex);
        });
    }

    /**
     * 聚焦在导航图片上,左右移动都会调用
     * @param direction: 方向,right | left,必填
     */
    function move(direction) {
        if (typeof direction === "undefined") {
            alert("exzoom 中的 move 函数的 direction 参数必填");
        }
        //如果超出图片数量了,返回第一张
        if (imgIndex > imgArr.length - 1) {
            imgIndex = 0;
        }

        //设置高亮
        exzoom_navSpan.eq(imgIndex).addClass(navHightClass).siblings().removeClass(navHightClass);

        //判断缩略图导航是否需要重新设置偏移量
        let exzoom_nav_width = exzoom_nav.width();
        let nav_item_width = g.navItemMargin + g.navWidth + g.navBorder * 2; // 单个导航元素的宽度
        let new_nav_offset = 0;

        //直接对比当前索引的图片占据的宽度和exzoom的宽度的差作为偏移量即可
        let temp = nav_item_width * (imgIndex + 1);
        if (temp > exzoom_nav_width) {
            new_nav_offset =  boxWidth - temp;
        }

        exzoom_nav_inner.css({
            "left": new_nav_offset
        });

        //切换大图
        let new_position = -boxWidth * imgIndex;
        //在 animate 方法前先调用 stop() ,避免反应迟钝
        new_position = checkNewPositionLimit(new_position);
        exzoom_img_ul.stop().animate({"left": new_position}, 500);
        //处理放大区域
        previewImg(imgArr[imgIndex]);
    }

    /**
     * 导航向右
     */
    function moveRight() {
        imgIndex++;//先增加 index,后面判断范围
        if (imgIndex > imgNum) {
            imgIndex = imgNum;
        }
        move("right");
    }

    /**
     * 导航向左
     */
    function moveLeft() {
        imgIndex--;//先减少 index,后面判断范围
        if (imgIndex < 0) {
            imgIndex = 0;
        }
        move("left");
    }

    /**
     * 自动播放
     */
    function autoPlay() {
        if (g.autoPlay) {
            autoPlayInterval = window.setInterval(function () {
                if (imgIndex >= imgNum) {
                    imgIndex = 0;
                }
                imgIndex++;
                move("right");
            }, g.autoPlayTimeout);
        }
    }

    /**
     * 预览图片
     */
    function previewImg(image_prop) {
        if (image_prop === undefined) {
            return
        }
        exzoom_preview_img.attr("src", image_prop[0]);

        exzoom_main_img.attr("src", image_prop[0])
            .css({
                "width": image_prop[3] + "px",
                "height": image_prop[4] + "px"
            });
        exzoom_zoom_outer.css({
            "width": image_prop[3] + "px",
            "height": image_prop[4] + "px",
            "top": image_prop[5] + "px",
            "left": image_prop[6] + "px",
            "position": "relative"
        });
        exzoom_zoom.css({
            "width": image_prop[7] + "px",
            "height": image_prop[7] + "px"
        });
        exzoom_preview_img.css({
            "width": image_prop[8] + "px",
            "height": image_prop[9] + "px"
        });
    }

    /**
     * 获得图片的真实尺寸
     * @param url
     * @param callback
     */
    function getImageSize(url, callback) {
        let img = new Image();
        img.src = url;

        // 如果图片被缓存，则直接返回缓存数据
        if (typeof callback !== "undefined") {
            if (img.complete) {
                callback(img.width, img.height);
            } else {
                // 完全加载完毕的事件
                img.onload = function () {
                    callback(img.width, img.height);
                }
            }
        } else {
            return {
                width: img.width,
                height: img.height
            }
        }
    }

    /**
     * 计算图片属性
     * @param image : jquery 对象或 图片url地址
     * @param width : image 为图片url地址时指定宽度
     * @param height : image 为图片url地址时指定高度
     * @returns {Array}
     */
    function copute_image_prop(image, width, height) {
        let src;
        let res = [];

        if (typeof image === "string") {
            src = image;
        } else {
            src = image.attr("src");
            let size = getImageSize(src);
            width = size.width;
            height = size.height;
        }

        res[0] = src;
        res[1] = width;
        res[2] = height;
        let img_scale = res[1] / res[2];

        if (img_scale === 1) {
            res[3] = boxHeight;//width
            res[4] = boxHeight;//height
            res[5] = 0;//top
            res[6] = 0;//left
            res[7] = boxHeight / 2;
            res[8] = boxHeight * 2;//width
            res[9] = boxHeight * 2;//height
            exzoom_nav_inner.append(`<span><img src="${src}" width="${g.navWidth }" height="${g.navHeight }"/></span>`);
        } else if (img_scale > 1) {
            res[3] = boxHeight;//width
            res[4] = boxHeight / img_scale;
            res[5] = (boxHeight - res[4]) / 2;
            res[6] = 0;//left
            res[7] = res[4] / 2;
            res[8] = boxHeight * 2 * img_scale;//width
            res[9] = boxHeight * 2;//height
            let top = (g.navHeight - (g.navWidth / img_scale)) / 2;
            exzoom_nav_inner.append(`<span><img src="${src}" width="${g.navWidth }" style='top:${top}px;' /></span>`);
        } else if (img_scale < 1) {
            res[3] = boxHeight * img_scale;//width
            res[4] = boxHeight;//height
            res[5] = 0;//top
            res[6] = (boxHeight - res[3]) / 2;
            res[7] = res[3] / 2;
            res[8] = boxHeight * 2;//width
            res[9] = boxHeight * 2 / img_scale;
            let top = (g.navWidth - (g.navHeight * img_scale)) / 2;
            exzoom_nav_inner.append(`<span><img src="${src}" height="${g.navHeight}" style="left:${top}px;"/></span>`);
        }

        return res;
    }

// 闭包结束     
})(jQuery, window);

</script>
 
@endpush


 @include('forentend3.layouts.customfooter')

