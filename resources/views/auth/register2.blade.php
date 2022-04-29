 @include('forentend3.layouts.header')
@include('forentend3.layouts.navbar')
 
@include('forentend3.layouts.message')






 @push('js')
<script>
$(document).ready(function(){

 $('#email').blur(function(){
  var error_email = '';
  var email = $('#email').val();
  var _token = $('input[name="_token"]').val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger" style="float: right;">{{trans("admin.InvalidEmail")}}</label>');
   $('#email').addClass('has-error');
   $('#btncheck').attr('disabled', 'disabled');
  }
  else
  {
   $.ajax({
    url:"{{ route('email_available.check') }}",
    method:"POST",
    data:{email:email, _token:_token},
    success:function(result)
    {
     if(result == 'unique')
     {
      $('#error_email').html('<label class="text-success" style="float: right;">{{trans("admin.EmailAvailable")}}</label>');
      $('#email').removeClass('has-error');
      $('#btncheck').attr('disabled', false);
     }
     else
     {
      $('#error_email').html('<label class="text-danger" style="float: right;">{{trans("admin.EmailnotAvailable")}}</label>');
      $('#email').addClass('has-error');
      $('#btncheck').attr('disabled', 'disabled');
     }
    }
   })
  }
 });
 
});
</script>



<script type="text/javascript">
    $(function() {
  var chk = $('#check');
  var btn = $('#btncheck');

  chk.on('change', function() {
    btn.prop("disabled", !this.checked);//true: disabled, false: enabled

  }).trigger('change'); //page load trigger event
});
</script>

                
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 
<style type="text/css">
    .register{
    background:#eb6625;
    margin-top:0%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: -4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    margin-left:-16px;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top:2%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background:#012335;
    color: #fff;
    font-weight: 600;
    width:25%;
    cursor: pointer;
    text-align: center;
}
 
.btnRegister2
{

         margin-top: 21%;
    border: none;
    border-radius: 1.5rem;
    padding: 3%;
    background: #012335;
    color: #fff;
    font-weight: 600;
    width: 33%;
    cursor: pointer;
    text-align: center;
    margin-top: 77%;
    position: absolute;
    float: right;
    margin-right: 7px;
    margin-left: -59px;

}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>

<style type="text/css">
    /* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
 
 
}

#message p {
 
  font-size:8px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

</style>
 @endpush
   
<div class="container register" > 
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="{{url('/')}}/forentend3/assets/images/icon/logorr.jpg" alt=""/>
                        <h3>{{trans('admin.welcome2')}}</h3>
                        <p>{{trans('admin.barve')}}</p>

      
                      

                      <a href="{{url('/')}}/login" class="btnRegister2">{{trans('admin.login')}}</a>
                    </div>
                    <div class="col-md-9 register-right">
                           <span style="font-size:12px">
                                     @if(session()->has('success') )
  <div class="alert alert-success">

    {{session('success')}}
    
  </div>
@endif

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            
                        </span>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="width: 739px;
margin-left: 58px;
margin-top: -59px;
background-color: #f8f9fa;">
                                <h3 class="register-heading">{{trans('admin.UR1')}}</h3>



                                <div class="row register-form">
                                   
                                    <div class="col-md-6">
                                        
                                      
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{trans('admin.FirstName')}}" value="{{old('name')}}" name="name" required/>
                                        </div>
                                        

                                    <div class="form-group">
                                            <input type="email" class="form-control" placeholder="{{trans('admin.ConfirmMail')}}" value="{{old('email')}}"  name="email"  id="email"  required/ >
                                               <span id="error_email"></span>
                                        </div>

                                       
                                         <div class="form-group">
                                            <input type="password" class="form-control" placeholder="{{trans('admin.ConfirmPassword')}}"  name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="{{trans('admin.conditions')}}" id="psw" required/>
                                      <div id="message" style="float:right;text-align: right;position: absolute;">
 
  <span id="letter" class="invalid">A <b>{{trans('admin.lowercase')}}</b>{{trans('admin.letter')}}</span><br>
  <span id="capital" class="invalid">A <b>{{trans('admin.capital(uppercase)')}}</b>{{trans('admin.letter')}}</span><br>
  <span id="number" class="invalid">A <b>{{trans('admin.number')}}</b></span><br>
  <span id="length" class="invalid"> {{trans('admin.Minimum')}}<b>8  {{trans('admin.characters')}}</b></span><br>
</div>

                                        </div>
                                          <div class="form-group">
                                            <input type="phone" class="form-control"  placeholder="{{trans('admin.phone')}}" value="{{old('phone')}}"  name="phone" required/>
                                        </div>
                                        
                                         

                                    </div>

                                     <div class="col-md-6">
                        <form method="post" action="M_V_L_R_post_register"> 
                            @csrf




                                          <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{trans('admin.LastName')}}" value="" required/>
                                        </div>
                                        <div class="form-group">

                                            <input type="text"   name="txtEmpPhone" class="form-control" placeholder="{{trans('admin.YourEmail')}}"   required />
                                        </div>
                                            <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="{{trans('admin.ConfirmPassword')}}"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="{{trans('admin.conditions')}}"  required/>
                                        </div>
                                        
                                          <div class="form-group">
                                            <input type="phone" class="form-control"  placeholder="{{trans('admin.Password')}}" required/>
                                        </div>
                                        

 
                                  
<br>
<br>
                                       
                                        
                                    </div>
                    <div class="col-md-12" style="margin-top:-45px">
                         <label style="float: right;">{{trans('admin.getcods')}}</label>
<br>
  <div class="form-group" style="text-align:right;">


<span class="SMSSEND">
<label for="whatsapp" style="    margin-right: -26px;"><img src="{{url('/')}}/forentend3/assets/images/whatsapp/whatsapp.jpg" width="35" height="35">{{trans('admin.whatsapp')}} <i class="fa fa-whatsapp" style="font-size:25px;color:#fff;border-radius:12px;"></i></label>
     <input type="radio" id="whatsapp" name="typeOfsend" value="whatsapp">

<label for="SMS"> <img src="{{url('/')}}/forentend3/assets/images/whatsapp/SMS.png" width="35" height="35">{{trans('admin.SMS')}} </label>
<input type="radio" id="SMS" name="typeOfsend" value="SMS">


<label for="mail"><img src="{{url('/')}}/forentend3/assets/images/whatsapp/mail.png" width="25" height="25">  {{trans('admin.mail')}}</label>
<input type="radio" id="mail" name="typeOfsend" value="mail">
 
</span>
                                     

                                        <div class="form-group" style="float:right;margin-top:-46px">

     <input type="radio" id="male" name="gender" value="male">
<label for="male">{{trans('admin.buywhole')}}</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">{{trans('admin.buypart')}}</label>
                                       
 
 
 
                                         
                                        </div>
                                        <div class="form-group">
                                         </div>
                                      
     
<span style="float: right;">
<label for="check">
{{trans('admin.agreeto')}}

 <a href="{{url('/')}}/forentend3/assets/privacy/privacy.pdf" target="_blank" style="text-decoration: underline;">
{{trans('admin.privcy')}}
</a>
&nbsp;
 <a href="{{url('/')}}/forentend3/assets/privacy/userguid.pdf" target="_blank" style="text-decoration: underline;">

{{trans('admin.userguid')}}
</a>
</label>
         <input type="checkbox" id="check" name="vehicle1" value="privcy">
   
</span>
           <br>
           <br>
           <br>
                     <div>
                           <input type="submit" class="btnRegister"  value="{{trans('admin.Register')}}"/ id="btncheck"  >
 
                     </div>

  
                                        </div>
                    </form>
                                     
                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>



                      @include('forentend3.layouts.login')

 
    
     <div id="html-section-footer" class="html-section">
            <footer class="site-footer" role="contentinfo">
                <div class="footer-info">
                    <div class="wrapper">
                        <div class="grid footer-info-inner">
                            <div class="info-element grid__item one-quarter small--one-half">
                                <div class="info-wrapper">
                                    <div class="image grid__item one-whole">
                                        <img src="//cdn.shopify.com/s/files/1/0026/6069/6153/files/icon-bottom-1_small.png?v=1544000645" alt="" style="border-radius:0px;">
                                    </div>
                                      <span class="ffix">{{trans('admin.shiptoallegypt')}}</span>
                                      <br>
                                     <span>{{trans('admin.shiptallstat')}}</span>
                                </div>
                            </div>
                            <div class="info-element grid__item one-quarter small--one-half">
                                <div class="info-wrapper">
                                    <div class="image grid__item one-whole">
                                        <img src="//cdn.shopify.com/s/files/1/0026/6069/6153/files/icon-bottom-2_small.png?v=1544000655" alt="" style="border-radius:0px;">
                                    </div>
                             <span class="ffix">{{trans('admin.SAFEPAYMENT')}}</span>
                                 <br>
                                     <span>{{trans('admin.SAFEPAYMENT1')}}</span>
                                     
                                </div>
                            </div>
                            <div class="info-element grid__item one-quarter small--one-half">
                                <div class="info-wrapper">
                                    <div class="image grid__item one-whole">
                                        <img src="//cdn.shopify.com/s/files/1/0026/6069/6153/files/icon-bottom-3_small.png?v=1544000663" alt="" style="border-radius:0px;">
                                    </div>
                                    
                                  <span class="ffix">{{trans('admin.SHOPWITHCONFIDENCE')}}</span>
                                 <br>
                                     <span>{{trans('admin.SHOPWITHCONFIDENCE1')}}</span>
                                     
                                </div>
                            </div>
                            <div class="info-element grid__item one-quarter small--one-half">
                                <div class="info-wrapper">
                                    <div class="image grid__item one-whole">
                                        <img src="//cdn.shopify.com/s/files/1/0026/6069/6153/files/icon-bottom-4_small.png?v=1544000671" alt="" style="border-radius:0px;">
                                    </div>
                                        <span class="ffix">{{trans('admin.HELPCENTER')}}</span>
                                 <br>
                                     <span>{{trans('admin.HELPCENTER1')}}</span>
                                       
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="wrapper">
                        <div class="grid">
                            <div class="link-block grid__item one-fifth">
                                <div class="heading"> {{trans('admin.BuyerCentral')}}
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="content" style="font-size:14px;">
                                    <ul class="grid__link">
                                        <li>
            <a href="{{url('/')}}/login" data-mfp-src="#LoginModal">
                                         
                                        <span>{{trans('admin.Signin')}}</span>

                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.BuyerProtection')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.PaymentOptions')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.ShippingPolicy')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.ReturnPolicy')}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-block grid__item one-fifth">
                                <div class="heading">{{trans('admin.Information')}}
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="content" style="font-size:14px">
                                    <ul class="grid__link">
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.MerchantCentral')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/admin">
                                                <span>{{trans('admin.MerchantSignIn')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/SellOnAlymarket">
                                                <span>{{trans('admin.MerchantRegistration')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.HowDoesItWork')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./collection.html">
                                                <span>{{trans('admin.Pricing')}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-block grid__item one-fifth">
                                <div class="heading">{{trans('admin.Help')}}
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="content" style="font-size:14px;">
                                    <ul class="grid__link">
                                        <li>
                                            <a href="{{url('/')}}/contact">
                                                <span>{{trans('admin.SeeallHelp')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/login">
                                                <span>{{trans('admin.MyAccount')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/FAQ">
                                                <span>{{trans('admin.FAQs')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/about">
                                                <span>{{trans('admin.OtherServices')}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/SaleOff">
                                                <span>{{trans('admin.ShopBox')}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="newsletter-social-block grid__item two-fifths">
                                <div class="newsletter-area">
                                    <div class="heading">{{trans('admin.Subscription')}}</div>
                                    <div class="desc">
                                        {{trans('admin.promotions')}}
                                        
                                    </div>
                                    <div class="action">
                                        <form method="post" action="#" id="contact_form" accept-charset="UTF-8" class="contact-form">
                                            <input type="hidden" name="form_type" value="customer">
                                            <input type="hidden" name="utf8" value="✓">
                                            <div class="newsletter-box input-group" style="margin-left: -65px;">
                                                <input type="hidden" name="contact[tags]" value="newsletter">
                            <input type="email" name="contact[email]" id="Email" class="input-group__field newsletter__input" value="" placeholder="{{trans('admin.enter')}}" style="border-radius:8px 0px 0px 8px;" size="4">
                                                <span style="margin-left: 265px;
margin-top: -40px;">
                                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe" style="border-radius:0px 8px 8px 0px ; height:40px">{{trans('admin.Subscription')}}</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="social-area">
                                    <div class="heading">{{trans('admin.Stayconnected')}}</div>
                                    <div class="social">
                                        <ul class="socialLinks socialLinks--alt">
                                            <li class="socialLinks-item">
                                                <a href="{{settings()->facebookLink}}" title="" class="icon-social facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="socialLinks-item">
                                                <a href="{{settings()->TwitterLink}}" title="" class="icon-social twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="socialLinks-item">
                                                <a href="{{settings()->GmailLink}}" title="" class="icon-social google-plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="socialLinks-item">
                                                <a href="{{settings()->LinkedinLink}}" title="" class="icon-social pinterest">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="socialLinks-item">
                                                <a href="{{settings()->instagramLink}}" title="" class="icon-social instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="wrapper">
                        <div class="grid">

                            <div class="copyright-block grid__item one-half" style="color: #eb6625;
font-size: 17px;
font-weight: 700;">

                                <div class="cr-text">
                                    <p> {{trans('admin.alymarketAllrightsReserved')}}©{{ date('Y') }}
 </p>
                                </div>
                            </div>

                            <div class="payment-block">
                                <ul class="payment-icons list--inline">
                                    <li class="payment-icon">                                       
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-visa" viewBox="0 0 27 20">
                                            <path fill="#444" d="M19.16 8.465q-.781-.352-1.621-.332-.605 0-.928.225t-.322.508.283.508.947.557q1.855.84 1.836 2.285 0 1.328-1.035 2.119t-2.773.791q-1.445-.02-2.441-.449l.293-1.914.273.156q1.113.449 2.07.449.527 0 .918-.225t.41-.635q0-.273-.254-.498t-.918-.557q-.371-.195-.654-.371t-.596-.459-.488-.664-.176-.811q.02-1.23 1.064-2.002t2.666-.771q1.035 0 1.953.332l-.273 1.855zm-9.14-1.934l-3.457 8.477H4.258L2.461 8.25q.938.371 1.709 1.133t1.104 1.66Q4.063 7.703.001 6.688l.02-.156h3.535q.82 0 .996.684l.762 3.906.254 1.172 2.129-5.762h2.324zm3.085 0l-1.367 8.477H9.55l1.367-8.477h2.188zm13.946 8.477H25q-.156-.996-.234-1.27l-2.813-.02-.449 1.289H19.18l3.262-7.793q.293-.684 1.152-.684h1.68zM23.77 8.797l-.137.361q-.078.205-.127.342t-.029.117q-.703 1.875-.879 2.383h1.777l-.469-2.461z"></path>
                                        </svg>
                                    </li>
                                    <li class="payment-icon">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-master" viewBox="0 0 23 15">
                                            <path d="M17.375 8.166c-.537 0-.644.237-.644.437 0 .1.061.276.284.276.437 0 .53-.575.514-.699-.015 0-.03-.015-.154-.015zm-6.301-.975c-.399 0-.476.453-.476.499h.813c-.008-.039.07-.499-.337-.499zm-5.526.975c-.537 0-.645.237-.645.437 0 .1.061.276.285.276.437 0 .53-.575.514-.699-.016 0-.03-.015-.154-.015zm15.45-.899c-.323 0-.576.376-.576.937 0 .346.122.568.384.568.399 0 .583-.515.583-.899.008-.422-.13-.606-.392-.606zM16.292.951a6.7 6.7 0 0 0-4.368 1.62 7.007 7.007 0 0 1 1.88 3.024h-.322a6.772 6.772 0 0 0-1.789-2.817 6.723 6.723 0 0 0-1.788 2.817h-.323A7.004 7.004 0 0 1 11.58 2.47 6.817 6.817 0 0 0 7.097.798 6.859 6.859 0 0 0 .236 7.659a6.86 6.86 0 0 0 11.343 5.196 7.07 7.07 0 0 1-1.872-2.764h.33a6.727 6.727 0 0 0 1.657 2.449 6.731 6.731 0 0 0 1.659-2.449h.33a6.937 6.937 0 0 1-1.759 2.656 6.7 6.7 0 0 0 4.368 1.62c3.699 0 6.708-3.009 6.708-6.709C23 3.958 19.992.95 16.292.95v.001zM3.13 9.44l.414-2.618-.936 2.618h-.499l-.061-2.618-.445 2.618H.897l.584-3.477h1.066l.031 2.133.721-2.133H4.45L3.875 9.44H3.13zm2.495 0l.022-.277c-.015 0-.23.338-.752.338-.268 0-.705-.146-.705-.783 0-.813.66-1.081 1.297-1.081.1 0 .314.015.314.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.475 0-.798.13-.798.13l.107-.63s.384-.16.883-.16c.26 0 1.005.03 1.005.882l-.284 2.01h-.644V9.44zm2.709-.89c0 .967-.937.928-1.105.928-.614 0-.799-.085-.822-.092l.1-.636c0-.008.307.107.645.107.199 0 .453-.015.453-.253 0-.354-.913-.269-.913-1.106 0-.737.544-.951 1.09-.951.414 0 .674.053.674.053l-.091.645s-.4-.03-.499-.03c-.26 0-.399.052-.399.237 0 .376.868.191.868 1.098h-.001zM9.4 7.306l-.207 1.266c-.016.1.015.238.268.238.061 0 .138-.023.185-.023l-.092.622c-.077.023-.284.092-.545.092-.338 0-.583-.192-.583-.622 0-.292.414-2.67.43-2.686h.73l-.078.43h.36l-.091.683H9.4zm1.772 1.55c.369 0 .775-.176.775-.176l-.13.705s-.238.123-.768.123c-.583 0-1.258-.246-1.258-1.274 0-.89.544-1.681 1.274-1.681.798 0 1.044.583 1.044 1.067 0 .191-.092.668-.092.668h-1.49c0-.016-.137.567.645.567v.001zm2.426-1.42c-.506-.176-.544.799-.76 2.01h-.752l.453-2.824h.683l-.06.407s.245-.445.567-.445a.92.92 0 0 1 .138.007c-.092.2-.185.376-.269.844v.001zm2.096 1.965s-.392.1-.637.1c-.868 0-1.313-.6-1.313-1.512 0-1.374.822-2.103 1.666-2.103.376 0 .821.176.821.176l-.122.775s-.299-.207-.668-.207c-.498 0-.944.476-.944 1.335 0 .423.208.821.722.821.246 0 .606-.176.606-.176l-.13.79-.001.001zm1.756.039l.023-.277c-.016 0-.23.338-.752.338-.268 0-.706-.146-.706-.783 0-.813.66-1.081 1.297-1.081.1 0 .315.015.315.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.476 0-.799.13-.799.13l.108-.63s.384-.16.882-.16c.26 0 1.006.03 1.006.882l-.284 2.01c-.008-.007-.645-.007-.645-.007zm1.512.008h-.752l.453-2.825h.683l-.06.407s.245-.446.567-.446c.091 0 .138.008.138.008-.1.2-.185.376-.269.844-.506-.176-.544.807-.76 2.01v.002zm2.234-.008l.03-.26s-.245.306-.683.306c-.606 0-.906-.583-.906-1.182 0-.929.561-1.735 1.228-1.735.43 0 .706.376.706.376l.16-.975h.73l-.56 3.469h-.706zm1.367-.015a.195.195 0 0 1-.108.03.178.178 0 0 1-.107-.03.226.226 0 0 1-.085-.085.187.187 0 0 1-.03-.108c0-.038.007-.077.03-.107a.226.226 0 0 1 .085-.085.187.187 0 0 1 .107-.03c.039 0 .077.007.108.03.038.016.061.046.085.085.023.038.03.069.03.107a.178.178 0 0 1-.03.108.218.218 0 0 1-.085.085zm-.024-.353a.197.197 0 0 0-.183 0 .156.156 0 0 0-.07.069.197.197 0 0 0 0 .183c.016.03.039.054.07.07a.197.197 0 0 0 .183 0 .151.151 0 0 0 .07-.07.197.197 0 0 0 0-.183.156.156 0 0 0-.07-.07zm-.03.284l-.023-.039a.18.18 0 0 0-.039-.053c-.008-.007-.015-.008-.03-.008h-.023v.1h-.038v-.238h.084c.031 0 .047 0 .062.008.014.008.022.016.03.023.008.007.008.022.008.038s-.008.03-.016.046c-.016.016-.03.023-.046.023.008 0 .016.008.023.016.006.008.022.023.038.046l.03.047h-.06v-.01zm-.015-.17c0-.008 0-.016-.008-.016l-.016-.015c-.008 0-.023-.008-.038-.008h-.047v.069h.047c.022 0 .038 0 .046-.008.016-.008.016-.016.016-.023v.001z" fill="#444" fill-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                    <li class="payment-icon">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-american_express" viewBox="0 0 20 20">
                                            <path fill="#444" d="M8.373 7.623v-.46H6.606V9.37h1.767v-.453h-1.24v-.44H8.34v-.453H7.133v-.4zm2.487.134c0-.247-.1-.393-.267-.487-.173-.1-.367-.107-.64-.107H8.74v2.213h.527v-.807h.567c.193 0 .307.02.387.093.093.107.087.3.087.433v.28h.533v-.433c0-.2-.013-.293-.087-.407a.629.629 0 0 0-.26-.187.638.638 0 0 0 .367-.593zm-.693.313c-.073.047-.16.047-.26.047h-.64v-.493h.653c.093 0 .187.007.253.04s.113.1.113.193c-.007.1-.047.173-.12.213zm-8.874.813h1.1l.2.493h1.073V7.643l.767 1.733H4.9l.767-1.733v1.733h.54V7.163h-.873l-.633 1.5-.693-1.5h-.86v2.093l-.9-2.093h-.787L.574 9.23v.14h.513l.207-.487zm.547-1.346l.36.88h-.72l.36-.88zm11.22.1h.5v-.473h-.513c-.367 0-.633.08-.8.26-.227.24-.287.533-.287.867 0 .4.093.653.28.847.147.2.413.273.767.247h.62l.2-.493h1.1l.207.493h1.073v-1.66l1 1.66h.747V7.172h-.54v1.54l-.927-1.54h-.807v2.093l-.893-2.093H14l-.747 1.74h-.24c-.14 0-.287-.027-.367-.113-.1-.113-.147-.28-.147-.52 0-.233.06-.407.153-.5.107-.113.213-.14.407-.14zm1.32-.1l.367.88h-.727l.36-.88zm-3.213-.374h.54v2.213h-.54V7.163zm1.96 4.4a.522.522 0 0 0-.273-.493c-.173-.093-.367-.107-.633-.107h-1.22v2.213h.533v-.807h.567c.193 0 .313.02.387.1.1.1.087.3.087.433v.273h.533v-.44c0-.193-.013-.293-.087-.407a.585.585 0 0 0-.26-.187.61.61 0 0 0 .367-.58zm-.694.314a.534.534 0 0 1-.26.047h-.64v-.493h.653c.093 0 .187 0 .253.04.067.033.107.107.107.2s-.047.167-.113.207zM9.86 10.97H8.173l-.673.727-.653-.727h-2.12v2.213H6.82l.673-.733.653.733h1.027v-.74h.66c.46 0 .92-.127.92-.74-.007-.62-.473-.733-.893-.733zm-3.313 1.747H5.254v-.44h1.16v-.453h-1.16v-.4h1.327l.58.647-.613.647zm2.1.26l-.813-.9.813-.873v1.773zm1.206-.987h-.68v-.56h.687c.193 0 .32.08.32.273 0 .187-.127.287-.327.287zm5.327-.567v-.453h-1.76v2.207h1.76v-.46h-1.233v-.44h1.207v-.453h-1.207v-.4zm4.127.647a.171.171 0 0 0-.047-.053c-.12-.12-.313-.173-.6-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.12-.04.213-.04h.96v-.473h-1.053c-.553 0-.76.34-.76.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047s.067.08.067.147c0 .06-.027.107-.06.147-.04.04-.113.053-.213.053h-1.013v.473h1.02c.34 0 .587-.093.72-.28a.724.724 0 0 0 .113-.413c-.007-.193-.047-.313-.12-.413zm-.774 1.54h-1.367v-.2c-.16.127-.447.2-.72.2h-4.313v-.713c0-.087-.007-.093-.093-.093h-.067v.807h-1.42v-.833c-.24.1-.507.113-.733.107h-.167v.733h-1.72l-.427-.48-.447.48H4.246v-3.087h2.847l.407.473.433-.473H9.84c.22 0 .58.02.747.18v-.18h1.707c.16 0 .507.033.713.18v-.18h2.58v.18c.127-.12.4-.18.633-.18h1.447v.18c.153-.107.367-.18.66-.18h.98V.258H.574v7.78l.573-1.313h1.38l.18.367v-.367H4.32l.353.793.347-.793h5.127c.233 0 .44.047.593.18v-.18h1.407v.18c.24-.133.54-.18.88-.18h2.033l.187.367v-.367h1.507l.207.367v-.367h1.467v3.08h-1.48l-.28-.467v.467h-1.853l-.2-.493h-.453l-.207.493h-.96c-.38 0-.66-.087-.847-.187v.187h-2.28v-.7c0-.1-.02-.107-.08-.107h-.087v.807H5.288v-.38l-.16.38h-.92l-.16-.38v.373H2.275l-.2-.493h-.453l-.207.493h-.84v9.313h18.727v-5.653c-.207.113-.487.153-.767.153zm-2.013-.907h-1.027v.473h1.027c.533 0 .827-.22.827-.7 0-.227-.053-.36-.16-.467-.12-.12-.313-.173-.607-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.113-.04.213-.04h.967v-.473h-1.06c-.553 0-.753.34-.753.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047.033.033.067.08.067.147 0 .06-.027.107-.06.147-.033.047-.107.06-.207.06z"></path>
                                        </svg>
                                    </li>
                                    <li class="payment-icon">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-paypal" viewBox="0 0 36 20">
                                            <path fill="#444" d="M33.691 7.141h2.012l-1.66 7.5h-1.992zM5.332 7.16q.918 0 1.553.674t.381 1.865q-.234 1.152-1.064 1.807t-1.963.654H2.696l-.547 2.48H.001l1.641-7.48h3.691zm19.141 0q.918 0 1.563.674t.391 1.865q-.156.762-.596 1.328t-1.074.85-1.396.283h-1.523l-.527 2.48h-2.148l1.641-7.48h3.672zM8.027 9.055q.098-.02.42-.098t.537-.127.566-.098.684-.049q.547-.02 1.025.078t.879.313.566.645.029 1.016l-.82 3.906H9.94l.137-.586q-.41.41-1.035.586t-1.182.088-.889-.615-.176-1.387q.215-1.016 1.221-1.455t2.744-.439q.059-.293-.059-.469t-.352-.244-.625-.049q-.508.02-1.094.156t-.781.254zm19.18 0q.117-.02.342-.078t.42-.107.439-.088.508-.068.537-.029q.566-.02 1.045.078t.879.313.576.645.039 1.016l-.84 3.906H29.16l.137-.586q-.41.41-1.045.586t-1.201.088-.898-.615-.176-1.387q.137-.703.684-1.123t1.348-.596 1.973-.176q.098-.449-.166-.615t-.869-.146q-.352 0-.762.078t-.713.166-.459.166zM4.004 10.734q.273 0 .537-.137t.449-.371.244-.527q.117-.43-.098-.723t-.625-.293H3.476l-.469 2.051h.996zm19.16 0q.41 0 .781-.303t.469-.732-.127-.723-.615-.293h-1.094l-.43 2.051h1.016zm-9.531-1.933l.801 5.879-1.445 2.461h2.207l4.688-8.34h-2.031L15.9 12.278l-.313-3.477h-1.953zm-3.242 3.887q0-.195.098-.527h-.508q-.918 0-1.172.488-.195.352-.01.586t.537.234q.859-.039 1.055-.781zm19.199 0q.039-.332.117-.527h-.488q-.977 0-1.191.488-.195.352-.01.586t.537.234q.879-.039 1.035-.781z"></path>
                                        </svg>
                                    </li>
                                     
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div> 
    
    <div class="combo-icons medium-down--hide">
        <div id="float-saleoff" title="Special Deals">
            <a href="./page-saleoff.html">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </a>
        </div>
        <div id="float-wishlist" title="My Wishlist">
            <a href="./page-wishlist.html">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <span class="number">
                    <span class="wlnumber">0</span>
                </span>
            </a>
        </div>
        <div id="float-compare" title="My Compare">
            <a href="./page-compare.html">
                <i class="fa fa-refresh" aria-hidden="true"></i>
                <span class="number">
                    <span class="cpnumber">0</span>
                </span>
            </a>
        </div>
    </div>
    <div id="scroll-to-top" title="Scroll to Top" class="off">
        <i class="fa fa-caret-up"></i>
    </div>

    

 
<!--script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e690cf28d24fc2265870d62/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
 
</script -->
 
<!--script>
 
var slideIndex = 0;
showSlides1();

function showSlides1() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides1, 3000); // Change image every 2 seconds
}
 

 
    function hideImg() {
  document.getElementById("image1").style.display = "none";
  document.getElementById("close").style.display = "none";
}
</script-->

<script>
var slideIndex = 0;
showSlides1();


var test='red'
function showSlides1() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  for (i = 0; i < slides.length; i++) {

                

    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");

      
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides1,3000); // Change image every 2 seconds

 

 

}
</script>


<script>
var slideIndex = 0;
showSlides2();

function showSlides2() {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot2");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides2, 10000); // Change image every 2 seconds
}
</script>





<script>
var slideIndex = 0;
showSlides3();

function showSlides3() {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("dot3");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides3, 10000); // Change image every 2 seconds
}
</script>




<script>
var slideIndex = 0;
showSlides4();

function showSlides4() {
  var i;
  var slides = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("dot4");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides4, 10000); // Change image every 2 seconds
}
</script>




<script>
var slideIndex = 0;
showSlides5();

function showSlides5() {
  var i;
  var slides = document.getElementsByClassName("mySlides5");
  var dots = document.getElementsByClassName("dot5");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides5, 10000); // Change image every 2 seconds
}
</script>



<script>
var slideIndex = 0;
showSlides20();

function showSlides20() {
  var i;
  var slides = document.getElementsByClassName("mySlides20");
  var dots = document.getElementsByClassName("dot20");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides20, 10000); // Change image every 2 seconds
}
</script>

<script>
 
              var AlyMarket =20000;

 


  
$("#MF > div:gt(0)").hide();

setInterval(function() {
  $('#MF > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF');
}, AlyMarket);

$("#MF2 > div:gt(0)").hide();

setInterval(function() {
  $('#MF2 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF2');
}, AlyMarket);


$("#MF3 > div:gt(0)").hide();

setInterval(function() {
  $('#MF3 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF3');
}, AlyMarket);


$("#MF4 > div:gt(0)").hide();

setInterval(function() {
  $('#MF4 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF4');
}, AlyMarket);


$("#MF5 > div:gt(0)").hide();

setInterval(function() {
  $('#MF5 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF5');
}, AlyMarket);

$("#MF6 > div:gt(0)").hide();

setInterval(function() {
  $('#MF6 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#MF6');
}, AlyMarket);


/*************************************************************/             
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow');
}, AlyMarket);


$("#slideshow2 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow2 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow2');
}, AlyMarket);


 



 
 

$("#slideshow3 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow3 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow3');
}, AlyMarket);


 




 

$("#slideshow4 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow4 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow4');
}, AlyMarket);

 
 
 

 

$("#slideshow5 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow5 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow5');
}, AlyMarket);


$("#slideshow15 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow15 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow15');
}, AlyMarket);


 $("#slideshow115 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow115 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow115');
}, AlyMarket);


  
 

$("#slideshow6 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow6 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow6');
}, AlyMarket);


 

 


 

$("#slideshow7 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow7 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow7');
}, AlyMarket);


 
  

$("#slideshow8 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow8 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow8');
}, AlyMarket);


 


 
 

$("#slideshow9 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow9 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow9');
}, AlyMarket);


 

  
 

$("#slideshow10 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow10 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow10');
}, AlyMarket);


$("#slideshow110 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow110 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow110');
}, AlyMarket);


$("#slideshow1110 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow1110 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow1110');
}, AlyMarket);


 



  

$("#slideshow11 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow11 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow11');
}, AlyMarket);


 



 
 

$("#slideshow12 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow12 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow11');
}, AlyMarket);


</script>


<script>
 

$("#slideshow13 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow13 > div:first')
    .fadeOut(AlyMarket)
    .next()
    .fadeIn(AlyMarket)
    .end()
    .appendTo('#slideshow11');
}, AlyMarket);


</script>

 <script type="text/javascript">
    function chBackcolor(color) {
   document.body.style.background = color;
}
 </script>
  

          @stack('js')


          
</body>
</html> 
 

 
