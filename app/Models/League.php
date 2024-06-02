<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * A group of Anthropes who share a theme or qualification.
 */
class League extends Model
{
    use HasFactory;
    use SoftDeletes;
}
