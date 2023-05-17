<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $role = $user->userInfo->role ?? null;
        view()->share('role', $role);
        $courses = Course::all();
        view()->share('courses', $courses);

        return view('admin.profile.index', compact('role', 'courses'));
    }
}
