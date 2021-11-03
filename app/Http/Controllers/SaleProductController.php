<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleProductRequest;
use App\Models\Sale;
use App\Models\SaleProduct;

class SaleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param SaleProductRequest $request
     * @param Sale $sale
     *
     * @return [type]
     */
    public function index(SaleProductRequest $request, Sale $sale)
    {
        return $sale->sale_products()
            ->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SaleProductRequest $request
     * @param Sale $sale
     *
     * @return [type]
     */
    public function store(SaleProductRequest $request, Sale $sale)
    {
        return $sale->sale_products()
            ->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param SaleProductRequest $request
     * @param Sale $sale
     * @param SaleProduct $product
     *
     * @return [type]
     */
    public function show(SaleProductRequest $request, Sale $sale, SaleProduct $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SaleProductRequest $request
     * @param Sale $sale
     * @param SaleProduct $product
     *
     * @return [type]
     */
    public function update(SaleProductRequest $request, Sale $sale, SaleProduct $product)
    {
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SaleProductRequest $request
     * @param Sale $sale
     * @param SaleProduct $product
     *
     * @return [type]
     */
    public function destroy(SaleProductRequest $request, Sale $sale, SaleProduct $product)
    {
        $product->delete();
        return response()
            ->noContent();
    }
}
