<?php

namespace App\Http\Controllers\Admin\Faq;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $role = $user->userInfo->role ?? null;
        view()->share('role', $role);
        $courses = Course::all();
        view()->share('courses', $courses);

        return view('admin.faq.index', compact('role', 'courses'));
    }
}
