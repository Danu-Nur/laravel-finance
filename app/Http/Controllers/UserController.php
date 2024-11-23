<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('User');
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('User');
        return view('admin.user.addOrEdit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
        ]);

        User::create($validate);
        return redirect()->route('user.index')->with('success', 'Successfully create data');
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
    public function edit(User $user)
    {
        $this->setTitle('User');
        return view('admin.user.addOrEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
        ]);

        $user->update($validate);
        return redirect()->route('user.index')->with('success', 'Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Successfully delete data');
    }
}
