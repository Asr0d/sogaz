<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();

        if($company-> count() > 0){
            return response()->json([
                'status' => 200,
                'company' => $company
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'company' => 'No data'
            ], 404);

        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $category = Company::create([
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
