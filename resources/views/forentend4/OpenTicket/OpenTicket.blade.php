  @extends('forentend4.index')



@section('content')

 <div class="breadcrumbs">

  <div class="container">

       <div class="current-name">   

     

             

         تذكرة مفتوحة

            

              </div>

      <ul class="breadcrumb">

                <li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>

                <li><a href="{{url('/')}}/OpenTicket">فتح تذكرة  </a></li>

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

		 


			

			<div class="col-sm-12 col-xs-12 contact-form">

			    <form name="sentMessage" id="contactForm" novalidate method="post" action="{{url('/')}}/Sendcontact">

                    @csrf

				<fieldset>

					<legend><h2> تذكرة مفتوحة</h2></legend>

					 <p> 

									تذكرة مفتوحة

					 	



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

