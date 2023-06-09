<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];


    public function category(): BelongsTo
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }

    public function marker(): BelongsTo
    {
        return $this->belongsTo(Marker::class,'marker_id','id');
    }

    public function properties():HasMany
    {
        return $this->hasMany(Property::class,'product_id','id');
    }
}
