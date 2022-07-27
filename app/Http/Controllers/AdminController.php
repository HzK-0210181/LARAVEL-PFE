<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Group;
use App\Models\Order;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $response = [
            'Users' => User::where('role', !'null')->get(),
            'Clients' => Client::all(),
            'Zone' => Zone::all(),
            'Orders' => Order::orderBy('zone_id')->get(),
            'Groups' => Group::all()
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
