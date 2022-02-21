<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tasks;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user')
            ->with('title', $user->name)
            ->with('tasks', $user->tasks);
    }
}
