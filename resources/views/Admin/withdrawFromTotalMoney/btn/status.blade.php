@if($status == 0)

 <button type="button" class="btn btn-warning"> العملية  قيد التنفيذ</button>

@endif


@if($status == 1)

<button type="button" class="btn btn-success"> تم  تنفيذ طلب  السحب  </button>

@endif


@if($status == 2)

<button type="button" class="btn btn-danger"> تم رفض رفض العملية  </button>
@endif


