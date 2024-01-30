<?php

namespace App\Http\Controllers;
use App\Models\NewProduct;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //product view
    public function ProductView () {
        $products = NewProduct::all();
        return view('product.product', ['products' => $products]);
    }


    //product add new
    public function NewProductView () {
        return view('product.addProduct');
    }


     //product add new
    public function ViewProductView ( $id ) {
        $product = NewProduct::find($id);

        // Check if the product is found
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // You can now use the $product variable in your view or perform other actions
        return view('product.viewProduct', ['id' => $id, 'product' => $product]);

    }


    //Create
    public function NewProduct (Request $request) {

       // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
        ]);

        // Create a new product using the Product model
        $product = NewProduct::create($validatedData);

        return redirect()->route('ProductView')->with('success', 'Product created successfully');

    }


    //delete
    public function deleteProduct ($id) {

        $product = NewProduct::find($id);
        // Check if the product is found
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        // Delete the product
        $product->delete();
    
        // Redirect to a page or route
        return redirect()->route('ProductView')->with('success', 'Product deleted successfully');
    }

    //update
    public function updateProduct (Request $request) {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
        ]);

        $product = NewProduct::find($request->id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Update the product
        $product->update($validatedData);

        return redirect()->route('ProductView')->with('success', 'Product updated successfully');

    }


}
