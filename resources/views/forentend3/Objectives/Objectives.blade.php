   @extends('forentend3.index')

@section('content')

 

 <div id="html-section-page-template" class="html-section">
				<div id="PageSection">
					
	 				  

							 <img src="{{url('/')}}/forentend3/assets/images/Objectives/Objectives.png"  style="border-radius:0px;">
						<div class="wrapper">

							  <div>
							  	<u style="

    list-style: square;
    direction: rtl;
    margin-top: -339px;
    position: relative;
    float: right;
    color: #000;
    font-weight: 700;
    font-size: 17px;
    font-style: initial;
    text-decoration-line: blink;
 ">
                                @foreach($Objectives as $Objectives)
							  		<li>
	 										 										@if(session('lang')=='ar')
{!! $Objectives->Objectives_name_ar !!}

@endif

  @if(session('lang')=='en')
{!! $Objectives->Objectives_name_en !!}

@endif  
							  		</li>
							  		 @endforeach
							  		
							  	</u>
							  </div>
							  </div>
					 
				 
				</div>
			</div>

@endsection
