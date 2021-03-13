<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Machine extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        "name", "value_throttle", "value_working", 'image', 'status'
    ];
}
