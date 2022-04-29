@extends('forentend4.index')

@section('content')

@push('js')
<style type="text/css">
  /* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

 

.google {
  background-color: #dd4b39;
  color: white;
}
</style>
@endpush
  <div class="container">

  <ul class="breadcrumb">
        <li><a href="{{url('/')}}">{{trans('admin.Homepage')}} </a></li>
        <li><a href="{{url('/')}}/login">{{trans('admin.account')}} </a></li>
        <li><a href="{{url('/')}}/login"> نسيت كلمة المرور </a></li>
      </ul>
      <div class="row">
                   <div id="content" class="col-md-9 col-sm-12 fluid-sidebar">
      <div class="row">
        <div class="col-sm-3">
          
        </div>
        <div class="col-sm-9">
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

                        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <h2>نسيت كلمة المرور </h2>
            <p><strong>
            إذا كنت تملك حساب مسبق في الموقع، فتفضل بتسجيل  بريدك ليتم ارسالة رسالة تحتوي  علي لينك  نسيت كلمة المرور


          </strong></p>
        <form  action="{{ route('password.email') }}" method="POST" enctype="multipart/form-data">
         
                {{ csrf_field() }}
                    
              <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.Email')}}
              </label>
               

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="{{trans('admin.Email')}}" required autofocus class="form-control">


                                        <strong>{{ $errors->first('email') }}</strong>


              </div>
               
              
                <input type="submit" value="{{trans('admin.send')}}" class="btn btn-primary pull-left" />  
            
           <input type="hidden" name="redirect" value="{{url('/')}}/become_partner" />
                          </form>
                           
 
  
                            
          </div>
        </div>
      </div>
      </div>
    
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
        