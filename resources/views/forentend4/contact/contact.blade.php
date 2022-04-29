  @extends('forentend4.index')

@section('content')
 <div class="breadcrumbs">
  <div class="container">
       <div class="current-name">   
     
             
            اتصل بنا
            
              </div>
      <ul class="breadcrumb">
                <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>
                <li><a href="{{url('/')}}/contact">اتصل بنا</a></li>
              </ul>
    </div>
</div>
<div class="container">
  <div class="row">

  	
			@if(session()->has('success') )
  <div class="alert alert-success">

    {{session('success')}}
    
  </div>
@endif

                    @if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                <div id="content" class="col-sm-12">
		<div class="info-contact row">
			<div class="col-sm-6 col-xs-12 info-store">
			  			   		<div class="mapouter">
			   			<div class="gmap_canvas">
			   				<iframe width="100%" height="480" id="gmap_canvas" src="{{settings()->mapLink}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			   			</div>
			   			<style>
			   				.mapouter{position:relative;text-align:right;height:480px;width:100%;}
			   				.gmap_canvas {overflow:hidden;background:none!important;height:480px;width:100%;}
			   			</style>
			   		</div>
				   
			</div>

			
			<div class="col-sm-6 col-xs-12 contact-form">
			    <form name="sentMessage" id="contactForm" novalidate method="post" action="{{url('/')}}/Sendcontact">
                    @csrf
				<fieldset>
					<legend><h2>اتصل بنا </h2></legend>
					 <p> 
										{{trans('admin.senusanyidea')}}
					 	

</p>
                  
				  <div class="form-group required">
					<div class="col-sm-12">
					  <input type="text" name="name" value="" id="input-name" class="form-control" placeholder="الاسم *"/>
					   
					</div>
				  </div>
				  <div class="form-group required">
					<div class="col-sm-12">
					  <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="البريد الالكتروني *" />
					   
					</div>
				  </div>
				  <div class="form-group required">
					<div class="col-sm-12">
					  <textarea name="enquiry" value="الموضوع" rows="10" id="input-enquiry" placeholder="الموضوع *" class="form-control"></textarea>
					   
					</div>
				  </div>
				   
				</fieldset>
				<div class="buttons">
				  <div class="pull-left">
					<button class="btn btn-info" type="submit"><span>أرسل </span></button>
				  </div>
				</div>
			  </form>
			</div>
		</div>
      </div>
    </div>
</div>
	 
<br>
<br>
<br>
@endsection
