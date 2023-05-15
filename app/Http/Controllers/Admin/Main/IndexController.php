<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        if (!$user || !$user->userInfo) {
            return redirect()->route('login');
        }

        $role = $user->userInfo->role ?? null;
        $courses = Course::all();

        view()->share('role', $role);
        view()->share('courses', $courses);

        return view('admin.main.index', compact('role', 'courses'));
    }
}
