<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariations extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_variation';
    protected $primaryKey = 'product_variation_id';

    protected $guarded = ['deleted_at'];

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

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'product_id');
    }

    public function attribute_variation()
    {
        return $this->hasOne(
            AttributeVariations::class,
            'attributes_variation_id',
            'attributes_variation_id'
        );
    }
}
