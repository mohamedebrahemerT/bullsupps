

   @if(session('lang')=='ar')

				<div id="html-section-1542810603284" class="html-section index-section index-section--flush" style="margin-top:-102px;">

					<div class="wrapper">


						<div class="search-box">

							 

							<div class="search-section searchslider_1542810603284">
                 <a href="{{url('/')}}/shop" target="_blank"> 

								<h2>{{trans('admin.Bestseller')}}</h2>
                </a>
                                <u style="list-style: none;display:flex;">   

                            @foreach($BestSellers as  $BestSeller)
                                        
                           <li>
                                <div class="search-element brand-1">
                 


 <div class="imageBox">
  <div class="imageInn">
        <span class="mtm">  
          <a href="{{url('/')}}/shop/{{$BestSeller->id}}">
    <img src="{{Storage::url($BestSeller->photo)}}" alt="Default Image" width="150" height="180">
</a>
               </span>
  </div>
  <div class="hoverImg">
          <a href="{{url('/')}}/shop/{{$BestSeller->id}}">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="180">
</a>

        <div style="background-color: #eb6625;
margin-top: -39px;
position: absolute;
text-align: center;
margin-left: 49px;
    padding-right: 5px;
    padding-left: 5px;

">
            <a href="{{url('/')}}/cart/{{$BestSeller->id}}">
             
                 <span class="">
               
      <i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
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

				<div id="html-section-1542810603284" class="html-section index-section index-section--flush" style="margin-top:-102px;">

					<div class="wrapper">


						<div class="search-box">

							 

							<div class="search-section searchslider_1542810603284">
                 <a href="{{url('/')}}/shop" target="_blank"> 

								<h2>{{trans('admin.Bestseller')}}</h2>
                </a>


                            @foreach($BestSellers as  $BestSeller)
                                        

                                  <div class="search-element brand-1">
								 


 <div class="imageBox">
  <div class="imageInn">
        <span class="mtm">  
        	<a href="{{url('/')}}/shop/{{$BestSeller->id}}">
    <img src="{{Storage::url($BestSeller->photo)}}" alt="Default Image" width="150" height="180">
</a>
               </span>
  </div>
  <div class="hoverImg">
        	<a href="{{url('/')}}/shop/{{$BestSeller->id}}">

    <img src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Profile Image" width="150" height="180">
</a>

    	  <div style="background-color: #eb6625;
margin-top: -39px;
position: absolute;
text-align: center;
margin-left: 49px;
    padding-right: 5px;
    padding-left: 5px;

">
    	  	  <a href="{{url('/')}}/cart/{{$BestSeller->id}}">
						 
						     <span class="">
							 
			<i class='fa fa-shopping-cart' style='font-size:25px;color:#fff;'></i>
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

								 

                                  @endforeach


								 

							</div>

						</div>

					</div>

				</div>

  @endif
