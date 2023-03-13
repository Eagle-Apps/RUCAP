<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaries extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'table_distributor_beneficiaries';

    protected $fillable = [
        'name','type',
    ];

  
}
