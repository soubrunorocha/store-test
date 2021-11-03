<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBatch extends Model
{
    use HasFactory, UuidTrait, SoftDeletes;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'custom_id',
        'manufactured_at',
        'batch_quantity',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'product_id' => 'string',
        'custom_id' => 'string',
        'manufactured_at' => 'datetime:Y-m-d H:i:s',
        'batch_quantity' => 'integer',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    /**
     * Filter to bring batches for one product
     *
     * @param string $productId
     *
     * @return Builder
     */
    public function scopeProduct(Builder $query, string $productId) : Builder
    {
        return $query->where('product_id', $productId);
    }
}
