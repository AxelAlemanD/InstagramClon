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
    // TODO: Add comments

    /**
     * Get the likes for the publication.
     */
    // TODO: Add likes
}
