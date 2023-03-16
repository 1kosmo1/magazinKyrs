<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }



    public function create(){
        return view('admin.category.create');
    }

    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(Category $category){
        $data = request()->validate([
            'name' => 'string',
        ]);

        $category->update($data);
        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category){
        return view('admin.category.show',compact('category'));
    }

    public function store(){
        $data = request()->validate([
           'name' => 'string',
        ]);

        Category::create($data);
        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
