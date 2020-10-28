<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    protected function index(){

        return view('cabinet.index', [
            'user' => auth()->user()
        ]);
    }

    protected function list(){

        return view('cabinet.list', [
            'users' => User::paginate(3)
        ]);
    }

}
