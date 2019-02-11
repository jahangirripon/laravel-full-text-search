<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function fullTextSearch(Request $request)
    {
        $user = User::search('d')->get();

        return response()->json($user);
    }
}
