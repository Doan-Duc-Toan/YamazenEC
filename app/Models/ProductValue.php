<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductValue extends Model
{
    use HasFactory;
    protected $fillable = [
        'field_id', 
        'product_id', 
        'value', 
        'count', 
        'price',
    ];

    public function productField()
    {
        return $this->belongsTo(ProductField::class, 'field_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
