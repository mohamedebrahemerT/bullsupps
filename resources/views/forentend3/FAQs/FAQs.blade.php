  @extends('forentend3.index')

@section('content')

 	<div id="html-section-page-template" class="html-section" style="background-color:#fff">
				<div id="PageSection">
					<header class="section-header wrapper-breadcrumb">
						<div class="wrapper">
							<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
								<a href="{{url('/')}}" title="Back to the frontpage">{{trans('admin.Home')}}</a>
								<span aria-hidden="true">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
								<span>{{trans('admin.FAQs')}}</span>
							</nav>
						</div>
					</header>
					<div class="wrapper">
						<div class="grid">
							<div class="grid__item">
								<div class="panel-group" id="accordion">

									  @foreach($FAQs2 as  $FAQ2)

									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="collapsed"> 
													 
    @if(session('lang')=='ar')
{{$FAQ2->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$FAQ2->title_name_en }}

@endif
												</a>
											</h4>
										</div>

										<div id="velaFaq1" class="panel-collapse collapse">
											<div class="panel-body">
 @if(session('lang')=='ar')
{{$FAQ2->FAQs_name_ar }}

@endif

  @if(session('lang')=='en')
{{$FAQ2->FAQs_name_en }}

@endif

											</div>
										</div>
									</div>

                                      @endforeach
								 
								 
									 
									<script type="text/javascript">
										$(function() {
											$("#accordion .panel .panel-heading").click(function() {
												$(this).toggleClass('opentab');
											});
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection
