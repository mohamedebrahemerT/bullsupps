 


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
