<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'table_distributor_models';
    protected $fillable = [
        'model_name','charity','project','prospector','royalty','partner','investor',
    ];

  
}
