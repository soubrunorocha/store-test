<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Sale extends Model
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
        'customer_id',
        'seller_id',
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
        'sale_number' => 'integer',
        'customer_id' => 'string',
        'seller_id' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];

    /**
     * Get all of the products for the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sale_products(): HasMany
    {
        return $this->hasMany(SaleProduct::class);
    }

    /**
     * Format Get for report mode
     *
     * @param bool $reportMode
     *
     * @return array
     */
    public static function handleGet(bool $reportMode) : array
    {
        $totalValueField = '*';
        if ($reportMode) {
            $totalValueField = DB::raw('(
                    SELECT
                        SUM(quantity*value)
                    FROM sale_products
                    WHERE sale_products.sale_id = sales.id
                    AND sale_products.deleted_at IS NULL
                ) as value
            ');
        }

        return [
            '*',
            $totalValueField,
        ];
    }
}
