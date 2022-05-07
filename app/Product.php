<?php



namespace App;

 

use Illuminate\Database\Eloquent\Model;

  
class product extends Model

{
 

   protected $table    = 'productes';

   protected $fillable = [

			 "id",

			"title",

      "photo",

			"photo2",

      "title_name_ar",

      "title_name_en",

      "content_name_ar",

			"content_name_en",

      "department_id",

			"tag_id",

      

			"trad_id",

			"manuf_id",

			"color_id",

			"size_id",

			"currency_id",

			"price",

      'Wholesaleprice',

'WholesalepriceMinNum',

			"stock",

			"start_at",

			"end_at",

			"start_offer_at",

			"end_offer_at",

			"price_offer",

			"other_data",

			"weight",

			"weight_id",

			"status",

			"reason",

			"NewOrSaleOrNormal",

			'admin_id',

      'Merchantcode',

      'alymarketcode',

			 

'surfID',

'VideoExst',

'video',

'discriminationForhome',

'Tag_id',

'offer_precendage',

          'commistion',
          'vat',
          'vat_value',
          'productzoomphoto'





   ];

     public function department_name() {

        return $this->hasOne('App\Department', 'id', 'department_id');

    }




     public function filesss() {

      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','productes')->orderBy('id','desc');

    }

     public function productvariantgroup() {

      return $this->hasMany('App\Models\product_variant', 'product_id', 'id');

    }



    public function OtherDatasٍSiZes_R() 
    {

		return $this->hasMany('App\OtherDatasٍSiZes', 'product_id', 'id');

	}


      public function other_data_R() {

    return $this->hasMany('App\otherData', 'product_id', 'id');

  }

   public function productvariant() 
   {

    return $this->hasMany('App\Models\product_variant', 'product_id', 'id');

  }




  /////////////////////////////////////



     public function other_otherDataForSize_R()

        {

      return $this->hasMany('App\colorName_photoColor_size', 'product_id', 'id');

        }

///////////////////////////

	  public function trad_idd() {

        return $this->hasOne('App\TradeMark', 'id', 'trad_id');

    }
 public function BRAND() 
 {

        return $this->hasOne('App\TradeMark', 'id', 'trad_id');

    }



     public function Tag_iddd() {

        return $this->hasOne('App\tags', 'id', 'tag_id');

    }

   

    



      public function manuf_idd() {

        return $this->hasOne('App\Manufacturers', 'id', 'manuf_id');

    }







  public function color_idd() {

        return $this->hasOne('App\Color', 'id', 'color_id');

    }



  public function size_idd() {

        return $this->hasOne('App\sizes', 'id', 'size_id');

    }



  public function weight_idd() {

        return $this->hasOne('App\weight', 'id', 'weight_id');

    }


public function getPriceAttribute($price)
    {
          return  number_format($price , 0);
    }



    public function getPriceOfferAttribute($price_offer)
    {
          return  number_format($price_offer , 0);
    }


       public function presentPrice()

    {

        return 'L.E'.number_format($this->price / 100, 2);

    }



                    public function admin_idd() {

        return $this->hasOne('App\admin', 'id', 'admin_id');

                   }



                 public function department() 

                 {

        return $this->hasOne('App\Department', 'id', 'department_id')->take(4);

                  }



  public function categories()
    {
        return $this->belongsToMany('App\Department');
    }





    















    





}

