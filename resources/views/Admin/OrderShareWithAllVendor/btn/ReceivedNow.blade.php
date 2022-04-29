
@if($status == 'shipped')
<a href="{{url('/')}}/admin/OrderShareWithAllVendor/ReceivedNow/{{$id}}"><i class="fa fa-envelope" style="font-size:36px"></i></a>
@else
<a href="#"><i class="fa fa-envelope" style="font-size:36px"></i></a>
@endif