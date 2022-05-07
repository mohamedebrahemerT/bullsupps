 @extends('forentend4.index')
 @section('javascript')



 
 <style type="text/css">
  .Addressbox_style1active
    {
          border: 2px solid #BF0426;
    }

    
 </style>

<script type="text/javascript">
    $(function() {
  $('.Addressbox_style1').click(function() { // when a .myDiv is clicked
    $('.Addressbox_style1').not(this).removeClass('Addressbox_style1active')
    $(this).toggleClass('Addressbox_style1active')
     

     var user_addresses_id  = $(this).attr("data-user_addresses_id");
              
        

            $.ajax({
            url:"{{url('/active_user_addresses_id')}}",
            method:"POST",
           data :{
          _token:'{{ csrf_token() }}',
            user_addresses_id:user_addresses_id,
           
          

           },
            dataType:"json",
            beforeSend:function(){
          
 $('.cart_sucess').html('');

            },
            success:function(data)
            {
               $('.total').html(data.total);
   $('.subtotal').html(data.total);
   $('.tax').html(data.tax);


               
  document.getElementById(data.totIDS).innerHTML = data.totprice;
 // document.getElementById('qty'+data.totIDS).innerHTML = data.qty;
   $('.cart_sucess').html(data.success);  
        

            }
        });
             return false;
            


  })
})
    
</script>
@endsection

@section('content')

     <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
                            <li class="breadcrumb-item active">Add Your Address</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->


    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="custom-container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">
                            <ul class="step d-flex flex-nowrap">
                                <li class="step-item active">
                                    <a href="{{url('/')}}/Add_New_Address" class="">Shipping Address</a>
                                </li>
                                <li class="step-item ">
     <a href="{{url('/')}}/Payment_Method" class="">Payment</a>
                                </li>
                                <li class="step-item ">
                                    <a href="#!" class="">Order Placed </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="custom-container">
                <div class="row">
                    @foreach(App\Models\user_addresses::where('user_id',auth()->user()->id)->get() as  $address)
                    <div class="col-xl-4 col-md-6">

 
                <div class="contact_wrap Addressbox_style1 
                @if(session('Addressbox_style1active') == $address->id) Addressbox_style1active  
                @endif
                 " style="position:relative; overflow: hidden; " data-user_addresses_id="{{$address->id}}">

 
                   @if($address->Primary == 1)
               <div class="ribbon"><span>Primary</span></div>
               @endif
                           


                            <div class="contact_text">
                                <div class="row bardhe mb-2">
                                    <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                        <div class="ikonat-home"> <i class="linearicons-map2"></i> </div>
                                        <div class="contact_text">
                                            <span>{{$address->type}}</span>
                                        </div>
                                    </div>
                                </div>
                                <row>
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody class="">
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Name:</td>
                                                        <td class="cart_total_amount text-right noborderall">{{$address->Name}}</td>
                                                    </tr>
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Address:</td>
                                                        <td class="cart_total_amount text-right noborderall">{{$address->address}}</td>
                                                    </tr>
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                        <td class="cart_total_amount text-right noborderall">{{$address->Mobile}}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </row>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach

                 
                    <div class="col-xl-4 col-md-6  ">
                        <a href="{{url('/')}}/Add_New_Address_Map_Step">
                            <div class="contact_wrap  " style="  text-align: left;
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 0 10px rgb(0 0 0 / 10%);
  border-radius: 12px;
  border: 1px solid #dee2e6;
">

                                <div class="contact_text">
                                    <div class="row bardhe justify-content-center">
                                        <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                            <div class="ikonat-home"> <i class="linearicons-plus"></i> </div>
                                            <div class="contact_text">
                                                <span>Add New Address</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- END SECTION SHOP -->


    </div>
    <!-- END MAIN CONTENT -->


@endsection

