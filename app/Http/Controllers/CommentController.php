<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Team $team, CreateCommentRequest $request)
    {

        $data = $request->validated();


        $team->createComment($data['content']);

        return back();
    }
}
