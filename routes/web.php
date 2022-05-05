<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

           Route::resource('/admin/states','statesss'); 

       Route::resource('/counteries','countriess'); 
       Route::resource('/cities','citiess'); 
          Route::resource('/states','statesss'); 

Route::get('copyimg',function()
{
/*   $oldPath = url('/').'/images/1.jpg'; // publc/images/1.jpg
$newPath =url('/').'/storage/app/public/productes/2.jpg'; // publc/images/2.jpg

if (\File::copy($oldPath , $newPath)) {
    dd("success");
}

*/

   
   $test=Storage::copy('/productes/file.jpg', '/productesclon/_file.JPG');
});

  Route::group(['middleware'=>'maintainaces'],function()
  	{




	});

  Route::get('maintainaces',function()
  {
  	if (settings()->status == 'open') 
  	{
  		 return redirect('index ');
  	}

  	return view('forentend.maintainaces.maintainaces');


  });

 

 
 

 


//////////////// weblesson toutrial 

Route::get('ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata', 'AjaxdataController@postdata')->name('ajaxdata.postdata');

Route::get('ajaxdata/fetchdata', 'AjaxdataController@fetchdata')->name('ajaxdata.fetchdata');
Route::get('ajaxdata/removedata', 'AjaxdataController@removedata')->name('ajaxdata.removedata');
Route::get('ajaxdata/massremove', 'AjaxdataController@massremove')->name('ajaxdata.massremove');

//////////
Route::get('/dynamic_dependent', 'DynamicDependent@index');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Route::post('country/insertttt', 'DynamicDependent@insert')->name('country.insert');
///////////

Route::get('/email_available', 'EmailAvailable@index');

Route::post('/email_available/check', 'EmailAvailable@check')->name('email_available.check');

/////////////////
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


/////////////////////////////////

Route::get('/export_excel', 'ExportExcelController@index');

Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');

//////////////////////////

         //  using   mysql database
Route::get('/autocomplete', 'AutocompleteController@index');


Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');


Route::post('/autocomplete/fetch2', 'AutocompleteController@fetch2')->name('autocomplete.fetch2');



//Route::get('/search', 'AutocompleteController@search');


 

////////////////////
Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');
///////////////////////////
Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');

///////////////////////////////////
 
/////////////////////////////////////

Route::get('/ajax_upload', 'AjaxUploadController@index');

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');

 
////////////////////////////
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
///////////////////////////////////////////
Route::get('/pagination', 'PaginationController@index');

Route::get('/pagination/fetch_data', 'PaginationController@fetch_data');
///////////////////////////////////////
Route::get('/livetable', 'LiveTable@index');
Route::get('/livetable/fetch_data', 'LiveTable@fetch_data');
Route::post('/livetable/add_data', 'LiveTable@add_data')->name('livetable.add_data');
Route::post('/livetable/update_data', 'LiveTable@update_data')->name('livetable.update_data');
Route::post('/livetable/delete_data', 'LiveTable@delete_data')->name('livetable.delete_data');
///////////////////////////////////////////////////
Route::get('/import_excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');

///////////////////////////
Route::get('dynamic-field', 'DynamicFieldController@index');

Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');




// Route::post('postverfiy','verfiycontroller@postverfiy');
                 
                Route::get('M_V_L_R_get_register','M_V_L_R@get_register');
                
                Route::post('M_V_L_R_post_register','M_V_L_R@post_register');

                Route::get('verify','M_V_L_R@getverfiy');
                Route::post('postverfiy','M_V_L_R@postverfiy');

                Route::post('request_new_code','M_V_L_R@request_new_code');
                

                Route::get('M_V_get_Login','M_V_L_R@M_V_get_Login');
                Route::post('M_V_post_Login','M_V_L_R@M_V_post_Login');

           Route::get('user_logout','M_V_L_R@user_logout_fun');


          Route::group(['middleware'=>'diny'],function(){

         


           }); 


         

  
        

                
          
   Route::group(['prefix'=>'','namespace'=>'forentend'],function(){


              Route::get('/GuzzleHttppost', 'homeForentEndController@GuzzleHttppost');
              Route::get('/OpenTicket', 'homeForentEndController@OpenTicket');

              

           


    Route::get('/app','homeForentEndController@app')->name('home.app');
    Route::get('/etisalatemirates','homeForentEndController@etisalatemirates')->name('home.app');
           

    Route::get('/','homeForentEndController@index')->name('home.index');
    Route::get('/ThankYou','homeForentEndController@ThankYou')->name('home.ThankYou');


                
    Route::get('/home','homeForentEndController@index')->name('home.index');



    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
  Route::get('/callback/{provider}', 'SocialController@callback');
  Route::get('/callback/callback/{provider}', 'SocialfacebookController@callback');
  

 

 Route::post('/Confirmtheorderandpayonreceipt','PaymentController@Confirmtheorderandpayonreceipt')->name('about.index');

   Route::get('/return_url2','PaymentController@return_url2')->name('Checkout.store');

 


    
Route::get('/Chats', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('affiliate/login', 'affiliateController@login');





Route::get('TheSupport', 'affiliateController@TheSupport');


Route::get('affiliate/register', 'affiliateController@register');


Route::post('affiliate/login', 'affiliateController@post_login');


Route::post('affiliate/register', 'affiliateController@post_register');





      Route::get('/Vue','homeForentEndController@Vue')->name('home.Vue');
  
      Route::get('/index','homeForentEndController@main');

    Route::post('/includeHome','homeForentEndController@includeHome')->name('home.includeHome');


        

 Route::get('/about','aboutController@index')->name('about.index');
 
 Route::get('/PhotoGallery','aboutController@PhotoGallery')->name('about.PhotoGallery');
 Route::get('/BestSeller','aboutController@BestSeller')->name('about.BestSeller');
 Route::get('/NewArrivals','aboutController@NewArrivals')->name('about.NewArrivals');


 
 Route::get('/WarrantyAndServices','aboutController@WarrantyAndServices')->name('WarrantyAndServices.WarrantyAndServices');

 Route::get('/PaymentAndDeliveryPolicy','aboutController@PaymentAndDeliveryPolicy')->name('PaymentAndDeliveryPolicy.PaymentAndDeliveryPolicy');
 

 Route::get('/Support24','aboutController@Support24')->name('Support24.Support24');
 Route::get('/TradeMark','aboutController@TradeMark')->name('TradeMark.TradeMark');
 Route::get('/GiftCertificates','aboutController@GiftCertificates')->name('GiftCertificates.GiftCertificates');

 Route::get('/Commissionsystem','aboutController@Commissionsystem')->name('Commissionsystem.Commissionsystem');




 Route::get('title={title}','aboutController@special')->name('special.special');

 Route::get('/Returns','aboutController@Returns')->name('Returns.Returns');
 Route::get('/sitemap','aboutController@sitemap')->name('sitemap.sitemap');


 


 Route::get('/VisionMission','aboutController@VisionMission')->name('about.VisionMission');
 Route::get('/Objectives','aboutController@Objectives')->name('about.Objectives');

 
 
      Route::get('/FAQ ','FAQscontrller@index');

      Route::get('/wishlist/{id}','wishlistcontrller@switchToSaveForLater')->name('wishlist.switchToSaveForLater');


      Route::get('/wishlist','wishlistcontrller@index')->name('wishlist.index');



      
      Route::get('/SaleOff','SaleOffcontrller@index')->name('SaleOff.index');;

 Route::get('/tracking-order','trackingOrderController@index')->name('tracking.index');

       //  Route::get('/','homeForentEndController@allpeople')->name('home.index');
        // Route::get('/TestMode/{id}','homeForentEndController@TestMode')->name('home.TestMode');




    Route::get('/home-carousel','homeForentEndController@home_carousel')->name('home.carousel');

     Route::get('/home-sidebar','homeForentEndController@home_sidebar')->name('home.sidebar');



 Route::get('/shop','ShopController@index')->name('shop.index');

 
 Route::get('/shopHome','ShopController@indexHome')->name('shopHome.index');

 Route::post('/load_filter','ShopController@indexHome')->name('shopHome.load_filter');

  Route::post('load_dep_v_size_weight', 'homeForentEndController@load_dep_v_size_weight');

 Route::get('/submit_text_search','ShopController@submit_text_search')->name('shop.submit_text_search');

 

          Route::get('/shop/{id}','ShopController@show')->name('shop.show');


          Route::get('/shop/{id}/{affiliateID}','ShopController@showaffiliateID')->name('shop.affiliateID');

          

          Route::get('/Tag/{id}','ShopController@Tags')->name('Tags.show');


      Route::get('{dep}/{ven}/{PN}/{AlyCode}/{randstr}/{id}','ShopController@show2')->name('shop.show');
           

 Route::get('/zoom','ShopController@zoom')->name('shop.zoom');

 Route::get('/jory','homeForentEndController@jory')->name('jory.jory');



 Route::get('/zoom2','ShopController@zoom2')->name('shop.zoom2');

 Route::get('/Testzoom','ShopController@Testzoom')->name('shop.Testzoom');

 Route::post('/changePriceDependOnsize','ShopController@changePriceDependOnsize')->name('shop.changePriceDependOnsize');


 Route::post('/changePriceDependOncolors','ShopController@changePriceDependOncolors')->name('shop.changePriceDependOncolors');

 
 Route::post('/changePriceDependOncolors2','ShopController@changePriceDependOncolors2')->name('shop.changePriceDependOncolors2');

 

 
 
 Route::get('{name}_id={id}','ShopController@TheProductsOfThisMerchant')->name('shop.TheProductsOfThisMerchant');
 

  Route::post('plusservices', 'CartController@plusservices');
    Route::post('minusservices', 'CartController@minusservices');

  Route::post('cartquantity', 'CartController@cartquantity');
    

     Route::post('apply_coupon', 'CartController@apply_coupon')->name('apply_coupon');

 Route::get('/cart','CartController@index')->name('cart.index');


 Route::post('/addToCart','CartController@addToCart')->name('cart.addToCart');

  Route::post('/store_attribute_value_id','CartController@store_attribute_value_id');


 
 Route::get('/MyWishlist','CartController@MyWishlist')->name('cart.MyWishlist');



 
 Route::get('/cart/{id}','CartController@store')->name('cart.store');
 Route::post('/cartadd','CartController@cartadd');

 Route::post('/addCartSingleProduct','CartController@addCartSingleProduct')->name('cart.addCartSingleProduct');


 Route::post('/cartdestroy','CartController@destroy')->name('cart.destroy');

 Route::post('cart/update/{id}','CartController@update')->name('cart.update');



 Route::post('/switchToSaveForLater','CartController@switchToSaveForLater');
 Route::post('/switchToSaveForLaterHome','CartController@switchToSaveForLaterHome');


    Route::post('/add_wishlist_new/{id}', 'CartController@add_wishlist');
        Route::post('/add_wishlist_new', 'CartController@switchToSaveForLaterHome');

 Route::post('/cart','SaveForLaterController@destroy')->name('cart.Deletelater');




 Route::post('/switchToCart', 'SaveForLaterController@switchToCart');

 Route::get('/Checkout','CheckoutController@index')->name('Checkout.index')->middleware('auth');
 Route::post('/Checkout','CheckoutController@store')->name('Checkout.store');




 Route::get('/confirmation','ConfirmationController@index')->name('confirmation.index');

 Route::post('/couponn','CouponsController@store')->name('coupon.store');
 Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

 Route::post('/HomeBestseller','HomeTapController@HomeBestseller')->name('home.HomeBestseller');
 Route::post('/homeTagAR','HomeTapController@homeTagAR')->name('home.homeTagAR');




//Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

   
      // route for check status of the payment
      Route::get('status', 'PaymentController@getPaymentStatus');


Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::get('/search', 'ShopController@index')->name('search');


        Route::get('blog', 'blogController@blog')->name('blog.index');
   Route::get('blog/{id}', 'blogController@show');
                 Route::post('addcomment','blogController@addcomment');

        Route::get('contact', 'contactController@index')->name('contact.index');

        Route::get('insta', 'instaController@insta')->name('contact.insta');


Route::get('login/instagram',
 'LoginController@redirectToInstagramProvider')->name('instagram.login');

Route::get('login/instagram/callback', 'Auth\LoginController@instagramProviderCallback')->name('instagram.login.callback');

       //payment form
Route::get('/pay', 'PaymentController@index');

// route for processing payment
Route::post('/paypal-checkout', 'PaymentController@payWithpaypal')->name('checkout.paypal');

      Route::get('SellOnAlymarket', 'SellOnAlymarketController@SellOnAlymarket');

      Route::post('action_page', 'SellOnAlymarketController@action_page');


   Route::get('factory', 'factoryController@index');

       Route::get('sell', 'sellController@sell');
       
       Route::get('compare', 'CartController@compare');

 Route::get('/featured','CartController@featured')->name('cart.featured');
       


       Route::get('profile', 'sellController@profile');


  
        
            

});


 Auth::routes();
Route::middleware('auth')->group(function () {

   Route::group(['namespace'=>'forentend'],function(){




    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

        Route::get('/my-orders', 'OrdersController@index')->name('orders.index');

    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');


    Route::post('/returningOrder', 'OrdersController@returningOrder')->name('orders.returningOrder');
    Route::post('/openticket', 'OrdersController@openticket')->name('orders.openticket');


        Route::post('/my-ordersGet', 'OrdersController@MyOrdersGet')->name('orders.MyOrdersGet');

        Route::get('/my-orderszzzzz/{order}', 'OrdersController@MyOrdersGet2')->name('orders.MyOrdersGet2');

   Route::get('/LiveChat', 'homeForentEndController@LiveChat');
    

  });
});


 
     


                     
 Route::get('user_forgot_password','M_V_L_R@forgot_password');

  Route::post('user_reset_pass','M_V_L_R@reset_pass');

      Route::get('user_reset_pass_add_new/{token}', 'M_V_L_R@user_reset_pass_add_new_get');
   Route::post('user_reset_pass_add_new_post/{token}', 'M_V_L_R@admin_reset_pass_add_new_post');


   Route::get('Email_verfiy/{token}', 'M_V_L_R@Email_verfiy');

   Route::get('shopPage', 'shopPageController@index');
   

Route::get('images-upload', 'imagesuploadController@imagesUpload');



Route::post('images-upload', 'imagesuploadController@imagesUploadPost')->name('images.upload');

Route::post('images-product_adtional_info_sizes', 'imagesuploadController@product_adtional_info_sizes')->name('images.product_adtional_info_sizes');




Route::post('size-upload', 'imagesuploadController@imagesUploadPost')->name('size.upload');
    



Route::get('/shopPage_LowtoHigh', 'shopPageController@shopPage_LowtoHigh')->name('shop.shopPage_LowtoHigh');

Route::get('/shopPage_HightoLow', 'shopPageController@shopPage_HightoLow')->name('shop.shopPage_HightoLow');


Route::get('/Category_LowtoHigh/{id}', 'shopPageController@Category_LowtoHigh')->name('shop.Category_LowtoHigh');

Route::get('/Category_HightoLow/{id}', 'shopPageController@Category_HightoLow')->name('shop.Category_HightoLow');


Route::get('barcode', 'HomeController@barcode');
 
    
use App\User;
use App\Http\Resources\UserCollection;

 

      Route::resource('API', 'API');
      // Route::delete('API/{id}','API@destroy');

   
          // route for processing payment
   //Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
     
   Route::get('Managementchat', 'Managementchatcontroller@index');
 
 
Route::get('message/{id}', 'Managementchatcontroller@getMessage')->name('message');
Route::post('message', 'Managementchatcontroller@sendMessage');


   

               Route::post('/Sendcontact ','contactforentcontrller@Sendcontact');
 

 
Route::get('/paytabs_payment', function () {
    $pt = Paytabs::getInstance("mohamedchi2013@gmail.com", "Jd3EHT2W0fKmv8DHDB6vzme4PeZKWFOFSRkAKmxLCh88qLQ3mWyVjN081ZSXFHDxzY8kkF6XXe5n0WrnSZjbNjkPjcNYUqvtoDOJ");
  $result = $pt->create_pay_page(array(
    "merchant_email" => "mohamedchi2013@gmail.com",
    'secret_key' => "Jd3EHT2W0fKmv8DHDB6vzme4PeZKWFOFSRkAKmxLCh88qLQ3mWyVjN081ZSXFHDxzY8kkF6XXe5n0WrnSZjbNjkPjcNYUqvtoDOJ",
    'title' => "John Doe",
    'cc_first_name' => "John",
    'cc_last_name' => "Doe",
    'email' => "customer@email.com",
    'cc_phone_number' => "973",
    'phone_number' => "33333333",
    'billing_address' => "Juffair, Manama, Bahrain",
    'city' => "Manama",
    'state' => "Capital",
    'postal_code' => "97300",
    'country' => "BHR",
    'address_shipping' => "Juffair, Manama, Bahrain",
    'city_shipping' => "Manama",
    'state_shipping' => "Capital",
    'postal_code_shipping' => "97300",
    'country_shipping' => "BHR",
    "products_per_title"=> "Mobile Phone",
    'currency' => "BHD",
    "unit_price"=> "10",
    'quantity' => "1",
    'other_charges' => "0",
    'amount' => "10.00",
    'discount'=>"0",
    "msg_lang" => "english",
    "reference_no" => "1231231",
    "site_url" => "http://localhost/dashboard/Venus/public/",
    'return_url' => "https://www.mystore.com/paytabs_api/result.php",
    "cms_with_version" => "API USING PHP"
  ));
    
      if($result->response_code == 4012){
      return redirect($result->payment_url);
        }
        return $result->result;
});


Route::post('/paytabs_response', function(Request $request){
    $pt = Paytabs::getInstance("mohamedchi2013@gmail.com", "Jd3EHT2W0fKmv8DHDB6vzme4PeZKWFOFSRkAKmxLCh88qLQ3mWyVjN081ZSXFHDxzY8kkF6XXe5n0WrnSZjbNjkPjcNYUqvtoDOJ");
    $result = $pt->verify_payment($request->payment_reference);
    if($result->response_code == 100){
        return 'Payment Success';
    }
    return $result->result;
});


 
 
  Route::get('language/{lang}',function($lang){
              session()->put('lang',$lang);
        \App::setLocale($lang);
        return redirect()->back();
    });

  Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    return 'Application cache cleared';
});

Route::get('/Storage-Linked', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return 'Storage Linked';
});


 




  




 