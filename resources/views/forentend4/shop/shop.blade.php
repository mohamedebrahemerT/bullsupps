  @extends('forentend4.index')


@section('content')
 @push('js')


 <style type="text/css">
  @media only screen and (min-width: 1200px) 
  {
.Component00 {
  height: 280px;
  background-color: #eee;
  margin-bottom: 5%;
}
}
 </style>
 
 @endpush











<div class="breadcrumbs ">

	<div class="container">

 

		<ul class="breadcrumb">

			<li><a href="{{url('/')}}">{{trans('admin.Home')}}  </a></li>

			<li><a href="{{url('/')}}/shop">{{$categoryName}}</a></li>

		</ul>

	</div>

</div>


<div class="container">

   <div class="row">
   		 
   		
<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas ">

		<span id="close-sidebar" class="fa fa-times"></span>

		<div class="module so_filter_wrap block-shopby">

			<h3 class="modtitle">	{{trans('admin.Filters')}}  </h3>



			<div class="modcontent">

				<ul data-product_id="101,100,96,86,52,99,51,66,95,91,104,102,97,98,103">

				  

 														 



								@foreach(AllCategoriesshop()  as  $Department)


		<li class="so-filter-options" data-option="Subcategory">

				  
								           <div class="so-filter-content-opts">

							<div class="so-filter-content-opts-container">

				 
		 

							 

			 

<a href="{{url('/')}}/shop?id={{$Department->id}}" >

										<img class="hidden" src="{{Storage::url($Department->icon)}}" style="height: 20px;width: 20px">

  @if(session('lang')=='ar')

					{{$Department->dep_name_ar }}

					@endif

					@if(session('lang')=='en')

					{{$Department->dep_name_en }}  

					@endif

				</a>

<i class="fa fa-angle-down float-Ar-En"></i>



							 
									<hr>

												 
 

												 



 
								           </li>
@endforeach





																						</ul>



																	 

																					</div>

																				</div>
 
</aside>
   	<div class="col-lg-9">

   	<span style="height: 22px;
left: 464px;
top: 294px;

font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 22px;

/* identical to box height */

/* black */
color: #28201C;

opacity: 0.8;">
   			{{$products2->count()}}  {{trans('admin.items')}}  
   		</span>

   		<div  class="row" style="
font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 22px;

/* identical to box height */

color: #000000;

">
   		<div style="display:flex;" class="col-sm-6">
   			<div style="font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 22px;
color: #000000;
margin-top: 10px;

">{{trans('admin.Selected Filters')}} 
   		 : 
   		</div>	

   		<div  style=" 
flex-direction: row;
justify-content: center;
align-items: center;
padding: 10px 12px;

position: static;
width: 180.63px;
height: 42.63px;
left: 155px;
top: 0px;

background: rgba(208, 192, 179, 0.4);
border-radius: 4px;

/* Inside auto layout */
flex: none;
order: 1;
flex-grow: 0;
margin: 0px 10px;
">
{{$categoryName}}  &nbsp; <a  href="{{url('/')}}/shop">X</a>
   		</div>
 
   			
   		</div>
<div  class="col-sm-6">
	   <div class="products-header">
                 
                <div>
                    <strong>{{trans('admin.Price')}} : </strong>
 <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'low_high']) }}">{{trans('admin.Low to High')}}</a> |
                    <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'high_low']) }}">{{trans('admin.High to Low')}}</a>
 |
                     <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'Availability']) }}">{{trans('admin.Availability')}} </a>
 |
                      <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'New']) }}">  {{trans('admin.New')}}</a>

                    

                </div>
            </div>
</div>
 

   		</div>
<hr>
   		@foreach($products2 as  $product)
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
   	
   </div>
	
</div>
 
 



	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<div class="w3-container">



		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" id="control-qid13228" style="display: none;">Open Modal</button>



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

					 

				</footer>

			</div>

		</div>

	</div>
<br>
<br>
@endsection

