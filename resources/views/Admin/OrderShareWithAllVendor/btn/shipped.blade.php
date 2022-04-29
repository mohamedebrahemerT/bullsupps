                @if($status == 'neworder')
                  

 <br>
<br>

                     <a href="{{url('/')}}/admin/ApprovalOfTheBillOrderShareWithAllVendor/{{$order_id}}" type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> الموافقة علي الفاتورة  

          </a>

                    @endif



                  @if($status == 'waitshiping')

                     



<button type="button" class="btn btn-success">{{trans('admin.agreebill') }}</button>





                    @endif
