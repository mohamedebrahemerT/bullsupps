<?php 



//Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){





  // config::set('auth.defines','admin');



   Route::get('vue_js',function(){



   	return view('Admin.vue_js');

   } );



    Route::get('login_from2',function(){



    return view('Admin.login_from2');

   } );



    Route::resource('admin/tbl_employee', 'tbl_employeeController');
    Route::delete('admin/tbl_employee/destroy/all', 'tbl_employeeController@destoryall');
    Route::get('admin/tbl_employee/showSalry/{id}', 'tbl_employeeController@showSalry');
      /// AfterPyment
         Route::resource('admin/AfterPyment', 'AfterPymentController');
      Route::delete('admin/AfterPyment/destory/all','AfterPymentController@destoryall');
         Route::post('admin/AfterPyment/{id}', 'AfterPymentController@update');
        Route::post('admin/update_img_dropzon_AfterPyment/img/{id}', 'AfterPymentController@update_img_dropzon_AfterPyment');



    Route::post('admin/delete_img_dropzon_AfterPyment/img/{id}', 'AfterPymentController@delete_img_dropzon_AfterPyment');

        /////////////





        /// AfterPaymentOrders

         Route::resource('admin/AfterPaymentOrders', 'AfterPaymentOrdersController');



      Route::delete('admin/AfterPaymentOrders/destory/all','AfterPaymentOrdersController@destoryall');



         Route::post('admin/AfterPaymentOrders/{id}', 'AfterPaymentOrdersController@update');



        Route::post('admin/update_img_dropzon_AfterPaymentOrders/img/{id}', 'AfterPaymentOrdersController@update_img_dropzon_AfterPaymentOrders');



    Route::post('admin/delete_img_dropzon_AfterPaymentOrders/img/{id}', 'AfterPaymentOrdersController@delete_img_dropzon_AfterPaymentOrders');

        /////////////



      /// OrderProduct

         Route::resource('admin/OrderProduct', 'OrderProductsController');

      Route::delete('admin/OrderProduct/destory/all','OrderProductsController@destoryall');

         Route::post('admin/OrderProduct/{id}', 'OrderProductsController@update');



        Route::post('admin/update_img_dropzon_OrderProduct/img/{id}', 'OrderProductsController@update_img_dropzon_AfterPaymentOrders');



    Route::post('admin/delete_img_dropzon_OrderProduct/img/{id}', 'OrderProductsController@delete_img_dropzon_AfterPaymentOrders');

        /////////////










   Route::resource('admin/Sendcontact','SendcontactsController');



   

     



        Route::delete(' admin/Sendcontact/destory/all','SendcontactsController@destoryall'); 





   Route::get('admin/DecotorReservation','SendcontactsController@DecotorReservation');

   Route::get('admin/conslute','SendcontactsController@conslute');






      /// Order

         Route::resource('admin/Order', 'OrderController');

      Route::delete('admin/Order/destory/all','OrderController@destoryall');

         Route::post('admin/Order/{id}', 'OrderController@update');



        Route::post('admin/update_img_dropzon_Order/img/{id}', 'OrderController@update_img_dropzon_AfterPaymentOrders');



    Route::post('admin/delete_img_dropzon_Order/img/{id}', 'OrderController@delete_img_dropzon_AfterPaymentOrders');

        /////////////



      /// Ordershipped

         Route::resource('admin/Ordershipped', 'OrdershippedController');

      Route::delete('admin/Ordershipped/destory/all','OrdershippedController@destoryall');

         Route::post('admin/Ordershipped/{id}', 'OrdershippedController@update');



        Route::post('admin/update_img_dropzon_Ordershipped/img/{id}', 'OrderController@update_img_dropzon_AfterPaymentOrders');



    Route::post('admin/delete_img_dropzon_Ordershipped/img/{id}', 'OrdershippedController@delete_img_dropzon_AfterPaymentOrders');

        /////////////


     Route::get('admin/OrderShareWithAllVendor/shipNow/{id}', 'OrderShareWithAllVendorController@shipNow');
     
     Route::get('admin/OrderShareWithAllVendor/ReceivedNow/{id}', 'OrderShareWithAllVendorController@ReceivedNow');



     Route::get('admin/ViewTheinvoice/{id}', 'OrderShareWithAllVendorController@ViewTheinvoice');
    

     Route::get('admin/ViewTheinvoiceprint/{id}', 'OrderShareWithAllVendorController@ViewTheinvoiceprint');


 

    /// OrderShareWithAllVendor

     Route::resource('admin/OrderShareWithAllVendor', 'OrderShareWithAllVendorController');

      Route::delete('admin/OrderShareWithAllVendor/destory/all','OrdershippedController@destoryall');

         Route::post('admin/OrderShareWithAllVendor/{id}', 'OrderShareWithAllVendorController@update');



        Route::post('admin/update_img_dropzon_OrderShareWithAllVendor/img/{id}', 'OrderShareWithAllVendorController@update_img_dropzon_AfterPaymentOrders');



    Route::post('admin/delete_img_dropzon_Ordershipped/img/{id}', 'OrderShareWithAllVendorController@delete_img_dropzon_AfterPaymentOrders');

        /////////////





 Route::delete('admin/callCenter/destroy/all', 'callCenterController@destoryall');

      Route::delete('  admin/withdrawFromTotalMoney/destroy/all', 'withdrawFromTotalMoneyController@destoryall');

        Route::post('admin/callCenterSearchAll','callCenterController@callCenterSearchAll');

      Route::get('admin/callCenterSearchAll/{searchID}','callCenterController@callCenterSearchsingleprint');

      Route::resource('admin/Withdrawthecourse', 'WithdrawthecourseController');

      Route::resource('admin/callCenter', 'callCenterController');

      Route::post('/callCenter/confirmcomedate', 'callCenterController@confirmcomedate');

    

   Route::PUT('admin/productesCEDT/{id}', 'productesController@productesCEDT');
    
 




         /// AfterPaymentorder_product

         Route::resource('admin/AfterPaymentorder_product', 'AfterPaymentorder_productController');

      Route::delete('admin/AfterPaymentorder_product/destory/all','AfterPaymentorder_productController@destoryall');

         Route::post('admin/AfterPaymentorder_product/{id}', 'AfterPaymentorder_productController@update');



        Route::post('admin/update_img_dropzon_AfterPaymentorder_product/img/{id}', 'AfterPaymentorder_productController@update_img_dropzon_AfterPaymentorder_product');



    Route::post('admin/delete_img_dropzon_AfterPaymentorder_product/img/{id}', 'AfterPaymentorder_productController@delete_img_dropzon_AfterPaymentorder_product');

        /////////////



  Route::get('admin/ApprovalOfTheBill/{orderID}', 'OrderController@ApprovalOfTheBill');

  

  Route::get('admin/ApprovalOfTheBillOrderShareWithAllVendor/{orderID}', 'OrderShareWithAllVendorController@ApprovalOfTheBillOrderShareWithAllVendor');



  Route::get('admin/mailgun','mailguncontroller@index');



   

  Route::get('addmin__register','admins@register');

  Route::post('rr','admins@tt');

  

  Route::get('admin/admins/{id}/show','admindata@show');




  Route::get('admin_login','admins@view_login');

  Route::post('admin_form_post','admins@login');



      



  Route::get('Admin_logout','admins@Admin_logout_fun');

  Route::get('admin/Admin_logout','admins@Admin_logout_fun');



  Route::get('admin_form_post/Admin_logout','admins@Admin_logout_fun');

  

  

 Route::get('forgot_admin_password','admins@forgot_password');

  Route::post('admin_reset_pass','admins@reset_pass');



      Route::get('admin_reset_pass_add_new/{token}', 'admins@admin_reset_pass_add_new_get');

   Route::post('admin_reset_pass_add_new_post/{token}', 'admins@admin_reset_pass_add_new_post');

         

    





   Route::group( ['middleware'=>'admin:admin'],function(){



                 // Route::get('admin/datatable','admins@getdata'); 



                 Route::get('admin/sSearch ',function(){



                 });



      Route::resource('/admin/admins','admindata'); 

         Route::post('admin/admin/{id}', 'admindata@update');




         Route::get('/affiliateaccept/{id}', 'admindata@accept');



     
  Route::resource('admin/withdrawFromTotalMoney', 'withdrawFromTotalMoneyController');

 

   Route::get('/admin/withdrawFromTotalMoneyagree/{id}', 'withdrawFromTotalMoneyController@agree');




      Route::resource('/admin/users','users');

      
      Route::get('admin/users/show/{id}','users@show');
      Route::get('admin/users/showDetails/{id}','users@showDetails');

 


      Route::resource('/admin/userRquiest','USERRQUIESTCONTROLLER'); 

        Route::delete('admin/userRquiest/destroy/all', 'USERRQUIESTCONTROLLER@multi_delete');

      





      

       Route::resource('admin/counteries','countriess'); 

       Route::resource('admin/cities','citiess'); 

       

          Route::resource('admin/states','statesss'); 



   Route::get('admin/dep_get_parent', 'dep_get_parentController@dep_get_parent');



   Route::get('admin/dep_get_parentFactories', 'dep_get_parent_FactoriesController@dep_get_parent');









 ///ourTeam

         Route::resource('admin/ourTeam', 'ourTeamController');

      Route::delete('admin/ourTeam/destory/all','ourTeamController@destoryall');

         Route::post('admin/ourTeam/{id}', 'ourTeamController@update');



        Route::post('admin/update_img_dropzon_ourTeam/img/{id}', 'ourTeamController@update_img_dropzon_ourTeam');



    Route::post('admin/delete_img_dropzon_ourTeam/img/{id}', 'ourTeamController@delete_img_dropzon_ourTeam');

        /////////////



   Route::get('admin/dep_get_sizes_and_models', 'dep_get_sizes_and_modelsController@dep_get_sizes_and_models');





   Route::get('admin/dep_get_sizes_and_models_size_id', 'productesController@dep_get_sizes_and_models_size_id');

   

   Route::get('admin/dep_get_sizes_and_models_Modelst_id', 'productesController@dep_get_sizes_and_models_Modelst_id');





   Route::get('admin/dep_get_returnMoreSizes', 'productesController@dep_get_returnMoreSizes');

   

   Route::get('admin/dep_get_returnMoremodels', 'productesController@dep_get_returnMoremodels');







         Route::resource('admin/departments', 'DepartmentsController');

         Route::post('admin/departments/{id}', 'DepartmentsController@store');



           Route::post('admin/update_img_dropzon_department/img/{id}', 'DepartmentsController@update_img_dropzon_department');



    Route::post('admin/delete_img_dropzon_department/img/{id}', 'DepartmentsController@delete_img_dropzon_department');

         



             Route::delete('admin/departments/destory/all','DepartmentsController@destoryall');



             //////////////////////////////// departmentsFactories

              Route::resource('admin/departmentsFactories', 'departmentsFactoriesController');

              

         Route::post('admin/departmentsFactoriess/{id}', 'departmentsFactoriesController@store');



           Route::post('admin/update_img_dropzon_departmentsFactories/img/{id}', 'departmentsFactoriesController@update_img_dropzon_departmentsFactories');



    Route::post('admin/delete_img_dropzon_departmentsFactories/img/{id}', 'departmentsFactoriesController@delete_img_dropzon_departmentsFactories');

         



             Route::delete('admin/departmentsFactories/destory/all','departmentsFactoriesController@destoryall');

             /////////////////////////////////

         

        Route::resource('admin/trademarks', 'TradeMarksController');

        Route::delete('admin/trademarks/destroy/all', 'TradeMarksController@multi_delete');

         

         Route::resource('admin/manufacturers', 'ManufacturersController');

         

      Route::resource('admin/shipping', 'ShippingController');

     Route::resource('admin/malls', 'MallsController');
      Route::resource('admin/colors', 'ColorsController');
      Route::resource('admin/sizes', 'sizesController');
      Route::resource('admin/Models', 'ModelsController');

      Route::resource('admin/weight', 'weightController');

      Route::resource('admin/attributes', 'attributesController');
      Route::resource('admin/attribute_values', 'attribute_valuesController');
      



      Route::resource('admin/productes', 'productesController');

   Route::post('admin/upload/img/{id}', 'productesController@upload_img');



 



   Route::post('admin/delete_img_dropzon', 'productesController@delete_img');



   Route::post('admin/update_img_dropzon_product/img/{id}', 'productesController@update_img_dropzon_product');

   Route::post('delete_img_dropzon_product/{id}', 'productesController@delete_img_dropzon_product');


    Route::post('admin/update_imgofferphoto_dropzon_product/img/{id}', 'productesController@update_imgofferphoto_dropzon_product');

   Route::post('delete_imgofferphoto_dropzon_product/{id}', 'productesController@delete_imgofferphoto_dropzon_product');







   Route::post('admin/update_img_dropzon_product2/img/{id}', 'productesController@update_img_dropzon_product2');



   Route::post('delete_img_dropzon_product2/{id}', 'productesController@delete_img_dropzon_product2');





         Route::get('admin/load_dep_v_size_weight', 'productesController@load_dep_v_size_weight');


  Route::post('admin/call_attributes', 'productesController@call_attributes');


   Route::post('admin/DELET_PRODUCT/{id}', 'productesController@DELET_PRODUCT');

      Route::delete('admin/productes/destroy/all', 'productesController@multi_delete');









   Route::post('admin/HomeSlider/img/{id}', 'photoessController@HomeSlider');

   Route::post('admin/HomeSlider_delete_img', 'photoessController@HomeSlider_delete_img');





   Route::post('admin/HomeSliderEN/img/{id}', 'photoesENsController@HomeSlider');

   Route::post('admin/HomeSliderEN_delete_img', 'photoesENsController@HomeSlider_delete_img');





 Route::post('admin/BannerTop/img/{id}', 'BannerTopController@BannerTop');

   Route::post('admin/BannerTop_delete_img', 'BannerTopController@BannerTop_delete_img');





 Route::post('admin/BannerTopEN/img/{id}', 'BannerTopENController@BannerTopEN');

   Route::post('admin/BannerTop_delete_img', 'BannerTopENController@BannerTopEN_delete_img');









    Route::post('admin/BannerTopFactory/img/{id}', 'BannerTopFactoryController@BannerTopFactory');

   Route::post('admin/BannerTopFactory_delete_img', 'BannerTopController@BannerTopFactory_delete_img');







    Route::post('admin/HomeSliderFactory/img/{id}', 'photoesFactorysController@HomeSliderFactory');



   Route::post('admin/HomeSliderFactory_delete_img', 'photoesFactorysController@HomeSliderFactory_delete_img');




Route::get('admin/affiliate', 'affiliateInadminController@affiliateData');







       Route::resource('admin/myproductes', 'myproductesController');

   Route::post('admin/upload/img/{id}', 'myproductesController@upload_img');

   //Route::post('admin/delete_img_dropzon', 'myproductesController@delete_img');

   Route::post('admin/update_img_dropzon_myproduct/img/{id}', 'myproductesController@update_img_dropzon_myproduct');

   Route::post('delete_img_dropzon_myproduct/{id}', 'myproductesController@delete_img_dropzon_product');

   Route::post('admin/load_dep_v_size_weight', 'myproductesController@load_dep_v_size_weight');

   Route::post('admin/DELET_PRODUCT/{id}', 'myproductesController@DELET_PRODUCT');

      Route::delete('admin/myproductes/destroy/all', 'productesController@multi_delete');

       

   

Route::resource('admin/NeedAproveproductes', 'NeedAproveproductes');





   Route::post('admin/chat/premesion', 'admindata@chatpremesion');







    



   





 

  

   









      

      

      

            



      Route::get('admin/sUrl',   function()

      {

        

      });

      

 

       



      



       Route::delete('admin/datatable/destory/all','admindata@destoryall'); 

        Route::delete('users/datatable/destory/all','users@destoryall'); 

        Route::delete('admin/countries/destory/all','countriess@destoryall'); 

       Route::delete('admin/cities/destory/all','citiess@destoryall'); 

       Route::delete('admin/states/destory/all','statesss@destoryall'); 

        Route::delete('admin/manufacturers/destroy/all', 'ManufacturersController@multi_delete');

         Route::delete('admin/shipping/destroy/all', 'ShippingController@multi_delete');

      Route::delete('admin/malls/destroy/all', 'MallsController@multi_delete');

      Route::delete('admin/colors/destroy/all', 'ColorsController@multi_delete');

      Route::delete('admin/sizes/destroy/all', 'sizesController@multi_delete');

      Route::delete('admin/weight/destroy/all', 'weightController@multi_delete');

       

      



    Route::get('admin/settings','setting@index');

    Route::post('admin/setting_store','setting@setting_store');



   // Route::get('admin_reset_pass_add_new_get/{token}','admins@admin_reset_pass_add_new');



   

                ////////////////////////////////// newes data 

           Route::get('admin/newes', 'newesController@index')->name('ajaxdata');

           

Route::get('ajaxdata/getdata', 'newesController@getdata')->name('newes.getdata');



Route::post('ajaxdata/postdata', 'newesController@postdata')->name('ajaxdata.postdata');



Route::get('ajaxdata/fetchdata', 'newesController@fetchdata')->name('ajaxdata.fetchdata');

Route::get('ajaxdata/removedata', 'newesController@removedata')->name('ajaxdata.removedata');

Route::get('ajaxdata/massremove', 'newesController@massremove')->name('ajaxdata.massremove');

//////////////////////////////////////

    

Route::post('admin/sendEmail_admin_comunication','admins@sendMAil');



            ////////////////////////////////// newes data 

           Route::get('admin/Coupons', 'CouponsController@index')->name('Coupons');

           

Route::get('Coupons/getdata', 'CouponsController@getdata')->name('Coupons.getdata');



Route::post('Coupons/postdata', 'CouponsController@postdata')->name('Coupons.postdata');



Route::get('Coupons/fetchdata', 'CouponsController@fetchdata')->name('Coupons.fetchdata');

Route::get('Coupons/removedata', 'CouponsController@removedata')->name('Coupons.removedata');

Route::get('Coupons/massremove', 'CouponsController@massremove')->name('Coupons.massremove');

//////////////////////////////////////



   



    





                  

       Route::get('admin',function(){

	return view('Admin.home');

});



          

       



       Route::get('admin/destory',function()

        {



               if (session()->has('lang'))

             {

              session()->forget('lang');

             }

              return back()->withInput();



        });







   } );



      



                 Route::get('admin/lang/{lang}',function($lang)

             {

                $totalSegsCount = count(Request::segments());

              

             





               if (session()->has('lang'))

            {

              session()->forget('lang');

           }



           if ($lang=='ar')

            {

              session()->put('lang','ar');

                     

            }

            else

            {

              session()->put('lang','en');

            }

              return back()->withInput();



            }





             );





                     Route::get('admin/lang_en/{lang}',function($lang)

              {

                if ($lang=='en')

            {

              session()->put('lang','en');



                 $check=str_replace(url('/'), '', url()->previous());



                 if ($check=='/')



                  {

                      return redirect('index');

                   

                  }







              

              return redirect(str_replace(url('/'), '', url()->previous()));



              

                     

            }





               else

            {



              session()->put('lang','ar');



               $check=str_replace(url('/'), '', url()->previous());



                 if ($check=='/index')



                  {



                    

                      return redirect('/');

                   

                  }

              return redirect(str_replace(url('/'), '', url()->previous()));

            



              



            }





              }

              );

            



//});







     Route::prefix('manage')->group(function(){

                   

                   Route::get('/client','admin@index');

               

                 });









    /// tags 

         Route::resource('admin/tags', 'tagssController');

      Route::delete('admin/tags/destory/all','tagssController@destoryall');

         Route::post('admin/tags/{id}', 'tagssController@update');



        Route::post('admin/update_img_dropzon_tags/img/{id}', 'tagssController@update_img_dropzon_tags');



    Route::post('admin/delete_img_dropzon_tags/img/{id}', 'tagssController@delete_img_dropzon_tags');

        /////////////





    /// whoweare 

         Route::resource('admin/zones', 'zonessController');

      Route::delete('admin/zones/destory/all','zonessController@destoryall');



         Route::post('admin/zones/{id}', 'zonessController@update');



        Route::post('admin/update_img_dropzon_zones/img/{id}', 'zonessController@update_img_dropzon_zones');



    Route::post('admin/delete_img_dropzon_zones/img/{id}', 'zonessController@delete_img_dropzon_zones');

        /////////////


    

    /// who we are 

         Route::resource('admin/WhoWeAre', 'WhoWeAresController');

      Route::delete('admin/WhoWeAre/destory/all','WhoWeAresController@destoryall');



         Route::post('admin/WhoWeAre/{id}', 'WhoWeAresController@update');



        Route::post('admin/update_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@update_img_dropzon_WhoWeAre');



    Route::post('admin/delete_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@delete_img_dropzon_WhoWeAre');

        /////////////





     

    ///SendSms

         Route::resource('admin/SendSms', 'SendSmssController');

      Route::delete('admin/SendSms/destory/all','SendSmssController@destoryall');



         Route::post('admin/SendSms/{id}', 'SendSmssController@update');



        Route::post('admin/update_img_dropzon_SendSms/img/{id}', 'SendSmssController@update_img_dropzon_SendSms');



    Route::post('admin/delete_img_dropzon_SendSms/img/{id}', 'SendSmssController@delete_img_dropzon_SendSms');

        /////////////

         Route::get('admin/GroupSendSms', 'SendSmssController@GroupSendSms');







       /// DirectorWord

         Route::resource('admin/DirectorWord', 'DirectorWordsController');

      Route::delete('admin/DirectorWord/destory/all','DirectorWordsController@destoryall');

         Route::post('admin/DirectorWord/{id}', 'DirectorWordsController@update');



        Route::post('admin/update_img_dropzon_DirectorWord/img/{id}', 'DirectorWordsController@update_img_dropzon_DirectorWord');



    Route::post('admin/delete_img_dropzon_DirectorWord/img/{id}', 'DirectorWordsController@delete_img_dropzon_DirectorWord');

        /////////////



    



     /// Healthyoption

         Route::resource('admin/Healthyoption', 'HealthyoptionsController');

      Route::delete('admin/Healthyoption/destory/all','HealthyoptionsController@destoryall');

         Route::post('admin/Healthyoption/{id}', 'HealthyoptionsController@update');



        Route::post('admin/update_img_dropzon_Healthyoption/img/{id}', 'HealthyoptionsController@update_img_dropzon_Healthyoption');



    Route::post('admin/delete_img_dropzon_Healthyoption/img/{id}', 'HealthyoptionsController@delete_img_dropzon_Healthyoption');

        /////////////



        /// RawMaterials

         Route::resource('admin/RawMaterials', 'RawMaterialssController');

      Route::delete('admin/RawMaterials/destory/all','RawMaterialssController@destoryall');

         Route::post('admin/RawMaterials/{id}', 'RawMaterialssController@update');



        Route::post('admin/update_img_dropzon_RawMaterials/img/{id}', 'RawMaterialssController@update_img_dropzon_RawMaterials');



    Route::post('admin/delete_img_dropzon_RawMaterials/img/{id}', 'RawMaterialssController@delete_img_dropzon_RawMaterials');

        /////////////



    

    ///AdvantagesOfPipes

         Route::resource('admin/AdvantagesOfPipes', 'AdvantagesOfPipessController');

      Route::delete('admin/AdvantagesOfPipes/destory/all','AdvantagesOfPipessController@destoryall');

         Route::post('admin/AdvantagesOfPipes/{id}', 'AdvantagesOfPipessController@update');



        Route::post('admin/update_img_dropzon_AdvantagesOfPipes/img/{id}', 'AdvantagesOfPipessController@update_img_dropzon_AdvantagesOfPipes');



    Route::post('admin/delete_img_dropzon_AdvantagesOfPipes/img/{id}', 'AdvantagesOfPipessController@delete_img_dropzon_AdvantagesOfPipes');

        /////////////



      /// UsesOfPipes

         Route::resource('admin/UsesOfPipes', 'UsesOfPipessController');

      Route::delete('admin/UsesOfPipes/destory/all','UsesOfPipessController@destoryall');

         Route::post('admin/UsesOfPipes/{id}', 'UsesOfPipessController@update');



        Route::post('admin/update_img_dropzon_UsesOfPipes/img/{id}', 'UsesOfPipessController@update_img_dropzon_UsesOfPipes');



    Route::post('admin/delete_img_dropzon_UsesOfPipes/img/{id}', 'UsesOfPipessController@delete_img_dropzon_UsesOfPipes');

        /////////////



     ///WarrantyQuality

         Route::resource('admin/WarrantyQuality', 'WarrantyQualitysController');

      Route::delete('admin/WarrantyQuality/destory/all','WarrantyQualitysController@destoryall');

         Route::post('admin/WarrantyQuality/{id}', 'WarrantyQualitysController@update');



        Route::post('admin/update_img_dropzon_WarrantyQuality/img/{id}', 'WarrantyQualitysController@update_img_dropzon_WarrantyQuality');



    Route::post('admin/delete_img_dropzon_WarrantyQuality/img/{id}', 'WarrantyQualitysController@delete_img_dropzon_WarrantyQuality');

        /////////////





         /// VisionMission

         Route::resource('admin/VisionMission', 'VisionMissionsController');

      Route::delete('admin/VisionMission/destory/all','VisionMissionsController@destoryall');

         Route::post('admin/VisionMission/{id}', 'VisionMissionsController@update');



        Route::post('admin/update_img_dropzon_VisionMission/img/{id}', 'VisionMissionsController@update_img_dropzon_VisionMission');



    Route::post('admin/delete_img_dropzon_VisionMission/img/{id}', 'VisionMissionsController@delete_img_dropzon_VisionMission');

        /////////////



         /// Objectives

         Route::resource('admin/Objectives', 'ObjectivessController');

      Route::delete('admin/Objectives/destory/all','ObjectivessController@destoryall');

         Route::post('admin/Objectives/{id}', 'ObjectivessController@update');



        Route::post('admin/update_img_dropzon_Objectives/img/{id}', 'ObjectivessController@update_img_dropzon_Objectives');



    Route::post('admin/delete_img_dropzon_Objectives/img/{id}', 'ObjectivessController@delete_img_dropzon_Objectives');

        /////////////





     /// newes

         Route::resource('admin/newes', 'newessController');

      Route::delete('admin/newes/destory/all','newessController@destoryall');

         Route::post('admin/newes/{id}', 'newessController@update');



        Route::post('admin/update_img_dropzon_newes/img/{id}', 'newessController@update_img_dropzon_newes');



    Route::post('admin/delete_img_dropzon_newes/img/{id}', 'newessController@delete_img_dropzon_newes');

        /////////////





      /// Jobs

         Route::resource('admin/Jobs', 'JobssController');

      Route::delete('admin/Jobs/destory/all','JobssController@destoryall');

         Route::post('admin/Jobs/{id}', 'JobssController@update');



        Route::post('admin/update_img_dropzon_Jobs/img/{id}', 'JobssController@update_img_dropzon_Jobs');



    Route::post('admin/delete_img_dropzon_Jobs/img/{id}', 'JobssController@delete_img_dropzon_Jobs');

        /////////////



     

 

   





          /// FAQs 

         Route::resource('admin/FAQs', 'FAQsController');

      Route::delete('admin/FAQs/destory/all','FAQsController@destoryall');

         Route::post('admin/FAQs/{id}', 'FAQsController@update');



        Route::post('admin/update_img_dropzon_WhoWeAre/img/{id}', 'WhoWeAresController@update_img_dropzon_WhoWeAre');



    Route::post('admin/delete_img_dropzon_FAQs/img/{id}', 'FAQsController@delete_img_dropzon_FAQs');

        /////////////   



         /// Maincategories

         Route::resource('admin/Maincategories', 'MaincategoriessController');

      Route::delete('admin/Maincategories/destory/all','MaincategoriessController@destoryall');

         Route::post('admin/Maincategories/{id}', 'MaincategoriessController@update');



        Route::post('admin/update_img_dropzon_Maincategories/img/{id}', 'MaincategoriessController@update_img_dropzon_Maincategories');



    Route::post('admin/delete_img_dropzon_Maincategories/img/{id}', 'MaincategoriessController@delete_img_dropzon_Maincategories');

        ///////////// 



      /// subcategories

         Route::resource('admin/subcategories', 'subcategoriessController');

      Route::delete('admin/subcategories/destory/all','subcategoriessController@destoryall');

         Route::post('admin/subcategories/{id}', 'subcategoriessController@update');



        Route::post('admin/update_img_dropzon_subcategories/img/{id}', 'subcategoriessController@update_img_dropzon_subcategories');



    Route::post('admin/delete_img_dropzon_subcategories/img/{id}', 'subcategoriessController@delete_img_dropzon_subcategories');

        ///////////// 



         Route::get('admin/invoice', 'invoiceController@invoice');

        Route::get('admin/invoiceprint/{id}', 'invoiceController@invoiceprint');

    



    

    /// tags 

         Route::resource('admin/publicPayment', 'publicPaymentController');

      Route::delete('admin/publicPayment/destory/all','publicPaymentController@destoryall');

         Route::post('admin/publicPayment/{id}', 'publicPaymentController@update');



        Route::post('admin/update_img_dropzon_publicPayment/img/{id}', 'publicPaymentController@update_img_dropzon_publicPayment');



    Route::post('admin/delete_img_dropzon_publicPayment/img/{id}', 'publicPaymentController@delete_img_dropzon_publicPayment');

        /////////////





    /// MenueControll 

         Route::resource('admin/MenueControll', 'MenueControllController');

      Route::delete('admin/MenueControll/destory/all','MenueControllController@destoryall');

         Route::post('admin/MenueControll/{id}', 'MenueControllController@update');



        Route::post('admin/update_img_dropzon_WMenueControll/img/{id}', 'MenueControllController@update_img_dropzon_MenueControll');



    Route::post('admin/delete_img_dropzon_MenueControll/img/{id}', 'MenueControllController@delete_img_dropzon_MenueControll');

        /////////////



         Route::resource('admin/profile', 'profileController');



         

           /// photoes

         Route::resource('admin/photoes', 'photoessController');

      Route::delete('admin/photoes/destory/all','photoessController@destoryall');

         Route::post('admin/photoes/{id}', 'photoessController@update');

        ///////////// 


              /// Departmentbanners

         Route::resource('admin/Departmentbanners', 'DepartmentbannerssController');

      Route::delete('admin/Departmentbanners/destory/all','DepartmentbannerssController@destoryall');

         Route::post('admin/Departmentbanners/{id}', 'DepartmentbannerssController@update');

        ///////////// 





            /// photoes

         Route::resource('admin/photoesEN', 'photoesENsController');

      Route::delete('admin/photoesEN/destory/all','photoesENsController@destoryall');

         Route::post('admin/photoesEN/{id}', 'photoesENsController@update');

        ///////////// 



       /// BannerTop

         Route::resource('admin/BannerTop', 'BannerTopController');

      Route::delete('admin/BannerTop/destory/all','BannerTopController@destoryall');

         Route::post('admin/BannerTop/{id}', 'BannerTopController@update');

        /////////////



           /// BannerTop

         Route::resource('admin/BannerTopEN', 'BannerTopENController');

      Route::delete('admin/BannerTopEN/destory/all','BannerTopENController@destoryall');

         Route::post('admin/BannerTopEN/{id}', 'BannerTopENController@update');

        /////////////





      /// BannerTopFactory

         Route::resource('admin/BannerTopFactory', 'BannerTopFactoryController');

      Route::delete('admin/BannerTopFactory/destory/all','BannerTopFactoryController@destoryall');

         Route::post('admin/BannerTopFactory/{id}', 'BannerTopFactoryController@update');



        Route::post('admin/update_img_dropzon_BannerTopFactory/img/{id}', 'BannerTopController@update_img_dropzon_BannerTopFactory');





   /// photoes

         Route::resource('admin/photoesFactory', 'photoesFactorysController');

      Route::delete('admin/photoesFactory/destory/all','photoesFactorysController@destoryall');

         Route::post('admin/photoesFactory/{id}', 'photoesFactorysController@update');

        /////////////





     /// SellerAccount

         Route::resource('admin/SellerAccount', 'SellerAccountController');

      Route::delete('admin/SellerAccount/destory/all','SellerAccountController@destoryall');

         Route::post('admin/SellerAccount/{id}', 'SellerAccountController@update');



        Route::post('admin/update_img_dropzon_Seller/img/{id}', 'SellerAccountController@update_img_dropzon_Seller');



    Route::post('admin/delete_img_dropzon_WhoWeAre/img/{id}', 'SellerAccountController@delete_img_dropzon_WhoWeAre');

        /////////////





 /// PurchaseAndDeliveryPolicy

         Route::resource('admin/PurchaseAndDeliveryPolicy', 'PurchaseAndDeliveryPolicysController');

      Route::delete('admin/PurchaseAndDeliveryPolicy/destory/all','WhoWeAresController@destoryall');



         Route::post('admin/PurchaseAndDeliveryPolicy/{id}', 'PurchaseAndDeliveryPolicysController@update');



        Route::post('admin/update_img_dropzon_PurchaseAndDeliveryPolicy/img/{id}', 'PurchaseAndDeliveryPolicysController@update_img_dropzon_PurchaseAndDeliveryPolicy');



    Route::post('admin/delete_img_dropzon_PurchaseAndDeliveryPolicy/img/{id}', 'PurchaseAndDeliveryPolicysController@delete_img_dropzon_PurchaseAndDeliveryPolicy');

        /////////////

   





      /// Payment AndDeliveryPolicy

         Route::resource('admin/PaymentAndDeliveryPolicy', 'PaymentAndDeliveryPolicysController');

      Route::delete('admin/PaymentAndDeliveryPolicy/destory/all','WhoWeAresController@destoryall');



         Route::post('admin/PaymentAndDeliveryPolicy/{id}', 'PaymentAndDeliveryPolicysController@update');



        Route::post('admin/update_img_dropzon_PaymentAndDeliveryPolicy/img/{id}', 'PaymentAndDeliveryPolicysController@update_img_dropzon_PaymentAndDeliveryPolicy');



    Route::post('admin/delete_img_dropzon_PaymentAndDeliveryPolicy/img/{id}', 'PaymentAndDeliveryPolicysController@delete_img_dropzon_PaymentAndDeliveryPolicy');

        /////////////



  



  Route::post('admin/update_img_dropzon_admin/img/{id}', 'admindata@update_img_dropzon_admin');



    Route::post('admin/delete_img_dropzon_admin/img/{id}', 'admindata@delete_img_dropzon_admin');





    Route::post('admin/upload/admin/img/{id}', 'admindata@malti_upload_admin');

 

 

 

    



    Route::get('forget',function()

      {

               if (session()->has('lang'))

            {

              session()->forget('lang');

           }

              return back()->withInput();

               



      });  





               Route::get('mailgunTest',function(){



                $data=[

                  'title'=>'title',

                  'content'=>'content'





                ];



                

   } );


               
 