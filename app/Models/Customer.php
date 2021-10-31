<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, UuidTrait, SoftDeletes;

    /**
     * @inheritdoc
     */
    public $incrementing = false;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'name',
        'tax_number',
        'birth_date',
    ];

    /**
     * @inheritdoc
     */
    protected $casts = [
        'id' => 'string',
        'tax_number' => 'string',
        'birth_date' => 'date:Y-m-d',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];
}
