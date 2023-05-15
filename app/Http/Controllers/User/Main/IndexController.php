<?php

namespace App\Http\Controllers\User\Main;

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

        $role = $user->userInfo->role;
        $level = $user->userInfo->level;
        $courses = Course::all();

        view()->share('role', $role);
        view()->share('level', $level);
        view()->share('courses', $courses);

        return view('user.profile.index', compact('role', 'courses', 'level'));
    }
}
