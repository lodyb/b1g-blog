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

    public static function by_date()
    {
        return Post::orderBy('created_at','desc')->paginate('10');
    }

    public static function by_votes()
    {
        return Post::orderBy('votes','desc')->paginate('10');
    }
}
