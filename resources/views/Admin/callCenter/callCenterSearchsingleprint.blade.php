    <!DOCTYPE html>
<html >
<html moznomarginboxes mozdisallowselectionprint lang="ar">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
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
      
    

           
      <!-- info row -->
   

       
         <div class="col-xs-12">
                  


                 <table class="table" dir="rtl">
          
              
              

                <tr>
             
                <td>  
                     <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-user"></i> {{trans('admin.nameofVistor')}}  : {{$callCenter->name}}

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               تاريخ الحضور  الي المركز :  {{$callCenter->dateOfcome}}
         
          </h2>



        </div>
        <!-- /.col -->
      </div>

  <div class="col-sm-4 invoice-col">
           
          <address>
            <strong>{{trans('admin.nameofVistor')}} : {{$callCenter->name}} </strong><br>
             {{trans('admin.phone')}} : {{$callCenter->phone}}<br>
            {{trans('admin.dateOfcome')}} : {{$callCenter->dateOfcome}}<br>
        
         
          </address>
        </div>
      
 

 
                 </td>
              </tr>

                
               

              
              
            </table>

        </div>

        <div class="container"> 
      

            <div  class="col-xs-10" >
            <img src="{{url('/')}}/forentend/img/free.jpg" class="img-fluid" alt="Responsive image">
           </div>

               <div  class="col-xs-2" >
            <img src="{{url('/')}}/forentend/img/becretive.png" class="img-fluid" alt="Responsive image">
           </div>
          

        </div>


        <!-- /.col -->

      <!-- Table row -->

  
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
