<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email',
    ];

    public function scopeActive($query){
        return $query->where('activated', true);
    }

    protected $appends = [
        'humanCreatedAt',
    ];

    public function getHumanCreatedAtAttribute(){
        return $this->created_at->diffForHumans();
    }

    
    public function scopeNotActive($query){
        return $query->where('activated', false);
    }
}
