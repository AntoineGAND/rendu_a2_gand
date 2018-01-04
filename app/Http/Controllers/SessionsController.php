<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))){

            return back()->withErrors([
                'message' => 'Please check your credentials ans try again.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
