<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   
    // class property - user model
    protected $user_model;
    protected $response;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');      
        $this->user_model = new User(); // user model
        $this->response = response();   // response object
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($user = null)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // call model to create users
       if (isset($validatedData)) $this->user_model->createUser($validatedData); 
       else $this->response()->json(['error' => "User object is empty"], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
