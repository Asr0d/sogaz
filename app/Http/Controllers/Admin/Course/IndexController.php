<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        $role = $user->userInfo->role ?? null;
        view()->share('role', $role);
        view()->share('courses', $courses);

        return view('admin.course.index', compact('courses','role'));
    }
}
