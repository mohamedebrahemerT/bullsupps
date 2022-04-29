   @include('forentend3.layouts.header')
@include('forentend3.layouts.navbar')
 



 
    @push('js')


<style>
 

#regForm55 {
 background-color: #ffffff;
margin: 100px auto;
margin-top: -445px;
margin-right: auto;
margin-bottom: 100px;
margin-left: 99px;
font-size: 13px;
width: 25%;
min-width: 243px;
border-radius: 25px;
height: 189px;
position: absolute;
}
</style>

  



   
  <style>
 

.input {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius:10px;

}

.bntlog {
  background-color: #eb6625;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius:10px;

}

.bntlog :hover {
  opacity: 0.8;
}

 

 

 

.container {
  padding: 16px;
}

span.psw {
       float: right;
    padding-top: 2px;
    color: #000;

}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

 
<style>
.fa2{
  padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

 
.fa-facebook {
  background: #3B5998;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

.fa-google {
  background: #dd4b39;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

.fa-youtube {
  background: #bb0000;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}

.fa-instagram {
  background: #125688;
  color: white;
   padding:5px;
  font-size: 10px;
  width:30px;
  text-align: center;
  text-decoration: none;
border-radius:10px;
font-size:15px;
}
</style>

  
   @endpush



      <section>

        <img src="{{url('/')}}/forentend3/assets/images/backimages/background4.png" style="margin-top: -62px;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
height: 600px;
margin-left: 280px;
   
    ">

    <div style="    position: absolute;
    top: 72px;
    left: 235px;
">
          <img src="{{url('/')}}/forentend3/assets/images/logicon.png">
    </div>

    <div id="regForm55">


  <form action="{{url('/')}}/user_reset_pass_add_new_post/{{$check_token->token}}" method="POST">
                        @csrf
      
  
  <div class="container">
      
@include('forentend3.layouts.message')
                  <h4 class="log">{{trans('admin.user_forgot_password')}}</h4>
 

 <label for="psw" class="in"><b>{{trans('admin.NewPassword')}}</b></label>
    <input type="password" placeholder="{{trans('admin.Password')}}" name="password" required class="input">
       @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
    <button type="submit" class="bntlog">{{trans('admin.Resest')}}</button>
       
    
 
 

  </div>
 


 
 

 
</form>


    </div>

 

                      @include('forentend3.layouts.login')

@include('forentend3.layouts.customfooter')
 

 
