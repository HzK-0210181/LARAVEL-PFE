<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment()
    {
        $comments=Comment::all();
        return response($comments,200)->withHeaders([
            'Accept'=>'application/json'
        ]);
    }
    public function delete_comment(Request $request)
    {
        $id=$request->input('id');
        Comment::destroy($id);
        return response('it\'s been deleted ',200)->withHeaders([
            'Accept'=>'application/json'
        ]);
    }
}
