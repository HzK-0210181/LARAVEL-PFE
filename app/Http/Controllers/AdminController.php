<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Order;
use App\Models\User;
use App\Models\Zone;
use App\Models\CarType;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{

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
