<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
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
