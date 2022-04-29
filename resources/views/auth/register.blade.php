 
         @extends('forentend4.index')

@section('content')





  @push('js')

  <script type="text/javascript">



    $(document).ready(function(){



      @if(old('country_id')) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{country_id:'{{ old('country_id') }}',select:'{{ old('city_id') }}'},

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





<div id="account-register" class="container">
  <ul class="breadcrumb">
        <li><a href="{{url('/')}}/"> {{trans('admin.Home')}}  </a></li>
        <li><a href="{{url('/')}}/login"> {{trans('admin.register')}}  </a></li>
       
      </ul>
    <div class="row">
                <div id="content" class="col-sm-9">

                          @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
  
      <form action="{{url('/')}}/M_V_L_R_post_register" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <fieldset id="account">
          <legend>{{trans('admin.Your personal information')}}  </legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-2 control-label">مجموعة العميل</label>
            <div class="col-sm-10">                            <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked" />
                  Default</label>
              </div>
                            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">{{trans('admin.name')}} </label>
            <div class="col-sm-10">
              <input type="text" name="name" value="" placeholder="{{trans('admin.name')}}" id="input-firstname" class="form-control"  required/>
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname"> {{trans('admin.lastname')}}</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="{{trans('admin.lastname')}}" id="input-lastname" class="form-control" required />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">{{trans('admin.email')}}</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="{{trans('admin.email')}}" id="input-email" class="form-control" required/>
               </div>
          </div>


          <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-telephone">{{trans('admin.phone')}}</label>

            <div class="col-sm-10">
          <input type="tel" name="phone" value="" placeholder="{{trans('admin.phone')}}" id="input-telephone" class="form-control" required />
               </div>

          </div>


             <div class="form-group required">   
            <label class="col-sm-2 control-label" for="input-telephone">{{trans('admin.country2')}}</label>
            <div class="col-sm-10">
              @if(session('lang') == 'ar')
{{ Form::select('country_id',App\countries::pluck('countries_name_ar','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@else
{{ Form::select('country_id',App\countries::pluck('countries_name_en','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@endif
               </div>
               </div> 


                 <div class="form-group required">   
            <label class="col-sm-2 control-label" for="input-city">{{trans('admin.city')}}</label>
            <div class="col-sm-10">

                   <span class="city"></span>
 

               </div>
               </div> 
                 <div class="form-group required">

            <label class="col-sm-2 control-label" for="input-MoreDetailsAboutYourAddress">  {{trans('admin.MoreDetailsAboutYourAddress')}}</label>

            <div class="col-sm-10">
          <input type="text" name="MoreDetailsAboutYourAddress" value="" placeholder="{{trans('admin.MoreDetailsAboutYourAddress')}}" id="input-MoreDetailsAboutYourAddress" class="form-control" required />
               </div>

          </div>



                  </fieldset>
        <fieldset>
     
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">{{trans('admin.password')}}</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="{{trans('admin.password')}}" id="input-password" class="form-control" required />
               </div>
          </div>
          
        </fieldset>
      
        
                <div class="buttons">

 

      
          <div class="pull-right">

                     
            <input type="submit" value="{{trans('admin.send')}}" class="btn btn-primary"  style="margin-bottom: 20%;" />

          </div>
        </div>
              </form>

      </div>
      <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas" >
   

<style type="text/css">
#myModal-notification li{
  //font-family: monospace;
}

/*  .modal-dialog {
    width: 500px;
  }*/
  .sellerBackground {
          background-color: #FF4D45;
        height: 200px;
    text-align: center;
  }
  .seller_detail_stripe {
    background-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 1px 1px rgba(255, 255, 255, 0.2);
    height: 30px;
    margin-top: 5px;
    width: 100%;
  }
  .seller_detail_stripe p {
    color: #fff;
      font-size: 18px;
      line-height: 30px;
  }
  .seller-dp {
    height: 100px;
    margin-top: 35px;
  }
</style>

  <div class="modal fade" id="myModal-seller-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="border-radius:0px">
            <div class="modal-body" style="padding-top:0px">
                    <div class="row">
                <div class="col-sm-12">
                                    <fieldset>
                    <lagend>
                      <h3>Most viewed</h3>
                    </lagend>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Product Name</th>
                            <th>Model</th>
                            <th class="text-right">Views</th>
                          </tr>
                        </thead>
                        <tbody>
                                                  <tr>
                            <td class="text-center" colspan="3">
                              Add new products to gain customers attraction
                            </td>
                          </tr>
                                                </tbody>
                      </table>
                    </div>
                  </fieldset> <!-- view fieldset -->
                </div> <!-- col-sm-12 -->
            </div> <!-- row -->
          <div class="row">
            <div class="col-sm-12">
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                      Close
                    </button>
                </div>
            </div>
          </div> <!-- row -->
            </div> <!-- modal-body -->
        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
  </div> <!-- modal -->

<script>
var launchModal =  0;
$(document).ready(function() {
  // $('#myModal-seller-info').modal();
  if(launchModal && window.innerWidth > 767) {
    $('#myModal-seller-info').modal();
  }
});



</script>

            
<div class="list-group">
    <a href="{{url('/')}}/login" class="list-group-item" target="_blank">
      {{trans('admin.Login')}}  
  </a>
   <a href="{{url('/')}}/register" class="list-group-item" target="_blank">{{trans('admin.SignUp')}} </a> 
  <a href="{{url('/')}}/forgotten" class="list-group-item" target="_blank">
        {{trans('admin.Forgotyourpassword')}} 
 
</a>
    <a href="{{url('/')}}/my-profile" class="list-group-item" target="_blank">{{trans('admin.account')}} </a>

     <a href="{{url('/')}}/wishlist" class="list-group-item" target="_blank">
    {{trans('admin.MyWishList')}}  </a> 

    <a href="{{url('/')}}/my-orders" class="list-group-item" target="_blank">
     {{trans('admin.MyOrders')}} </a>

      
 

  </div>
        </aside>
</div>
</div>
 

@endsection

 