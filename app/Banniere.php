<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banniere extends Model
{
    //
    protected $table = 'bannieres';

    protected $keyType = 'string';

    protected $primaryKey = 'slug';
    
}
