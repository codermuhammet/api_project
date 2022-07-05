<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'ilceler';

    public function city(){
        return $this->hasOne(City::class,'id','il');
    }
}
