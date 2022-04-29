  @extends('forentend3.index')

@section('content')

	<div id="html-section-page-template" class="html-section">
				<div id="PageSection">
					<header class="section-header wrapper-breadcrumb">
						<div class="wrapper">
							<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
								<a href="/" title="Back to the frontpage">{{trans('admin.Home')}}</a>
								<span aria-hidden="true">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
								<span>{{trans('admin.ContactUs')}}</span>
							</nav>
						</div>
					</header>
					<div class="wrapper">

@if(session()->has('success') )
  <div class="alert alert-success" style="text-align: center;font-size:20px;">

  	{{session('success')}}
  	
  </div>
@endif

      
 
                 

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


						<div class="grid">

							<div class="grid__item contact-wrapper">
								
								<iframe src="{{settings()->mapLink}}" width="100%" height="450" frameborder="0" style="border: 0; margin-bottom: 40px;" allowfullscreen=""></iframe>


								<div class="grid__item large--one-half" style="padding-left: 0;">
									<p>

										{{trans('admin.senusanyidea')}}

									</p>
									<ul class="contact-list">
										<li class="address">
											<i class="fa fa-street-view"></i> 
										 

											 
										</li>
										<li class="open">
											<i class="fa fa-check"></i> 
										{{trans('admin.Opening')}}



											<ul>
												<li>{{trans('admin.fromto')}}: 8.00 - 5.00</li>
												<li>{{trans('admin.Sat')}}: 12.00 - 5.00</li>
												<li>{{trans('admin.Sun')}}: 12.00 - 5.00</li>
											</ul>
										</li>
										<li class="email">
											<i class="fa fa-envelope-o"></i> {{trans('admin.email')}}:  {{settings()->email}}
										</li>
										<li class="phone">
								<i class="fa fa-phone"></i> 
								{{settings()->phone}}
										</li>
									</ul>
								</div>



								<div class="form-vertical grid__item large--one-half">

							   <form name="sentMessage" id="contactForm" novalidate method="post" action="{{url('/')}}/Sendcontact">
                    @csrf


										<input type="hidden" name="form_type" value="contact">
										<input type="hidden" name="utf8" value="✓">
										<div class="grid grid--small">
											<div class="grid__item large--one-half">
												<label for="ContactFormName" class="hidden-label">{{trans('admin.name')}}
												</label>
												<input type="text" id="ContactFormName" class="input-full" name="contact[name]" placeholder="{{trans('admin.name')}}" autocapitalize="words" value="">
											</div>
											<div class="grid__item large--one-half">
												<label for="ContactFormEmail" class="hidden-label">{{trans('admin.email')}}</label>
												<input type="email" id="ContactFormEmail" class="input-full" name="contact[email]" placeholder="{{trans('admin.email')}}" autocorrect="off" autocapitalize="off" value="">
											</div>
										</div>
										<label for="ContactFormPhone" class="hidden-label">{{trans('admin.phone')}} </label>
										<input type="tel" id="ContactFormPhone" class="input-full" name="contact[phone]" placeholder="{{trans('admin.phone')}}" pattern="[0-9\-]*" value="">
										<label for="ContactFormMessage" class="hidden-label">{{trans('admin.message')}}</label>
										<textarea rows="5" id="ContactFormMessage" class="input-full" name="contact[body]" placeholder="{{trans('admin.message')}}"></textarea>
										<input type="submit" class="btn right" value="{{trans('admin.send')}}">
									</form>
								</div>



							</div>
						</div>
					</div>
				</div>
			</div>

@endsection
