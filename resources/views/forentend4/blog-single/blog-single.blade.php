
@extends('forentend4.index')

@section('content')
 <div id="html-section-cart-template" class="html-section container" style="background-color:#fff">
				<div id="CartSection">
					 
					<div class="wrapper">
						<div class="grid">
							<article class="grid__item article" itemscope="" itemtype="http://schema.org/Article">
								<div class="grid">
									<div class="grid__item">
										<p class="article-top">
											<span class="author">{{trans('admin.addBy')}} {{trans('admin.admin')}}</span>
											<span class="date">
												<time datetime="2018-05-03">{{$newes->created_at}}</time>
											</span>
											<span class="comment">{{$NumberOFcomment}} {{trans('admin.comments')}}</span>
										</p>
										<div class="blog-image">
										 
												<img src="{{Storage::url($newes->photo)}}" alt="">
										 
										</div>
										<div class="article-content" itemprop="articleBody">
											<p>
												 @if(session('lang')=='ar')                                                                 

												{{$newes->title_name_ar }}

												@endif

												@if(session('lang')=='en')

												{{$newes->title_name_en }} 

												@endif
											</p>
											<p>
											  @if(session('lang')=='ar')                                                                 

												{{$newes->newes_name_ar }}

												@endif

												@if(session('lang')=='en')

												{{$newes->newes_name_en }} 

												@endif
										</p>
											<ol>
												<li>Google Pixel (and Pixel XL)</li>
												<li>iPhone 7 (and 7 Plus)</li>
												<li>OnePlus 3T</li>
												<li>Samsung Galaxy S7 Edge</li>
												<li>Moto G4</li>
											</ol>
										</div>
										<div class="social-sharing clean">
											<a target="_blank" href="//www.facebook.com/sharer.php?u=#" class="share-facebook" title="Share on Facebook">
												<span class="icon icon-facebook" aria-hidden="true"></span>
												<span class="share-title" aria-hidden="true">{{trans('admin.Share')}}</span>
												<span class="visually-hidden">Share on Facebook</span>
											</a>
											<a target="_blank" href="//twitter.com/share?text=#url=#" class="share-twitter" title="Tweet on Twitter">
												<span class="icon icon-twitter" aria-hidden="true"></span>
												<span class="share-title" aria-hidden="true">{{trans('admin.Tweet')}}</span>
												<span class="visually-hidden">Tweet on Twitter</span>
											</a>
											<a target="_blank" href="//pinterest.com/pin/create/button/?url=#&amp;media=#;description=#" class="share-pinterest" title="Pin on Pinterest">
												<span class="icon icon-pinterest" aria-hidden="true"></span>
												<span class="share-title" aria-hidden="true">{{trans('admin.Pinit')}}</span>
												<span class="visually-hidden">Pin on Pinterest</span>
											</a>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="text-right">
							<a href="{{url('/')}}/blog" class="return-link">{{trans('admin.BacktoNews')}} ←</a>
						</div>
					</div>
				</div>
			</div>

@endsection
