<?php

namespace App\Observers;

use App\Models\Sale;

class SaleObserver
{
    /**
     * Handle the Sale "created" event.
     *
     * @param  \App\Models\Sale  $sale
     * @return void
     */
    public function creating(Sale $sale)
    {
        $sale->sale_number = $sale->max('sale_number') + 1;
    }
}
