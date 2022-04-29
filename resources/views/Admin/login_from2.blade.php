 @extends('forentend4.index')

@section('content')
  <div class="container">

  <ul class="breadcrumb">
        <li><a href="{{url('/')}}">{{trans('admin.Homepage')}} </a></li>
        <li><a href="{{url('/')}}/login">{{trans('admin.account')}} </a></li>
        <li><a href="{{url('/')}}/login">{{trans('admin.Login')}} </a></li>
      </ul>
      <div class="row">
                   <div id="content" class="col-md-9 col-sm-12 fluid-sidebar">
      <div class="row">
        <div class="col-sm-6">
          <div class="well ">
            <h2>{{trans('admin.admin login process')}}  </h2>
       
            <a href="{{url('/')}}/login" class="btn btn-primary"> {{trans('admin.admin login process')}}</a></div>
        </div>
        <div class="col-sm-6">
                         @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          
                <div class="well col-sm-12">    

                      @if(session('success'))
   <div class="alert alert-success ">
   {{session('success')}}

     </div>
   @endif

          @if(session('danger'))
   <div class="alert alert-danger ">
   {{session('danger')}}

     </div>
   @endif
            
            <h2>{{trans('admin.signin')}} </h2>
            <p><strong>
              {{trans('admin.signin2')}}
          </strong></p>
        <form action="{{url('admin_form_post')}}" method="POST">
         
                        @csrf
              <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.Email')}}
              </label>
                <input type="text" name="email" value="" 
                placeholder="{{trans('admin.Email')}}" id="input-email" class="form-control"  required />
                                        <strong>{{ $errors->first('email') }}</strong>


              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">{{trans('admin.password')}} </label>
                <input type="password" name="password" value="" placeholder="{{trans('admin.password')}}" id="input-password" class="form-control" required />
                 <strong>{{ $errors->first('password') }}</strong>
                <a href="{{url('/')}}/forgotten">
                  {{trans('admin.Forgotyourpassword')}}
              </a></div>
              
                <input type="submit" value="{{trans('admin.Login')}}" class="btn btn-primary pull-left" />  
            
           <input type="hidden" name="redirect" value="{{url('/')}}/become_partner" />
                          </form>

                 
                            
          </div>
        </div>
      </div>
      </div>
      <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas" >
       <span id="close-sidebar" class="fa fa-times"></span>
            <div class="marketplace">
  <div class="list-group">
            <a href="{{url('/')}}/login" class="list-group-item">{{trans('admin.admin login process')}}  </a>
      </div>
</div>

<div class="modal fade" id="myModal-notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{trans('admin.Close')}} </span></button>
        <h3 class="modal-title">{{trans('admin.Hi')}}    </h3>
      </div>

      <div class="modal-body">
                    <center><h4>{{trans('admin.NoNotificationFound')}} </h4></center>
              </div>

      <div class="modal-footer">
        <a href="{{url('/')}}/customerpartner/notification" class="btn btn-primary button" style="color:white;">{{trans('admin.ViewAllNotifications')}} </a>
        <button type="button" class="btn btn-default button" data-dismiss="modal">
        {{trans('admin.Close')}}</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
                      <h3>{{trans('admin.Mostviewed')}} </h3>
                    </lagend>
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>{{trans('admin.ProductName')}}</th>
                            <th>{{trans('admin.Model')}}</th>
                            <th class="text-right">{{trans('admin.Views')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                                                  <tr>
                            <td class="text-center" colspan="3">
                  {{trans('admin.Addnewproductstogaincustomersattraction')}}
                              
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
                  {{trans('admin.Close')}}

                      
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

            
 

        </aside>
</div>
</div>

                <style>
                @media(max-width:991px){
                    #column-login,.social_login,.socalicon{
                        float:none !important;
                        width:100%;
                    }
                    .account-login .btn-primary{
                        float:none !important;
                    }
                    .social_login {
                        padding:0 10px;
                    }
                }
                </style>
@endsection
        