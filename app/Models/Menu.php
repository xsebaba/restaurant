<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable =['name_item', 'ingredients', 'price', 'imagepath', 'type_id'];

    public function type(){
        return $this->belongsTo(Type::class, 'type_id');
      }
  
}
