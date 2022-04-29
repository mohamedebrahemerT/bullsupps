 @extends('forentend3.index')

@section('content')
@push('js')

 
<link href="{{url('/')}}/forentend3/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" >
<script src="{{url('/')}}/forentend3/assets/js/bootstrap.min.js"></script>

 <style type="text/css">
  a {
    color: #000;
    text-decoration: none;
}
 
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 15px;
    background: #FFF;
}
 
.col-item .info
{
   
    border-radius: 0 0 5px 5px;
    padding:2px
   
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 10px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}

 </style>

@if(session('lang')  =='ar')
 <script>
function myFunction() {
  document.getElementById("panel").style.display = "block";
  document.getElementById("panel2").style.display = "none";
  document.getElementById("slideshow4").style.display = "block";
  document.getElementById("newlib").style.display = "block";
  document.getElementById("wechoseforyouactive").style.display = "block";
}
</script>


@endif


@if(session('lang')  =='en')
  <script>
function myFunction() {
  document.getElementById("panel").style.display = "block";
  
}
</script>

@endif
 
 

<script type="text/javascript">
	window.onload = setTimeout(function(){
    
     $.ajax({
            url:'{{ url("HomeBestseller") }}',
            dataType:'html',
            type:'post',
            data:{
              _token:'{{ csrf_token() }}',
             
              
            },
            success:function(data)
            {
                $('.Bestseller').html(data);
                $('.color_data_bb').removeClass('hidden');
                $('#showpanel').click();



            },

           });
 
}, 0);
</script>


	<style>
.mySlides {display:none;}
</style>
	 
<script>
var myIndex = 0;
var Q = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
var color =@json($COLORS);

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  var doc = document.getElementById("background");
 

  }
  myIndex++;

   
  if (myIndex > x.length) {myIndex = 1}
  if (Q > color.length-1  ) {Q = 0}

              x[myIndex-1].style.display = "block";  

                   
                
                   
  doc.style.backgroundColor = color[Q];
 
             
	Q++;
 

 


  setTimeout(carousel, 3000); // Change image every 2 seconds

 


}
</script>
 







<style type="text/css">
  video {
  width: 100% !important;
  height:   150px;
  margin-left: -10px;
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

      

<!--input type="button" onclick="chBackcolor('{{$back}}');" -->

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div > 
	<main class="main-content" id="main-content">  

						<div class="mydiv" > 
														@if(session('lang')=='en')

			<div class="html-section index-top-section index-section--flush clearfix" style="height:525px;"  id="background">

				<div class="wrapper">



					<div class="wrap_allcoll grid__item large--one-quarter">



						<div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider" >

							<div class="allcollections-title" style="color:#fff">  
                 <a href="{{url('/')}}/shop" target="_blank">
								<span class="title">{{trans('admin.Categories')}}</span> 
               </a>
								<div class="icon-main-toggle navbar-toggle large--hide">

									<i class="fa fa-caret-down" aria-hidden="true"></i>

								</div>

							</div> 

							<div class=" have-icon" style="height:392px">

								<ul class="sdcollections-list">

             



                 @foreach(departments() as  $Department)



									<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">

										<p class="site-nav__link">

											&nbsp; &nbsp;

											<!--span class="site-nav__icon icon-1">

												  <img src="{{url('/')}}/forentend3/assets/images/cocktail-dress.png" alt="">

												</span -->

		<a href="{{ route('shop.index',['id'=>$Department->id]) }}" class="site-nav__text" target="_blank">



									   @if(session('lang')=='ar')



 {{$Department->dep_name_ar }}



@endif



  @if(session('lang')=='en')

{{$Department->dep_name_en }}



@endif

										</a>

											<!--span class="fa fa-caret-right click_arrow" aria-hidden="true"></span-->

										</p>

						<ul class="site-nav__dropdown" style="max-width: 721px;max-height:430px;" >

      @foreach(App\Department::where('parent',$Department->id)->take(3)->get() as  $cc)



											<li class="column-1 grid__item one-third">



												<div class="row-1">

													<ul>

			 <a href="{{ route('shop.index',['id'=>$cc->id]) }}" target="_blank">

														

												<li class="site-nav__heading">

 @if(session('lang')=='ar')
 {{$cc->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$cc->dep_name_en }}
@endif

	   												</li>

	   </a>



														<li class="sub">

															<ul>

      @foreach(App\Department::where('parent',$cc->id)->take(5)->get() as  $sub)



															<li class="site-nav__link">

 <a href="{{ route('shop.index',['id'=>$sub->id]) }}" target="_blank">

  @if(session('lang')=='ar')
 {{$sub->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$sub->dep_name_en }}
@endif

</a>

                                          @endforeach 



															</li>



															 </ul>

														</li>

													</ul>

												</div>



												<div class="row-2">

													<ul>

			 <a href="{{ route('shop.index',['id'=>departmentsMenue($Department->id, $cc->id)->id ]) }}" target="_blank">



														<li class="site-nav__heading">



						@if(session('lang')=='ar')
              {{departmentsMenue($Department->id, $cc->id)->dep_name_ar}}
@endif
@if(session('lang')=='en')
              {{departmentsMenue($Department->id, $cc->id)->dep_name_en}}
@endif

													</li>

												</a>

														<li class="sub">

															<ul>

      @foreach(App\Department::where('parent',departmentsMenue($Department->id, $cc->id)->id)->take(5)->get() as  $sub2)
															<li class="site-nav__link">
																<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">

  @if(session('lang')=='ar')
 {{$sub2->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$sub2->dep_name_en }}
@endif

															</a>


															</li>

                                          @endforeach 

															 

														</ul>

														</li>

													</ul>

												</div>



											 

											</li>

                                          @endforeach 





											 





										</ul>

									</li>

                                          @endforeach 







								</ul>

							</div>

						</div>

					</div>



		<!----------------------------------------------------------------->

					<div class="wrap_main_slideshow grid__item large--two-quarters" style="width:722px;padding-top: 2px; " >

						<div id="html-section-home-revolution" class="html-section index-section revolution-slider" style="margin-left:13px;">

							<div class="slideshow-revolution">

								<section class="tp-banner-container">

									<div class="tp-banner"  >

										<ul>

 @if(session('lang') =='en' )

     

 

  <img src="{{url('/')}}/forentend3/assets/images/HomeSliderEN1/0OvOZYvw44NAKskOvWBQ4U50irgY58FuZISLSYWM.png" style="border-radius: 8px 8px 8px 8px;" class="mySlides">
  <img src="{{url('/')}}/forentend3/assets/images/HomeSliderEN1/4SZ0FRdagGHaCw92nvTcxhRTmblwhidAPiDCtV4r.png" style="border-radius: 8px 8px 8px 8px;" class="mySlides">
  <img src="{{url('/')}}/forentend3/assets/images/HomeSliderEN1/d6YLf71wOhxAIYIaYGRXBplTFcXjePdsnPaWCGyT.png" style="border-radius: 8px 8px 8px 8px;" class="mySlides">
  <img src="{{url('/')}}/forentend3/assets/images/HomeSliderEN1/PUlVQzw3W7fBMTZxQZyx6F0X1n6qQuQPwn0uLLfi.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides">
  <img src="{{url('/')}}/forentend3/assets/images/HomeSliderEN1/uwdZW0ahh84ajyoBiOtiKiGdY2DFjTAwJZV7LsB7.png" style="border-radius: 8px 8px 8px 8px;" class="mySlides">

 
 

@endif

<!---------------------------------------------------------->



										</ul>

										<div class="tp-bannertimer"></div>										

									</div>

								</section>

							</div>

						</div>

						<div class="brand-area" id="panel">
  <u  style="list-style: none;
    display: inline-flex;
    direction: rtl;
    margin-top: 18px

" class="htc">

                <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags1 as  $tag1)

                     <div class="mySlides2 fade">

                
                      
  <img src="{{Storage::url($tag1->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">        <div class="bottom-right" style="text-align: center;">
        <span      class="Sagda">L.E {{$tag1->price }}</span>
                          
                       </div>
</div>

<div style="text-align:center">
  <span class="dot2"></span> 
  <span class="dot2"></span> 
  <span class="dot2"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags2 as  $tag2)

                     <div class="mySlides3 fade">
                    
  <img src="{{Storage::url($tag2->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">        <div class="bottom-right" style="text-align: center;">
                         
         
<span   class="Sagda">L.E {{$tag2->price }}</span>
  
                       </div>
</div>

<div style="text-align:center">
  <span class="dot3"></span> 
  <span class="dot3"></span> 
  <span class="dot3"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags3 as  $tag3)

                     <div class="mySlides4 fade">
                        
  <img src="{{Storage::url($tag3->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">   <div class="bottom-right" style="text-align: center;">
        
<span   class="Sagda">L.E {{$tag3->price }}</span>

                             
                       </div>
</div>

<div style="text-align:center">
  <span class="dot4"></span> 
  <span class="dot4"></span> 
  <span class="dot4"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags4 as  $tag4)

                     <div class="mySlides5 fade">
                      
  <img src="{{Storage::url($tag4->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">   <div class="bottom-right" style="text-align: center;">
          
<span   class="Sagda">L.E {{$tag4->price }}</span>
                        
                       </div>
</div>

<div style="text-align:center">
  <span class="dot5"></span> 
  <span class="dot5"></span> 
  <span class="dot5"></span> 
</div>

                              @endforeach
                  </a>

                      </li>


                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags5 as  $tag5)

  <div class="mySlides20 fade">
  <img src="{{Storage::url($tag5->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">  <div class="bottom-right" style="text-align: center;">
        
<span   class="Sagda">L.E {{$tag5->price }}</span>

     </div>
</div>

<div style="text-align:center">
  <span class="dot20"></span> 
  <span class="dot20"></span> 
  <span class="dot20"></span> 
</div>

                              @endforeach
                  </a>

                      </li>



                                       
                </u>
   




						</div>

					</div>





		<!------------------------------------------------------------------------->





					<div class="wrap_banner grid__item large--one-quarter">

						<div id="html-section-home-topbanners" class="html-section index-section index-section--flush" style="margin-left:17px;">



							<div class="banners-box">



							 

                               <div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop1 as  $ff)

    <img src="{{Storage::url($ff->photo)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>

<div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop2 as  $ff)

    <img src="{{Storage::url($ff->full_file)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>

								<div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop3 as  $ff)

    <img src="{{Storage::url($ff->full_file)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>
							 



					 



							</div>

						</div>

					</div>



		<!------------------------------------------------------------------------->







				</div>

			</div>
                                                           

								 
                                                       @endif


                                           
                  <!-----------------tata--------------------------------------------------------------------------------->

													 @if(session('lang')=='ar')

			<div class="html-section index-top-section index-section--flush clearfix" style="height:525px;" id="background">

				<div class="wrapper">


<div class="wrap_banner grid__item large--one-quarter">

						<div id="html-section-home-topbanners" class="html-section index-section index-section--flush"  style="margin-left: -46px;">



							<div class="banners-box" style="margin-left:29px;">



							 

                                <div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop1 as  $ff)

    <img src="{{Storage::url($ff->photo)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>

<div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop2 as  $ff)

    <img src="{{Storage::url($ff->full_file)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>

								<div class="banner-element banner-1">

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
<div id="container">
                                @foreach($BannerTop3 as  $ff)

    <img src="{{Storage::url($ff->full_file)}}" style="border-radius:8px;" >
							    @endforeach
   
</div>
									 

									</a>

								</div>
								 



					<!-----------------en bannertop------------------------>

					@if(session('lang') =='en' )

                                @foreach($BannerTop as  $ff)

                                <div class="banner-element banner-1" >

									<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">

										<img src="{{Storage::url($ff->full_file)}}" alt="" style="border-radius:8px;">

									</a>

								</div>

							    @endforeach

								@endif

								<!----------------------------------------->



							</div>

						</div>

					</div>



		<!------------------------------------------------------------------------->



		<!----------------------------------------------------------------->

					<div class="wrap_main_slideshow grid__item large--two-quarters" style="
    width: 722px;
    padding-top: 2px;
    margin-right: 27px;
    margin-left: -19px;" >

						<div id="html-section-home-revolution" class="html-section index-section revolution-slider">

							<div class="slideshow-revolution">

								<section class="tp-banner-container">

									<div class="">

										<ul>

				 @if(session('lang') =='ar' )

            
  
<a href="{{url('/')}}/shop?id=5">  
  <img src="{{url('/')}}/forentend3/assets/images/HomeSlider1/NYaC1b12iw2TA9vsLLl6HsqNtBqCM9tETFnYDWkW.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides" style="width:100%">
  </a>
<a href="{{url('/')}}/shop?id=6">  
  <img src="{{url('/')}}/forentend3/assets/images/HomeSlider1/69C0vBtGOz5Hr6QSSAOukQbsYgYGBmdjOCDjZVH9.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides" style="width:100%">
</a>
<a href="{{url('')}}/shop?id=5">  
    <img src="{{url('/')}}/forentend3/assets/images/HomeSlider1/p83qjrFJIZBpWHp4qThxJwJaH5XnATeEjoLZ1uYW.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides" style="width:100%">
</a>
  

<a href="{{url('/')}}/shop?id=9">  

  <img src="{{url('/')}}/forentend3/assets/images/HomeSlider1/PUlVQzw3W7fBMTZxQZyx6F0X1n6qQuQPwn0uLLfi.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides" style="width:100%">
</a>
<a href="{{url('/')}}/shop?id=3">
   <img src="{{url('/')}}/forentend3/assets/images/HomeSlider1/VcXNASibLlDacDLQeIiSLrbQbxqho4DRoZIGsfIj.jpeg" style="border-radius: 8px 8px 8px 8px;" class="mySlides" style="width:100%">
</a>

 




@endif



 

<!---------------------------------------------------------->



										</ul>

										<div class="tp-bannertimer"></div>										

									</div>

								</section>

							</div>

						</div>
                           
                           <div style="width:722px;height:38px;" id="panel2">
                           	
                           </div>

						<div class="brand-area" class="contentPost" id="panel" style="border-radius:8px;">

					      <u  style="list-style: none;
    display: inline-flex;
    direction: rtl;

" class="htc">

                <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags1 as  $tag1)

                     <div class="mySlides2 fade">

                
                      
  <img src="{{Storage::url($tag1->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">        <div class="bottom-right" style="text-align: center;">
        <span      class="Sagda">L.E {{$tag1->price }}</span>
                          
                       </div>
</div>

<div style="text-align:center">
  <span class="dot2"></span> 
  <span class="dot2"></span> 
  <span class="dot2"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags2 as  $tag2)

                     <div class="mySlides3 fade">
                    
  <img src="{{Storage::url($tag2->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">        <div class="bottom-right" style="text-align: center;">
                         
         
<span   class="Sagda">L.E {{$tag2->price }}</span>
  
                       </div>
</div>

<div style="text-align:center">
  <span class="dot3"></span> 
  <span class="dot3"></span> 
  <span class="dot3"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags3 as  $tag3)

                     <div class="mySlides4 fade">
                        
  <img src="{{Storage::url($tag3->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">   <div class="bottom-right" style="text-align: center;">
        
<span   class="Sagda">L.E {{$tag3->price }}</span>

                             
                       </div>
</div>

<div style="text-align:center">
  <span class="dot4"></span> 
  <span class="dot4"></span> 
  <span class="dot4"></span> 
</div>

                              @endforeach
                  </a>

                      </li>

                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags4 as  $tag4)

                     <div class="mySlides5 fade">
                      
  <img src="{{Storage::url($tag4->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">   <div class="bottom-right" style="text-align: center;">
          
<span   class="Sagda">L.E {{$tag4->price }}</span>
                        
                       </div>
</div>

<div style="text-align:center">
  <span class="dot5"></span> 
  <span class="dot5"></span> 
  <span class="dot5"></span> 
</div>

                              @endforeach
                  </a>

                      </li>


                      <li>
                              <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags5 as  $tag5)

  <div class="mySlides20 fade">
  <img src="{{Storage::url($tag5->photo)}}" alt="" style="border-radius:8px;" width="130" height="90">  <div class="bottom-right" style="text-align: center;">
        
<span   class="Sagda">L.E {{$tag5->price }}</span>

     </div>
</div>

<div style="text-align:center">
  <span class="dot20"></span> 
  <span class="dot20"></span> 
  <span class="dot20"></span> 
</div>

                              @endforeach
                  </a>

                      </li>



                                       
                </u>
   




						</div>

					</div>





		<!------------------------------------------------------------------------->


					<div class="wrap_allcoll grid__item large--one-quarter">



						<div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider" >

							<div class="allcollections-title">  
                 <a href="{{url('/')}}/shop" target="_blank">
                  
								<span class="title" style="color:#fff">{{trans('admin.Categories')}}</span> 
           </a>
								<div class="icon-main-toggle navbar-toggle large--hide">

									<i class="fa fa-caret-down" aria-hidden="true"></i>

								</div>

							</div> 

							<div class=" have-icon" style="height:392px;">

								<ul class="sdcollections-list">

             



                 @foreach(departments() as  $Department)



									<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">

										<p class="site-nav__link">

											&nbsp; &nbsp;

											<!--span class="site-nav__icon icon-1">

												  <img src="{{url('/')}}/forentend3/assets/images/cocktail-dress.png" alt="">

												</span -->

		<a href="{{ route('shop.index',['id'=>$Department->id]) }}" class="site-nav__text" target="_blank">
									   @if(session('lang')=='ar')
 {{$Department->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$Department->dep_name_en }}
@endif

										</a>

											<!--span class="fa fa-caret-right click_arrow" aria-hidden="true"></span-->

										</p>

					<ul class="site-nav__dropdown" style="max-width:723px;max-height:430px;">

      @foreach(App\Department::where('parent',$Department->id)->take(3)->get() as  $cc)



											<li class="column-1 grid__item one-third">



												<div class="row-1">

													<ul>

			 <a href="{{ route('shop.index',['id'=>$cc->id]) }}" target="_blank">

														

												<li class="site-nav__heading">

 @if(session('lang')=='ar')



 {{$cc->dep_name_ar }}



@endif



  @if(session('lang')=='en')

{{$cc->dep_name_en }}



@endif

	   												</li>

	   </a>



														<li class="sub">

															<ul>

      @foreach(App\Department::where('parent',$cc->id)->take(5)->get() as  $sub)



															<li class="site-nav__link">

 <a href="{{ route('shop.index',['id'=>$sub->id]) }}" target="_blank">

  @if(session('lang')=='ar')
 {{$sub->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$sub->dep_name_en }}
@endif

</a>

                                          @endforeach 



															</li>



															 </ul>

														</li>

													</ul>

												</div>



												<div class="row-2">

													<ul>

			 <a href="{{ route('shop.index',['id'=>departmentsMenue($Department->id, $cc->id)->id ]) }}" target="_blank">



														<li class="site-nav__heading">



						@if(session('lang')=='ar')

              {{departmentsMenue($Department->id, $cc->id)->dep_name_ar}}

          

@endif



@if(session('lang')=='en')

              {{departmentsMenue($Department->id, $cc->id)->dep_name_en}}

@endif

		 



		  

													</li>

												</a>

														<li class="sub">

															<ul>

      @foreach(App\Department::where('parent',departmentsMenue($Department->id, $cc->id)->id)->take(5)->get() as  $sub2)



															<li class="site-nav__link">



																<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">

  @if(session('lang')=='ar')



 {{$sub2->dep_name_ar }}



@endif



  @if(session('lang')=='en')

{{$sub2->dep_name_en }}



@endif



															</a>



															</li>

                                          @endforeach 

															 

														</ul>

														</li>

													</ul>

												</div>



											 

											</li>

                                          @endforeach 





											 





										</ul>

									</li>

                                          @endforeach 







								</ul>

							</div>

						</div>

					</div>

<!----------------------------------------------------------------------------------->



					







				</div>

			</div>
                                                           

								 
                                                       @endif

                  <!-------------------------------------------------------------------------------------------------->
</div>
	</div>	

  <div class="wrapper">
    @push('js')
  <script type="text/javascript">
    
  </script>
    @endpush
 
  </div>

  <!--div class="wrapper">
    
  </div -->
<button onclick="myFunction()" id="showpanel"></button>
            

   @if(session('lang')=='ar')

				<div id="html-section-1542810603284" class="html-section index-section index-section--flush" style="margin-top:-91px;">

					<div class="wrapper">


						<div class="search-box">

							 

							<div class="search-section searchslider_1542810603284">
                 <a href="{{url('/')}}/shop" target="_blank"> 

								<h2  style="margin-right: 6px;
    margin-top: 7px;
    font-size: 18px;
">{{trans('admin.Bestseller')}}</h2>
                </a>


                @if(session('lang')=='ar')
                <a href="{{url('/')}}/shop" target="_blank"> 

                <h2  style="
                margin-right: 6px;
text-align: left;
position: absolute;
font-size: 18px;
margin-top: -33px;
margin-left: 6px;
font-weight: 400;">{{trans('admin.more')}}</h2>
                </a>
                @endif
                                <u style="list-style: none;display:flex;">   

                            @foreach($BestSellers as  $BestSeller)
                                        
                           <li>
                                <div class="search-element brand-1">
                 


 <div class="imageBox" style="width:199px">
  <div class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$BestSeller->id}}">
    <img src="{{Storage::url($BestSeller->photo)}}" alt="Default Image" width="200" height="180">
</a>
               </span>
  </div>
  <div class="hoverImg">
          <a href="{{url('/')}}/shop/{{$BestSeller->id}}">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="200" height="180">
</a>

        <div class="bestSellerFrist">
            <a href="{{url('/')}}/cart/{{$BestSeller->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:27px;'></i>
              </span>
 </a>


              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
               <a href="">

             <span class="">
             <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $BestSeller->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


              </span>
 </a>
 
        </div>

      
  </div>
          <a href="{{url('/')}}/shop/{{$BestSeller->id}}">
                 
            <div class="DFG">
                 <span style="float:right;">  {{ $BestSeller->title_name_ar }}</span>

              <span style="float:left;">
                <span style="font-size:13px;color:red">
            L.E {{$BestSeller->price_offer}}.00 </span>
               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$BestSeller->price}}.00
                </span> 
                
              </span>
              
            </div>
        </a>
</div>

 


                 



                </div> 
                           </li>
                               

								 

                                  @endforeach
</u>

								 

							</div>

						</div>

					</div>

				</div>

  @endif
		



		   @if(session('lang')=='en')

				<div id="html-section-1542810603284" class="html-section index-section index-section--flush bsv" style="margin-top:-91px;">

					<div class="wrapper" >


						<div class="search-box">

							 

							<div class="search-section searchslider_1542810603284">
                 <a href="{{url('/')}}/shop" target="_blank"> 

								<h2 style="margin-right: 6px;
    margin-top: 7px;
    font-size: 18px;">{{trans('admin.Bestseller')}}</h2>
                </a>
                    @if(session('lang')=='en')
                <a href="{{url('/')}}/shop" target="_blank"> 

                <h2  style="
                margin-right: 6px;
text-align:right;
 
font-size: 18px;
margin-top: -33px;
margin-left: 6px;
font-weight: 400;">{{trans('admin.more')}}</h2>
                </a>
                @endif

             

                                <u style="list-style: none;display:flex;">   
                    
                            @foreach($BestSellers as  $BestSeller)
                                        
                           <li>

                                  <div class="search-element brand-1">
								 


 <div class="imageBox">
  <div class="imageInn">
        <span class="mtm">  
        	<a href="{{url('/')}}/shop/{{$BestSeller->id}}">
    <img src="{{Storage::url($BestSeller->photo)}}" alt="Default Image" width="200" height="180">
</a>
               </span>
  </div>
  <div class="hoverImg">
        	<a href="{{url('/')}}/shop/{{$BestSeller->id}}">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="200" height="180">
</a>

    	  <div class="bestSellerFrist">
    	  	  <a href="{{url('/')}}/cart/{{$BestSeller->id}}">
						 
						     <span class="">
							 
			<i class='fa fa-shopping-cart' style='font-size:25px;color:#fff; margin-right:27px;'></i>
							</span>
 </a>


							&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
               <a href="">

						 <span class="">
						 <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $BestSeller->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


							</span>
 </a>
 
    	  </div>

    	
  </div>
        	<a href="{{url('/')}}/shop/{{$BestSeller->id}}">
                 
            <div class="DFG">
            	   <span style="float:left;">  {{ $BestSeller->title_name_en }}</span>

						  <span style="float:right;">
						  	<span style="font-size:13px;color:red">
						L.E {{$BestSeller->price_offer}}.00	</span>
						   <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;"> {{$BestSeller->price}}.00
                </span>	
						  	
						  </span>
            	
            </div>
        </a>
</div>

 


								 



								</div> 

                           </li>
								 

                                  @endforeach


</u>
								 

							</div>

						</div>

					</div>

				</div>

  @endif

<br>
    <div class="wrapper" id="newlib" style="margin-top:7px">
    <div class="" style="background-color:#fff;border-radius:8px;height: 315px">
                       @if(session('lang')=='ar')

        <div class="row">
           <div class="col-md-3">

 <a href="{{url('/')}}/shop" target="_blank">
  <span style="font-size: 18px;
margin-top: 6px;
position: absolute;">{{trans('admin.more')}}</span>
</a>
                <!-- Controls -->
                <div class="controls  hidden-xs" style="float: left;
margin-top: 1px;
padding-right: 6px;">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
            <div class="col-md-9">
                <h3 style="    margin-top: 10px;
    margin-right: 9px;">
                   {{trans('admin.CarouselSliderproduct')}}

@if(session('lang') =='ar')
   

@endif
                  </h3>
            </div>
           
        </div>
@endif
                    @if(session('lang')=='en')

        <div class="row">
            <div class="col-md-9">
                <h3 style="    margin-top: 10px;
    margin-right: 9px;
margin-left: 7px;
    ">
                   {{trans('admin.CarouselSliderproduct')}}

@if(session('lang') =='ar')
   

@endif
                  </h3>
            </div>
           
           <div class="col-md-3">

 <a href="{{url('/')}}/shop" target="_blank">
  <span style="
  font-size: 18px;
margin-top: 6px;
position: absolute;
margin-left: 136px;">{{trans('admin.more')}}</span>
</a>
                <!-- Controls -->
                <div class="controls  hidden-xs" style="float: right;
margin-top: 1px;
padding-right: 6px;">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
          
        </div>
@endif

        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="padding-left:3px;padding-right:3px">
                <div class="item active">
                    <div class="row">

                           @foreach($bestevers1 as $bestever1)
                        <div class="col-sm-2">
                            <div class="col-item">
                              <a href="{{url('/')}}/shop/{{$bestever1->id}}">
                                <div class="photo">
                                    <img src="{{Storage::url($bestever1->photo)}}"  style="width:210px;height: 150px"  />
                                </div>
                              </a>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                              <a href="{{url('/')}}/shop/{{$bestever1->id}}" class="RoL">


            @if(session('lang')=='ar')

        {{$bestever1->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$bestever1->title_name_en }} 
@endif
</a>
                                              </h5>
                                            <h5 class="price-text-color">
                                             

                                                    <span class="RoL2">
                <span style="font-size:13px;color:red">
            L.E {{$bestever1->price_offer}}.00 </span>
               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;">  L.E {{$bestever1->price}}.00
                </span> 
                
              </span>
                                        
                                              
                                              </h5>
                                        </div>
                                        <!--div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div -->
                                    </div>
                                    <div class="separator clear-left" style="    background-color: #eb6625;
    border-radius: 0px 0px 15px 15px;
    height: 30px;
">
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="{{url('/')}}/cart/{{$bestever1->id}}">

             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:30px;color:#fff;margin-right:23px;'></i>
              </span>
 </a>


                    &nbsp; 
               <a href="">
                     
             <span class="">
                <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $bestever1->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;margin-left: 16px"></i></span></a> 



              </span>
 </a>
 
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
 
     
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                           @foreach($bestevers2 as $bestever2)

                        <div class="col-sm-2">
                            <div class="col-item">
                              <a href="{{url('/')}}/shop/{{$bestever2->id}}">
                                <div class="photo">
                                        <img src="{{Storage::url($bestever2->photo)}}"  style="width:210px;height: 150px"  />
                                </div>
                              </a>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                              <a href="{{url('/')}}/shop/{{$bestever2->id}}" class="RoL">

                                                   @if(session('lang')=='ar')

        {{$bestever2->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$bestever2->title_name_en }} 
@endif
</a>

                                              </h5>
                                            <h5 class="price-text-color">

                                                   <span class="RoL2">
                <span style="font-size:13px;color:red">
            L.E {{$bestever2->price_offer}}.00 </span>
               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;">  L.E {{$bestever2->price}}.00
                </span> 
                
              </span>
                                              </h5>
                                        </div>
                                        <!--div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div -->
                                    </div>
                                      <div class="separator clear-left" style="    background-color: #eb6625;
    border-radius: 0px 0px 15px 15px;
    height: 30px;
">
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="{{url('/')}}/cart/{{$bestever2->id}}">

             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:30px;color:#fff;margin-right:23px;'></i>
              </span>
 </a>


                    &nbsp; 
               <a href="">
                     
             <span class="">
                <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $bestever2->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;margin-left: 16px"></i></span></a> 



              </span>
 </a>
 
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
 
                      
 
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

<br>

@push('js')
<style type="text/css">
 
 .showSlides500500 {display: none;}

</style>
@endpush

              <div style="margin-top: 27px">

                    <div class="jory" style="border-radius: 8px 8px 0px 0px;">
                     <h1 class="bestgroups">{{trans('admin.bestgroups')}}</h1>
 
 <div class="showSlides500500" style="display: none;">

               @foreach($supers as  $super)


                  <div class="jcon">
                    <a href="{{url('/')}}/Tag/{{$super->id}}" target="_blank">
            <img  src="{{Storage::url($super->photo)}}" alt=""    />

  <span> 
    @if(session('lang')=='ar')

        {{$super->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$super->title_name_en }} 
@endif
       

        </span>
  </a>
  
                  </div>
                              @endforeach
<div style="text-align:center">
  <span class="dot500500"></span> 
  <span class="dot500500"></span> 
  <span class="dot500500"></span> 
</div>

</div>


<div class="showSlides500500">

               @foreach($supers2 as  $super2)


                  <div class="jcon">
                    <a href="{{url('/')}}/Tag/{{$super2->id}}" target="_blank">
            <img  src="{{Storage::url($super2->photo)}}" alt=""    />

  <span>   
     @if(session('lang')=='ar')

        {{$super2->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$super2->title_name_en }} 
@endif
       
   </span>
  </a>
  
                  </div>
                              @endforeach
<div style="text-align:center">
  <span class="dot500500"></span> 
  <span class="dot500500"></span> 
  <span class="dot500500"></span> 
</div>
                              
</div>
              

                   <span  class="spar">{{trans('admin.more')}}</span>

                    
                  </div>
                   
      <div class="jory2"  style="margin-top: -21px;
padding-top: 28px;
border-radius: 0px 0px 8px 8px;">
                
                    <div class="showSlides400400" style="display: none;">

               @foreach($supers3 as  $super3)


                  <div class="jcon">
                    <a href="{{url('/')}}/Tag/{{$super3->id}}" target="_blank">

            <img  src="{{Storage::url($super3->photo)}}" alt=""    />

  <span style=" margin-left: 85px;">  
       @if(session('lang')=='ar')

        {{$super3->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$super3->title_name_en }} 
@endif
       </span>
</a>
  
                  </div>
                              @endforeach
<div style="text-align:center">
  <span class="dot400400"></span> 
  <span class="dot400400"></span> 
  <span class="dot400400"></span> 
</div>

</div>


<div class="showSlides400400">

               @foreach($supers4 as  $super4)


                  <div class="jcon">
                    <a href="{{url('/')}}/Tag/{{$super4->id}}" target="_blank">

            <img  src="{{Storage::url($super4->photo)}}" alt=""    />

  <span style=" margin-left: 85px;"> 
        @if(session('lang')=='ar')

        {{$super4->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$super4->title_name_en }} 
@endif
        </span>
</a>
  
                  </div>
                              @endforeach
<div style="text-align:center">
  <span class="dot400400"></span> 
  <span class="dot400400"></span> 
  <span class="dot400400"></span> 
</div>
                              
</div>
          
                    
                  </div>
               
                
              </div>

     <!---------------seperation---------------------->

<br>
                
                 
      
             <div class=" " style="background-color:#fff;border-radius:8px; height: 327px">
  @if(session('lang')=='ar')
        
        <div class="row">
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls  hidden-xs" style="    float: left;
    margin-top: 1px;
    padding-right: 6px;
">
<a href="{{url('/')}}/shop" style="font-size: 18px;
margin-top: 6px;
position: absolute;
margin-left:43px;
">
  <span>{{trans('admin.more')}}</span>
</a>
                   
                </div>
            </div>
            <div class="col-md-9">
                <h3       class="sammeroffer">
                  {{trans('admin.sammeroffer')}}
                  @if(session('lang') =='ar')
 

@endif

                  </h3>
            </div>
          
        </div>
@endif

@if(session('lang')=='en')
        
        <div class="row">
          
            <div class="col-md-9">
                <h3 style="
    font-size: 18px;
    font-weight: 700;
    margin-left: 8px;
    margin-top: 10px;


                " >
                  {{trans('admin.sammeroffer')}}
                  @if(session('lang') =='ar')
 

@endif

                  </h3>
            </div>

              <div class="col-md-3">
                <!-- Controls -->
                <div class="controls  hidden-xs" style="    float: right;
    margin-top: 1px;
    padding-right: 6px;
">
<a href="{{url('/')}}/shop" style="font-size: 18px;
margin-top: 6px;
position: absolute;
margin-left:-95px;
">
  <span>{{trans('admin.more')}}</span>
</a>
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
          
        </div>
@endif

        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="padding-left:11px;padding-right: 3px;">
                <div class="item active">
                    <div class="row">
                           @foreach($fact1 as $fact)
                                 

                        <div   style="width:32%;float:left;margin-left:10px; border: 1px solid #E1E1E1; ">
                            <div  style="
     
    background: #FFF;
border: 1px solid #E1E1E1;
 

    ">
                              <a href="{{url('/')}}/shop/{{$fact->id}}">

                            <u style="list-style: none;display: inline-flex; margin-left: 12px">
                              <li>
                                 
                                    <img src="{{Storage::url($fact->photo)}}" style="border-radius: 0px"  width="253" height="220" />
                                           <div style="color:red;text-align:center !important;">
                    
                L.E {{$fact->price}}.00
               </div>
                   
                              </li>

&nbsp;&nbsp;
                              <li style="width:150px;margin-right:7px">
                                    <img src="{{Storage::url($fact->photo)}}" style="width:170px;height:100px;border-radius: 0px" style="padding-left:5px" />
                            <div style="color:red;text-align:center !important;">
                               L.E {{$fact->price}}.00
               </div>
                                      <img src="{{Storage::url($fact->photo)}}" style="width:170px;height:100px;border-radius: 0px"  style="padding-left:5px;
                                      
                                      " />
                            <div style="color:red;text-align:center !important;">
                                    
                                      L.E {{$fact->price}}.00
                                    </div>
                                
                              </li>
                            </u>


                              </a>
                           
                                    
                     
                                               
                                      
                                             
                                            <h5 class="price-text-color" style="text-align: center;">
                                                 <span  style="margin-top:5px">
                                          
                                               {{trans('admin.priceoffer')}}
                                                         <span style="font-size:13px;color:red;">
            L.E {{$fact->price_offer}}.00 </span>
                                              </span>
                                             
                  

                                              </h5>
                                   
                                        
                                  
                               
                                    <div class="clearfix">
                                    </div>
                               
                            </div>
                        </div>
                        @endforeach
 
 
                    </div>
                </div>
                <div class="item">
                     <div class="row">
                           @foreach($fact2 as $fact)
                                 

                        <div   style="width:32%;float:left;margin-left:10px; border: 1px solid #E1E1E1; ">
                            <div  style="
     
    background: #FFF;
border: 1px solid #E1E1E1;
 

    ">
                              <a href="{{url('/')}}/shop/{{$fact->id}}">

                            <u style="list-style: none;display: inline-flex; margin-left: 12px">
                              <li>
                                 
                                    <img src="{{Storage::url($fact->photo)}}" style="border-radius: 0px"  width="253" height="220" />
                                           <div style="color:red;text-align:center !important;">
                    
                L.E {{$fact->price}}.00
               </div>
                   
                              </li>

&nbsp;&nbsp;
                              <li style="width:150px;margin-right:7px">
                                    <img src="{{Storage::url($fact->photo)}}" style="width:170px;height:100px;border-radius: 0px" style="padding-left:5px" />
                            <div style="color:red;text-align:center !important;">
                               L.E {{$fact->price}}.00
               </div>
                                      <img src="{{Storage::url($fact->photo)}}" style="width:170px;height:100px;border-radius: 0px"  style="padding-left:5px;
                                      
                                      " />
                            <div style="color:red;text-align:center !important;">
                                    
                                      L.E {{$fact->price}}.00
                                    </div>
                                
                              </li>
                            </u>


                              </a>
                           
                                  
                    
                                               
                                      
                                             
                                            <h5 class="price-text-color" style="text-align: center;">
                                                 <span  style="margin-top:5px">
                                               {{trans('admin.priceoffer')}}
                                                         <span style="font-size:13px;color:red;">
            L.E {{$fact->price_offer}}.00 </span>
                                              </span>
                                             
                  

                                              </h5>
                                                    
                              
                               
                                    <div class="clearfix">
                                    </div>
                               
                            </div>
                        </div>
                        @endforeach
 
                    </div>
                </div>
            </div>
        </div>
    </div>
          
  
  <div id="html-section-1542812906653" class="html-section index-section index-section--flush" style="margin-top:45px;">

      

            <div class="banners-box whenAR" >

              <div class="grid banners-section ">

                <div class="banner-element banner-1 grid__item  captionposition-left">

                  <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">

                    <img src="{{url('/')}}/forentend3/assets/images/Longbunner/Longbunner2.png" alt=""
                    style="border-radius:0px">

                  </a>

                </div>

              </div>

            </div>

        

        </div>

    <div class=" " style="background-color:#fff;border-radius:8px; height: 315px">
  @if(session('lang')=='ar')
        
        <div class="row">
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls  hidden-xs" style="    float: left;
    margin-top: 1px;
    padding-right: 6px;
">
<a href="{{url('/')}}/shop"       style="font-size: 18px;
margin-top: 6px;
position: absolute;
margin-left:43px;
">
  <span>{{trans('admin.more')}}</span>
</a>
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
            <div class="col-md-9">
                <h3  style="padding-right: 8px;
margin-top: 12px;" >
                  {{trans('admin.moreorder')}}
                  @if(session('lang') =='ar')
 

@endif

                  </h3>
            </div>
          
        </div>
@endif

@if(session('lang')=='en')
        
        <div class="row">
          
            <div class="col-md-9">
                <h3 class="moreorder" >
                  {{trans('admin.moreorder')}}
                  @if(session('lang') =='ar')
 

@endif

                  </h3>
            </div>

              <div class="col-md-3">
                <!-- Controls -->
                <div class="controls  hidden-xs" style="    float: right;
    margin-top: 1px;
    padding-right: 6px;
">
<a href="{{url('/')}}/shop" style="font-size: 18px;
margin-top: 6px;
position: absolute;
margin-left:-95px;
">
  <span>{{trans('admin.more')}}</span>
</a>
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>
                </div>
            </div>
          
        </div>
@endif

        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="padding-left:3px;padding-right: 3px;">
                <div class="item active">
                    <div class="row">
                           @foreach($moreorders1 as $moreorder1)
                                 

                        <div class="col-sm-2" style="width:19.99%;float:">
                            <div class="col-item">
                              <a href="{{url('/')}}/shop/{{$moreorder1->id}}">

                                <div class="photo">
                                    <img src="{{Storage::url($moreorder1->photo)}}" style="width:210px;height:177px" />
                                </div>
                              </a>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5 class="RoL">
                              <a href="{{url('/')}}/shop/{{$moreorder1->id}}" >

                                                    @if(session('lang')=='ar')

        {{$moreorder1->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$moreorder1->title_name_en }} 
@endif
</a>

                                              </h5>
                                              <br>
                                            <h5 class="price-text-color">
                                              
                                                     <span class="RoL2">
                <span style="font-size:13px;color:red">
            L.E {{$moreorder1->price_offer}}.00 </span>
               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;">  L.E {{$moreorder1->price}}.00
                </span> 
                
              </span>
                                              </h5>
                                        </div>
                                        <!--div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div -->
                                    </div>
                                     <div class="separator clear-left" style="    background-color: #eb6625;
    border-radius: 0px 0px 15px 15px;
    height: 30px;
">
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="{{url('/')}}/cart/{{$moreorder1->id}}">

             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:30px;color:#fff;margin-right:23px;'></i>
              </span>
 </a>


                    &nbsp; 
               <a href="">
                     
             <span class="">
                <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $moreorder1->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;margin-left: 60px"></i></span></a> 



              </span>
 </a>
 
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
 
                    </div>
                </div>
                <div class="item">
                     <div class="row">
                           @foreach($moreorders2 as $moreorder2)
                                 

                        <div class="col-sm-2" style="width:20%">
                            <div class="col-item">
                              <a href="{{url('/')}}/shop/{{$moreorder2->id}}">

                                <div class="photo">
                                    <img src="{{Storage::url($moreorder2->photo)}}" style="width:210px;height:177px" />
                                </div>
                              </a>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                              <a href="{{url('/')}}/shop/{{$moreorder2->id}}" class="RoL">

                                                    @if(session('lang')=='ar')

        {{$moreorder1->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$moreorder2->title_name_en }} 
@endif
</a>

                                              </h5>
                                              <br>
                                             
                                            <h5 class="price-text-color">
                                                <span class="RoL2">
                <span style="font-size:13px;color:red">
            L.E {{$moreorder2->price_offer}}.00 </span>
               <span style="font-size:11px;text-decoration: line-through;margin-bottom: 5px;">  L.E {{$moreorder2->price}}.00
                </span> 
                
              </span>

                                              </h5>
                                        </div>
                                        <!--div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div --->
                                    </div>
                                     <div class="separator clear-left" style="    background-color: #eb6625;
    border-radius: 0px 0px 15px 15px;
    height: 30px;
">
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                         <a href="{{url('/')}}/cart/{{$moreorder2->id}}">

             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:30px;color:#fff;margin-right:23px;'></i>
              </span>
 </a>


                    &nbsp; 
               <a href="">
                     
             <span class="">
                <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $moreorder2->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;margin-left: 60px"></i></span></a> 



              </span>
 </a>
 
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
				 
   	<div id="html-section-1542810603284" class="html-section index-section index-section--flush" >
					<div class="wrapper"  >

					 

							

             
				<div class="tat" style="margin-top:180px">
					
 
	 
              
   <div id="slideshow" style="background-color:#fff;width:13.66%;height:220px;">

     @if(session('lang')=='ar')

        <a href="{{url('')}}/shop" target="_blank">
          <h2 style="    margin-top: -9px;
    padding: 9px;
    font-size: 18px;
    float: left;
  margin-top:-5px
">{{trans('admin.more')}} </h2>
          </a>
                           @endif

        @if(session('lang')=='en')

        <a href="{{url('')}}/shop" target="_blank">
          <h4 style="margin-top:-9px;padding:9px;">{{trans('admin.offers')}} </h4>
          </a>
                           @endif
                          
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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

        <div class="dynamicContent">
            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
              </span>
 </a>


              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
               <a href="">

             <span class="">
                <i class="fa fa-heart-o" style="color:#fff;font-size:25px;" ></i>



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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

        <div class="dynamicContent">
            <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
              </span>
 </a>


              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
               <a href="">

             <span class="">
                  <span class="">
         <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 



              </span>



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
               
	 <div id="slideshow2" style="background-color:#fff;width:13.66%;height:220px;">
                            @foreach($newalymarketsmalles2 as  $newalymarketsmall)

		<div>
               

               <u style="list-style:none;display: flex;">
00
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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
    	  	  <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">
						 
						     <span class="">
							 
			<i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
							</span>
 </a>


							&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
               <a href="">

						 <span class="">
								<i class="fa fa-heart-o" style="color:#fff;font-size:25px;" ></i>



							</span>
 </a>
 
    	  </div>

    	
  </div>

            <div class="DFG">
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
    	  	  <a href="{{url('/')}}/cart/{{$newalymarketsmall->id}}">
						 
						     <span class="">
							 
			<i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
							</span>
 </a>


							&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
               <a href="">

						 <span class="">
								  <span class="">
				 <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $newalymarketsmall->id }}</span><span> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 



							</span>



							</span>
 </a>
 
    	  </div>

    	
  </div>

            <div class="DFG">
            	   <span style="float:left;margin-top: -5px;">  {{ $newalymarketsmall->title_name_en }}</span>

						  <span style="float: right;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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


	 <div id="slideshow3" style="background-color:#fff;width:13.66%;height:220px;">

     @if(session('lang')=='ar')

	 	    <a href="{{url('')}}/shop" target="_blank">
	  	  	<h2 style="margin-top:-9px;font-weight:700;font-size: 18px;margin-top: -5px;">{{trans('admin.moresell')}} </h2>
	  	  	</a>
                           @endif

                            @if(session('lang')=='en')

        <a href="{{url('')}}/shop" target="_blank">
          <h4 style="margin-top:-9px;font-weight:700;font-size: 18px;margin-top: -5px;margin-left: 96px">{{trans('admin.more')}} </h4>
          </a>
                           @endif

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
    <a href="{{url('/')}}/shop/{{$newalymarketsmall->id}}">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
    </a>

    	  <div class="dynamicContent">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
    <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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


 
	  
 <div id="slideshow4" style="background-color:#fff;width:15.5%;height: 220px;">

                            @foreach($newalymarketsmalles9 as  $newalymarketsmall)

		<div>
             	<a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
                

            

     @if(session('lang')=='ar')
               

               
               			

           <video     muted  style="margin-top:5px">
  <source src="{{url('/')}}/videos/{{$newalymarketsmall->video}}" type="video/mp4">
  
Your browser does not support the video tag.
</video> 
			<span  style="float:right; margin-top:-4px;margin-right:23px;">
               				{{$newalymarketsmall->title_name_ar }}		                
               			</span>	 

               			<span style="float:left; margin-top:-3px;">
               				L.E {{$newalymarketsmall->price_offer}}.00
               			</span>
                       
				 

            
                           @endif


                            @if(session('lang')=='en')
               

               
               			

           <video     muted  style="margin-top:5px">
  <source src="{{url('/')}}/forentend3/movie2.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video> 
			<span  style="float:right; margin-top:-4px;margin-right:23px;">
               				{{$newalymarketsmall->title_name_en }}		                
               			</span>	 

               			<span style="float:left; margin-top:-3px;">
               				L.E {{$newalymarketsmall->price_offer}}.00
               			</span>
                       
				 

            
                           @endif


                           

            
                </a> 
	</div>
							  @endforeach

	</div>
	  


	  <div id="slideshow5" style="background-color:#fff;width:13.66%;height:220px;">

        @if(session('lang')=='ar')

        <a href="{{url('')}}/shop" target="_blank">

          <h2 style="margin-top: -9px;
font-size: 18px;
float: left;
margin-top: -4px;">{{trans('admin.more')}} </h2>
        </a>
                           @endif

	  	@if(session('lang')=='en')

	 	    <a href="{{url('')}}/shop" target="_blank">

	  	  	<h2 style="margin-top:-9px ;font-size:15px;">{{trans('admin.morepalso')}} </h2>
	  	  </a>
                           @endif
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
    <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
     <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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


	<div id="slideshow15" style="background-color:#fff;width:13.66%;height:220px;">
                            @foreach($newalymarketsmalles15 as  $newalymarketsmall)

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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
                           
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">

    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
          </a>
    	  <div class="dynamicContent">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
 

<div id="slideshow115" style="background-color:#fff;width:13.66%;height:220px;">

     @if(session('lang')=='ar')

	 	    <a href="{{url('')}}/shop" target="_blank">

	  	  	<h2 style="margin-top:-9px;font-size:18px;font-weight:700;margin-top: -5px;">{{trans('admin.morepalso')}} </h2>
	  	  </a>
                           @endif
     @if(session('lang')=='en')

           <a href="{{url('')}}/shop" target="_blank">

          <h2 style="margin-top:-9px;font-size:18px;float: left; margin-left:90px">{{trans('admin.moere')}} </h2>
        </a>
                           @endif


            
                            @foreach($newalymarketsmalles115 as  $newalymarketsmall)

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
              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div class="dynamicContent">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
                              <a  href="{{url('/')}}/shop/{{$newalymarketsmall->id}}" target="_blank">
    <img src="{{Storage::url($newalymarketsmall->photo2)}}" alt="Profile Image" width="150" height="140">
  </a>

    	  <div  class="dynamicContent">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
 

  
  
 <div id="html-section-1539617329459" class="html-section ">

					<div class="">

						<div class="brands-box" style="background-color:
#fff;
margin-top: 22px;
border-radius: 10px;
height:219px;
margin-bottom:20px; 
">

						
                      <a href="{{url('/')}}/alyMarket_id=VEN_ACC_300" target="_blank">
							       	<h2 style="
                          margin-top: -6px;
    margin-bottom: 36px;
    margin-left: 22px;
    margin-right: 17px;
    font-size: 18px;
    font-weight: 700;
    padding-top: 9px;

">{{trans('admin.futuredstore')}}</h2>
								</a>

                  <a href="{{url('/')}}/alyMarket_id=VEN_ACC_300" target="_blank">
                      <h2  class="futuredstore">{{trans('admin.more')}} </h2>
                </a>


							

							<div class="grid">

								<div class="brands-section ">

									<div class=" ">

                                <!--------------brandsSections2---------------------------->

 @foreach($popularStores as  $popularStore)

                                   

<div class="cc">

	<div >

		

		        <div class="brand-element brand-1">

										<div class="brand-image">

											<div class="activity-image">



	<img src="{{Storage::url($popularStore->photo)}}" alt=""  style=" height:150px;" />



											</div>



											<div class="brand-hover-items">

												<ul>



      @foreach(brandsSections($popularStore->id) as  $qq)

													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

					<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$qq->id}}">

		<img class="grid-view-item__image" src="{{Storage::url($qq->photo)}}" alt="" width="125" height="125" style="margin-top:35px;">

														</a>

							<span style="text-align: center;margin-right: 12px;">
															<span style="font-size:13px;color:red">
						L.E {{$qq->price_offer}}.00	</span>	

                <span style="font-size:11px;text-decoration: line-through;">{{$qq->price}}.00
                </span>	
														</span>

													</li>

													    @endforeach 

													 

												</ul>

											</div>



										</div>
           <div style="text-align: center;">
		<a class="brand-name" href="{{url('/')}}/{{$popularStore->TheNameOftheStore}}_id={{$popularStore->AcountCode}}">

											

		 @if(session('lang')=='ar')

  {{ $popularStore->TheNameOftheStore }}

  @endif

  @if(session('lang')=='en')

  {{ $popularStore->TheNameOftheStore }}

  @endif

										</a>

										 
									</div>

									</div>

	</div>

</div>



 

                                  @endforeach

                               <!----------------------------------------->

								

							

  

								 

									 

								</div>

							</div>

						</div>

					</div>

				</div>
				</div>


<h3 style="background-color: #fff;
margin-bottom: -1px;
padding-right: 14px;
margin-right:2px;
font-size: 22px;
color: #000;
font-weight: 500;
height: 40px;
border-radius: 8px 8px 0px 0px; padding-left:11px  ">

<span  class="StrongProduct">{{trans('admin.StrongProduct')}}</span>


@if(session('lang') =='ar')
<span style="float: left;">
  <a href="{{url('/')}}/shop">
  <span style="element {
    font-size: 18px;
    position: absolute;
    margin-top: 6px;">{{trans('admin.more')}}</span>
</a>
</span>
@endif

@if(session('lang') =='en')
<span style="float:right;">
  <a href="{{url('/')}}/shop">
  <span style="element {
    font-size: 18px;
    position: absolute;
    margin-top: 6px;">{{trans('admin.more')}}</span>
</a>
</span>
@endif
</h3>



     <div id="slideshow6" style="background-color:#fff;width:14.28%;height:180px;">
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

    	  <div class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

	 <div id="slideshow7" style="background-color:#fff;width:14.28%;height:180px;">
                            @foreach($newalymarketsmalles7 as  $newalymarketsmall)

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

    	  <div  class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

 
	 <div id="slideshow8" style="background-color:#fff;width:14.28%;height:180px;">
                            @foreach($newalymarketsmalles8 as  $newalymarketsmall)

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

    	  <div  class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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



 
   <div id="slideshow9" style="background-color:#fff;width:14.28%;height:180px;">
                            @foreach($newalymarketsmalles55 as  $newalymarketsmall)

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

        <div  class="animationClass6">
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

        <div  class="animationClass6">
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


 
  <div id="slideshow10" style="background-color:#fff;width:14.28%;height:180px;">
                            @foreach($newalymarketsmalles10 as  $newalymarketsmall)

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

    	  <div  class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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



  <div id="slideshow110" style="background-color:#fff;width:14.35%;height:180px;">

    @if(session('lang') =='en')
<span style="float: left;">
  <a href="{{url('/')}}/shop">
  <span style="element {
    font-size: 18px;
    position: absolute;
    margin-top: 6px;">{{trans('admin.more')}}</span>
</a>
</span>
@endif
                            @foreach($newalymarketsmalles110 as  $newalymarketsmall)

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

    	  <div  class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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


 

  <div id="slideshow1110" style="background-color:#fff;width:14.32%;height:180px;">
                            @foreach($newalymarketsmalles1110 as  $newalymarketsmall)

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

    	  <div  class="animationClass6">
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
            	   <span style="float:right;margin-top: -5px;">  {{ $newalymarketsmall->title_name_ar }}</span>

						  <span style="float: left;">
						  	<span style="font-size:13px;color:red">
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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

    	  <div  class="animationClass6">
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
						L.E {{$newalymarketsmall->price_offer}}.00	</span>
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
	</div>
	</div>

		


	 
 

<div   style="background-color:#eee;margin-top: 20px;" >

					<div class="wrapper">

						 
               <br>
               <br>
               <br>
        

					<div id="html-section-1542896197880" class="html-section index-section index-section--flush">

					<div class="wrapper">

						<div class="bestseller-box"  style="margin-top:-85px;">

							                                    

<div class="cc44">

	 

	<div >

		

		        <div class="  brand-1">

										<div class="brand-image">

											 

											<div class="brand-hover-items paddingleft">
                 <a href="{{url('/')}}/shop" target="_blank"> 
             <span      class="futuredproduct" style="" class="leften">{{trans('admin.futuredproduct')}}</span>
  <span class="NLT">{{trans('admin.more')}}</span>

               </a>

               @if(session('lang') =='ar')
  
<a href="{{url('/')}}/shop">
               @if(session('lang') =='en')

  <span class="NLT">{{trans('admin.more')}}</span>
@endif

</a>
 
@endif





                             <br>
                             <br>
												<ul style="margin-top: -60px;">

                                      @foreach($newalymarket1 as  $newalymarket1)





													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

			 

  <span class="imageBox3">
  <span class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$newalymarket1->id}}">
    <img src="{{Storage::url($newalymarket1->photo)}}" alt="Default Image" width="170" height="170">
</a>
               </span>
  </span>
  <span class="hoverImg3">
          <a href="{{url('/')}}/shop/{{$newalymarket1->id}}">

    <img src="http://localhost/dashboard/alymarket3//storage/app/public/productes/Shoes/6.jpg" alt="Profile Image" width="170" height="170">
</a>

        <span  class="newalymarket1shopcart">
            <a href="{{url('/')}}/cart/{{$newalymarket1->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:27px;'></i>
              </span>
 </a>


      
               <a href="">

             <span class="">
             <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $newalymarket1->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


              </span>
 </a>
 
        </span>

      
  </span>
        

												 

					<span style="font-size:16px;">
															@if(session('lang')=='ar')

                                                                                
{{$newalymarket1->title_name_ar }}
@endif
  @if(session('lang')=='en')

{{$newalymarket1->title_name_en }} 

@endif
														</span>
<br>
 
  <span class="enFornew">
<span style="color:red">L.E {{$newalymarket1->price}} </span>
<span style="text-decoration:line-through;">L.E {{$newalymarket1->price_offer}} </span>
				</span>
				


 

													</li>

                         @endforeach



												 



												</ul>

											</div>

										</div>

										 </div>

									</div>

	</div>

</div>



<div class="divided2"></div>



<div class="cc33">

	<div>

		       	<div class=" brand-2">

										<div class="brand-image">

										 

											<div class="brand-hover-items paddingleft">
                 <a href="{{url('/')}}/shop" target="_blank"> 

             <span  class="newalymarket">{{trans('admin.newalymarket')}}

 
  
<a href="{{url('/')}}/shop">

  <h2  class="newalymarket2">{{trans('admin.more')}}</h2>

</a>
 
 
             </span>
                 </a>
                 <br>
                 <br>
												 <ul style="margin-top: -56px;">

                                      @foreach($newalymarket2 as  $newalymarket2)
                          <li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

       

  <span class="imageBox3">
  <span class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$newalymarket1->id}}">
    <img src="{{Storage::url($newalymarket2->photo)}}" alt="Default Image" width="170" height="170">
</a>
               </span>
  </span>
  <span class="hoverImg3">
          <a href="{{url('/')}}/shop/{{$newalymarket2->id}}">

    <img src="http://localhost/dashboard/alymarket3//storage/app/public/productes/Shoes/6.jpg" alt="Profile Image" width="170" height="170">
</a>

        <span      style=" background-color: #eb6625;
text-align: center;
width: 170px;
border-radius: 0px 0px 15px 15px;
margin-top: -1px;
position: absolute;
margin-left:-170px;
margin-top: -36px;">
            <a href="{{url('/')}}/cart/{{$newalymarket2->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:27px;'></i>
              </span>
 </a>


      
               <a href="">

             <span class="">
             <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $newalymarket2->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


              </span>
 </a>
 
        </span>

      
  </span>
        

                         

          <span style="font-size:16px;">
                              @if(session('lang')=='ar')

                                                                                
{{$newalymarket2->title_name_ar }}
@endif
  @if(session('lang')=='en')

{{$newalymarket2->title_name_en }} 

@endif
                            </span>
<br>
 
  <span class="enFornew">
<span style="color:red">L.E {{$newalymarket2->price}} </span>
<span style="text-decoration:line-through;">L.E {{$newalymarket2->price_offer}} </span>
        </span>
        


 

                          </li>
												
 

                         @endforeach

												</ul>

												 



												 

													

											 

											</div>

										</div>

										</div>

									</div>

	</div>





</div>



 

 



                                    </div>

									  </div>

		

							 

						</div>

					</div>

				</div>

				<br>

				<br>
				<br>
				<br>

							@if(session('lang') == 'en')
							<br>
							<br>
				
							@endif

                  @if(session('lang') == 'ar')
             
                <div style="margin-top:222px; padding-bottom: 22px">
        
              @endif

                @if(session('lang') == 'en')
             
                <div style="margin-top:189px;">
        
              @endif




                	<div id="html-section-1539617329459" class="html-section ">

					<div class="wrapper">

						<div class="brands-box" style="background-color:
#fff;border-radius:8px;
margin-bottom: -29px;">

							 

								<h2 class="AlyMarketTitle  buitystle">{{trans('admin.depfutured')}}

@if(session('lang') =='ar')
<a href="{{url('/')}}/shop">
  <span style="float: left;
margin-left: 11px;">{{trans('admin.more')}}</span>
</a>
@endif

@if(session('lang') =='en')
<a href="{{url('/')}}/shop">
  <span style="
float: right;
margin-left: 11px;
font-size: 18px;
  ">{{trans('admin.more')}}</span>
</a>
@endif
                </h2>

							 

							<div class="grid">

								<div class="brands-section ">

									<div class=" ">

                                <!--------------brandsSections2---------------------------->

 @foreach($brandsSections as  $brandsSection)

                                   

<div class="cc">

	<div >

		

		        <div class="brand-element brand-1">

										<div class="brand-image">

											<div class="activity-image">



	<img src="{{Storage::url($brandsSection->icon)}}" alt="" />



											</div>



											<div class="brand-hover-items">

												<ul>



      @foreach(brandsSections($brandsSection->id) as  $qq)

													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

					<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$qq->id}}">

		<img class="grid-view-item__image" src="{{Storage::url($qq->photo)}}" alt="" width="125" height="125" style="margin-top:35px;">

														</a>

							<span style="text-align: center;margin-right: 12px;">
															<span style="font-size:13px;color:red">
						L.E {{$qq->price_offer}}.00	</span>	

                <span style="font-size:11px;text-decoration: line-through;">{{$qq->price}}.00
                </span>	
														</span>

													</li>

													    @endforeach 

													 

												</ul>

											</div>



										</div>
           <div style="text-align: center;">
										<a class="brand-name" href="{{ route('shop.index',['id'=>$brandsSection->id]) }}">

											

		 @if(session('lang')=='ar')

  {{ $brandsSection->dep_name_ar }}

  @endif

  @if(session('lang')=='en')

  {{ $brandsSection->dep_name_en }}

  @endif

										</a>

										 
									</div>

									</div>

	</div>

</div>



 

                                  @endforeach

                               <!----------------------------------------->





                         <!--------------brandsSections2---------------------------->

 @foreach($brandsSections2 as  $brandsSection2)

                                   

<div class="cc">

	<div >

		

		        <div class="brand-element brand-1">

										<div class="brand-image">

											<div class="activity-image">



	<img src="{{Storage::url($brandsSection2->icon)}}" alt="" />



											</div>



											<div class="brand-hover-items">

												<ul>



      @foreach(brandsSections($brandsSection2->id) as  $qq)

													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

					<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$qq->id}}">

		<img class="grid-view-item__image" src="{{Storage::url($qq->photo)}}" style="margin-top:35px;">

														</a>

															<span style="text-align: center;margin-right: 12px;">
															<span style="font-size:13px;color:red">
						L.E {{$qq->price_offer}}.00	</span>	

                <span style="font-size:11px;text-decoration: line-through;">{{$qq->price}}.00
                </span>	
														</span>

													</li>

													    @endforeach 

													 

												</ul>

											</div>



										</div>
           <div style="text-align: center;">
										<a class="brand-name" href="{{ route('shop.index',['id'=>$brandsSection2->id]) }}">

											

		 @if(session('lang')=='ar')

  {{ $brandsSection2->dep_name_ar }}

  @endif

  @if(session('lang')=='en')

  {{ $brandsSection2->dep_name_en }}

  @endif

										</a>

										 
									</div>

									</div>

	</div>

</div>



 

                                  @endforeach

                               <!----------------------------------------->

 





 <!--------------brandsSections3---------------------------->

 @foreach($brandsSections3 as  $brandsSection3)

                                   

<div class="cc">

	<div >

		

		        <div class="brand-element brand-1">

										<div class="brand-image">

											<div class="activity-image">



	<img src="{{Storage::url($brandsSection3->icon)}}" alt="" />



											</div>



											<div class="brand-hover-items">

												<ul>



      @foreach(brandsSections($brandsSection3->id) as  $yy)

													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">

					<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$yy->id}}">

		<img class="grid-view-item__image" src="{{Storage::url($yy->photo)}}" alt="" style="margin-top:35px;">

														</a>

															<span style="text-align: center;margin-right: 12px;">
															<span style="font-size:13px;color:red">
						L.E {{$qq->price_offer}}.00	</span>	

                <span style="font-size:11px;text-decoration: line-through;">{{$qq->price}}.00
                </span>	
														</span>

													</li>

													    @endforeach 

													 

												</ul>

											</div>



										</div>
   <div style="text-align: center;">
										<a class="brand-name" href="{{ route('shop.index',['id'=>$brandsSection3->id]) }}">

											

		 @if(session('lang')=='ar')

  {{ $brandsSection3->dep_name_ar }}

  @endif

  @if(session('lang')=='en')

  {{ $brandsSection3->dep_name_en }}

  @endif

										</a>

										 

									</div>
									</div>

	</div>

</div>



 

                                  @endforeach

                               <!----------------------------------------->

								

								

							

  

								 

									 

								</div>

							</div>

						</div>

					</div>

				</div>
				</div>
                	
                </div>

				 
<br>

        

     <div class="wrapper" id="wechoseforyouactive">
<!-- Item slider-->
   @if(session('lang') =='ar')

    <div  style="
background-color: #fff;
padding-top: -7px;
padding-bottom: 6px;
margin-bottom: 20px;
">
@endif

  @if(session('lang') =='en')

    <div  style="
background-color: #fff;
padding-top: -7px;
padding-bottom: 6px;
margin-bottom: 20px;
    margin-top: 67px;

">
@endif

        <a href="{{url('/')}}/shop" target="_blank"> 
        <h1  class="morepalso enclassslider" style="    padding-top:0px;
    padding-bottom: 6px;
    padding-right: 11px;
">{{trans('admin.morepalso')}}
   @if(session('lang') =='ar')
<a href="{{url('/')}}/shop">
  <span style="    float: left;
    margin-left: 9px;
">{{trans('admin.more')}}</span>
</a>
@endif

   @if(session('lang') =='en')
 
<a href="{{url('/')}}/shop">
  <span style="    float: right;
  
">{{trans('admin.more')}}</span>
</a>
@endif
 
        </h1>
 </a>
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">
 @foreach($wechoseforyouactive as  $wechoseforyou2)

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              
<span class="imageBox3">
  <span class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$wechoseforyou2->id}}">
    <img src="{{Storage::url($wechoseforyou2->photo)}}" class="img-responsive center-block" height="200">
</a>
               </span>
  </span>
  <span class="hoverImg3">
          <a href="{{url('/')}}/shop/{{$wechoseforyou2->id}}">

    <img src="http://localhost/dashboard/alymarket3//storage/app/public/productes/Shoes/3.jpg" class="img-responsive center-block" height="200">
</a>


<h4>
  
        <span     class="wechoseforyou2"    >
            <a href="{{url('/')}}/cart/{{$wechoseforyou2->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:27px;'></i>
              </span>
 </a>


      
               <a href="">

             <span class="">
             <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $wechoseforyou2->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


              </span>
 </a>
 
        </span>

</h4>
      
  </span>
    


                <h4  style="font-family: 'Josefin Sans', sans-serif;
font-weight: 400;
font-size: 18px;
margin: 10px auto 3px;
text-align: right;
float: right;">
                
                        @if(session('lang')=='ar')                                                                 

                        {{$wechoseforyou2->title_name_ar }}

                        @endif

                        @if(session('lang')=='en')

                        {{$wechoseforyou2->title_name_en }} 

                        @endif
              </h4>
              <h5  style="font-family: 'Josefin Sans', sans-serif;
font-weight: 400;
font-size: 18px;
margin: 10px auto 3px;
text-align: right;
float: left;
margin-top:-5px
">
                        <span style="font-size:13px;color:red">
            L.E {{$wechoseforyou2->price_offer}}.00  </span> 

                <span style="font-size:11px;text-decoration: line-through;">{{$wechoseforyou2->price}}.00
                </span> 

                     
              </h5>
            </div>
          </div>

  @endforeach

 @foreach($wechoseforyou as  $wechoseforyou)
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
        
<span class="imageBox3">
  <span class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$wechoseforyou->id}}">
    <img src="{{Storage::url($wechoseforyou->photo)}}" class="img-responsive center-block" height="200">
</a>
               </span>
  </span>
  <span class="hoverImg3">
          <a href="{{url('/')}}/shop/{{$wechoseforyou->id}}">

    <img src="http://localhost/dashboard/alymarket3//storage/app/public/productes/Shoes/3.jpg" class="img-responsive center-block" height="200">
</a>

     <h4>
          <span   style="background-color: #eb6625;
text-align: center;
width: 170px;
border-radius: 0px 0px 15px 15px;
margin-top: -1px;
position: absolute;
margin-left:    -167px;
margin-top: -36px;
">
            <a href="{{url('/')}}/cart/{{$wechoseforyou->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:27px;'></i>
              </span>
 </a>


      
               <a href="">

             <span class="">
             <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $wechoseforyou->id }}</span><span style="font-size:25px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff;"></i></span></a> 


              </span>
 </a>
 
        </span>
     </h4>

      
  </span>
    




              <h4    style="font-family: 'Josefin Sans', sans-serif;
font-weight: 400;
font-size: 18px;
margin: 10px auto 3px;
text-align: right;
float: right;">
                
                        @if(session('lang')=='ar')                                                          
                        {{$wechoseforyou->title_name_ar }}
                        @endif
                        @if(session('lang')=='en')
                        {{$wechoseforyou->title_name_en }} 
                        @endif
              </h4>
              <h5  style="font-family: 'Josefin Sans', sans-serif;
font-weight: 400;
font-size: 18px;
margin: 10px auto 3px;
text-align: right;
float: left;
margin-top:-5px
">
                        <span style="font-size:13px;color:red">
            L.E {{$wechoseforyou->price_offer}}.00  </span> 

                <span style="font-size:11px;text-decoration: line-through;">{{$wechoseforyou->price}}.00
                </span> 

                     
              </h5>
            </div>
          </div>
  @endforeach


        </div>

        <!--div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev">
          <i class='fas fa-angle-left' style='font-size:60px;color:#ed6626;margin-top:88px'></i>
        </a>
        <a class="right carousel-control" href="#itemslider" data-slide="next">
       <i class='fas fa-angle-right' style='font-size:60px;color:#ed6626;margin-top:88px'></i>  
      </div -->

      </div>
    </div>
 
<!-- Item slider end-->  
</div>




     @if(session('lang')=='en')

        <div id="html-section-1542810603284" class="html-section index-section index-section--flush" style="margin-top:-6px;">

          <div class="wrapper" id="enbestseller">

            <div class="search-box">

               
              <div class="search-section searchslider_1542810603284"  style="height:200px">
                 <a href="{{url('/')}}/shop" target="_blank" > 

                <h2 style="font-size:15px;margin:0px;">{{trans('admin.Bestseller')}}
                            <span style="float: right;">{{trans('admin.more')}}</span>
                </h2>
                            </a>

                              <u style="list-style: none;display:flex; text-decoration:none;">  
                            @foreach($BestSellers as  $BestSeller)
                               <li>
                                        

                                  <div class="search-element brand-1">

                                    <div class="search-info">
                    <a class="search-title" href="{{url('/')}}/shop/{{$BestSeller->id}}">
                <div class="tooltip22">
                        <span style="text-align: left;">

                {{str_limit($BestSeller->title_name_en, $limit = 15, $end = '')}}

                        </span>
  <span class="tooltiptext22">{{$BestSeller->title_name_en}} {{$BestSeller->title_name_en}} {{$BestSeller->title_name_en}} {{$BestSeller->title_name_en}} </span>
</div>
 
                </a>
                     

            <div class="search-count" style="font-size:10px">
 <br>  
                  <span style="font-size:13px;color:red">
            L.E {{$BestSeller->price_offer}}.00 </span> 

                <span style="font-size:11px;text-decoration: line-through;">{{$BestSeller->price}}.00
                </span> 
                <br> 
                         <br>
                         

                         <a href="{{url('/')}}/cart/{{$BestSeller->id}}">
                      <span>
                       <i class="fa fa-shopping-cart" style="font-size:20px;color:#eb6625"></i>
                    </span>
</a>
                    &nbsp;

                   
              <span class="">
     <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $BestSeller->id }}</span><span> <i class="fa fa-heart-o" style="font-size:20px;color:red;"></i></span></a> 



              </span> 



                     </span>

                    </div>
                    
                  </div>
                  <a class="search-image" href="{{url('/')}}/shop/{{$BestSeller->id}}">
                    <img src="{{Storage::url($BestSeller->photo)}}" alt=""  height="115" width="200" />
                  </a>

                  
                </div> 

                    </li>

                                  @endforeach

                               </u>
                 

              </div>

            </div>

          </div>

        </div>

  @endif


     @if(session('lang')=='ar')
 
        <div id="html-section-1542810603284" class="html-section index-section index-section--flush"   >

          <div  class="wrapper" id="FbstSAR">

            <div class="search-box">

               
              <div class="search-section searchslider_1542810603284" style="height:200px;">
                 <a href="{{url('/')}}/shop" target="_blank" > 

                <h2 style="font-size:20px;margin:0px;">{{trans('admin.Bestseller')}}
    

                </h2>

                <!-- span style="float: left;">
                   @if(session('lang')=='ar')
 
     {{trans('admin.more')}}
  @endif
                </span -->
                            </a>
                            <u style="list-style: none;display:flex; text-decoration:none;">   
                            @foreach($BestSellers as  $BestSeller)
                                        <li> 

                                  <div class="search-element brand-1">
                                    <a class="search-image" href="{{url('/')}}/shop/{{$BestSeller->id}}">
        <img src="{{Storage::url($BestSeller->photo)}}" alt=""  height="115"   width="200">
                  </a>

                                    <div class="search-info">
                    <a class="search-title" href="{{url('/')}}/shop/{{$BestSeller->id}}">

    

                      <div class="tooltip22">
                        {{str_limit($BestSeller->title_name_ar, $limit = 15, $end = '')}}
  <span class="tooltiptext22">{{$BestSeller->title_name_ar}} {{$BestSeller->title_name_ar}} {{$BestSeller->title_name_ar}} {{$BestSeller->title_name_ar}} </span>
</div>
 
                </a>
            <div class="search-count" style="font-size:10px">
    <br>  

                 
                  <span style="font-size:10px;color:red">
            L.E {{$BestSeller->price_offer}}.00 </span> 
    <br>  
                <span style="font-size:10px;text-decoration: line-through;float:right;">{{$BestSeller->price}}.00
                </span> 
                              
                  <div>


                     <span  style="top:27px;
position: relative;     margin-left: -4px;
    margin-right: -27px;
">
                         <a href="{{url('/')}}/cart/{{$BestSeller->id}}">

                       <span>

                                        
                       <i class="fa fa-shopping-cart" style="font-size:20px;color:#eb6625"></i>
                    
                    </span>
                  </a>

                 &nbsp;

                   
                   
              <span class="" >

 <a href="" id="switchToSaveForLaterHome" aria-expanded="true">
  <span style="display: none;">{{ $BestSeller->id }}</span><span style="font-size:20px;color: red"> <i class="fa fa-heart-o" style="font-size:20px;color:red;"></i></span></a> 

              </span> 
                     </span>

                  </div>


                     </span>

                    </div>
                    
                  </div>
                  

                  
                </div> 

                 
                   </li>
                                  @endforeach

                               
                 </u>

              </div>

            </div>

          </div>

        </div>

  @endif


       

  <div id="html-section-1542812906653" class="html-section index-section index-section--flush" style="margin-top:45px;">

          <div class="wrapper">

            <div class="banners-box whenAR" >

              <div class="grid banners-section ">

                <div class="banner-element banner-1 grid__item  captionposition-left">

                  <a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">

                    <img src="{{url('/')}}/forentend3/assets/images/Longbunner/Longbunner.png" alt="">

                  </a>

                </div>

              </div>

            </div>

          </div>

        </div>


     
    



                 


        <div id="html-section-1542896197880" class="html-section index-section index-section--flush">
 
          <div class="wrapper">

            <div class="bestseller-box" style="padding-top:-28px; padding-bottom:40px;">

           

               

            </div>

          </div>

        </div>



  
				

				<div id="html-section-1539877863095" class="html-section index-section product-in-random" style="margin-top: -45px;">

					<div class="wrapper">

				<div class="page-width section-product-slider clearfix" style="padding-bottom:50px;">

							<div class="section-header" style="padding-top: 0px;" >
                 <a href="{{url('/')}}/shop" target="_blank"> 

								<h3>{{trans('admin.Morefeaturedproducts')}}


                </h3>
							</a>

                      @if(session('lang')=='ar')   
     <span style="text-align: left;
margin-left: -663px;
font-size: 18px;
">{{trans('admin.more')}}</span>
  @endif

                @if(session('lang')=='en')   
     <span style="text-align: right;
font-size: 18px;
margin-left: 1112px;
position: absolute;
margin-top: -33px;">{{trans('admin.more')}}</span>
  @endif

							</div>

      

							<div class="grid grid--uniform grid--view-items ">

								<div class="product-grid-random product-grid-1539877863095" id="loadMoreContainer_1539877863095">								 

								@foreach($Morefeaturedproducts as $Morefeaturedproduct)	

									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">

										<div class="grid-view-item">

											<div class="grid-normal-display">

												<div class="grid__image product-image">

													<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$Morefeaturedproduct->id}}">

			<img class="grid-view-item__image" src="{{Storage::url($Morefeaturedproduct->photo)}}" alt="Consequuntur magni dolores" width="125" height="147">

				<img class="hover-image" src="//cdn.shopify.com/s/files/1/0026/6069/6153/products/p09_380x.jpg?v=1552625424" alt="Consequuntur magni dolores" title="Consequuntur magni dolores" width="125" height="147">

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
							<div class="product-single__add-to-cart" style="background-color: #eb6625;
border-radius: 0px 0px 15px 15px;
height: 30px;
" style="text-align:center;">

    <span style="margin-top: -13px;position: absolute;">
                 <a href="{{url('/')}}/cart/{{$Morefeaturedproduct->id}}">
             
                    
               
          <a href="">

             <span class="">
                 

           <a href="" id="switchToSaveForLaterHome" aria-expanded="true" style="margin-right:20px">
  <span style="display: none;">{{ $Morefeaturedproduct->id }}</span><span style="font-size:30px;color: red"> <i class="fa fa-heart-o" style="font-size:25px;color:#fff; margin-top:15px;"></i></span></a> 
                    

                     </a>



              </span>
 </a>

&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
 
                      
                 <a href="{{url('/')}}/cart/{{$Morefeaturedproduct->id}}">
     
   <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;margin-right:23px;'></i>
              </span>
 </a>
          
    </span>


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

											 
                         
								<span  class="up" style="float: right;">
            <span style="font-size:13px;color:red">
            L.E {{$Morefeaturedproduct->price_offer}}.00  </span> 

                <span style="font-size:11px;text-decoration: line-through;">{{$Morefeaturedproduct->price}}.00
                </span> 
        
                </span>
             				 



												 

											 

      

											 
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

				</div>

			</div>


<!---------------------------new silder ------------------------------------------------> 

@push('js')
<style type="text/css">
  #slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 103px;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}

</style>
<script type="text/javascript">
  $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>
@endpush     
<!---------------------------end silder ------------------------------------------------>      

		</main>



  

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
                 	   <span class="cart_sucess"> </span>

         <p>{{trans('admin.name')}}:<span class="productName"> </span></p>
        <p>{{trans('admin.price')}}:<span class="productprice"> </span> </p>
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


                      @include('forentend3.layouts.login')

 



@endsection

