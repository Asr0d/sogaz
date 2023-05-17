<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $role = $user->userInfo->role ?? null;
        $level = $user->userInfo->level;
        $courses = Course::all();

        view()->share('role', $role);
        view()->share('level', $level);
        view()->share('courses', $courses);

        return view('user.profile.index', compact('role', 'courses', 'level'));
    }
}
