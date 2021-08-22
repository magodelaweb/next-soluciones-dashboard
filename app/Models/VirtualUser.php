<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// use App\Notifications\ResetPasswordNotification;

use Config;

class VirtualUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'virtual_users';

    protected $fillable = [
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    protected $guarded = [
        'domain_id',
    ];
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    // public function sendPasswordResetNotification($token)
    // {
    //     $url = Config::get('app.url').'/reset-password/'.$token.'?email='.urlencode($this->email);
    //     $this->notify(new ResetPasswordNotification($url));
    // }
}
