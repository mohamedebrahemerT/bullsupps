 

 @extends('forentend4.index')



@section('content')

 

  @push('js')

  <script type="text/javascript">



    $(document).ready(function(){



      @if(auth()->user()->country_id) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{country_id:'{{ auth()->user()->country_id }}',select:'{{  auth()->user()->city_id  }}'},

       dataType: "html",

    success: function(data) {

        $('.city').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

     

      @endif



      $(document).on('change','.country_id',function(){



            var country= $('.country_id option:selected').val();

            if (country > 0)

             {



              $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{country_id:country,select:''},

       dataType: "html",

    success: function(data) {

        $('.city').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

             

             }

             else

             {

                $('.city').html('');

             }





         

      });

    });

    

             

  </script>



  <script>

function myFunction() {

  window.print();

}



function buttonFunction(el) {

  el.style.backgroundColor = "green";

          el.value = "Close Curtain";

  

     

   

}



 



</script>



<script type="text/javascript">

function change( el )

{



  el.style.backgroundColor = "green";



    if ( el.value === "{{trans('admin.presstoagree')}}" )

        el.value = "{{trans('admin.thankstoagree')}}";

    else

        el.value = "{{trans('admin.thankstoagree')}}";

}

</script>

    @endpush





                     @push('js')





  <script type="text/javascript">



    $(document).ready(function(){



      @if(old('stat_id')) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{city_id:'{{ old('city_id') }}',select:'{{ old('city_id') }}'},

       dataType: "html",

    success: function(data) {

        $('.stat').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

     

      @endif



      $(document).on('change','.city_id',function(){



            var city= $('.city_id option:selected').val();

            if (city > 0)

             {



              $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{city_id:city,select:''},

       dataType: "html",

    success: function(data) {

        $('.stat').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

             

             }

             else

             {

                $('.stat').html('');

             }





         

      });

    });

    

             

  </script>

    @endpush



   



 

  <div class="breadcrumbs ">

    <div class="container">

        <div class="current-name">    

        </div>

        <ul class="breadcrumb">

              <li><a href="{{url('/')}}/my-profile">{{trans('admin.MyProfile')}}</a></li>

              <li class="active"><a href="{{ route('orders.index') }}">{{trans('admin.MyOrders')}}</a></li>

        </ul>

    </div>

</div>





<div class="container">

    <div class="row profile">

          <div class="well col-sm-6">    
            
            <h2>{{trans('admin.Update my info')}} </h2>
           
          <form action="{{url('/')}}/my-profile" method="POST">

                    @method('patch')

                    @csrf

                 

  <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.name')}}
              </label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                placeholder="{{trans('admin.name')}}" id="input-name" class="form-control"  required />
                                        <strong>{{ $errors->first('email') }}</strong>

              </div>


               <div class="form-group">
                <label class="control-label" for="input-email">
          

             {{trans('admin.lastname')}}
              </label>
                <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}" 
                placeholder="اسم العائلة  *" id="input-lastname" class="form-control"  required />
                                        <strong>{{ $errors->first('lastname') }}</strong>

              </div>

 
 


              <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.Email')}}
              </label>
                <input type="text" name="email" value="{{ old('email', $user->email) }}" 
                placeholder="{{trans('admin.Email')}}" id="input-email" class="form-control"  required />
                                        <strong>{{ $errors->first('email') }}</strong>

              </div>

                 <div class="form-group">

                <label class="control-label" for="input-email">
              {{trans('admin.phone')}}
              </label>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" 
                placeholder="{{trans('admin.phone')}}" id="input-email" class="form-control"  required />
                                        <strong>{{ $errors->first('phone') }}</strong>

              </div>




              <div class="form-group">
                <label class="control-label" for="input-password">{{trans('admin.password')}} </label>


                <input type="password" name="password" value="" placeholder="{{trans('admin.password')}}" id="input-password" class="form-control" required />

 <br>

                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="{{trans('admin.confirm password')}} " class="form-control">

                


               

          </div>



<div id="Create"  >
      <div class="form-group col-lg-12 col-sm-12 col-md-12"> 

         {{ Form::label('country_id', trans('admin.country2'))  }}

         @if(session('lang') == 'ar')

{{ Form::select('country_id',App\countries::pluck('countries_name_ar','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@else
{{ Form::select('country_id',App\countries::pluck('countries_name_en','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@endif

                     </div> 


                          <div class="form-group col-lg-12 col-sm-12 col-md-12">            
 {{ Form::label('city', trans('admin.city'))  }}
                   <span class="city"></span>

                     </div> 

                     
                       <div class="form-group col-lg-12 col-sm-12 col-md-12"> 
 {{ Form::label('city', trans('admin.stat'))  }}

                   <span class="stat"></span>

                   <br>

    <label class="control-label" for="input-MoreDetailsAboutYourAddress">
              {{trans('admin.MoreDetailsAboutYourAddress')}}
              </label>

                <input type="text" name="MoreDetailsAboutYourAddress" value="{{ old('MoreDetailsAboutYourAddress', $user->MoreDetailsAboutYourAddress) }}" 
                placeholder="{{trans('admin.MoreDetailsAboutYourAddress')}}" id="input-email" class="form-control"  />
                                        <strong>{{ $errors->first('MoreDetailsAboutYourAddress') }}</strong>

                     </div> 
 


</div>

 
              
                <input type="submit" value=" {{trans('admin.Update my info')}}" class="btn btn-primary pull-left" />  
            
           <input type="hidden" name="redirect" value="{{url('/')}}/become_partner" />
                          </form>
                           
 
                 
                            
          </div>

      <div class="col-sm-6">  

<h3> {{ trans('admin.my info') }}</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">{{ trans('admin.name') }}</th>
      <th scope="col">{{ trans('admin.email') }} </th>
      <th scope="col">{{ trans('admin.phone') }}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>{{  $user->name }}</td>
      <td>{{  $user->email }}</td>
      <td>{{  $user->phone }}</td>
    </tr>
    
  </tbody>
</table>
            
           <h4> {{ trans('admin.Shipping information') }} </h4>

           @if(auth()->user()->country_id)
             
 <div class="form-group col-lg-12 col-sm-12 col-md-12" style="border: 1px solid #0000f4;"> 
           
      

 
         {{ trans('admin.country') }} :{{ App\countries::where('id',auth()->user()->country_id )->first()->countries_name_ar  }}

           <br>
          {{ trans('admin.stat') }}:{{ App\cities::where('id',auth()->user()->city_id )->first()->cities_name_ar  }}
           
     <!--span><br>   المركز : </span-->
          {{-- App\states::where('id',auth()->user()->stat_id )->first()->states_name_ar  --}}
           <br>

          {{trans('admin.MoreDetailsAboutYourAddress')}}:  : {{ auth()->user()->MoreDetailsAboutYourAddress }}

        
                       
              </div>

@endif
          </div>

       

    </div>

</div>

<center>

 

</center>

<br>

<br>



@endsection



 