<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use App\Models\Marker;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }



    public function create(){
        $categories = Category::all();
        $markers = Marker::all();
        return view('admin.product.create',compact(['categories','markers']));
    }

    public function edit(Product $product){
        $categories = Category::all();
        $markers = Marker::all();
        $properties = Property::all();
        return view('admin.product.edit',compact(['product','categories','markers','properties']));
    }

    public function show(Product $product){
        return view('admin.product.show',compact('product'));
    }

    public function update(Product $product){
        $data = request()->validate([
            'name' => 'string',
            'price' => 'string',
            'image' => 'string',
            'description' => 'string',
            'category_id' => 'integer',
            'marker_id'=>'integer'
        ]);

        $product->update($data);

        $titles = json_decode(request()->input('titles'));


        $text = json_decode(request()->input('text'));

        for($i = 0; $i < count($titles); $i++){

            Property::updateOrCreate(
                [
                    'title' => $titles[$i],
                    'product_id' => $product->id
                ],
                [
                    'text' => $text[$i],
                    'product_id' => $product->id
                ]
            );
        }

        return redirect()->route('admin.products.show',$product->id);
    }

    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'price' => 'decimal:2',
            'image' => 'string',
            'description'=>'string',
            'category_id' => 'integer',
            'marker_id' => 'integer'
        ]);

        $product = Product::create($data);
        $product->save();

        $titles= request()->input('titles');
        $text= request()->input('text');



        for($i = 0; $i < count($titles); $i++){
            Property::create([
               'title' => $titles[$i],
               'text' => $text[$i],
               'product_id' => $product->id
            ])->save();
        }

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product){
        $product->properties()->delete();
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
