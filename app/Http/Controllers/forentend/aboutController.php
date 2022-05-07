<?php



namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

 use App\WhoWeAre;

use App\Objectives;

use App\ourTeam;

use App\VisionMission;

use App\product;
use App\PurchaseAndDeliveryPolicy;
use App\PaymentAndDeliveryPolicy;

    

        use DB;



class aboutController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

              { 

                   $WhoWeAre=WhoWeAre::orderBy('id', 'asc')->first();

   $Objectives=Objectives::orderBy('id', 'asc')->first();

   $VisionMission=VisionMission::orderBy('id', 'asc')->first();



   $ourTeams=ourTeam::orderBy('id', 'asc')->take(6)->get();

   $ourTeams2=ourTeam::orderBy('id', 'des')->take(6)->get();

    return view('forentend4.about.about',compact('WhoWeAre','VisionMission','Objectives','ourTeams','ourTeams2'));

 



            }



             public function VisionMission()

              { 

        

   $VisionMissions=VisionMission::get();

    return view('forentend3.VisionMission.VisionMission',compact('VisionMissions'));

 



            }



              public function Objectives()

              { 

        

   $Objectives=Objectives::get();

    return view('forentend3.Objectives.Objectives',compact('Objectives'));

 



            }





      public function WarrantyAndServices()

    {



          
          $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::find(1);
      

  return view('forentend4.WarrantyAndServices.WarrantyAndServices',compact('PurchaseAndDeliveryPolicy'));



    }


 

    public function PaymentAndDeliveryPolicy()

    {



          
           $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::find(1);
      

  return view('forentend4.WarrantyAndServices.PaymentAndDeliveryPolicy',compact('PaymentAndDeliveryPolicy'));



    }





          public function Support24()

    {



      

  return view('forentend4.Support24.Support24');



    }



           public function TradeMark()

    {



      

  return view('forentend4.TradeMark.TradeMark');



    }



           public function GiftCertificates()

    {



      

  return view('forentend4.GiftCertificates.GiftCertificates');



    }



            public function Commissionsystem()

    {



      

  return view('forentend4.Commissionsystem.Commissionsystem');



    }



       public function special($title)

    {







       $productsgrid = Product::where('status','مفعل')->inRandomOrder()->get();

    

  return view('forentend4.special.special',compact('title','productsgrid'));



    }



   public function Returns()

    {



      

  return view('forentend4.Returns.Returns');



    }

     public function sitemap()

    {



      

  return view('forentend4.sitemap.sitemap');



    }

    



      public function PhotoGallery()

     {  

  return view('forentend4.PhotoGallery.PhotoGallery');

      }



       public function BestSeller()

     {  

  return view('forentend4.BestSeller.BestSeller');

      }

    

     public function NewArrivals()

     {  

  return view('forentend4.NewArrivals.NewArrivals');

      }

    



      



            

            

              public function xml()



              { 



                    $PhoneNumber='01149880297';

                    $SMSText='test';



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

print_r(json_decode((string) $body));



return 'submited';



            }









 

     

}

