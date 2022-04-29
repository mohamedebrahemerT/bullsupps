                 @if($shipped == 0)
                  
<button type="button" class="btn btn-danger">{{trans('admin.pendinfbill') }}</button>
                    @endif

                      @if($shipped == 1)
                     

<button type="button" class="btn btn-success">{{trans('admin.agreebill') }}</button>


                    @endif