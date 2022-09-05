<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Service;
use App\Models\Zone;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $data = [
            'Services' => Service::all(),
            'Car_Types' => CarType::all(),
            'Zones' => Zone::all()
        ];
        return response($data, 201, ['Accept' => 'application/json']);
    }
    public function reserve(Request $request)
    {
        $orders = $request->collect()->each(function ($order) {
            $service = Service::where('libelle', $order['service'])->get()->value('libelle');
            $cartype = CarType::where('type', $order['car'])->get()->value('type');
            $zone = $order['adresseC'];
            // if ($zone==='null') {
            //     $zone=$order['zone']
            // }
            $ids = [
                'service' => $service,
                'car' => $cartype,
                'adresseC' => $zone
            ];
            $order_info = Order::create([
                'FullName' => $order['nameC'],
                'phoneNumber' => $order['phoneC'],
                'Service' => $ids['service'],
                'Date' => $order['date'],
                'Cartype' => $ids['car'],
                'Zone' => $ids['adresseC'],
                'Time' => $order['time'],
                'Prix' => $order['prixTotal']
            ]);
        });
        return response($orders, 200, ['Accept' => 'application/json']);
    }
    public function comment(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $comment = Comment::create([
            'name' => $attr['name'],
            'email' => $attr['email'],
            'comment' => $attr['message']
        ]);
        return response($comment, 201, ['Accept' => 'application/json']);
    }
    public function edit_order(Request $request, int $id)
    {
        Order::where('id', $id)->update([
            'status' => $request->input('status')
        ]);
        return response('order updated', 201)->withHeaders([
            ['Accept' => 'application/json']
        ]);
    }
}
// wrini fin w93at lik lerreur
