<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\SaleProduct;

class SaleProductObserver
{
    /**
     * Handle the SaleProduct "creating" event.
     *
     * @param  \App\Models\SaleProduct  $saleProduct
     * @return void
     */
    public function creating(SaleProduct $saleProduct)
    {
        $saleProduct->value = Product::find($saleProduct->product_id)->value;
    }
}
