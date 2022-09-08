<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return response($services, 200)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function add_service(Request $request)
    {
        Service::create([
            'libelle' => $request->input('Libelle'),
            'description' => $request->input('Description'),
            'text' => $request->input('Text'),
            'prix' => $request->input('Prix')
        ]);
        return response('it has been created', 203)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
    public function update_service(Request $request)
    {
        $id = $request->input('id');
        Service::where('id', $id)->update([
            'libelle' => $request->input('Libelle'),
            'description' => $request->input('Description'),
            'text' => $request->input('Text'),
            'prix' => $request->input('Prix')
        ]);
        return response('it has been updated', 200, ['Accept' => 'application/json']);
    }

    public function delete_service(Request $request)
    {
        $id = $request->input('id');
        Service::destroy($id);
        return response('it\'s been deleted', 201)->withHeaders([
            'Accept' => 'application/json'
        ]);
    }
}
