<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Worker;
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
    public function edit_worker(Request $request)
    {
        $id = $request->input('id');
        User::where('id', $id)->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'telephone' => $request->input('telephone'),
            'email' => $request->input('email'),
        ]);
        return response('it worked', 200)->withHeaders(['Accept' => 'application/json']);
    }
    public function delete_worker(Request $request)
    {
        $id = $request->input('id');
        User::destroy($id);
    }
    public function show_orders_by_worker(Request $request)
    {
        $id = $request->input('id');
        $zone = Worker::find($id)->group->zone_id;
        $orders = Order::where('zone_id', $zone)->get();
        return $orders;
    }
    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }
}
