



@if($Status == 0)

 


 <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  {{trans('admin.hasnorighttosell') }} 
</button>

@endif





@if($Status == 1)

 <a class="btn btn-success" href="admins/{{$id}}/edit"> {{trans('admin.hasrighttosell') }}   </a>

@endif





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">هل   تريد  الموافقه  علي هذا  الافيلست لينم  عملية التسويق بالعموله ؟</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         ملوحظه  في  حالة  الموافقه سوف  يتم عملية التسويق  بالعمولة  لهذا  المسوق 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('admin.no')}}</button>
        <a   class="btn btn-primary" href="/affiliateaccept/{{$id}}">{{trans('admin.yes')}}</a>
      </div>
    </div>
  </div>
</div>