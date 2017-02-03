<?php

namespace App;

use App\Reviewee;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'link', 'author', 'text', 'type', 'title'
    ];

    public function reviewee()
    {
        return $this->belongsTo(Reviewee::class);
    }
}
