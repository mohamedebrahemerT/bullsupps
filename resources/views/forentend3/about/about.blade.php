 @extends('forentend3.index')

@section('content')

 

 <div id="html-section-page-template" class="html-section">
				<div id="PageSection">
					
	 				     <span style="margin-top: 33px;
position: absolute;
margin-left: 364px;
color: #042235;
font-weight: 700;
float: right;
text-align: right;
width: 399px;
height: 393px;
"> 

 											@if(session('lang')=='ar')
{!! $WhoWeAre->WhoWeAre_name_ar !!}

@endif

  @if(session('lang')=='en')
{!! $WhoWeAre->WhoWeAre_name_en !!}

@endif

</span>

							 <img src="{{url('/')}}/forentend3/assets/images/WhoWeAre/whoWeAre3.png"  style="border-radius:0px;">
					 
				 
				</div>
			</div>

@endsection
