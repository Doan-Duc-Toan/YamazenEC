<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Cat::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Cat::class, 'parent_id');
    }
}
