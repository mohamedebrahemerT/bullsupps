 <table class="table">
  <thead>
    <tr>
       
      <th scope="col"> رقم الطلب</th>
      <th scope="col">مدة الطلب</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td> {{$order_id}}</td>
      <td>

      {{ $diff = Carbon\Carbon::parse($created_at)->diffForHumans() }}


  </td>
   
    </tr>
    
  </tbody>
</table>


 
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

 

@php

          $order_id=App\OrderShareWithAllVendor::where('id',$id)->first()->order_id;


 
 @endphp

              

              @foreach(App\OrderProduct::where('order_id',$order_id)->

                                where('admin_id',1)

                                           ->get() as $OrderProduct)

            <tr>

              <td>{{$OrderProduct->quantity}}</td>

              <td>
                @if($OrderProduct->product_idd)

                @if(session('lang')=='ar')

                {{$OrderProduct->product_idd->title_name_ar}}

                @endif

                 @if(session('lang')=='en')

                {{$OrderProduct->product_idd->title_name_en}}

                @endif
                @endif

              </td>

              <td>{{$OrderProduct->price}}</td>



              <td>



               

              <img src="@if($OrderProduct->product_idd)
              {{Storage::url($OrderProduct->product_idd->photo)}}
                    @endif
              " width="100" height="100">

             

               



              </td>



              <td>{{$OrderProduct->Subtotal}}</td>

            </tr>

            @endforeach

            </tbody>

          </table>

        </div>

 

      </div>

      <!-- /.row -->

