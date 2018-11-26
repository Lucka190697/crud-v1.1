<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use App\services\UploadServices;

use Illuminate\Support\Facades\Storage;


use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products/index', compact('products'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(
        ProductRequest $request,
        ProductRepository $repository,
        UploadServices $picture
    )
    {
        $createPicture = $picture->createPicture($request);

        $product = $repository->createProduct($createPicture);

        $product->save();
        
        return redirect()->route('products');
    }

    public function edit(ProductRepository $repository, $id)
    {
        $products = $repository->find($id);

        return view('products/edit', compact('products'));
    }

    public function update(
        ProductRequest $request,
        ProductRepository $repository, $id,
        UploadServices $picture
    )
    {
        $product = $repository->find($id);
        $updatePicture = $picture->updatePicture($id, $request);
        $product = $repository->updateProduct($updatePicture, $id);

        return redirect()->route('products');
    }

    public function show(ProductRepository $repository, $id)
    {
        $product = $repository->find($id);
        $product->profile = asset('thumbnail/'. $product->profile);

        $product = $repository->find($id);
        $product = $repository->find($id);
        $products = $repository->find($id);

        return view('products/show', compact('products'));
    }

    public function destroy(ProductRepository $repository, $id)
    {
        $repository->delete($id);
        
        return redirect()->route('products');
    }    
}
