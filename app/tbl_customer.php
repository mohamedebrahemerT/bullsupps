<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
 	protected $table='tbl_customers';
    protected $fillable = [
				"CustomerName",
				"Address",
				"City",
				"PostalCode",
				"Country",
				"CustomerID",



    ];
}

