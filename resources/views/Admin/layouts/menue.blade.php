
   <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

 


            
  

          <!-- Tasks: style can be found in dropdown.less -->
 

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                

                @if(auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

                @endif



                    @if(!auth()->guard('admin')->user()->photo)

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">

                @endif



             



              <span class="hidden-xs" style="font-weight:bold;">{{ auth()->guard('admin')->user()->name }}</span>



            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                  

            <img src="{{url('/')}}/forentend4/iconified/logo.png" class="img-circle" alt="User Image" width="30px" height="30px">
 



                   







                <p>

                 {{ auth()->guard('admin')->user()->name }} - website admin

                  <small>Member since  {{ auth()->guard('admin')->user()->created_at }} </small>

                </p>

              </li>

              <!-- Menu Body -->

              <li class="user-body">

                <div class="row">

                  <div class="col-xs-4 text-center">

                    <a href="#">Followers</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Sales</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Friends</a>

                  </div>

                </div>

                <!-- /.row -->

              </li>

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <a href="{{url('admin/admins/'. auth()->guard('admin')->user()->id.'/edit')}}" class="btn btn-default btn-flat">Profile</a>

                </div>

                <div class="pull-right">

                  <a href="{{url('/')}}/admin/Admin_logout" class="btn btn-default btn-flat">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->



          

           <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              

              <span class="hidden-xs">language </span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

           

              <!-- Menu Body -->

              <li class="user-body">

                

                 <a href="{{url('admin/lang/en')}}" class="fa fa-flag"> english</a>

               

              </li>

              

              <li class="user-footer">



        <a href="{{url('admin/lang/ar')}}" class="fa fa-flag cheeck">عربي</a>

              </li>

            </ul>



          </li>



          <!-- Control Sidebar Toggle Button -->

          <li>

            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

          </li>

        </ul>

      </div>