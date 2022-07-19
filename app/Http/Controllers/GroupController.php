<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function add_group(Request $request)
    {
        $id = $request->input('zone_id');
        Group::create([
            'zone_id' => $id
        ]);
        return response('group added successfully', 200, [
            'Accept' => 'application/json'
        ]);
    }
    public function delete_group(Request $request)
    {
        $id = $request->input('zone_id');
        Group::destroy($id);
        return response('group deleted successfully', 200, [
            'Accept' => 'application/json'
        ]);
    }
}
    