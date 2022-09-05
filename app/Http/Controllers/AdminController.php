<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Client;
use App\Models\Group;
use App\Models\Order;
use App\Models\User;
use App\Models\Zone;
=======
use App\Models\Comment;
use App\Models\Order;
use App\Models\User;
use App\Models\Zone;
use App\Models\CarType;
use App\Models\Service;
>>>>>>> 2c1d119 (laravel backend api)
use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $response = [
            'Users' => User::where('role', !'null')->get(),
            'Clients' => Client::all(),
            'Zone' => Zone::all(),
            'Orders' => Order::orderBy('zone_id')->get(),
            'Groups' => Group::all()
=======
    public function index(Request $request)
    {
        $id = $request->input('id');
        $response = [
            // 'Users' => User::where('role', !'null')->get(),
            [
                "LoggerInfo" => User::where('id', $id)->get(),
            ],
            [
                'Users' => User::where('role', !'null')->get(),
                'Zone' => Zone::all(),
                'Services' => Service::all(),
                'Car_Types' => CarType::all(),
                'Orders' => Order::all(),
                'Comments' => Comment::all()
            ]
>>>>>>> 2c1d119 (laravel backend api)
        ];
        return response($response, 201)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }
}
