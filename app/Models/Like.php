<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'publication_id'
    ];

    /**
     * Get the publication that owns the like.
     */
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    /**
     * Get the user that owns the like.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comments for the like.
     */
    // TODO: Add comments
    
}
