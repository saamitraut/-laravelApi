<?php  

namespace App;   

use Illuminate\Database\Eloquent\Model;   

class Product extends Model

{
    //  The attributes that are mass assignable.
    protected $fillable = [

        'name', 'detail'

    ];
}