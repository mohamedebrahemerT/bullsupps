

@php
            $afiliateman=App\admin::where('id',$Accountant_id)->first();
@endphp


<a href="{{url('/')}}/admin/admins/{{$afiliateman->id}}/edit">
	


{{$afiliateman->firstname}} 
{{$afiliateman->lastname}} 

<br>
{{$afiliateman->telephone}} 

<br>
{{$afiliateman->company}} 
<br>

{{$afiliateman->payment}} 



</a>