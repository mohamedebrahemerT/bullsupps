@extends('forentend3.index')

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

        
<main class="main-content">
  <div id="html-section-cart-template" class="html-section" style="background-color:#fff">
        <div id="CartSection">

          <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
              <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                <a href="{{url('/')}}" title="Back to the frontpage">{{trans('admin.Home')}}</a>
                <span aria-hidden="true">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
                <span>{{trans('admin.ShoppingCart')}}</span>
              </nav>
            </div>
          </header>
                   

          <div class="wrapper">
            <div class="grid">

              <div class="grid__item">
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
                <form action="./cart.html" method="post" novalidate="" class="cart">
                    @if (Cart::count() > 0)
                  <div class="cart__row medium-down--hide cart__header-labels">
                    <div class="grid--full">
                      <div class="grid__item">
                        <div class="item-row">
                          <div class="grid__item one-quarter"></div>
                          <div class="grid__item two-quarters"></div>

                            <div class="grid__item one-quarter medium-down--half text-center">
                            {{trans('admin.pname')}}
                          </div>
                          <div class="grid__item one-quarter medium-down--half text-center">
                            {{trans('admin.Quantity')}}
                          </div>

                        

                            <div class="grid__item one-quarter medium-down--half text-right">
                            {{trans('admin.price')}}

                            
                          </div>
                          <div class="grid__item one-quarter medium-down--half text-right">
                            {{trans('admin.dd')}}

                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  


                @foreach (Cart::content() as $item)

                     <!--table -->
                                
                                        <tr>
                                                <th>

                  <div class="cart__row">
                    <div class="grid--full cart__row--table-large">
                      <div class="grid__item">
                        <div class="item-row">
                          <div class="grid__item one-quarter grid-product-image">
                            <a href="{{url('/')}}/shop/{{ $item->model->id}}" class="cart__image">
   @if(session('SRC'))
    <img src="{{url('/')}}/images/{{session('SRC')}}" alt="Cum sociis natoque - XS / Black">

    
 @else
    <img src="{{Storage::url($item->model->photo)}}" alt="Cum sociis natoque - XS / Black">
@endif

                           


                            </a>
                          </div>
                          <div class="grid__item two-quarters grid-product-name">
                            <a href="{{url('/')}}/shop/{{ $item->model->id}}" class="h4 cart__product-name">
                      
   @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}

   @endif

   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}

    @endif
                            </a>
                            <p class="cart__product-meta">

                            
    @if(session('color'))
    {{trans('admin.color')}} : {{ session('color') }} <br>
 @else
{{trans('admin.colors')}} : {{$item->model->color_idd->name_ar }} <br>
@endif

 @if(session('sizes'))
    {{trans('admin.sizes')}} : {{ session('sizes') }} <br>
 @else
{{trans('admin.sizes')}} : {{$item->model->color_idd->name_ar }} <br>
@endif

 
                            </p>
                            <p class="cart__product-meta">
                                <a href="" class="remove" aria-expanded="true">
  <span style="display: none;">{{ $item->rowId }}</span><span style="font-size:30px;color: red"> <i class="fa fa-trash" style="font-size:30px;color:#eb6625;"></i></span></a> 
                    

                     </a>
                     &nbsp;&nbsp;

                      <a href="" id="saveForLater" aria-expanded="true">
  <span style="display: none;">{{ $item->rowId }}</span><span style="font-size:30px;color: red"> <i class="fa fa-heart" style="font-size:30px;color:#eb6625;"></i></span></a> 
                    

                     </a>

                            </p>
                          </div>

                          <div class="grid__item one-quarter">
                            <label for="updates_12874796892249:075fb03e9d7c5e2791b4ac9b5f113c6b" class="visually-hidden">Quantity</label>

                            <div class="js-qty">
                               <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select> 
                            </div>
                          </div>

                          <div class="grid__item one-quarter grid-product-price">
                            <span class="cart__price">
                            @if(session('price'))
                              <span class="money" doubly-currency-usd="9000" doubly-currency="USD">{{ session('price') }} L.E</span>
                            </span>
                            @else
                         <span class="money" doubly-currency-usd="9000" doubly-currency="USD">{{ $item->model->price }} L.E</span>
                            </span>
                            @endif
                          </div>

                          <div class="grid__item one-quarter grid-product-price">
                            <span class="cart__price">
                              <span class="money" doubly-currency-usd="9000" doubly-currency="USD">{{ presentPrice($item->subtotal) }}  L.E</span>
                            </span>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>


                        </th>


                                        </tr>

                                

                                <!---/table --->
                                <br>
                @endforeach

                          @else
                         <br>
                  
                  
                          <h3>
                             &nbsp;&nbsp;{{trans('admin.NoitemsInCart!')}}

                         <br>
                         <br>
                       
      

                         <a href="{{ route('shop.index') }}" class="btn--secondary update-cart">
                         {{trans('admin.ContinueShopping')}}
                          <span class="icon icon-arrow-right" aria-hidden="true"></span>
                         
                        </a>

                         <a href="{{ route('wishlist.index') }}" class="btn cart__checkout">
                         {{trans('admin.wishlist')}}
                          <span class="icon icon-arrow-right" aria-hidden="true"></span>
                         
                        </a>

                          </h3>
                   
             
            

            @endif

            <div class="cart__row">
                    <div class="grid--full cart__row--table-large">
                      <div class="grid__item large--five-twelfths text-center large--text-right push--large--seven-twelfths">
                        <div class="grid--full cart__row--table">
                          <div class="grid__item one-half large--two-thirds large--text-center">
                            <p class="cart__subtotal_title">    {{trans('admin.Subtotal')}}
</p>
                          </div>
                          <div class="grid__item one-half large--one-third">
                            <p class="cart__subtotal">
                              <span class="money">{{ presentPrice(Cart::Total()) }} USD</span>
                            </p>
                          </div>
                        </div>
                        <p>
                          <em>{{trans('admin.shipnn')}} </em>
                        </p>

                        <button type="submit" name="update" class="btn--secondary update-cart">Update Cart

                        </button>


                        <a href="{{ route('Checkout.index') }}" class="btn cart__checkout">
                         {{trans('admin.CheckOut')}}
                          <span class="icon icon-arrow-right" aria-hidden="true"></span>
                         
                        </a>

                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </main>
@endsection


 
