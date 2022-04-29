   @extends('forentend4.index')



@section('content')

 





<div class="breadcrumbs">

  <div class="container">

       <div class="current-name">   

                          

                 

              

          

                

             

        

             {{$title}}

              </div>

      <ul class="breadcrumb">

                <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>

                <li><a href="{{url('/')}}/title={{$title}}">  {{$title}}</a></li>

              </ul>

    </div>

</div>

<div class="container">

  

  <div class="row">

                <div id="content" class="col-sm-12">

	

		<div class="products-category">

								 

 



<div class="product-filter product-filter-top filters-panel">

  <div class="row">

		<div class="col-sm-5 view-mode">

						

						<div class="list-view">

				<div class="btn btn-gridview">{{trans('admin.GridView')}}:</div>

				<button type="button" id="grid-view-2" class="btn btn-view hidden-sm hidden-xs">2</button>

			  	<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>

			  	<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>

			  	<button type="button" id="grid-view-5" class="btn btn-view hidden-sm hidden-xs">5</button>

				<button type="button" id="grid-view" class="btn btn-default grid hidden-lg hidden-md" title="شبكة"><i class="fa fa-th-large"></i></button>

				<button type="button" id="list-view" class="btn btn-default list " title="قائمة"><i class="fa fa-bars"></i></button>

				<button type="button" id="table-view" class="btn btn-view"><i class="fa fa-table" aria-hidden="true"></i></button>

				

			</div>

		</div>

	

	 

	

  </div>

</div>





  <div class="products-list row nopadding-xs">

      @foreach($productsgrid  as  $Most)

      

      <div class="product-layout ">

      
        <div class="product-item-container">

          <div class="left-block">                    

                            

              <div class="square"  style="height:200px;
    width:200px;">

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
      $strlen= strlen($Most->title_name_ar); 
       @endphp

       

       @if($strlen  < 50)

         <div class="jsx-564649128 name" style="min-height: 32px; margin-bottom: 22px;
">
    <div style="overflow: hidden;">
      <span>

        {{ str_limit($Most->title_name_ar, $limit = 50, $end = '...') }}  
 
      </span>
    </div>
  </div>

       @else


  <div class="jsx-564649128 name" style="min-height: 32px; margin-bottom: 4px;
">
    <div style="overflow: hidden;">
      <span>

        {{ str_limit($Most->title_name_ar, $limit = 40, $end = '...') }}   
 
      </span>
    </div>
  </div>

  @endif

  <div class="jsx-564649128 priceRow" style="letter-spacing: 0 !important;">
   
   @if($Most->price_offer  > 0)   

       <p class="jsx-4251264678 price" style="    display: flex;
    -moz-box-align: center;
    align-items: center;
    flex-wrap: wrap;
">



        <span class="jsx-4251264678 sellingPrice" style="    margin-left: 4px;
    margin-right: 0px;
">
   <span ><span class="value"> {{$Most->price_offer }}</span> <span class="currency medium">جنيه</span></span></span>

          <span class="jsx-4251264678 preReductionPrice" style="    color: rgb(178, 187, 210);
"><span style="text-decoration: line-through;"><span class="value">{{$Most->price }} </span> <span class="currency null">جنيه</span></span></span></p>
      
            @endif
        </div>


   @if($Most->price_offer  == 0)

     <p class="jsx-4251264678 price" style="    display: flex;
    -moz-box-align: center;
    align-items: center;
    flex-wrap: wrap;
">


 

          <span class="jsx-4251264678 preReductionPrice" style="    color:#000
">

<span><span class="value">{{$Most->price }} </span> <span class="currency null">جنيه</span></span></span>
</p>
      
 
   @endif  

          <div class="jsx-564649128 discountFulfilmentRow" style="margin-top: auto;">

            <div class="jsx-564649128 discountFulfilmentContent" style="    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 4px;
">
              <div class="jsx-564649128 fulfilmentContainer" style="margin-left: 6px;
margin-right: 0;">
                <div><div class="jsx-193278340 container" style="    display: flex;
    align-self: flex-start;
    -moz-box-align: center;
    align-items: center;
">

<!--img style="height: 17px;" src="https://k.nooncdn.com/s/app/2019/noon-bigalog/df2650bcce3dfb3d988a9c6b4197bdb84e08f87e/static/images/noon-express-ar.png" alt="noon-express" class="jsx-193278340 fbn" -->

</div>

</div></div>

             


</div>
          </div>
        </div>
            

                

              

                            

              







                              <div class="rating">

                                   <span class="jsx-2467480612 discountTag" style="    color: rgb(56, 174, 4);
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: bold;
    padding: 0px 4px;
    position: relative;
    display: inline-block;
    line-height: 16px;
">

<span class="jsx-2467480612 bg">
  
</span>
  @if($Most->price_offer  > 0)

<span class="jsx-2467480612 value" style="font-size: 15px">خصم    {{ ratio($Most->price,$Most->price_offer) }}٪</span>
 @endif 
</span>

                                                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

                                                          </div>

      

                        

        



        </div>

      </div>

      

               @endforeach

      

      

 

      



    </div>



 

<div class="product-filter product-filter-bottom filters-panel">

	<div class="row">

		<div class="col-sm-6 text-left"></div>

	 

	</div>

</div>



<script type="text/javascript"><!--

reinitView();



function reinitView() {



	$( '.product-card__gallery .item-img').hover(function() {

		$(this).addClass('thumb-active').siblings().removeClass('thumb-active');

		var thumb_src = $(this).attr("data-src");

		$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);

	}); 



	$('.view-mode .list-view button').bind("click", function() {

		$(this).parent().find('button').removeClass('active');

		$(this).addClass('active');

	});	

	// Product List

	$('#list-view').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');

		localStorage.setItem('listview', 'list');

	});



	// Product Grid

	$('#grid-view').click(function() {

		var cols = $('.left_column , .right_column ').length;



		

		$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');

		

		localStorage.setItem('listview', 'grid');

	});



	// Product Grid 2

	$('#grid-view-2').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');

		localStorage.setItem('listview', 'grid-2');

	});



	// Product Grid 3

	$('#grid-view-3').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');

		localStorage.setItem('listview', 'grid-3');

	});



	// Product Grid 4

	$('#grid-view-4').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');

		localStorage.setItem('listview', 'grid-4');

	});



	// Product Grid 5

	$('#grid-view-5').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');

		localStorage.setItem('listview', 'grid-5');

	});



	// Product Table

	$('#table-view').click(function() {

		$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');

		localStorage.setItem('listview', 'table');

	})



	

			if(localStorage.getItem('listview')== null) localStorage.setItem('listview', 'grid-5');

	

	if (localStorage.getItem('listview') == 'table') {

		$('#table-view').trigger('click');

	} else if (localStorage.getItem('listview') == 'grid-2'){

		$('#grid-view-2').trigger('click');

	} else if (localStorage.getItem('listview') == 'grid-3'){

		$('#grid-view-3').trigger('click');

	} else if (localStorage.getItem('listview') == 'grid-4'){

		$('#grid-view-4').trigger('click');

	} else if (localStorage.getItem('listview') == 'grid-5'){

		$('#grid-view-5').trigger('click');

	} else {

		$('#list-view').trigger('click');

	}

	



}



//--></script> 			</div>

	

     </div>

    </div>

</div>





@endsection

