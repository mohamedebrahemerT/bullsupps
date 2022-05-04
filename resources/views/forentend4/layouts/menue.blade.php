 <div class="bottom_header border-top dark_skin main_menu_uppercase navbar-dark bg-dark">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                        <div class="categories_wrap">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                            <div id="navCatContent" class="navbar collapse">
                                <ul>
 @foreach(App\Department::where('parent' ,null)->get() as $key =>  $Department)
                                      <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#" data-bs-toggle="dropdown"><i class="flaticon-plugins"></i> <span>
        @if(session('lang') == 'ar')
 {{$Department->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$Department->dep_name_en}}
 @else
 {{$Department->dep_name_en}}
      @endif
                                        </span></a>
                                        <div class="dropdown-menu">

                         <ul class="mega-menu d-lg-flex">

     @foreach(App\Department::where('parent' ,$Department->id)->get() as $key =>  $subDepartment)
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
             <li class="dropdown-header">
                 @if(session('lang') == 'ar')
 {{$subDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$subDepartment->dep_name_en}}
 @else
 {{$subDepartment->dep_name_en}}
      @endif
             
         </li>

          @foreach(App\Department::where('parent' ,$subDepartment->id)->get() as $key =>  $subsubDepartment)

 <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop?id={{$subsubDepartment->id}}">
 @if(session('lang') == 'ar')
 {{$subsubDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$subsubDepartment->dep_name_en}}
 @else
 {{$subsubDepartment->dep_name_en}}
      @endif
</a></li>
        @endforeach

                                                        
                                                    </ul>
                                                </li>
        @endforeach
                                                 
                                            </ul>
                                        </div>
                                    </li>
 

        @endforeach

           

                                
                                </ul>
                                <div class="more_categories">More Categories</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false"> 
                            <span class="ion-android-menu"></span>
                        </button>
                            <div class="pr_search_icon">
                                <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                            </div>
                            <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                                <ul class="navbar-nav navbar-dark bg-dark">
            @foreach(App\Department::where('parent' ,null)->get() as $key =>  $Department)
                                    <li class="dropdown dropdown-mega-menu">
             <a class="dropdown-toggle nav-link"
              href="{{url('/')}}/shop?id={{$Department->id}}" data-bs-toggle="dropdown">
                                             @if(session('lang') == 'ar')
 {{$Department->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$Department->dep_name_en}}
 @else
 {{$Department->dep_name_en}}
      @endif
                                        </a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
   @foreach(App\Department::where('parent' ,$Department->id)->get() as $key =>  $subDepartment)
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                <li class="dropdown-header">
                      @if(session('lang') == 'ar')
 {{$subDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$subDepartment->dep_name_en}}
 @else
 {{$subDepartment->dep_name_en}}
      @endif
                </li>
  @foreach(App\Department::where('parent' ,$subDepartment->id)->get() as $key =>  $subsubDepartment)
  <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop?id={{$subsubDepartment->id}}">
       @if(session('lang') == 'ar')
 {{$subsubDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$subsubDepartment->dep_name_en}}
 @else
 {{$subsubDepartment->dep_name_en}}
      @endif
  </a></li>
        @endforeach
                                                         
                                                    </ul>
                                                </li>
        @endforeach

                                               
                                            </ul>
                                            <div class="d-lg-flex menu_banners row g-3 px-3">
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="#">
                                                                <img src="assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="#">
                                                                <img src="assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
        @endforeach
                                   
                                   
 
                                </ul>
                            </div>
                            <!-- <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

 