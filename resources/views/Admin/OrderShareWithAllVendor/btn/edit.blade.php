
  @if(auth()->guard('admin')->user()->level =='admin')

 <a class="btn btn-primary" href="OrderShareWithAllVendor/{{$id}}/edit"><i class="fa fa-edit"></i> {{trans('admin.edit') }}   </a>

 @endif