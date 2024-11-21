<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StaffRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-staff');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:staff',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $staff = Staff::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $staff->assignRole('staff');

    auth()->login($staff);

    return redirect()->route('staff.dashboard');
}
}
