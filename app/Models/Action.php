<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = ['session_id', 'ip_address', 'action_name', 'url'];
}
