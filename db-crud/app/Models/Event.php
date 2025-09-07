<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    // allow mass assignment for these columns
    protected $fillable = [
        'name', 'description', 'priority', 'event_date'
    ];

    public $timestamps = true;
}
