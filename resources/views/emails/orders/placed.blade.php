@component('mail::message')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div style="background-color:#000">

	<div class="logo">

           <a href="https://www.xpremo.com">

            <img src="https://shifapharmacies.com/forentend4/iconified/apple-touch-icon-180x180.png" title="shifapharmacies" alt="shifapharmacies"> </a>

  

            </div>
 
	
</div>


#  تمت الموافقة علي الفاتورة 
 
 

 شكرا لطلبك.

**رقم التعريف الخاص بالطلب:** {{ $order->id }}

**البريد الإلكتروني:** {{ $order->billing_email }}

**الاسم :** {{ $order->billing_name }}

**اجمالي الطلب :** {{ $order->billing_total }}

**العناصر المطلوبة**

@foreach ($order->products as $product)
اسم: {{ $product->title_name_ar }} <br>


             @if($product->price_offer  > 0)   

السعر: {{$product->price_offer}} <br>
            @else
السعر: {{$product->price}} <br>


            @endif






كمية: {{ $product->pivot->quantity }} <br>
 صورة فوتوغرافية: <img src="{{Storage::url($product->photo)}}" width="100" height="100">
 
@endforeach

يمكنك الحصول على مزيد من التفاصيل حول طلبك عن طريق تسجيل الدخول إلى موقعنا.
 

 <a target="_blank"    href="https://www.xpremo.com/">  

 <a href="https://www.xpremo.com/"   type="button" class="btn btn-dark" style="background-color:#000;color: #fff" > الذهاب الي الموقع   </a>

 </a>

شكرا لك مرة أخرى لاختيارك لنا.

Regards,<br>
{{ config('app.name') }}

	
 


@endcomponent
