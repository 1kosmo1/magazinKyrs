<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $guarded = [];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class,'property_id','id');
    }
}
