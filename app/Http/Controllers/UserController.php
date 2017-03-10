<?php

namespace App\Http\Controllers;

use App\Core\App;
use App\Core\Dispatcher\Request;
use App\Core\Authentication\Auth;
use Carbon\Carbon;

/**
 * Class UserController
 */
class UserController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view("users.index", compact('users'));
    }

    /**
     * Show Login View
     */
    public function login()
    {
        return view('users.login');
    }

    public function auth()
    {
        if (!Request::has('username') || !Request::has('password')) {
            $errors = "You Should Enter Username and Password.";

            return view('users.login', compact('errors'));
        }

        $username = Request::get('username');
        $password = Request::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('users');
        }

        $errors = "This cridentials is invalid. Your username and password incorrect";

        return view('users.login', compact('errors'));
    }

    /**
     * Show user register view
     */
    public function register()
    {
        return view('users.register');
    }

    /**
     * Store the User in Database
     */
    public function store()
    {
        if (
            !Request::has('user_full_name')
            || !Request::has('user_email')
        ) {
            $errors = "You Should Enter Your FullName Or Email.";

            return view('users.register', compact('errors'));
        }

        App::get('database')->insert('users', [
            'user_full_name' => Request::get('user_full_name'),
            'user_email'     => Request::get('user_email'),
            'created_at'     => Carbon::now()
        ]);

        return redirect('users');
    }

    public function delete()
    {
        if (!Request::has('id')) {
            return redirect('users');
        }

        App::get('database')->deleteById('users', 'id', Request::get('id'));

        return redirect('users');
    }
}