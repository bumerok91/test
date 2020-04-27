<?php


namespace App\Http\Controllers;


use App\User;
use function Psy\debug;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()->whereIn('id', [1, 2, 5])
            ->whereHas('posts', function ($query) {
                $query->where('name', 'like', '%fun%');
            })->get();

        return view('user', ['users' => $users]);
    }
}
