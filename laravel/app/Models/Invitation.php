<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected  $primaryKey = 'invitation_id';
    use HasFactory;

    protected $fillable = [
        'appeared',
        'event_id',
        'user_id',
    ];
}
