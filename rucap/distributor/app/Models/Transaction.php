<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'table_distributor_transactions';
    protected $fillable = [
        'productid','clientid','content','amount',
    ];

  
}
