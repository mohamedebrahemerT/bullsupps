 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vnrl ">

                  <div class="module  container">  
    <h3 class="modtitle">
          <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/special">
            <span>
              {{trans('admin.Topcollections')}}
            
          </span></a>

             <div class="controls pull-right hidden-xs" style="margin-top: 1px;">
                    <a class="left fa fa-chevron-left btn btn" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example"
                            data-slide="next"></a>
                </div>
      </h3>



    </div>

          
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">

                    <div class="row">

                         
<div id="so_categories_10270487541591275608" class="so-categories module theme3 custom-slidercates preset01-5 preset02-4 preset03-3 preset04-2 preset05-1">
   
  
  <div class="modcontent">
          <div class="cat-wrap theme3 font-title owl2-carousel owl2-theme owl2-loaded">
            
                          
  <div class="owl2-stage-outer">

    <div class="owl2-stage  container" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1479.6px; display:flex; margin-right:-10px" >




                 @foreach($Topcollectionssingle as  $single)

      <div class=" bigslider " style="width: 256px; margin-right: 22px;"><div class="content-box">
              <div class="image-cat">
          <a href="{{url('/')}}/shop?id={{$single->id}}" title="Smartphone" target="_self">
            <img class="lazyautosizes lazyloaded" data-sizes="auto" src="{{Storage::url($single->Groupicon)}}" data-src="{{Storage::url($single->Groupicon)}}" title="Smartphone" alt="Smartphone" sizes="227px">
          </a>
        </div>
                  <div class="cat-content">
              <div class="cat-title">
          <a href="{{url('/')}}/shop?id={{$single->id}}" title="Smartphone " target="_self">
             @if(session('lang')=='ar')

                         {{$single->dep_name_ar }}

                          @endif

                          @if(session('lang')=='en')

                         {{$single->dep_name_en }}

                          @endif
          </a>
        </div>
      
            </div>
          </div>
        </div>
                                          @endforeach 

          
                 @foreach($Topcollections as  $Department)

          <div class=" " style="width: 256px; margin-right: 22px;"><div class="content-box">
              <div class="image-cat">
          <a href="{{url('/')}}/shop?id={{$Department->id}}" title="Sport bikes" target="_blank">
   <img class="lazyautosizes lazyloaded" data-sizes="auto"    
   src="{{Storage::url($Department->Groupicon)}}" data-src="{{Storage::url($Department->Groupicon)}}" title="Sport bikes" alt="Sport bikes" sizes="227px">
          </a>
        </div>
                  <div class="cat-content">
              <div class="cat-title">
          <a href="{{url('/')}}/shop?id={{$Department->id}}" title="Sport bikes " target="_blank">
                       @if(session('lang')=='ar')

                         {{$Department->dep_name_ar }}

                          @endif

                          @if(session('lang')=='en')

                         {{$Department->dep_name_en }}

                          @endif
          </a>
        </div>
      
            </div>
          </div>
        </div>

                                          @endforeach 
        

         

          

        </div></div>

       

      </div>


  

      </div>

    
  </div>



                    </div>

                </div>

                <div class="item">
                    <div class="row">

                       
<div id="so_categories_10270487541591275608" class="so-categories module theme3 custom-slidercates preset01-5 preset02-4 preset03-3 preset04-2 preset05-1">
   
  
  <div class="modcontent">
          <div class="cat-wrap theme3 font-title owl2-carousel owl2-theme owl2-loaded">
            
                          
  <div class="owl2-stage-outer">

    <div class="owl2-stage  container" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1479.6px; display:flex; margin-right:-10px" >




                 @foreach($Topcollectionssingle2 as  $single2)

      <div class=" bigslider " style="width: 256px; margin-right: 22px;"><div class="content-box">
              <div class="image-cat">
          <a href="{{url('/')}}/shop?id={{$single->id}}" title="Smartphone" target="_self">
            <img class="lazyautosizes lazyloaded" data-sizes="auto" src="{{Storage::url($single->Groupicon)}}" data-src="{{Storage::url($single->Groupicon)}}" title="Smartphone" alt="Smartphone" sizes="227px">
          </a>
        </div>
                  <div class="cat-content">
              <div class="cat-title">
          <a href="{{url('/')}}/shop?id={{$single2->id}}" title="Smartphone " target="_self">
             @if(session('lang')=='ar')

                         {{$single2->dep_name_ar }}

                          @endif

                          @if(session('lang')=='en')

                         {{$single2->dep_name_en }}

                          @endif
          </a>
        </div>
      
            </div>
          </div>
        </div>
                                          @endforeach 

          
                 @foreach($Topcollections2 as  $Department2)

          <div class=" " style="width: 256px; margin-right: 22px;"><div class="content-box">
              <div class="image-cat">
          <a href="{{url('/')}}/shop?id={{$Department2->id}}" title="Sport bikes" target="_blank">
   <img class="lazyautosizes lazyloaded" data-sizes="auto"    
   src="{{Storage::url($Department2->Groupicon)}}" data-src="{{Storage::url($Department2->Groupicon)}}" title="Sport bikes" alt="Sport bikes" sizes="227px">
          </a>
        </div>
                  <div class="cat-content">
              <div class="cat-title">
          <a href="{{url('/')}}/shop?id={{$Department2->id}}" title="Sport bikes " target="_blank">
                       @if(session('lang')=='ar')

                         {{$Department2->dep_name_ar }}

                          @endif

                          @if(session('lang')=='en')

                         {{$Department2->dep_name_en }}

                          @endif
          </a>
        </div>
      
            </div>
          </div>
        </div>

                                          @endforeach 
        

         

          

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
          
