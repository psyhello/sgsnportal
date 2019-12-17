<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Dept()
    {
        return $this->belongsTo(Dept::class);
    }

    public function Issue()
    {
        return $this->hasMany(Issue::class);
    }

    public function Post()
    {
        return $this->hasMany(Post::class);
    }

    public function Mission()
    {
        return $this->hasMany(mission::class);
    }

    public function Error()
    {
        return $this->hasMany(Error::class);
    }

    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

}
