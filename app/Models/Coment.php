<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'content', 
        'csrf',
     ];
     
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
