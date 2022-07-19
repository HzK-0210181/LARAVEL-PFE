<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use App\Models\Client;
use App\Models\Order;
use App\Models\Service;
use App\Models\Zone;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function reserve(Request $request)
    {
        $orders = $request->collect()->each(function ($order) {
            $client = Client::create([
                'name' => $order['nameClient'],
                'telephone' => $order['phoneNumber']
            ]);
            $service = Service::where('libelle', $order['Service'])->get('id')->value('id');
            $cartype = CarType::where('type', $order['carType'])->get('id')->value('id');
            $ids = [
                'client' => $client->id,
                'service' => $service,
                'cartype' => $cartype,
            ];
            $order_info = Order::create([
                'client_id' => $ids['client'],
                'service_id' => $ids['service'],
                'Date' => $order['date'],
                'car_type_id' => $ids['cartype'],
            ]);
        });
        return response('new order added', 200, ['Accept' => 'application/json']);
    }
}
