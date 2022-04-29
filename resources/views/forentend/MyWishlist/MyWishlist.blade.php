 @extends('forentend.index2')

@section('content')

 @push('js')

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

 
  <script type="text/javascript">
  	
  	 $(document).on('click','.remove',function(){
                  
                     var tr = $(this).closest('tr');
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

                      var tr = $(this).closest('tr');
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

                var tr = $(this).closest('tr');
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
                      $('.Removesavforlater').html('');
                         $('.cc').addClass('hidden');
            },
            success:function(data)
            {
             
             $('.Removesavforlater').html(data.success);  

            }
        });
             return false;
    
                    
                     
                    });
  </script>



    <script type="text/javascript">
      $(document).on('click','#switchToCart',function(){

                 var tr = $(this).closest('tr');
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

              @endpush

        
 
    <!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{url('')}}/forentend/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{url('')}}/forentend/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">

				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">MyWishlist </div>
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

                          
                        </div>
					 

 
						<br>
						<br>

						  @if (Cart::instance('saveForLater')->count() > 0)

            <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h2>

            <div class="saved-for-later cart-table">
                              <span class="Removesavforlater"></span>

            	  <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">product</th>
                                            <th scope="col">price</th>
                                            <th scope="col">qunatity</th>
                                            <th scope="col">total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                   @foreach (Cart::instance('saveForLater')->content() as $item)

 

                                        <tr>
                                            <th scope="row">

                   <form action="#" method="POST">
                           
                       <span>
                           
                 {{ csrf_field() }}
                         
                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
<a class="cart-options" id="switchToCart"><span style="display: none;">{{ $item->rowId }}
</span>Move to Cart</a>
                

                            </form>
   
             

                       <form action="#" method="POST">
                           
                       <span>
                           
                                                     {{ csrf_field() }}
                         
                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
<a class="cart-options" id="Removesavforlater"><span style="display: none;">{{ $item->rowId }}</span>Remove</a>
                

                            </form>
 
                       


                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
      <img src="{{Storage::url($item->model->photo)}}" alt="" style="width: 100px;height: 100px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>



   @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}

   @endif

   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}

    @endif


                                                    </h4>
                                                    </div>
                                                </div>
                                            </td>
                               <td><p>${{ $item->model->price }}</p></td>
           

           <td> <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>   </td>


                           <td><p>{{ presentPrice($item->subtotal) }}</p></td>
                                        </tr>

                @endforeach

                                     
                                    </tbody>
                                </table>
            

            </div> <!-- end saved-for-later -->

            @else
            <br>
            <br>

            <h3>You have no items Saved for Later.</h3>

            @endif


					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="{{url('')}}/forentend/images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

@endsection


 
