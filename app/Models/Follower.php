<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'follower_id',
    ];
    /**
     * Get the user that is followed.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the user that is following
     */
    public function follower()
    {
        return $this->belongsTo(User::class, 'follower_id');
    }

    /**
     * Get total of followers of an user
     * Answers to: How many users are following this user?
     */
    public static function getTotalFollowers($user_id)
    {
        return Follower::where('user_id', $user_id)->count();
    }

    /**
     * Get total of following of an user
     * Answers to: How many users is this user following?
     */
    public static function getTotalFollowing($user_id)
    {
        return Follower::where('follower_id', $user_id)->count();
    }

    /**
     * Get followers of an user
     * @param $user_id
     * @return User[]
     */
    public static function getFollowers($user_id)
    {
        return User::whereIn('id', Follower::where('user_id', $user_id)->pluck('follower_id'))->get();
    }

    /**
     * Get following of an user
     * @param $user_id
     * @return User[]
     */
    public static function getFollowing($user_id)
    {
        return User::whereIn('id', Follower::where('follower_id', $user_id)->pluck('user_id'))->get();
    }
}
