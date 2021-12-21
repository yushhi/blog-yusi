<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->simplePaginate(5);
        return view('admin.dashboard', compact('users'));
    }
}
