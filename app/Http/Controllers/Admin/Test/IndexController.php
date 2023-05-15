<?php

namespace App\Http\Controllers\Admin\test;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Test;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tests = Test::all();
        $courses = Course::all();

        $role = $user->userInfo->role ?? null;

        view()->share('role', $role);
        view()->share('courses', $courses);

        return view('admin.test.index', compact('categories', 'tests', 'role', 'courses'));
    }
}
