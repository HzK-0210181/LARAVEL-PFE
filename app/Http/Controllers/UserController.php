<?php

namespace App\Http\Controllers;

use App\Mail\RegisteryMail;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $attr = $request->validate([
            'First_Name' => ['bail', 'required', 'alpha', 'min:5', 'max:25'],
            'Last_Name' => ['bail', 'required', 'alpha', 'min:3', 'max:25'],
            'Telephone' => ['bail', 'required', 'numeric'],
            'Email' => ['bail', 'required', 'email'],
            'Password' => ['required', 'min:8'],
        ]);
        $user = User::create([
            'first_name' => $attr['First_Name'],
            'last_name' => $attr['Last_Name'],
            'telephone' => $attr['Telephone'],
            'email' => $attr['Email'],
            'password' => bcrypt($attr['Password'])
        ]);
        $id_worker = $user->id;
        $corresponded_admin = User::where('role', 'admin')->get();

        Mail::to($corresponded_admin)->send(new RegisteryMail($attr, $id_worker));
        $response = [
            'First_Name' => $attr['First_Name'],
            'Last_Name' => $attr['Last_Name'],

            'Telephone' => $attr['Telephone'],
            'Email' => $attr['Email'],
            'Password' => bcrypt($attr['Password']),
            'id' => $id_worker
        ];
        return  response($response, 201)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function validated($id)
    {
        $id = (int)filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        User::where('id', $id)->update(['role' => 'worker']);
        Worker::create([
            'user_id' => $id
        ]);
        return response('he\'s added tp the database you might go check him in phpmyadmin', 201, ['Accept' => 'application/json']);
    }
    public function deleted($id)
    {
        $id = (int)filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        User::where('id', $id)->delete();

        return response('he\'s deleted in the database you might go check him in phpmyadmin', 201, ['Accept' => 'application/json']);
    }
    public function login(Request $request)
    {
        $attr = $request->validate([
            'Email' => ['required'],
            'Password' => ['required']
        ]);
        $user = User::where('email', $attr['Email'])->first();
        $response = [

            'Id' => $user->id,

            'Email' => $attr['Email'],
            'Password' => $attr['Password'],
            'role' => $user->role
        ];
        if (!$user || !Hash::check($attr['Password'], $user->password)) {
            return response([
                'Body' => 'The Email or Password isn\'t correct , please enter the right credentials'
            ], 401);
        }
        $token = $user->createToken('token', [$user->role])->plainTextToken;
        return response($response, 201)->withHeaders([
            'Accept' => 'application/json',
            'Access-Token' => $token,
            'Authorization' => 'Bearer ' . $token
        ]);
    }
}
