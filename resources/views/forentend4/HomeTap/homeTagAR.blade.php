<div class="brand-area" class="contentPost">

					    <u  style="list-style: none;
    display: inline-flex;
   
" class="htc">

					    	<li>
                	 						<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html">
                                      @foreach($tags1 as  $tag1)

										 <div class="mySlides2 fade">

										 	 <div class="bottom-right" style="text-align: center;">
										 	 	 @if(session('lang')=='ar')

         {{$tag1->title_name_ar }}
 

@endif

  @if(session('lang')=='en')
{{$tag1->title_name_en }}
@endif
										 	 </div>
										 	
 	<img src="{{Storage::url($tag1->photo)}}" alt="" style="border-radius:8px;" width="130" height="81">	
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
										 	 	 <div class="bottom-right" style="text-align: center;">
										 	 	 @if(session('lang')=='ar')

         {{$tag2->title_name_ar }}
 

@endif

  @if(session('lang')=='en')
{{$tag2->title_name_en }}
@endif
										 	 </div>
 	<img src="{{Storage::url($tag2->photo)}}" alt="" style="border-radius:8px;" width="130" height="81">	
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
										 		 <div class="bottom-right" style="text-align: center;">
										 	 	 @if(session('lang')=='ar')

         {{$tag3->title_name_ar }}
 

@endif

  @if(session('lang')=='en')
{{$tag3->title_name_en }}
@endif
										 	 </div>
 	<img src="{{Storage::url($tag3->photo)}}" alt="" style="border-radius:8px;" width="130" height="81">	
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
										 	 <div class="bottom-right" style="text-align: center;">
										 	 	 @if(session('lang')=='ar')

         {{$tag4->title_name_ar }}
 

@endif

  @if(session('lang')=='en')
{{$tag4->title_name_en }}
@endif
										 	 </div>
 	<img src="{{Storage::url($tag4->photo)}}" alt="" style="border-radius:8px;" width="130" height="81">	
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
										 	 <div class="bottom-right" style="text-align: center;">
										 	 	 @if(session('lang')=='ar')

         {{$tag5->title_name_ar }}
 

@endif

  @if(session('lang')=='en')
{{$tag5->title_name_en }}
@endif
										 	 </div>
 	<img src="{{Storage::url($tag5->photo)}}" alt="" style="border-radius:8px;" width="130" height="81">	
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