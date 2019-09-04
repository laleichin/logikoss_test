<?php

namespace App\Http\Controllers;
use Datatables;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = User::latest()->paginate(5);
        return view('users', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        return Datatables::of(User::query())->make(true);
        
    }
    public function destroy()
    {
        $data = User::latest()->paginate(5);
        return view('users', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        return Datatables::of(User::query())->make(true);
        
    }
    public function show()
    {
        $data = User::latest()->paginate(5);
        return view('users', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        return Datatables::of(User::query())->make(true);
        
    }
    public function edit()
    {
        $data = User::latest()->paginate(5);
        return view('users', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        return Datatables::of(User::query())->make(true);
        
    }
    public function create()
    {
        return view('displaydata');
    }
}
