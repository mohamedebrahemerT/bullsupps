{{$title_name_ar}}


 @php
          $OtherDatasٍSiZes=App\OtherDatasٍSiZes::where('product_id',$id)->get();
 @endphp


<br>

      

          
    

      
        
<table class="table">
  <thead>
    <tr>
      
      <th scope="col"> لون </th>
      <th scope="col">مقاس </th>
      <th scope="col">كمية </th>
    </tr>
  </thead>
  <tbody>
         	@foreach($OtherDatasٍSiZes as  $data)

    <tr>
    
      <td>{{ $data->color }} </td>
      <td> {{ $data->sizeNAme }} </td>
      <td> {{ $data->qty }}</td>
    </tr>
            @endforeach
    
  </tbody>
</table>
            
 

    

