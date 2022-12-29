<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Meal{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $name;
    public $delivery;
    public $tel;
    public $payment;
    public $finalized;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++; 
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->totalQty++;
        $this->totalPrice += $item->price;
        $this->items[$id] = $storedItem;
    }
}



/* I am not using eloquent 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
}
*/