<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primarykey = 'id';
    protected $fillable = ['item_name', 'item_price', 'quantity', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
