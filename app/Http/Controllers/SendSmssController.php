<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SendSmsdatatables;
use App\SendSms;
  use Hash;
  use up;
  use Storage;
  use DB;

class SendSmssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SendSmsdatatables $dataTable)
    {
         return $dataTable->render('Admin.SendSms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
 

             return view('Admin.SendSms.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               

               if (request()->has('GroupSendSms') and request('GroupSendSms') ==1)
                {

                    $data= $this->validate(request(),[    
                'SendSms_name_ar' => ['required', 'string', 'max:1000'],
            ],[],[
            'SendSms_name_ar'=>trans('admin.SendSms_name_ar'),

            ]);

                 $datagroup = DB::table('SendSms')->get();

            foreach ($datagroup as $key => $value) 
            {
                 $this->sendsms($value->number,$data['SendSms_name_ar']);

             
            }

             return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfullysms'),'data'=>$data],200);
                
                }
              
          $data= $this->validate(request(),[    
                'SendSms_name_ar' => ['required', 'string', 'max:1000'],
                'number' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'SendSms_name_ar'=>trans('admin.SendSms_name_ar'),
            'number'=>trans('admin.number'),
         
             
            


            ]);

          if ( $this->sendsms($data['number'],$data['SendSms_name_ar']) )
                      {
 

         SendSms::create($data);
                     

                return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfullysms'),'data'=>$data],200);
                      }
                   
      


                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function GroupSendSms()
    {
     $data = DB::table('SendSms')->get();

      
       return view('Admin.SendSms.GroupSendSms',compact('data'));

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.SendSms update');
          $SendSms=SendSms::find($id);

       return view('Admin.SendSms.update',compact('title','SendSms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       
         
        $data= $this->validate(request(),[    

               'SendSms_name_ar' => ['required', 'string', 'max:1000'],
                'number' => ['required'],
                  
            
            ],[],[
            'SendSms_name_ar'=>trans('admin.SendSms_name_ar'),
            'number'=>trans('admin.number'),

            ]);
                   
                    if ( $this->sendsms($data['number'],$data['SendSms_name_ar']) )
                      {
 

         SendSms::where('id',$id)->update($data);

                return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfullysms'),'data'=>$data],200);
                      }


  
 
        
    }

     public function sendsms($PhoneNumber,$SMSText)
                       {
                           $PhoneNumber=$PhoneNumber;
                    $SMSText=$SMSText;

                $data='AccountId=101009811&Password=Vodafone.1&SenderName=Aly Market&ReceiverMSISDN='.$PhoneNumber.'&SMSText='.$SMSText.'';
                    $key='B5596515FC8C4FA9BA5D34B41E2D2D62';

                     $hashed = hash_hmac("sha256", $data,  $key); 

                     $hashed= strtoupper($hashed);

      

                $url='https://e3len.vodafone.com.eg/web2sms/sms/submit/';

                $xml='<?xml version="1.0" encoding="UTF-8"?>
<SubmitSMSRequest xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:="http://www.edafa.com/web2sms/sms/model/" xsi:schemaLocation="http://www.edafa.com/web2sms/sms/model/SMSAPI.xsd " xsi:type="SubmitSMSRequest">
<AccountId>101009811</AccountId>
<Password>Vodafone.1</Password>
<SecureHash>'.$hashed.'</SecureHash>
<SMSList>
    <SenderName>Aly Market</SenderName>
    <ReceiverMSISDN>'.$PhoneNumber.'</ReceiverMSISDN>
    <SMSText>'.$SMSText.'</SMSText>
</SMSList>
</SubmitSMSRequest>';
 
     $client = new \GuzzleHttp\Client();
        
$create = $client->request('POST', $url,
[
  'headers'=> [
'Content-type'=> 'application/xml; charset=UTF8',
 'Accept' => 'application/xml',
],
'body' => $xml
]);

 
$body = $create->getBody();
                           return 1;

 
                       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $SendSms=SendSms::find($id);
               Storage::delete($SendSms->photo);
         SendSms::find($id)->delete();
           session()->flash('success',trans('admin.deleteSendSms'));
       

         return redirect('admin/SendSms');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $SendSms=SendSms::find($id);
               Storage::delete($SendSms->photo);
                $SendSms->delete(); 
               }
            
          

        }
        else
        {
                    $SendSms=SendSms::find($id);
               Storage::delete($SendSms->photo);
                $SendSms->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/SendSms');

         
    }


      public function update_img_dropzon_SendSms($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "SendSms".$id,

                     ]

                  ); 

                    $settings = SendSms::find($id);  
      SendSms::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_SendSms($id)
               {
                    $SendSms = SendSms::find($id);

                   
                        Storage::delete( $SendSms->photo);
                           $SendSms->photo=null;
                        $SendSms->save();

                        return Response('كلو تمام');

               }
}


