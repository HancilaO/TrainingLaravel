<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
    ];

    protected $dates = [
        'reviewed_at',
    ];

    public function getFullText(){
        return $this->title . ' ' . $this->body;
    }


}
