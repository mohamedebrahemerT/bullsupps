
   @push('js')
   <script>
    $('.printMe').click(function(){
     window.print();
});
   </script>
   @endpush

    @push('js')
            <script type="text/javascript">

              


              
             
             $(document).on('click','#save_from_data1',function(){
              
               var From_data=$('#save_from_data').serialize();

               alert('vvvvvvvvvvvvvvvvvvvvvvv');
               
               $.ajax({
                
              url:'{{ url('admin/Withdrawthecourse') }}',
              dataType:'json',
              type:'post',
              data:From_data,
              beforeSend:function(){
                $('.loading-save-c').removeClass('hidden');
                   $('.sucess_message').html('');
                   $('.sucess_message').addClass('hidden');
                        $('.error_messages').addClass('hidden');


              },
              success:function(data){
                $('.loading-save-c').addClass('hidden');
                 $('.validate_message').html('');
                 
               $('.error_messages').addClass('hidden');
                 
                 if (data.status==true)
                  {
          $('.sucess_message').html('<h1>'+data.message+'</h1>').removeClass('hidden');
                  }
                  else if(data.status=='RU')
                  {

          $('.error_messages').html('<h1>'+data.message+'</h1>').removeClass('hidden');
                     
                  }


               
               
              },
              error:function(response){
               $('.loading-save-c').addClass('hidden');
               var error_li='';
               $.each(response.responseJSON.errors,function(index,value)
               {
                 error_li +='<li>'+value+'</li>';

               });

               $('.validate_message').html(error_li);
                 
               $('.error_messages').removeClass('hidden');


              },

               });


               
                
                return false;
             });

              
            </script>
            @endpush

      @if ($confirmcome == 1)

     <a class="btn btn-success"><i class="fa fa-succes">{{trans('admin.confirmcomed')}}</a>
          @endif

              @if ($confirmcome == 0)

       

    

        	 <!--  ------------------------------------------------------------>
        	 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#confirmdate{{ $id }}">
	
	<i class="fa fa-spin fa-spinner loading-save-c hidden"></i> {{trans('admin.notconfirmcomed')}}
</button>

<!-- Modal -->
<div id="confirmdate{{ $id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{ trans('admin.confirmcomeddatenow') }}:{{$name}}</h4>
      </div>
      {!! Form::open(['url'=>'callCenter/confirmcomedate']) !!}
      <div class="modal-body">
        <h4>{{trans('admin.name')}}:{{$name}}</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.close') }}</button>
        {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-danger']) !!}
      </div>
      <<input type="hidden" name="id" value="{{$id}}">
      <<input type="hidden" name="_token" value="{{csrf_token()}}">
      {!! Form::close() !!}
    </div>

  </div>
</div>

        	 <!-- ------------------------------------------------------------>  
          </button>


          @endif

              @if ($confirmcome == 2)

        <button class="btn btn-warning"><i class="fa fa-danger">{{trans('admin.notconfirmcomedyet')}}</button>

        	


          @endif