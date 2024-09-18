<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'origin', 
    ];

    public function productValues()
    {
        return $this->hasMany(ProductValue::class);
    }
}
