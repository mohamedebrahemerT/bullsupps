<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
 	protected $table='tbl_customer';
    protected $fillable = [
				"CustomerName",
				"Address",
				"City",
				"PostalCode",
				"Country",
				"CustomerID",



    ];
}

