<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model{

    
    protected $fillable = [
        'cart',
        'delivery',
        'tel',
        'name',
        'payment',
        'finalized'
    ];


}



/* I am not using eloquent 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
}
*/