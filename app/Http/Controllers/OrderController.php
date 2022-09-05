<?php

namespace App\Http\Controllers;

use App\Models\CarType;
<<<<<<< HEAD
use App\Models\Client;
=======
use App\Models\Comment;
>>>>>>> 2c1d119 (laravel backend api)
use App\Models\Order;
use App\Models\Service;
use App\Models\Zone;
use Illuminate\Http\Request;

class OrderController extends Controller
{
<<<<<<< HEAD
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
=======
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
                'adresseC'=>$zone
            ];
            $order_info = Order::create([
                'FullName' => $order['nameC'],
                'phoneNumber' => $order['phoneC'],
                'Service' => $ids['service'],
                'Date' => $order['date'],
                'Cartype' => $ids['car'],
                'Zone' => $ids['adresseC'],
                'Time'=>$order['time'],
                'Prix'=>$order['prixTotal']
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
    public function edit_order(Request $request,int $id)
    {
        Order::where('id',$id)->update([
            'status'=>$request->input('status')
        ]);
        return response('order updated',201)->withHeaders([
            ['Accept' => 'application/json']
        ]);
    }
}
// wrini fin w93at lik lerreur
>>>>>>> 2c1d119 (laravel backend api)
