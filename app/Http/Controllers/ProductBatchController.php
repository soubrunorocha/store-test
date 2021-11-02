<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductBatchRequest;
use App\Models\Product;
use App\Models\ProductBatch;

class ProductBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductBatchRequest $request, Product $product)
    {
        return $product->batches()
            ->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductBatchRequest $request, Product $product)
    {
        return $product->batches()
            ->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBatchRequest $request, Product $product, ProductBatch $batch)
    {
        return $batch;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(ProductBatchRequest $request, Product $product, ProductBatch $batch)
    {
        $batch->update($request->all());
        return $batch;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductBatchRequest $request, Product $product, ProductBatch $batch)
    {
        $batch->delete();
        return response()
            ->noContent();
    }
}
