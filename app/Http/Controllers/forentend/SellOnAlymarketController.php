<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
      use App\product;
      use App\Department;
      use App\comment;
      use App\newes;
        use DB;
        use Hash;
        use up;
        
use App\admin;

class SellOnAlymarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SellOnAlymarket()
                {
                return view('forentend3.SellOnAlymarket.SellOnAlymarket'); 
                }

                 public function action_page()
                {




            
              
       $data = $this->validate(request(),
         [
        'name' => 'required',
        'country_id' => 'required',
        'city_id' => 'required',
        'stat_id'=>'required',
        'phone' => 'required',
        'Whatsappnumber' => 'required',
        'TheNameOftheStore' => 'sometimes|nullable',
        'NationalID' => 'sometimes|nullable',
        'email' => 'required',
        'RetypeTheEmailAddress' => 'required',
        'password' => 'required',
        'postcode' => 'sometimes|nullable',
 
        'BusinessRegistrationNumber' => 'sometimes|nullable',
        'VatinformationFie' => 'sometimes|nullable',
        'CommercailRegistrationNo' => 'sometimes|nullable',
        'TaxCard' => 'sometimes|nullable',
        'Acopyofthetaxcard2' => 'sometimes|nullable',
        'Acopyofthetaxcard' => 'sometimes|nullable',
        'LegelNameCompanyName' => 'sometimes|nullable',
        'Companyphonenumber' => 'sometimes|nullable',
        'bankNameList' => 'sometimes|nullable',
        'bankCode' => 'sometimes|nullable',
        'SWIFT' => 'sometimes|nullable',
        'IBAN' => 'sometimes|nullable',
        'AcountName' => 'sometimes|nullable',
        'AcountNumber' => 'sometimes|nullable',
        'WhoWeAre' => 'sometimes|nullable',
        'VisionMission' => 'sometimes|nullable',
        'Objectives' => 'sometimes|nullable',
        'level' => 'required',
        'TypeOfSale' => 'required',
          'norighttochat'
         
         
      ], [], [
        'name' => trans('admin.name'),
        'Country' => trans('admin.Country'),
        'City' => trans('admin.City'),
        'phone' => trans('admin.phone'),
        'Whatsappnumber' => trans('admin.Whatsappnumber'),
        'TheNameOftheStore' => trans('admin.TheNameOftheStore'),
        'NationalID' => trans('admin.NationalID'),
        'email' => trans('admin.email'),
        'RetypeTheEmailAddress' => trans('admin.RetypeTheEmailAddress'),
        'password' => trans('admin.password'),
        'postcode' => trans('admin.postcode'),
        'personIncharge' => trans('admin.personIncharge'),
        'BusinessRegistrationNumber' => trans('admin.BusinessRegistrationNumber'),
        'VatinformationFie' => trans('admin.VatinformationFie'),
        'CommercailRegistrationNo' => trans('admin.CommercailRegistrationNo'),
        'TaxCard' => trans('admin.TaxCard'),
        'Acopyofthetaxcard2' => trans('admin.Acopyofthetaxcard2'),
        'Acopyofthetaxcard' => trans('admin.Acopyofthetaxcard'),
        'LegelNameCompanyName' => trans('admin.LegelNameCompanyName'),
        'Companyphonenumber' => trans('admin.Companyphonenumber'),
        'bankNameList' => trans('admin.bankNameList'),
        'bankCode' => trans('admin.bankCode'),
        'SWIFT' => trans('admin.SWIFT'),
        'IBAN' => trans('admin.IBAN'),
        'AcountName' => trans('admin.AcountName'),
        'AcountNumber' => trans('admin.AcountNumber'),
        'WhoWeAre' => trans('admin.WhoWeAre'),
        'VisionMission' => trans('admin.VisionMission'),
        'Objectives' => trans('admin.Objectives'),
        'level' => trans('admin.level'),
        'TypeOfSale' => trans('admin.TypeOfSale'),
        'norighttochat' => trans('admin.norighttochat'),
   
        
      ]);    

        

             

    if (request()->hasFile('NationalID')) {
                  $data['NationalID']  = up::upload(
                     [
                        "file"=>"NationalID",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departments",
                     ]

                  ); 

     
    }
    /////////////////////////

      if (request()->hasFile('TaxCard')) {
                  $data['TaxCard']  = up::upload(
                     [
                        "file"=>"TaxCard",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departments",
                     ]

                  ); 

     
    }
    /////////////////////////


      if (request()->hasFile('Acopyofthetaxcard2')) {
                  $data['Acopyofthetaxcard2']  = up::upload(
                     [
                        "file"=>"Acopyofthetaxcard2",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departments",
                     ]

                  ); 

     
    }
    /////////////////////////


      if (request()->hasFile('Acopyofthetaxcard')) {
                  $data['Acopyofthetaxcard']  = up::upload(
                     [
                        "file"=>"Acopyofthetaxcard",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departments",
                     ]

                  ); 

     
    }
    /////////////////////////

      $data['password']=Hash::make($data['password']);
      $data['password2']=Request('password');



        $surfID      =  DB::table('admins')->select('*')->max('surfID');

            
         
             if (empty($surfID))
              {
                  $surfID=300;

              }

              $filnal_code =$surfID + 1;

             $level=Request('level');

            





             if ($level == 'vendor')
              {
                  $email_generat       ='VEN_ACC_'.$filnal_code;
              }
              elseif ($level == 'company')
                {

                  $email_generat       ='CO_ACC_'.$filnal_code;

                }

                elseif ($level == 'imported')
                {

                  $email_generat       ='IM_ACC_'.$filnal_code;

                }

                 elseif ($level == 'Factory')
                {

                  $email_generat       ='FAC_ACC_'.$filnal_code;

                }

                   elseif ($level == 'Handicraft')
                {

                  $email_generat       ='HAND_ACC_'.$filnal_code;

                }
                
              



                        $data['AcountCode']=$email_generat;

                         $data['surfID']=$filnal_code;


                  
          

                 admin::create($data);
                



      session()->flash('success', trans('admin.vendoraddsucssfully'));
      return redirect('SellOnAlymarket');
                
                }


 
       
 
     
}
