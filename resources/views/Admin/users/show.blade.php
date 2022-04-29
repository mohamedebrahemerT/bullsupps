@extends('Admin.index')

@section('content')





  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

      {{trans('admin.Dashboard') }}



        <span  class="alert alert-denger">

          

          

     



        </span>

        <small>{{trans('admin.Controlpanel') }} </small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>{{trans('admin.Home') }} </a></li>

        <li class="active"> {{trans('admin.Dashboard') }}</li>

      </ol>



       @include('Admin.layouts.message')

    </section>



    <!-- Main content -->

    <section class="content"  style="display: none;">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-lg-3 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>150</h3>



              <p>New Orders</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>53<sup style="font-size: 20px">%</sup></h3>



              <p>Bounce Rate</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>44</h3>



              <p>User Registrations</p>

            </div>

            <div class="icon">

              <i class="ion ion-person-add"></i>

            </div>

            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-red">

            <div class="inner">

              <h3>65</h3>



              <p>Unique Visitors</p>

            </div>

            <div class="icon">

              <i class="ion ion-pie-graph"></i>

            </div>

            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

      </div>

      <!-- /.row -->

      <!-- Main row -->

      <div class="row">

        <!-- Left col -->

        <section class="col-lg-7 connectedSortable">

          <!-- Custom tabs (Charts with tabs)-->

          <div class="nav-tabs-custom">

            <!-- Tabs within a box -->

            <ul class="nav nav-tabs pull-right">

              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>

              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>

              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>

            </ul>

            <div class="tab-content no-padding">

              <!-- Morris chart - Sales -->

              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>

              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>

            </div>

          </div>

          <!-- /.nav-tabs-custom -->



          <!-- Chat box -->

          <div class="box box-success">

            <div class="box-header">

              <i class="fa fa-comments-o"></i>



              <h3 class="box-title">Chat</h3>



              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">

                <div class="btn-group" data-toggle="btn-toggle">

                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>

                  </button>

                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>

                </div>

              </div>

            </div>

            <div class="box-body chat" id="chat-box">

              <!-- chat item -->

              <div class="item">

                <img src="{{url('/')}}/Desgin/Adminlte/dist/img/user4-128x128.jpg" alt="user image" class="online">



                <p class="message">

                  <a href="#" class="name">

                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>

                    Mike Doe

                  </a>

                  I would like to meet you to discuss the latest news about

                  the arrival of the new theme. They say it is going to be one the

                  best themes on the market

                </p>

                <div class="attachment">

                  <h4>Attachments:</h4>



                  <p class="filename">

                    Theme-thumbnail-image.jpg

                  </p>



                  <div class="pull-right">

                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>

                  </div>

                </div>

                <!-- /.attachment -->

              </div>

              <!-- /.item -->

              <!-- chat item -->

              <div class="item">

                <img src="{{url('/')}}/Desgin/Adminlte/dist/img/user3-128x128.jpg" alt="user image" class="offline">



                <p class="message">

                  <a href="#" class="name">

                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>

           {{ auth()->guard('admin')->user()->name }}

                  </a>

                  I would like to meet you to discuss the latest news about

                  the arrival of the new theme. They say it is going to be one the

                  best themes on the market

                </p>

              </div>

              <!-- /.item -->

              <!-- chat item -->

              <div class="item">

                <img src="{{url('/')}}/Desgin/Adminlte/dist/img/user2-160x160.jpg" alt="user image" class="offline">



                <p class="message">

                  <a href="#" class="name">

                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>

                    Susan Doe

                  </a>

                  I would like to meet you to discuss the latest news about

                  the arrival of the new theme. They say it is going to be one the

                  best themes on the market

                </p>

              </div>

              <!-- /.item -->

            </div>

            <!-- /.chat -->

            <div class="box-footer">

              <div class="input-group">

                <input class="form-control" placeholder="Type message...">



                <div class="input-group-btn">

                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>

                </div>

              </div>

            </div>

          </div>

          <!-- /.box (chat box) -->



          <!-- TO DO List -->

          <div class="box box-primary">

            <div class="box-header">

              <i class="ion ion-clipboard"></i>



              <h3 class="box-title">To Do List</h3>



              <div class="box-tools pull-right">

                <ul class="pagination pagination-sm inline">

                  <li><a href="#">&laquo;</a></li>

                  <li><a href="#">1</a></li>

                  <li><a href="#">2</a></li>

                  <li><a href="#">3</a></li>

                  <li><a href="#">&raquo;</a></li>

                </ul>

              </div>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <!-- See {{url('/')}}/Desgin/Adminltedist/js/{{url('/')}}/Desgin/Adminlte/pages/dashboard.js to activate the todoList plugin -->

              <ul class="todo-list">

                <li>

                  <!-- drag handle -->

                  <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <!-- checkbox -->

                  <input type="checkbox" value="">

                  <!-- todo text -->

                  <span class="text">Design a nice theme</span>

                  <!-- Emphasis label -->

                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>

                  <!-- General tools such as edit or delete-->

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

                <li>

                      <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <input type="checkbox" value="">

                  <span class="text">Make the theme responsive</span>

                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

                <li>

                      <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <input type="checkbox" value="">

                  <span class="text">Let theme shine like a star</span>

                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

                <li>

                      <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <input type="checkbox" value="">

                  <span class="text">Let theme shine like a star</span>

                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

                <li>

                      <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <input type="checkbox" value="">

                  <span class="text">Check your messages and notifications</span>

                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

                <li>

                      <span class="handle">

                        <i class="fa fa-ellipsis-v"></i>

                        <i class="fa fa-ellipsis-v"></i>

                      </span>

                  <input type="checkbox" value="">

                  <span class="text">Let theme shine like a star</span>

                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>

                  <div class="tools">

                    <i class="fa fa-edit"></i>

                    <i class="fa fa-trash-o"></i>

                  </div>

                </li>

              </ul>

            </div>

            <!-- /.box-body -->

            <div class="box-footer clearfix no-border">

              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>

            </div>

          </div>

          <!-- /.box -->



          <!-- quick email widget -->

          <div class="box box-info">

            <div class="box-header">

              <i class="fa fa-envelope"></i>



              <h3 class="box-title">Quick Email</h3>

              <!-- tools box -->

              <div class="pull-right box-tools">

                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"

                        title="Remove">

                  <i class="fa fa-times"></i></button>

              </div>

              <!-- /. tools -->

            </div>

            <div class="box-body">

              <form action="#" method="post">

                <div class="form-group">

                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">

                </div>

                <div class="form-group">

                  <input type="text" class="form-control" name="subject" placeholder="Subject">

                </div>

                <div>

                  <textarea class="textarea" placeholder="Message"

                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                </div>

              </form>

            </div>

            <div class="box-footer clearfix">

              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send

                <i class="fa fa-arrow-circle-right"></i></button>

            </div>

          </div>



        </section>

        <!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <section class="col-lg-5 connectedSortable">



          <!-- Map box -->

          <div class="box box-solid bg-light-blue-gradient">

            <div class="box-header">

              <!-- tools box -->

              <div class="pull-right box-tools">

                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"

                        title="Date range">

                  <i class="fa fa-calendar"></i></button>

                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"

                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">

                  <i class="fa fa-minus"></i></button>

              </div>

              <!-- /. tools -->



              <i class="fa fa-map-marker"></i>



              <h3 class="box-title">

                Visitors

              </h3>

            </div>

            <div class="box-body">

              <div id="world-map" style="height: 250px; width: 100%;"></div>

            </div>

            <!-- /.box-body-->

            <div class="box-footer no-border">

              <div class="row">

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <div id="sparkline-1"></div>

                  <div class="knob-label">Visitors</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <div id="sparkline-2"></div>

                  <div class="knob-label">Online</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center">

                  <div id="sparkline-3"></div>

                  <div class="knob-label">Exists</div>

                </div>

                <!-- ./col -->

              </div>

              <!-- /.row -->

            </div>

          </div>

          <!-- /.box -->



          <!-- solid sales graph -->

          <div class="box box-solid bg-teal-gradient">

            <div class="box-header">

              <i class="fa fa-th"></i>



              <h3 class="box-title">Sales Graph</h3>



              <div class="box-tools pull-right">

                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>

                </button>

                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>

                </button>

              </div>

            </div>

            <div class="box-body border-radius-none">

              <div class="chart" id="line-chart" style="height: 250px;"></div>

            </div>

            <!-- /.box-body -->

            <div class="box-footer no-border">

              <div class="row">

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"

                         data-fgColor="#39CCCC">



                  <div class="knob-label">Mail-Orders</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"

                         data-fgColor="#39CCCC">



                  <div class="knob-label">Online</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center">

                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"

                         data-fgColor="#39CCCC">



                  <div class="knob-label">In-Store</div>

                </div>

                <!-- ./col -->

              </div>

              <!-- /.row -->

            </div>

            <!-- /.box-footer -->

          </div>

          <!-- /.box -->



          <!-- Calendar -->

          <div class="box box-solid bg-green-gradient">

            <div class="box-header">

              <i class="fa fa-calendar"></i>



              <h3 class="box-title">Calendar</h3>

              <!-- tools box -->

              <div class="pull-right box-tools">

                <!-- button with a dropdown -->

                <div class="btn-group">

                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">

                    <i class="fa fa-bars"></i></button>

                  <ul class="dropdown-menu pull-right" role="menu">

                    <li><a href="#">Add new event</a></li>

                    <li><a href="#">Clear events</a></li>

                    <li class="divider"></li>

                    <li><a href="#">View calendar</a></li>

                  </ul>

                </div>

                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>

                </button>

                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>

                </button>

              </div>

              <!-- /. tools -->

            </div>

            <!-- /.box-header -->

            <div class="box-body no-padding">

              <!--The calendar -->

              <div id="calendar" style="width: 100%"></div>

            </div>

            <!-- /.box-body -->

            <div class="box-footer text-black">

              <div class="row">

                <div class="col-sm-6">

                  <!-- Progress bars -->

                  <div class="clearfix">

                    <span class="pull-left">Task #1</span>

                    <small class="pull-right">90%</small>

                  </div>

                  <div class="progress xs">

                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>

                  </div>



                  <div class="clearfix">

                    <span class="pull-left">Task #2</span>

                    <small class="pull-right">70%</small>

                  </div>

                  <div class="progress xs">

                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>

                  </div>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                  <div class="clearfix">

                    <span class="pull-left">Task #3</span>

                    <small class="pull-right">60%</small>

                  </div>

                  <div class="progress xs">

                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>

                  </div>



                  <div class="clearfix">

                    <span class="pull-left">Task #4</span>

                    <small class="pull-right">40%</small>

                  </div>

                  <div class="progress xs">

                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>

                  </div>

                </div>

                <!-- /.col -->

              </div>

              <!-- /.row -->

            </div>

          </div>

          <!-- /.box -->



        </section>

        <!-- right col -->

      </div>

      <!-- /.row (main row) -->



      @include('Admin.layouts.message');

    </section>

    <!-- /.content -->

  

    <div class="box">

            <div class="box-header">

              <h3 class="box-title">{{ trans('admin.user') }}</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">



  @push('js')

  <script type="text/javascript">



    $(document).ready(function(){



      @if($user->country_id) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('states/create') }}',

       data:{country_id:'{{ $user->country_id }}',select:'{{  $user->city_id  }}'},

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



    <div class="container">

        @if (session()->has('success_message'))

            <div class="alert alert-success">

                {{ session()->get('success_message') }}

            </div>

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

    </div>



 
 


 

    <div class="row profile">

        
      <div class="col-sm-6">  

           <h4> {{ trans('admin.User information') }}</h4>
 
        <table class="table">
  <thead>
    <tr>
      <th scope="col">{{ trans('admin.name') }}</th>
      <th scope="col">{{ trans('admin.email') }} </th>
      <th scope="col">{{ trans('admin.phone') }}</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>{{  $user->name }}</td>
      <td>{{  $user->email }}</td>
      <td>{{  $user->phone }}</td>
    </tr>
    
  </tbody>
</table>
            
           <h4> {{ trans('admin.Shipping information') }}</h4>

           @if($user->country_id)
             
 <div class="form-group col-lg-12 col-sm-12 col-md-12" style="border: 1px solid #0000f4;"> 
           
      

 
          {{ trans('admin.country') }}:{{ App\countries::where('id',$user->country_id )->first()->countries_name_ar  }}

           <br>
          {{ trans('admin.city') }} :{{ App\cities::where('id',$user->city_id )->first()->cities_name_ar  }}
           

           <!--span><br>

          المركز :</span --> {{-- App\states::where('id',$user->stat_id )->first()->states_name_ar  --}}
           <br>

          {{trans('admin.MoreDetailsAboutYourAddress')}}:  : {{ $user->MoreDetailsAboutYourAddress }}

        
                       
              </div>

@endif




    <div class="products-section my-orders" style="max-width:1177px;">
 

    

       

        


            <div>

                @foreach ($orders as $order)

                <div class=" col-sm-12" style="background-color: #fff;

border: 2px solid #000;

margin-right: 1%;

padding: 2%;

">

                    <div class="order-header">

                        

                        <div class="order-header-items">

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderPlaced')}} </div>

                                <div>{{ presentDate($order->created_at) }}</div>

                            </div>

                            <div>

                                <div class="uppercase font-bold">{{trans('admin.OrderID')}} </div>

                                <div>{{ $order->id }}</div>

                            </div><div>

                                <div class="uppercase font-bold">{{trans('admin.Total')}}</div>

                                <div>{{ presentPrice($order->billing_total) }}</div>

                            </div>

                        </div>

                        <div>

                            <div class="order-header-items">

                    <div><a href="{{url('/')}}/admin/users/showDetails/{{$order->id}}">{{trans('admin.OrderDetails')}}</a></div>

                                <div>|</div>

                                <div><a href="#">{{trans('admin.Invoice')}} </a></div>

                            </div>

                        </div>

                    </div>



                    <div class="order-products">

                        @foreach ($order->products as $product)

                            <div class="order-product-item col-sm-3">

                                <div>

                        <img src="{{Storage::url($product->photo)}}" alt="Product Image" width="100" height="100"></div>

                                <div>

                                    <div>

         <a href="{{url('/')}}//shop/{{$product->id}}">{{ $product->name }}</a>

                                    </div>

                                    <div>{{ presentPrice($product->price) }}</div>

                                    <div>{{trans('admin.Quantity')}}: {{ $product->pivot->quantity }}</div>

                                </div>

                            </div>

                        @endforeach



                    </div>

                </div> <!-- end order-container -->



                <br>

                <br>

                @endforeach

            </div>



   
       

    



   </div>
          </div>

       
  <div class="well col-sm-6">    
            
           <h4>   {{ trans('admin.User information') }}  </h4>
            
          <form action="{{url('/')}}/my-profile" method="POST">

                    @method('patch')

                    @csrf

                 

  <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.name')}}
              </label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                placeholder="{{trans('admin.name')}}" id="input-name" class="form-control"  required />
                                        <strong>{{ $errors->first('email') }}</strong>

              </div>


               <div class="form-group">
                <label class="control-label" for="input-email">
            {{ trans('admin.lastname') }} *
              </label>
                <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}" 
                placeholder="{{ trans('admin.lastname') }}  *" id="input-lastname" class="form-control"  required />
                                        <strong>{{ $errors->first('lastname') }}</strong>

              </div>

 
 


              <div class="form-group">
                <label class="control-label" for="input-email">
              {{trans('admin.Email')}}
              </label>
                <input type="text" name="email" value="{{ old('email', $user->email) }}" 
                placeholder="{{trans('admin.Email')}}" id="input-email" class="form-control"  required />
                                        <strong>{{ $errors->first('email') }}</strong>

              </div>

                 <div class="form-group">

                <label class="control-label" for="input-email">
              {{trans('admin.phone')}}
              </label>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" 
                placeholder="{{trans('admin.phone')}}" id="input-email" class="form-control"  required />
                                        <strong>{{ $errors->first('phone') }}</strong>

              </div>




              <div class="form-group">
                <label class="control-label" for="input-password">{{trans('admin.password')}} </label>


                <input type="password" name="password" value="" placeholder="{{trans('admin.password')}}" id="input-password" class="form-control" required />

 <br>

                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="{{trans('admin.password_confirmation')}}" class="form-control">

                


               

          </div>



<div id="Create"  >
      <div class="form-group col-lg-12 col-sm-12 col-md-12"> 

                     {{ Form::label('country_id', trans('admin.country2'))  }}
@if(session('lang') == 'ar')
{{ Form::select('country_id',App\countries::pluck('countries_name_ar','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@else
{{ Form::select('country_id',App\countries::pluck('countries_name_en','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}
@endif

                     </div> 


                          <div class="form-group col-lg-12 col-sm-12 col-md-12">            
 {{ Form::label('city', trans('admin.city'))  }}
                   <span class="city"></span>

                     </div> 

                     
                       <div class="form-group col-lg-12 col-sm-12 col-md-12"> 
 {{ Form::label('city', trans('admin.stat'))  }}

                   <span class="stat"></span>

                   <br>

    <label class="control-label" for="input-MoreDetailsAboutYourAddress">
              {{trans('admin.MoreDetailsAboutYourAddress')}}
              </label>

                <input type="text" name="MoreDetailsAboutYourAddress" value="{{ old('MoreDetailsAboutYourAddress', $user->MoreDetailsAboutYourAddress) }}" 
                placeholder="{{trans('admin.MoreDetailsAboutYourAddress')}}" id="input-email" class="form-control"  />
                                        <strong>{{ $errors->first('MoreDetailsAboutYourAddress') }}</strong>

                     </div> 
 


</div>

 
              
                <input type="submit" value=" تحديث معلوماتي " class="btn btn-primary pull-left" />  
            
           <input type="hidden" name="redirect" value="{{url('/')}}/become_partner" />
                          </form>
                           
 
                 
                            
          </div>

    </div>

 
 


            </div>          

 

 

 


 </div>

    

   </div> 

      



     

       

    

  </div>

  <!-- /.content-wrapper -->



  @endsection





 

  