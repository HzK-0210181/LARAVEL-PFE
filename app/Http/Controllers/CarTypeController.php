<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function index()
    {
        $cartype = Cartype::all();
        return response($cartype, 200)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function add_cartype(Request $request)
    {
        Cartype::create([
            'type' => $request->input('type'),
            'margin' => $request->input('margin')
        ]);
        return response('it has been added', 201)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function update_cartype(Request $request)
    {
        $id = $request->input('id');
        CarType::where('id', $id)->update([
            'type' => $request->input('type'),
            'margin' => $request->input('margin')
        ]);
        return response('it has been updated', 200, ['Accept' => 'application/json']);
    }
    public function delete_cartype(Request $request)
    {
        $id = $request->input('id');
        Cartype::destroy($id);
        return response('it\'s been deleted', 201)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
}
