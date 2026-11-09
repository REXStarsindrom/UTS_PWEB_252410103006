<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // form login
    public function showLogin()
    {
        return view('login');
    }

    //login (simpan username di pagenya ajah)
    public function processLogin(Request $request)
    {
        $request->validate(['username' => 'required|string|max:255']);
        $request->session()->put('username', $request->input('username'));
        return redirect()->route('dashboard');
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    // Profile
    public function profile(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('profile', compact('username'));
    }

    // Pengelolaan
    public function pengelolaan()
    {
        $menu = [
            ['name' => 'Espresso',   'price' => 20000],
            ['name' => 'Americano',  'price' => 18000],
            ['name' => 'Cappuccino', 'price' => 25000],
            ['name' => 'Latte',      'price' => 24000],
            ['name' => 'Mocha',      'price' => 26000],
            ['name' => 'Caramel Macchiato', 'price' => 28000],
            ['name' => 'Cold Brew',         'price' => 22000],
            ['name' => 'Affogato',          'price' => 27000],
            ['name' => 'Matcha Latte',      'price' => 25000],
            ['name' => 'Kopitiam',      'price' => 21000],
        ];
        return view('pengelolaan', compact('menu'));
    }
}