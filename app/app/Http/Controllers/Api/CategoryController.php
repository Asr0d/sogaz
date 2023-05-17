<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        if($categories-> count() > 0){
            return response()->json([
                'status' => 200,
                'categories' => $categories
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'categories' => 'No data'
            ], 404);

        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $category = Category::create([
            'title' => $validatedData['title']
        ]);

        if ($category) {
            return response()->json([
                'status' => 200,
                'message' => 'Good'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'No good'
            ], 500);
        }
    }
}
