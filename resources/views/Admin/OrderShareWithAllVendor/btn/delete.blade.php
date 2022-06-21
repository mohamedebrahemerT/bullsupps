@php
$status=App\Order::where('id',$order_id)->first()->state;
@endphp

    

<span style="font-size:15px; " class="label

 {{$status=='pending'?'label-primary' :'' }}

 {{$status=='ready_for_collection'?'label-info' :'' }}

  {{$status=='out_for_collection'?'label-success' :'' }}
  {{$status=='collection_failed'?'label-success' :'' }}
  {{$status=='collected'?'label-success' :'' }}
  {{$status=='received_at_depot'?'label-success' :'' }}
  {{$status=='out_for_delivery'?'label-success' :'' }}
  {{$status=='delivery_complete'?'label-success' :'' }}
  {{$status=='delivery_failed'?'label-success' :'' }}
  {{$status=='return_to_origin'?'label-success' :'' }}
  {{$status=='returned_to_origin'?'label-success' :'' }}
  {{$status=='on_hold'?'label-success' :'' }}
  {{$status=='scheduled'?'label-success' :'' }}



">

  {{ $status }}


 </span>

