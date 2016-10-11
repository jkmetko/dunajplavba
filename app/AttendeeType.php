<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttendeeType extends Model
{
    use SoftDeletes;

    protected $table = 'attendee_types';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'category'];

    public function events() {
        return $this->hasMany(Event::class);
    }
}
