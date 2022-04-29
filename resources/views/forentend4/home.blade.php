
  

@extends('forentend4.index')



@section('content')

 
 


                  <div class="container-fluid page-builder-rtl">

        <div class="row row_gw42  box-content1 ">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6s4m  slideshow-full">

                                                

<div class="module sohomepage-slider ">

    

  <div class="form-group">

     

  </div>





<div class="modcontent">

	<div class="w3-content w3-section" >

 
   @foreach($otherDataDepartmentbannersHomeSliders as  $data)
<a href="{{$data->input_key}}"> 
   <img    class="mySlides lazyload"   data-sizes="auto" src="{{url('/')}}/public/{{$data->input_value}}" 
   data-src="{{url('/')}}/public/{{$data->input_value}}"  alt="slide 1" style="width:100% ;margin-bottom: 5%;"  title="xpremo" />
            </a>

                              @endforeach

</div>

 

</div> 



                                            

                          </div>      

              

        </div>

      </div>

 
  
         <div class="container page-builder-rtl">

 
           <div class="row" style="margin-bottom: 6%;">
               
               <h4  class="OurCatalog">
                                     {{ trans('admin.Our Catalog') }}
                                 </h4>
 
      @foreach(App\product::InrandomOrder()->take(4)->get() as  $product)
        <div class="col-sm-3">
           <div class="Component00">
            
            
                  


<div class="heartrelative">

    <a href="{{url('/')}}/shop/{{$product->id}}">
 <img src="{{Storage::url($product->photo)}}" class="img-fluid">
 </a>

  <div class="heartabsolute">
    <a href="{{url('/')}}/wishlist/{{$product->id}}">
       <img     src="{{url('/')}}/forentend4/img/heart.png">
</a>


  </div>
</div>   
         
             

               <h3  class="prodycttitle">
<a href="{{url('/')}}/shop/{{$product->id}}">


 @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
</a>

</h3>

<span class="pfgsl">{{$product->price}} {{trans('admin.pound')}}</span>

<span class="productseccart"   >
<a href="{{url('/')}}/cart/{{$product->id}}">
<img src="{{url('/')}}/forentend4/img/cart.png">
</a>
</span>
         </div>
             
  
        </div>

        @endforeach
                  </div>



                  <div class="row">

                     <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

               <h6  class="Enjoy">
                @php
                $VisionMission1=App\VisionMission::where('id',1)->first();
                $VisionMission2=App\VisionMission::where('id',6)->first();
                $VisionMission3=App\VisionMission::where('id',7)->first();

                @endphp

                 @if(session('lang') == 'ar')
 {{$VisionMission1->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$VisionMission1->title_name_en}}
 @else
 {{$VisionMission1->title_name_en}}
      @endif
                 
                
                                 </h6>

                                 <p class="parg">
                                    
 @if(session('lang') == 'ar')
 {!! $VisionMission1->VisionMission_name_ar !!}
  @elseif(session('lang') == 'en')
 {!! $VisionMission1->VisionMission_name_en !!}
 @else
 {!! $VisionMission1->VisionMission_name_en !!}
      @endif

                                      
                                 </p>
                                 <div>
              <p  class="parg2"> {{ trans('admin.Call and make a reservation now') }}  <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">

 
   <img src="{{url('/')}}/forentend4/img/call.png" style="width: 30px;">

     &nbsp;   <span class="pnun">{{settings()->phone}}</span>

</p>

<div class="row container">
    <div class="col-lg-6" >
<a href="{{url('/')}}">

    <div  class="paddingbuut">
        <img  class="img-fluid imghight "  src="{{Storage::url($VisionMission1->photo)}}" >
    </div>
        
        </a>
    </div>

    <div class="col-lg-6" >
<a href="{{url('/')}}">
        <img class="img-fluid "     src="{{Storage::url($VisionMission2->photo)}}"> 
    </a>
<a href="{{url('/')}}">
   <img     class="img-fluid " style="padding-top: 2%"  src="{{Storage::url($VisionMission3->photo)}}">
        </a>
    </div>
    
</div>
                                 </div>

               
            </div>
        </div>
    </section>
                      
                  </div>


                  <div class="row">
                     <h4  style="
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 36px;
line-height: 44px;
text-align: center;
/* identical to box height */

/* dark brown */
color: #4A2F28;">
                                     @if(session('lang')=='ar')

{!! WhoWeAre()->title_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! WhoWeAre()->title_name_en !!} 

@endif


                                 </h4>
    <section>
       <div class="container">
         <div class="about-us-section">
             <div style="padding: 20px;">
                 <div class="row">
                <div class="col-sm-6">

               
      


<div class="relative">
    <a href="{{url('/')}}">
      <img    class="img-fluid "    src="{{Storage::url(WhoWeAre()->photo)}}">
  <div class="absolute">
    
          <img       class="img-fluid "    src="{{url('/')}}/forentend4/img/Ellipse22.png">
  </div>
</a>
</div>



                  </div>

                  <div class="col-sm-6" style="padding: 43px;text-align: justify">
                    <p>

                            @if(session('lang')=='ar')

{!! WhoWeAre()->WhoWeAre_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! WhoWeAre()->WhoWeAre_name_en !!} 

@endif
                       
                         
                    </p>
<a href="{{url('/')}}">
                  <span class="Read_More">
                      {{ trans('admin.Read More') }}    
                  </span>
</a>
                      
                  </div>
             </div>
             </div>
                 
             </div>     
         </div>
    </section>

                      
                  </div>
                       

<div class="row  ">
   
 <h6  class="Giftforspecial">
                                     {{ trans('admin.Gift for special holidays') }}
                                 </h6>
    <div class="col-lg-6" >

<div class="Giftforspecialdiv"  >
    <a href="{{url('/')}}/shop">
        <img class="img-fluid  heightimggift Giftforimg  b-5"     src="{{url('/')}}/forentend4/img/Rectangle123.png">  </a>
</div>

        <div class="Christmasiscoming">
            <span class="Christmasiscomingtest">
                  
                 {{ trans('admin.Christmas is coming') }}
            </span>
        </div>
   
     <div class="Giftforspecialdiv"  >
         <a href="{{url('/')}}/shop">
   <img     class="img-fluid heightimggift  b-5"   src="{{url('/')}}/forentend4/img/Rectangle124.png">
     </a>
     </div>
   <div class="Christmasiscoming">
            <span class="Christmasiscomingtest">
                 
                  {{ trans('admin.Christmas is coming') }}
            </span>
        </div>
   

    </div>

     <div class="col-lg-6" >
          <div  >
              <a href="{{url('/')}}/shop">
        <img  class="img-fluid  Giftforimg"  src="{{url('/')}}/forentend4/img/Rectangle125.png">

        <div class="Frame">
                   {{ trans('admin.Christmas is coming') }}
        </div>
        </a>
          </div>

          <div class="relativeEllipsegift">
<a href="{{url('/')}}">
  <div class="absoluteEllipsegift"> 
      {{ trans('admin.Buy Now') }}
   
</div>
</a>

</div>

 
    </div>
    
</div> 
<div class="clearfix"></div>
           

   <div class="row">
            
              <h6  class="OurAdvantage">
                                     {{ trans('admin.Our Advantages') }}
                                 </h6>


                 @foreach(App\Objectives::take(3)->get() as  $Objectives)
                                 <div class="OurAdvantageFrame132">
                                    <img src="{{Storage::url($Objectives->photo)}}">
                                   
                                       <h3 class="OurAdvantageFrame132txt">
                   @if(session('lang')=='ar')
                                
{!! $Objectives->title_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! $Objectives->title_name_en !!} 

@endif  
                  </h3>
                               <p class="OurAdvantageFrame132pp">
                            @if(session('lang')=='ar')

{!! $Objectives->Objectives_name_ar !!}

@endif

  @if(session('lang')=='en')

{!! $Objectives->Objectives_name_en !!} 

@endif  


                                
                            </p>
                                 </div>
                                 @endforeach

                                  
               
           </div>  


           <div class="row">
            <h1 class="OwnDesign">
                 {{ trans('admin.Create Your Own Design for Boxes') }}
                 
            </h1>
            <div class="OwnDesigndiv">
                <div class="col-sm-6">

                    <div class="OwnDesignrelative"> 
  <div class="OwnDesignabsolute">
       <img src="{{url('/')}}/forentend4/img/image.png">
  </div>
</div>
                   
                </div>

                <div class="col-sm-6">
             <div style="margin-top: 1%;">

                   <div class="wrapper center-block">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading  " role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/Models.png"> {{ trans('admin.Models') }}
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="fa fa-angle-double-down"></i><img src="{{url('/')}}/forentend4/img/Colors.png">   {{ trans('admin.Colors') }}  
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/pro.png"> {{ trans('admin.Sizes') }}    
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>


 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
      <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/Picture.png"> {{ trans('admin.Picture') }}    
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>


   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading5">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
      <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/Colors.png">{{ trans('admin.Shapes') }}      
        </a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>


    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading6">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
      <i class="fa fa-angle-double-down"></i>  <img src="{{url('/')}}/forentend4/img/Text.png">    {{ trans('admin.Text') }}  
        </a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

<div style="display: flex;margin-top: 7%;">
    
<div style=" 
width: 200px;
height: 80px;
left: 310px;
top: 6057px;

/* brown */
border: 1px solid #885A42;
box-sizing: border-box;">

<div style="width: 80px;
 
 
 

font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 29px;

/* dark brown */
color: #4A2F28;">

<span class="argoprice">  {{ trans('admin.SAR') }}  20</span>
 </div>
    
</div>

       <div>
<a href="{{url('/')}}/shop">
        <button  class="bynbtn">
{{ trans('admin.Buy Now') }}
</button> 
</a>    
       </div>
</div>



</div>
</div>

                 
             </div>
                    
                </div>
            </div>
               
           </div>


        </div>

      </div>


 

 


  <!-- Button trigger modal -->
<button style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#xxxxxxxxzz" id="control-qid13228">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="xxxxxxxxzz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> هل تريد للموقع السماح بالكوكيز   ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.no')}}</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">{{trans('admin.yes')}}</button>
      </div>
    </div>
  </div>
</div>  

@push('js')
<script type="text/javascript">


 

	 $(document).ready(function() {
     $("#zxzxzxzx").show();

 document.getElementById("zxzxzxzx").style.display = "block"; 

});

</script>
@endpush       

     @endsection