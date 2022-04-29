

@extends('Admin.index')

@section('content')



       @push('js')

              <script type="text/javascript">

                $(document).ready(function() {

        $('.mall_select2').select2();

});

              </script>

              @endpush

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

      



        <span  class="alert alert-denger">

          

          

          @if(session('success'))

   <div class="alert alert-success ">

   {{session('success')}}



     </div>

   @endif



        </span>

       

      </h1>
 
    </section>



    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

      	   <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{NewOrders()}}</h3>



              <p>{{trans('admin.orders')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="admin/OrderShareWithAllVendor?status=neworder" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>{{waitshiping()}}</h3>



              <p>{{trans('admin.waitshiping')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <a href="admin/OrderShareWithAllVendor?status=waitshiping" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{shipped()}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.shiped')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="admin/OrderShareWithAllVendor?status=shipped" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

         <div class="col-lg-2 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{returned()}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.return')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="admin/OrderShareWithAllVendor?status=returned" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

       
         <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>{{Received()}}<sup style="font-size: 20px"></sup></h3>



              <p>{{trans('admin.recived')}}</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <a href="admin/OrderShareWithAllVendor?status=Received" class="small-box-footer">{{trans('admin.more')}}  <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <!-- ./col -->

      </div>

      <!-- /.row -->


 <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{NewOrders()}}</h3>

              
              <p>{{trans('admin.orders')}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
       <a href="admin/OrderShareWithAllVendor?status=neworder" class="small-box-footer">{{trans('admin.more')}}<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>0<sup style="font-size: 20px">%</sup></h3>

              <p>{{trans('admin.BounceRate')}} </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{App\user::count()}}</h3>

              <p>{{trans('admin.Thenumberofusersinthestore')}} </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('/')}}/admin/users" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{App\product::count()}}</h3>

              <p>{{trans('admin.numberofproduct')}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('/')}}/admin/productes" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

 


       
      </div>
 
 

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

  </div>

  <!-- /.content-wrapper -->



  @endsection

  