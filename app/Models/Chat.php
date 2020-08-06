<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Chat extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard = 'admin';

    protected $fillable = [
        'sender_id', 'sender_name', 'message',
    ];

}
