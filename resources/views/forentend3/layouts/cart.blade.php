@push('js')


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

@endpush



  <div id="CartDrawer" class="drawer drawer--right drawer--has-fixed-footer" tabindex="-1">

    <div class="drawer__fixed-header">

      <div class="drawer__header">

        <div class="drawer__title">{{trans('admin.Yourcart')}} </div>

        <div class="drawer__close">

          <button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">

            <span class="icon icon-x" aria-hidden="true"></span>

            <span class="fallback-text">{{trans('admin.CloseCart')}}</span>

          </button>

        </div>

      </div>

    </div>

    <div class="drawer__inner">

      <div id="CartContainer" class="drawer__cart">

        <form action="./cart.html" method="post" novalidate="" class="cart ajaxcart">

          <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer">
         <h3>
                <span class="cart_sucess"></span>

           </h3>

               @if (session()->has('success_message'))
                <div class="alert alert-success cc">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger" style="text-align:right;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

  @if (Cart::count() > 0)



                @foreach (Cart::content() as $item)
                                <table >
                                    <tbody>
                                        <tr>
                                                <th>

            <div class="ajaxcart__product">

              <div class="ajaxcart__row" data-line="1">

                <div class="grid">

                  <div class="grid__item one-quarter">

                    <a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html" class="ajaxcart__product-image">

                      <img src="{{Storage::url($item->model->photo)}}" alt="Raesent Scelerisque Dan">

                    </a>

                  </div>

                  <div class="grid__item three-quarters">

                    <div class="ajaxcart__product-name--wrapper">

                      <a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html" class="ajaxcart__product-name">

   @if(session('lang')=='ar')

   {{ $item->model->title_name_ar }}



   @endif



   @if(session('lang')=='en')

   {{ $item->model->title_name_en }}



    @endif

                      </a>

                      <span class="ajaxcart__product-meta" style="color:#fff">XS / Red</span>

                    </div>

                    <div class="grid--full display-table">

                      <div class="grid__item display-table-cell one-half">

                        <div class="ajaxcart__qty">

                           <label for="updates_12874796892249:075fb03e9d7c5e2791b4ac9b5f113c6b" class="visually-hidden">Quantity</label>



                          <div class="ajaxcart__qty">

                          <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-qty="0" data-line="1">

                            <span class="icon icon-minus" aria-hidden="true"></span>

                            <span class="fallback-text" aria-hidden="true">−</span>

                          </button>

                          <input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" data-line="1" aria-label="quantity" pattern="[0-9]*" id="inputDatabaseName" >

                          <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-line="1" data-qty="2">

                            <span class="icon icon-plus" aria-hidden="true"></span>

                            <span class="fallback-text" aria-hidden="true">+</span>

                          </button>

                        </div>

                        </div>

                  



                      </div>

                       <a href="" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right remove" aria-controls="CartDrawer" aria-expanded="true">

                     

                         <a href="" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right remove" aria-controls="CartDrawer" aria-expanded="true">
  <span style="display: none;">{{ $item->rowId }}</span><span style="font-size:30px;color: red"> <i class="fa fa-trash" style="font-size:20px;color:#eb6625;"></i></span></a> 
                    

                     </a>


                     

                      <div class="grid__item display-table-cell one-half text-right">

                        <span class="ajaxcart__price">

                          <span class="money" style="color:#fff">L.E{{ $item->model->price }} </span>

                        </span>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

                                            </th>


                                        </tr>

                                    </tbody>

                                </table>
                                <br>

      @endforeach



                          @else



                <h3>
                  {{trans('admin.NoitemsInCart!')}}
                
              </h3>

                    <br>

            

                <a href="{{ route('shop.index') }} " class="button cart_button_checkout">{{trans('admin.ContinueShopping')}}</a>

             <br>

             <br>



            @endif

           

  

          </div>

          <div class="ajaxcart__footer ajaxcart__footer--fixed">

            <div class="grid--full">

              <div class="grid__item two-thirds">

                <p class="ajaxcart__subtotal">{{trans('admin.Subtotal')}}</p>

              </div>

              <div class="grid__item one-third text-right">

                <p class="ajaxcart__subtotal"><span class="money">L.E{{Cart::Total() }}</span></p>

              </div>

            </div>

            <p class="ajaxcart__note text-center">

             {{trans('admin.saC')}}</p>

            <a href="{{url('/')}}/cart" class="btn--secondary btn--full cart__checkout" style="margin-bottom:10px;">

             {{trans('admin.ShoppingCart')}}   <span class="icon icon-arrow-right" aria-hidden="true"></span>

            </a>

            <a href="{{url('/')}}/guestCheckout" class="btn--secondary btn--full cart__checkout" name="checkout">
 {{trans('admin.CheckOut')}} 
               <span class="icon icon-arrow-right" aria-hidden="true"></span>

            </a>

          </div>

        </form>



      </div>

    </div>

  </div>