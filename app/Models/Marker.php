<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    use HasFactory;
    protected $table = 'markers';
    protected $guarded = [];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'product_id','id');
    }
}
