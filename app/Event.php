<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'events';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'location', 'state', 'date', 'time_from', 'time_to', 'description', 'user_id'];

    public function files() {
        return $this->hasMany(Event::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}