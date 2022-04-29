   <!DOCTYPE html>

<html lang="ar">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>callCenterSearchAll</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{ url('/') }}/Desgin/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ url('/') }}/Desgin/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="{{ url('/') }}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{ url('/') }}/Desgin/Adminlte/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="{{ url('/') }}/Desgin/Adminlte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini"  onload="window.print();">



    <!-- Main content -->

    <section class="invoice">

      <!-- title row -->

      <div class="row">

    

        <!-- /.col -->

      </div>

      <!-- info row -->

      <div class="row">

        <div class="col-sm-12 invoice-col">





        

           <h1 class="pull-right">{{trans('admin.callcnterdetails')}} {{trans('admin.from')}} {{$start_at}} {{trans('admin.to')}} {{$end_at}}<i class="fa fa-money "></i> </h1>





        </div>

        <!-- /.col -->

      

      </div>

      <!-- /.row -->



      <!-- Table row -->

      <div class="row">

        <div class="col-xs-12 table-responsive">

          <table class="table table-striped pull-right table-bordered" dir="rtl" style="border:20px">

            <thead>

            <tr >

              <th style="text-align: left;">{{trans('admin.name')}}</th>

              <th>{{trans('admin.phone')}}</th>

              <th>{{trans('admin.day')}}</th>

                <th>{{trans('admin.confirmcome')}}</th>

             
            </tr>

            </thead>

            <tbody>

            	@foreach($callCenter as $call)



            <tr>

              <td>{{$call->name}}</td>            

              <td>{{$call->phone}}</td> 

              <td>{{$call->day}}</td>             

              <td>{{$call->confirmcome}}</td>                  
          
              <td>
<a class="btn btn-primary" href="{{ url('/')}}/admin/callCenterSearchAll/{{$call->id}}">
                  <i class="fa fa-print" ></i> {{trans('admin.print')}} 

                </a>
              </td>            

                    

            </tr>

              @endforeach



           

            </tbody>

          </table>

           

            @if($cheeck ==0)

            <h1 style="text-align: center;">{{$v}} </h1>

            @endif

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->



      <div class="row">



      	<div class="col-xs-6">

      		

      	</div>

   

        <!-- /.col -->

        <div class="col-xs-6">

          <p class="lead">{{trans('admin.date')}}:{{date('d-m-Y')}}</p>


        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->



      <!-- this row will not appear when printing -->

      <div class="row no-print">

        <div class="col-xs-12">

          <a href="#" target="_blank" class="btn btn-default"  onclick="window.print();"><i class="fa fa-print" ></i> Print</a>

        

         

        </div>

      </div>

    </section>

    <!-- /.content -->

    <div class="clearfix"></div>

 

 



  

 

 

<script src="{{ url('/') }}/Desgin\Adminlte/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->

<script src="{{ url('/') }}/Desgin\Adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->

<script src="{{ url('/') }}/Desgin\Adminlte/bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="{{ url('/') }}/Desgin\Adminlte/dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{ url('/') }}/Desgin\Adminlte/dist/js/demo.js"></script>

</body>

</html>

