<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Files extends Model
{
    use SoftDeletes;

    protected $table = 'files';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'path', 'mime', 'original_name'];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
