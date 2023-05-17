<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $test = Test::all();

        if($test-> count() > 0){
            return response()->json([
                'status' => 200,
                'test' => $test
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'test' => 'No data'
            ], 404);

        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'question_text' => 'required',
            'options' => 'required',
            'answer' => 'required',
        ]);

        $test = Test::create([
            'category_id' => $validatedData['category_id'],
            'question_text' => $validatedData['question_text'],
            'options' => $validatedData['options'],
            'answer' => $validatedData['answer'],
        ]);

        if ($test) {
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
