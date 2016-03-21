<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'content',
        'title',
        'header_image',
        'tags',
        'permalink',
        'votes',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function by_date()
    {
        return $this->orderBy('created_at','asc');
    }

    public function by_votes()
    {
        return $this->orderBy('votes','desc')->paginate('5');
    }
}
