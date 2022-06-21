@php
$tracking_url=App\Order::where('id',$order_id)->first()->tracking_url;
@endphp

@if($tracking_url !== null)
  <a class="btn btn-primary" target="_blank" href="{{$tracking_url}}"><i class="fa fa-car"></i> {{trans('admin.click here') }}   </a>
  @endif
