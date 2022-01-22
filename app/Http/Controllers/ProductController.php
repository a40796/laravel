<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = $this->getProducts();
        return view('product.index',['products' => $products]);
          
    }

    public function create()
    {
        // echo '123';
        return view('product.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('products.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('products.index');
    }

    function show($id ,Request $request){

        $products = $this->getProducts();
        $index = $id - 1;
        if($index < 0 || $index >= count($products)){
              // 404 not found
              abort(404);         
        }else{
             //show page
             $product = $products[$index];
             return view('product.show',['product' => $product]);
          
        }
    }

    public function edit($id)
    {
        $products = $this->getProducts();
        $index = $id - 1;
        if($index < 0 || $index >= count($products)){
              // 404 not found
              abort(404);         
        }else{
             //show page
             $product = $products[$index];

             return view('product.edit',['product' => $product]);
          
        }    
    }

    public function destroy($id)
    {
        return redirect()->route('products.index');
    }

    private function getProducts(){
        $products = [
            [
                'url' => asset('images/orange.jpeg'),
                'id' => 1,
                'name' => 'apple',
                'price' => 200
            ],
            [
                'url' => asset('images/apple.jpeg'),
                'id' => 2,
                'name' => 'orange',
                'price' => 150
            ],
        ];
        return $products;
    }
}
