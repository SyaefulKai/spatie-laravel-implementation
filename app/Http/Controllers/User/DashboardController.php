<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index(Request $request){
        // Getting user role
        $roles = Auth::user()->getRoleNames();
        // Getting app activity
        $activities = Activity::all();

        // Checking if the user has any of these roles
        if(Auth::user()->hasRole(['user'])) {
            return view('dashboard', ['role' => $roles]);
        }

        // If someone logged in as an admin, send our app activity
        return view('dashboard', ['role' => $roles, 'activity' => $activities]);

    }
}
