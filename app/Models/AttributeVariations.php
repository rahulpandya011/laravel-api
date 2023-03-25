<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeVariations extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'attributes_variation';
    protected $primaryKey = 'attributes_variation_id';

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

    public function attribute()
    {
        return $this->belongsTo(
            Attributes::class,
            'attribute_id',
            'attribute_id'
        );
    }
}
