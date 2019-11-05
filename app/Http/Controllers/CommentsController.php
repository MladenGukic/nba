<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Team;
use App\User;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, $teamId)
    {
        $team = Team::find($teamId);
        
        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'team_id' => $team->id
        ]);

        return redirect()->route('teams.show', ['id' => $teamId]);
    }
}
