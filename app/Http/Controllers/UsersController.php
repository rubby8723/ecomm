<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\User;
use App\Events\UserNotification;

class UsersController extends Controller
{
    public function index()
    {
        return "gdg";
        $users = User::all();
        event(new UserNotification($users));
    }

}
