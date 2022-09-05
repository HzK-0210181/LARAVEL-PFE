<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
<<<<<<< HEAD
    public function assign_zone(Request $request)
    {
        $id = $request->input('id');
        $check_null = Order::where('id', $id)->get()->value('zone_id');
        if ($check_null != null) {
            return 'this order was assigned to a group , please select an unassigned order !';
        }
        $order = Order::find($id);
        $zone_id = $request->input('zone_id');
        $order->zone_id = $zone_id;
        $order->save();
        return response($order, 200)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
=======
    //hadik lfonction kat assigner zone l grp hna hiydnaha ok
>>>>>>> 2c1d119 (laravel backend api)
    public function adding_zone(Request $request)
    {
        $attr = $request->all(['name', 'region']);
        $zone = Zone::create([
            'name' => $attr['name'],
            'region' => $attr['region']
        ]);
        return 'it\'s adding a zone';
    }
    public function deleting_zone(Request $request)
    {
        $id = $request->input('id');
        Zone::destroy($id);
        return 'it\'s deleting a zone';
    }
}
