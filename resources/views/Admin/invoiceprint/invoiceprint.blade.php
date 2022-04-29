 <!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Admin | Invoice</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/AdminLTE.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body onload="window.print();">

<div class="wrapper">

  <!-- Main content -->

  <section class="invoice" style="direction: rtl;">

    <!-- title row -->

    <div class="row">

      <div class="col-xs-12">

        <h2 class="page-header" style="text-align: center; font-size: 13px;">

     
          <i class="fa fa-globe"></i>       مؤسسة شفاء الشرقية الطبية <br>

           {{$order->billing_name}}
           <br>
                 مؤسسة شفاء الشرقية الطبية     

          <small class="pull-right">Date: 2/10/2014</small>

        </h2>

      </div>

      <!-- /.col -->

    </div>

    <!-- info row -->

    <div class="row invoice-info">

      <div class="col-sm-4 invoice-col">

          {{trans('admin.From')}}

          <address>

            <strong>{{trans('admin.name')}}:{{auth()->guard('admin')->user()->name}} .</strong><br>

         {{trans('admin.level')}}:  {{auth()->guard('admin')->user()->level}} <br>

          {{trans('admin.address')}}:  {{auth()->guard('admin')->user()->adress}} <br>

            {{trans('admin.phone')}}: {{auth()->guard('admin')->user()->phone}}<br>

            {{trans('admin.email')}}: {{auth()->guard('admin')->user()->email}}

          </address>

        </div>

      <!-- /.col -->

   <div class="col-sm-4 invoice-col">

          {{trans('admin.To')}}

          <address>

            <strong> {{$order->billing_name}}  </strong><br>

             {{trans('admin.payment_gateway')}}: {{$order->payment_gateway}}<br>

        

        @if(auth()->guard('admin')->user()->level =='admin')



          {{trans('admin.phone')}}:  {{$order->billing_phone}}<br>

           {{trans('admin.email')}}: {{$order->billing_email}}<br>

             {{trans('admin.billing_total')}}:  {{$order->billing_total}}



             @endif

          </address>

        </div>

      <!-- /.col -->

       <div class="col-sm-4 invoice-col">

          <b> {{trans('admin.Invoice')}} {{$order->Invoice}}</b><br>

          <br>

          <b> {{trans('admin.OrderID')}}:</b>{{$order->id}}<br>

          <b>{{trans('admin.PaymentDue')}}:</b> {{$order->PaymentDue}}<br>
          <b>{{trans('admin.billing_total')}}:</b> {{$order->billing_total}}.00<br>

      

        </div>

      <!-- /.col -->

    </div>

    <!-- /.row -->

  <!-- Table row -->

      <div class="row">

        <div class="col-xs-12 table-responsive">

          <table class="table table-striped">

            <thead>

            <tr>

              <th>{{trans('admin.quantity')}}</th>

              <th>{{trans('admin.Productname')}}</th>

              <th>{{trans('admin.price')}}</th>

              <th>{{trans('admin.photo')}}</th>

              <th>{{trans('admin.Subtotal')}}</th>

            </tr>

            </thead>

            <tbody>

 



              

              @foreach($OrderProducts as $OrderProduct)

            <tr>

              <td>{{$OrderProduct->quantity}}</td>

              <td>

                @if(session('lang')=='ar')

                {{$OrderProduct->product_idd->title_name_ar}}

                @endif

                 @if(session('lang')=='en')

                {{$OrderProduct->product_idd->title_name_en}}

                @endif

              </td>

              <td>{{$OrderProduct->price}}</td>



              <td>



               

              <img src="{{Storage::url($OrderProduct->product_idd->photo)}}" width="100" height="100">

             

               



              </td>



              <td>{{$OrderProduct->Subtotal}}</td>

            </tr>

            @endforeach

            </tbody>

          </table>

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->


  <!-- /.row -->



      <div class="row">

        <!-- accepted payments column -->

        <div class="col-xs-6">

          <p class="lead">{{trans('admin.PaymentMethods')}}:</p>

          <img src="{{url('/')}}/Desgin/Adminlte/dist/img/credit/visa.png" alt="Visa">

          <img src="{{url('/')}}/Desgin/Adminlte/dist/img/credit/mastercard.png" alt="Mastercard">

          <img src="{{url('/')}}/Desgin/Adminlte/dist/img/credit/american-express.png" alt="American Express">

          <img src="{{url('/')}}/Desgin/Adminlte/dist/img/credit/paypal2.png" alt="Paypal">



          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">

            {{trans('admin.guid')}}

          </p>

        </div>

        <!-- /.col -->

        <div class="col-xs-6">

          <p class="lead">{{trans('admin.Date')}}: {{$order->PaymentDue}}</p>



          <div class="table-responsive">

            <table class="table">

              <tr>

                <th style="width:50%">{{trans('admin.billing_subtotal')}}:</th>

                <td>{{$order->billing_subtotal}}.00</td>

              </tr>

              <tr>

                <th>{{trans('admin.billing_tax')}} (9.3%)</th>

                <td>{{$order->billing_tax}}</td>

              </tr>

              <tr>

                <th>{{trans('admin.Shipping')}}:</th>

                <td>

                    @if($shipped == 0)

                   

<button type="button" class="btn btn-danger">{{trans('admin.pendinfbill') }}</button>





                    @endif



                      @if($shipped == 1)

<button type="button" class="btn btn-success">{{trans('admin.agreebill') }}</button>

                  

                    @endif

                  



                </td>

              </tr>

              <tr>

                <th>{{trans('admin.billing_total')}}:</th>

                <td>{{$order->billing_total}}.00</td>

              </tr>

            </table>

          </div>

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->



    <!-- /.row -->

  </section>

  <!-- /.content -->

</div>

<!-- ./wrapper -->

</body>

</html>

