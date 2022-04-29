




         <div class="reward" id="zzzzzzzzzzzzz4"><span>{{trans('admin.color')}}</span>
                <span >{{$color_name}}</span> 
 
                         </div>

                          <div class="reward" id="zzzzzzzzzzzzz4"><span>{{trans('admin.colorprice')}}</span>
                <span >{{$colorprice}}</span> 
 
                         </div>

 <div id="thumb-slider" class="    " data-rtl="yes" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10"  data-items_column0="5" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="3" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes" style="display: flex;">



      

                          {{trans('admin.sizes')}}: &nbsp; 



          @foreach($OtherDatasٍSiZes as $data)

 
            @if($data->qty > 0)
       

      <div class="image-additional " style="width: 59px;

margin-left: 5px; text-align: center;"> 

    <a data-index="1" class="img thumbnail  "   title="{{$data->sizePrice}} {{trans('admin.pound')}}"     id="sizes">



     <span style="display: none;">{{ $data->id }}</span> {{$data->sizeNAme}}
    
 




    </a>

    </div>

         @endif
                   

     @endforeach

                    

                

 

    </ul>

</div>
