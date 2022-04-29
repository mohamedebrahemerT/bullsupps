
 
@if($status == 'neworder')

<a href="#"> <i class="fa fa-car" style="font-size:36px;"></i></a>


@else

<a href="{{url('/')}}/admin/OrderShareWithAllVendor/shipNow/{{$id}}"> <i class="fa fa-car" style="font-size:36px;"></i></a>
 

@endif