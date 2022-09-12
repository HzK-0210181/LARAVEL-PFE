<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->tokenCan('worker')) {
            return $user;
        }
    }

    public function add_user(Request $request)
    {
        $attr = $request->validate([
            'first_name' => ['bail', 'required', 'max:50'],
            'last_name' => ['bail', 'required', 'max:50'],
            'telephone' => ['bail', 'required', 'numeric'],
            'email' => ['bail', 'required', 'email'],
            'password' => ['bail', 'required',],
            'role' => ['bail', 'required',]
        ]);
        $user = User::create([
            'first_name' => $attr['first_name'],
            'last_name' => $attr['last_name'],
            'telephone' => $attr['telephone'],
            'email' => $attr['email'],
            'password' => bcrypt($attr['password']),
            'role' => $attr['role']
        ]);
        return response($user, 201)->withHeaders(['Accept' => 'application/json']);
    }
    public function edit_user(Request $request)
    {
        $id = $request->input('id');
        $attr = $request->validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'telephone' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => 'required',
        ]);
        User::where('id', $id)->update([
            'first_name' => $attr['first_name'],
            'last_name' => $attr['last_name'],
            'telephone' => $attr['telephone'],
            'email' => $attr['email'],
            'password' => bcrypt($attr['password']),
            'role' => $attr['role']
        ]);
        return response('it worked', 200)->withHeaders(['Accept' => 'application/json']);
    }
    public function delete_user(Request $request)
    {
        $id = $request->input('id');
        User::destroy($id);
        return response('deleted successfully', 201);
    }
    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }
}
