   @include('forentend3.layouts.header')
@include('forentend3.layouts.navbar')
 
@include('forentend3.layouts.message')




     @push('js')

<script type="text/javascript">


 

  var audioUrl = '{{url("/")}}/forentend3/assets/voiceOver/wellcome.mp3';

// SIMPLE EXEMPLE
$('.play').click( () => new Audio(audioUrl).play() ); // that will do the trick !!
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

               <script type="text/javascript">
                
        $(document).on('click','.XCV',function(){
          var TotalOrder= $('#inToal').val();
        var Coupon= $('#coupon_code').val();  
        $.ajax({
            url:"{{url('cart/ApplyCoupon')}}",
            method:"POST",
             data :{
            _token:'{{ csrf_token() }}',
            Coupon:Coupon,
            TotalOrder:TotalOrder,
           },
            dataType:"json",

            beforeSend:function(){
              
               $('.loading-save-c').removeClass('hidden');  

           $('.cart_sucess').html('');

                 $('#Htotal').html('');
                $('#TToal').html(''); 
                $('#rrrrrrr').html('');
               
                
            },
            success:function(data)
            {
                  
               $('.loading-save-c').addClass('hidden');  
             
            $('#TToal').html(data.Total_order);
                $('#rrrrrrr').html(data.Total_order);
           $('#inToal').val(data.Total_order);
           $('.cart_sucess').html(data.success);
               $('#coupon_code').val('');  
               
                

            }
        }); 
             return false;
    
        });
                    $(document).on('click','.addd',function(){     

                        var text =$(this).text();
                    var id = parseInt(text);
                              

                     alert(id);

                     return false;
                    });

                 $(document).on('click','.remove',function(){
                  
                     var tr = $(this).closest('tr');
                          tr.fadeOut(1000, function(){ // **addd this
                            $(this).remove();
                        });
                   var text =$(this).text();
                    var id = parseInt(text);
                              
                    
        $.ajax({
            url:"{{url('cart/remove')}}",
            method:"POST",
           data :{
            _token:'{{ csrf_token() }}',
            id:id,

           },
            dataType:"json",

            beforeSend:function(){
                 $('#Htotal').html('');
                $('#TToal').html(''); 
                $('#rrrrrrr').html('');
                $('#wwwwwwwww').html('');
                
            },
            success:function(data)
            {
            
                  tr.fadeOut(1000, function(){ // **addd this
                            $(this).remove();
                        });
             $('#TToal').html(data.Total_order);
                $('#rrrrrrr').html(data.Total_order);

                $('#wwwwwwwww').html(data.order_count);
                 $('#inToal').val(data.Total_order);         
                 

            }
        });
             return false;
    
                
                     
                    });
 
                   
           
               </script>
               @endpush

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

                     @push('js')


<style>
 

#regForm {
       background-color: #ffffff;
    margin: 100px auto;
        margin-top: 100px;
        margin-right: auto;
    font-size: 13px;
    padding: 4px;
    width: 52%;
    min-width: 266px;
    direction: rtl;
    position: relative;
    margin-right: -64px;
    margin-top: 36px;
     text-align:right;

}



 .bg
  {
    position: absolute;
margin-top: -98px;
  }
</style>




  <style type="text/css">
 

  
  </style>


   @endpush

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

         <div id="bg">
  <img src="{{url('/')}}/forentend3/assets/images/backimages/background3.png" alt="" style=" position: fixed;
margin-top: -98px;
margin-left:-49px;
  ">
</div>

  	<div class="container">
  		<div class="row"> 
           <div class="col-lg-12">
           

   {{  Form::open(['url'=>'action_page','method'=>'post','files'=>true, 'id'=>'regForm'] ) }}

                    @csrf

 
  <!-- One "tab" for each step in the form: -->

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(session()->has('success') )
  <div class="alert alert-success">

    {{session('success')}}
    
  </div>
@endif

                       <h4 style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;">{{trans('admin.personaldata')}}</h4>
                       <br>
                     <div class="container">
                       <div class="row">

                           <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
                     {{ Form::label('name', trans('admin.name2'))  }}
                    {{ Form::text('name',old('name'),['class'=>'form-control'])  }}
                     </div> 

                       <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
                     {{ Form::label('country_id', trans('admin.country2'))  }}
{{ Form::select('country_id',App\countries::pluck('countries_name_ar','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
                     </div> 

                      <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
  
                                      
 {{ Form::label('city', trans('admin.city'))  }}
                   <span class="city"></span>
                   
                     </div> 
                    


                       <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
 {{ Form::label('city', trans('admin.stat'))  }}
                   <span class="stat"></span>
                   
                     </div> 

                     

                 
                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('phone', trans('admin.phone'))  }}
                    {{ Form::text('phone',old('phone'),['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('Whatsappnumber', trans('admin.Whatsappnumber'))  }}
                    {{ Form::text('Whatsappnumber',old('Whatsappnumber'),['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('TheNameOftheStore', trans('admin.TheNameOftheStore'))  }}
                    {{ Form::text('TheNameOftheStore',old('TheNameOftheStore'),['class'=>'form-control'])  }}
                     </div> 

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('NationalID', trans('admin.NationalID'))  }}
                    {{ Form::file('NationalID',old('NationalID'),['class'=>'form-control'])  }}
                     </div> 

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('email', trans('admin.email'))  }}
                    {{ Form::text('email',old('email'),['class'=>'form-control'])  }}
                     </div>

                       <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('RetypeTheEmailAddress', trans('admin.RetypeTheEmailAddress'))  }}
                    {{ Form::text('RetypeTheEmailAddress',old('RetypeTheEmailAddress'),['class'=>'form-control'])  }}
                     </div> 
                    

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('password', trans('admin.password'))  }}
                    {{ Form::password('password',['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('confirmpassword', trans('admin.confirmpassword'))  }}
                    {{ Form::password('confirmpassword',['class'=>'form-control'])  }}
                     </div> 

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('postcode', trans('admin.postcode'))  }}
                    {{ Form::text('postcode',old('postcode'),['class'=>'form-control'])  }}
                     </div> 

                      

                      <div class="form-group col-lg-12" style="">

                    <h4 style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;">{{trans('admin.companyname')}}</h4>
                        
                      </div>
                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('BusinessRegistrationNumber', trans('admin.BusinessRegistrationNumber'))  }}
                    {{ Form::text('BusinessRegistrationNumber',old('BusinessRegistrationNumber'),['class'=>'form-control'])  }}
                     </div> 

                       <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('VatinformationFie', trans('admin.VatinformationFie'))  }}
                    {{ Form::text('VatinformationFie',old('VatinformationFie'),['class'=>'form-control'])  }}
                     </div> 

                          <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('CommercailRegistrationNo', trans('admin.sellerVat'))  }}
                    {{ Form::text('CommercailRegistrationNo',old('CommercailRegistrationNo'),['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('TaxCard', trans('admin.TaxCard'))  }}
                    {{ Form::file('TaxCard',old('TaxCard'),['class'=>'form-control'])  }}
                     </div> 

                   
                       <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('Acopyofthetaxcard2', trans('admin.Acopyofthetaxcard2'))  }}
                    {{ Form::file('Acopyofthetaxcard2',old('Acopyofthetaxcard2'),['class'=>'form-control'])  }}
                     </div> 

                         <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('Acopyofthetaxcard', trans('admin.Acopyofthetaxcard'))  }}
                    {{ Form::file('Acopyofthetaxcard',old('Acopyofthetaxcard'),['class'=>'form-control'])  }}
                     </div> 


                 

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('LegelNameCompanyName', trans('admin.LegelNameCompanyName'))  }}
                    {{ Form::text('LegelNameCompanyName',old('LegelNameCompanyName'),['class'=>'form-control'])  }}
                     </div> 

                         

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('Address1', trans('admin.Address1'))  }}
                    {{ Form::text('Address1',old('Address1'),['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('Companyphonenumber', trans('admin.Companyphonenumber'))  }}
                    {{ Form::text('Companyphonenumber',old('Address2'),['class'=>'form-control'])  }}
                     </div> 
                                      <div class="form-group col-lg-12" >

                    <h4 style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;">{{trans('admin.Bankstatements')}}</h4>
                  
                      </div> 
                        <!--------------------------->

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('bankNameList', trans('admin.bankNameList'))  }}
                    {{ Form::text('bankNameList',old('bankNameList'),['class'=>'form-control'])  }}
                     </div> 

                       <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('bankCode', trans('admin.bankCode'))  }}
                    {{ Form::text('bankCode',old('bankCode'),['class'=>'form-control'])  }}
                     </div> 

                     <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('SWIFT', trans('admin.SWIFT'))  }}
                    {{ Form::text('SWIFT',old('SWIFT'),['class'=>'form-control'])  }}
                     </div> 

                        <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('IBAN', trans('admin.IBAN'))  }}
                    {{ Form::text('IBAN',old('IBAN'),['class'=>'form-control'])  }}
                     </div> 

                      <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('AcountName', trans('admin.AcountName'))  }}
                    {{ Form::text('AcountName',old('AcountName'),['class'=>'form-control'])  }}
                     </div> 

                       <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('AcountNumber', trans('admin.AcountNumber'))  }}
                    {{ Form::text('AcountNumber',old('AcountNumber'),['class'=>'form-control'])  }}
                     </div> 

                     
 

  <div class="form-group col-lg-4 col-sm-4 col-md-4"> 
                     {{ Form::label('level2', trans('admin.level2'))  }}
               

            {!! Form::select('level', [null => trans('admin.dont')] + ['vendor'=>trans('admin.vendor'),'company'=>trans('admin.company'),'imported'=>trans('admin.imported'),'Factory'=>trans('admin.Factory'),'Handicraft'=>trans('admin.Handicraft')], null, ['class' => 'form-control']) !!}
                     </div> 
                <div class="form-group col-lg-8 col-sm-8 col-md-8"> 
                     {{ Form::label('selcttypeofsell', trans('admin.selcttypeofsell'))  }}
                  
                        <br>
                      

                        <u style="

    list-style: none;
    display:flex; padding: 5px;">


 <li style="margin-right: 60px;" >
            <input type="radio" id="female" name="TypeOfSale" value="قطاعي">
  <label for="female" style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;">{{trans('admin.part')}}</label>
                          </li>

                          <li style="margin-right: 60px;" >
                             <input type="radio" id="male" name="TypeOfSale" value="جملة">
  <label for="male" style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;">{{trans('admin.all')}}</label>
                          </li>
                         

                          <li style="margin-right:60px" >
                              <input type="radio" id="other" name="TypeOfSale" value="جملة و قطاعي">
  <label style="text-align: center;
    border-bottom:1px solid black;
    padding-bottom:2px;" for="other">{{trans('admin.partandall')}}</label>
                          </li>
                        </u>
                  
 



                     </div> 


               <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
                     {{ Form::label('level2', trans('admin.level2'))  }}

                          <a id="myButton1" onclick="document.getElementById('id01').style.display='block'" class="form-control btn btn-primary"  style="background-color: orange;color:blue"

                       >{{trans('admin.contract')}}
                          </a>

          
 
                     </div>




  <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
                    
                     {{ Form::label('prrressto', trans('admin.prrressto'))  }}
                     
                
                   

                    
                    
                       <input class="form-control btn btn-danger play" type="button" value="{{trans('admin.presstoagree')}}" onclick="return change(this);"  style="color:#fff;font-size:15px" />

                     
                  

</div>





  <div class="form-group col-lg-3 col-sm-3 col-md-3"> 
                 
                 
                     {{ Form::label('presstofinsh', trans('admin.presstofinsh'))  }}

                     <button type="submit" class="form-control btn btn-primary " >
                      {{trans('admin.Submit1')}}
                     
                   </button>
                     </div> 

                       </div>
                     </div>
 
<form>
 
  
    
 
 

    <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Some text. Some text. Some text.</p>
        <p>Some text. Some text. Some text.</p>
             <a class="btn btn-primary" onclick="myFunction()" style="float:right;">Print contract</a>
      </div>
    </div>
  </div>
</div>
</div>

 


</div>

 
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
 
     
 
  </div>
 
 
 </div>
  
 

   
 


              
    
  
    
   <div id="html-section-footer" class="html-section">
     
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

