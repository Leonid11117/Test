<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $value
 */
class RandomNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'value'
    ];
}
