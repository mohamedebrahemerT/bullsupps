 @extends('forentend4.index')

@section('content')

 <div id="html-section-cart-template" class="html-section" style="background-color:#fff">
				<div id="CartSection">
					 
					<div class="wrapper article-grid">
						<div class="grid--rev blog_list">


                 @foreach($newess as  $newes)
                       
							<article class="list-article grid__item large--one-third col-sm-4">
								<div class="article__image">
									<a class="article__featured-image" href=" {{url('/')}}/blog/{{$newes->id}}">
										<img src="{{Storage::url($newes->photo)}}" alt="These are the 5 best phones you can buy right now" style="border-radius: 0px">
									</a>
								</div>

								<div class="article__date">
									<a class="author" style="font-weight:15px;color:#000;font-size: 20px;" href="{{url('/')}}/blog/{{$newes->id}}">
                                              @if(session('lang')=='ar')                                                                 

												{{$newes->title_name_ar }}

												@endif

												@if(session('lang')=='en')

												{{$newes->title_name_en }} 

												@endif
									 </a><br>
<span class="author">....{{trans('admin.addBy')}} {{trans('admin.admin')}} </span>
								
								</div>
							 
								 

								 
							</article>

                                          @endforeach 

							 
						 
						 
						</div>
					</div>
				</div>
			</div>
@endsection
