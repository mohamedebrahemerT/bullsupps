

@extends('Admin.index')

@section('content')

   <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

          {{trans('admin.Invoice')}}

        <small>{{$order->Invoice}}</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>{{trans('admin.Home')}} </a></li>

        <li><a href="#">{{trans('admin.Examples')}}</a></li>

        <li class="active">{{trans('admin.Invoice')}}</li>

      </ol>

    </section>



    <div class="pad margin no-print">

      <div class="callout callout-info" style="margin-bottom: 0!important;">

        <h4><i class="fa fa-info"></i>   {{trans('admin.Note')}}</h4>

       {{trans('admin.Note2')}} 

      </div>

    </div>







    <!-- Main content -->

    <section class="invoice">

      <!-- title row -->

      

    

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

      <div class="row">

        <div class="col-xs-12">

          <h2 class="page-header">


            @isset($OrderShareWithAllVendor->affiliateID)

            <i class="fa fa-globe"></i> اسم الافيليت    :{{App\admin::where('id',$OrderShareWithAllVendor->affiliateID)->first()->company }} .
               @endisset

            <i class="fa fa-globe"></i>{{trans('admin.vendorname')}}:{{auth()->guard('admin')->user()->name}} .

            <small class="pull-right">  {{trans('admin.Date')}}: {{$order->PaymentDue}}</small>

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

          {{trans('admin.address')}}: 9H5H+FV8 Al Hofuf Saudi Arabia <br>

            {{trans('admin.phone')}}: +966508693014<br>

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



          {{trans('admin.phone')}}:
                             @php 
                            $User= App\user::where('email',$order->billing_email)->first();
                            @endphp
           {{$User->phone}}
                       
            <br>

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
            @if(auth()->guard('admin')->user()->level ==  'admin')

                <td>

                    @if($shipped == 0)

                   

<button type="button" class="btn btn-danger">{{trans('admin.pendinfbill') }}</button>





                    @endif



                      @if($shipped == 1)

<button type="button" class="btn btn-success">{{trans('admin.agreebill') }}</button>

                  

                    @endif

                  



                </td>
                    @endif

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


            @if(auth()->guard('admin')->user()->level ==  'admin')
      <!-- this row will not appear when printing -->

         <div class="row no-print">

        <div class="col-xs-12">

          <a href="{{url('/')}}/admin/invoiceprint/{{$id}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>{{trans('admin.Print')}} </a>

        @if($shipped == 0)

          <a href="{{url('/')}}/admin/ApprovalOfTheBillOrderShareWithAllVendor/{{$order->id}}" type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> {{trans('admin.agreebilling')}} 

          </a>

          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">

            <i class="fa fa-download"></i> {{trans('admin.noagreebilling')}}

          </button>

           @endif

        </div>

      </div>

           @endif
                   



    </section>

    <!-- /.content -->

    <div class="clearfix"></div>

  </div>



  @endsection

