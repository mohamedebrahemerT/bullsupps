    @push('js')
              <script type="text/javascript">
                $(document).ready(function() {
        
        $('.mall_select2').select2();
});
              </script>

                 <script>

        $('#attribute_id').on('change', function() {
         
          var attribute_ids = [];
$.each($(".attribute_id option:selected"), function() {
  attribute_ids.push($(this).attr("id"));
});

 
  $.ajax({
            url:'{{ url("admin/call_attributes") }}',
            dataType:'html',
            type:'post',
            data:{
              _token:'{{ csrf_token() }}',
              attribute_ids:attribute_ids,
            
              
            },
            success:function(data)
            { 
               $('.call_attributes').removeClass('hidden');
                $('.call_attributes').html(data);
               

            },

           });
       
            

            
        });
    </script>
              @endpush


  <div id="menu4" class="tab-pane fade">

      <h3>{{trans('admin.attributes')}}</h3>

       
        

                 @foreach(App\Models\attributes::all() as $attribut)

   
  
         <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
           {{$attribut->name_en }}
                      
                      <select name="attribute_value_id[]" class="form-control mall_select2" multiple="multiple" style="width: 100%">
                        @foreach(App\Models\attribute_values::
                        where('attribute_id',$attribut->id )->get() as $attribute_value)

                        <optgroup label="{{ $attribute_value->value_en }}"> 
                             
     <option  
     
       @foreach($productes->productvariant as $product_variant)

       @if($product_variant->attribute_value_id == $attribute_value->id)
       selected
       @endif

       @endforeach

   

     value="{{$attribute_value->id }}">{{ $attribute_value->value_en }}</option>
                          
                        </optgroup> 
                           
   
                     
                        @endforeach
                      </select>
                  </div> 
                        @endforeach



 
</div>

       