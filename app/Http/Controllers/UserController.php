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
        
        return view('task.index')
            ->with('task', $user->tasks)
            ->with('title', $user->name);
            
    }
}
