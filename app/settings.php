<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
	protected $table='settings';
    protected $fillable =[

					"namear",
					"nameaen",
					"email",
					"siteflag",
					'siteflag_ar',
					"sitesymol",
					"sitesdiscreption",
					"sitemeta",
					"language",
					"status",
					"maintenance",
					  'facebooklink',
'twitterlink',
'gmaillink',
'linkedinlink',
'instgramlink',
'maplink',
					'phone',
					'address_ar',
					'address_en',
					'profile',
					 ];

 
 
 
}
