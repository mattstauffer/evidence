<?php

namespace App;

use App\Review;
use Illuminate\Database\Eloquent\Model;

class Reviewee extends Model
{
    protected $fillable = ['name'];
    // type (book, talk, etc.) link (original url)

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
