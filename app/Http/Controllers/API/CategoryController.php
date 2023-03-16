<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return $category;
    }

    public function store(Request $request)
    {
        $fileName = time() . '.png';
    $validated = $request->validate([
        'name' => 'required|max:25',
        'photo' => 'image|mimes:jpeg,png,jpg|max:5000',
    ]);
    if($request->hasFile('photo')){
        $request->photo->move(public_path('category-photos'), $fileName);
    }
$input = $request->all();
    $category = Category::create([
        'name' => $request->name,
        'photo' => $fileName
    ]);
        return response()->json([
   new CategoryResource($category),
            'message' => 'Succes'
]);
    }
        public function destroy(category $category)
    {
        $category->delete();

                return response()->json([
   'message' => 'Succes'
]);
    }
        public function catproducts($id)
    {
        $products = Product::where(['category_id' => $id])->get();
        return $products;
    }
}
