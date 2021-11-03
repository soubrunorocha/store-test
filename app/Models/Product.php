<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
        'name',
        'custom_id',
        'batch_number',
        'color',
        'description',
        'value',
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
        'custom_id' => 'string',
        'name' => 'string',
        'batch_number' => 'integer',
        'color' => 'string',
        'description' => 'string',
        'value' => 'float',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    /**
     * Get all of the batches for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function batches(): HasMany
    {
        return $this->hasMany(ProductBatch::class);
    }
}
