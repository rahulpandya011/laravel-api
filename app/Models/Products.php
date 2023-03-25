<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $guarded = ['deleted_at'];

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 2;

    public const PAGINATION_LENGTH = 3;

    protected static function booted()
    {
        static::creating(function ($q) {
            $q->created_by = auth()->user()->user_id ?? 0;
            $q->updated_by = auth()->user()->user_id ?? 0;
        });

        static::updating(function ($q) {
            $q->updated_by = auth()->user()->user_id ?? 0;
        });
    }

    public function product_variations()
    {
        return $this->hasMany(ProductVariations::class, 'product_id', 'product_id');
    }
}
