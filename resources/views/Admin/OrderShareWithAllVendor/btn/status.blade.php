 

<span style="font-size:15px; " class="label

 {{$status=='neworder'?'label-primary' :'' }}

 {{$status=='waitshiping'?'label-info' :'' }}

  {{$status=='shipped'?'label-success' :'' }}
  {{$status=='returned'?'label-success' :'' }}
  {{$status=='Received'?'label-success' :'' }}



">

   @if($status == 'neworder')

   طلب جديد

   @endif

      @if($status == 'waitshiping')

      بنتظر الشحن 

   @endif


      @if($status == 'shipped')

      المشحون 

   @endif


      @if($status == 'returned')

      المرتجع 

   @endif


      @if($status == 'Received')


      المستلم 

   @endif



 </span>

