<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Team;
class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'team_id'];

    public function team()
    {
    return $this->belongsTo(Team::class);
    }

}

