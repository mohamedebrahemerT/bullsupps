 @extends('forentend4.index')



@section('content')

  



<div class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}">{{trans('admin.Home')}}</a></li>

        <li><a href="{{url('/')}}/about">{{trans('admin.about')}}</a></li>

      </ul>

  <div class="row">

                <div id="content" class="col-sm-12 item-article">

    

      <div class="row box-1-about">



	<div class="col-md-9 welcome-about-us">



		<div class="title-about-us">



			<h2>

				

				@if(session('lang')=='ar')

{{$WhoWeAre->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$WhoWeAre->title_name_en }} 

@endif

			</h2>



			</div>



			<div class="content-about-us">



			<div class="image-about-us"><img src="{{Storage::url($WhoWeAre->photo)}}" 
                 data-src="{{Storage::url($WhoWeAre->photo)}}" alt="Image Client"></div>



			<div class="des-about-us">



				 <p>

				 			@if(session('lang')=='ar')

{!! $WhoWeAre->WhoWeAre_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! $WhoWeAre->WhoWeAre_name_en !!} 

@endif



				 </p>



			</div>



		</div>



	</div>



 

 

	< 

</div>









    </div>

    </div>

</div>

<br>

<br>

@endsection

