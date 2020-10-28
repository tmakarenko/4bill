<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function deactivate(User $user){
        if($user->id != auth()->user()->id) {
            $user->deactivate();
            $user->save();
        }
        return back();
    }
}
