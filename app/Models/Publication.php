<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'user_id'
    ];
    /**
     * Get the user that owns the publication.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comments for the publication.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the likes for the publication.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLiked(){
        if($this->likes()->where('user_id', auth()->user()->id)->first() != null){
            return true;
        }else{
            return false;
        }
        // return $this->likes()->where('user_id', auth()->user()->id);
        
    }
}
