<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Organisator extends Model
{
    protected  $primaryKey = 'org_id';
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
}
