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

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    // وضعت ١ لاني اتوقع ان هذي الفنكشن موجودة لشي اخر
    public function notify1()
    {
        return $this->hasMany(Notify::class);
    }
}
