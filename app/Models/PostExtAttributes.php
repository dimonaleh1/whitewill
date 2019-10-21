<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostExtAttributes extends Model
{
    protected $table = 'post_ext_attributes';

    protected $fillable = [
        'id',
        'post_id',
        'name',
    ];

    public function posts() {
        return $this->belongsTo(Posts::class, 'post_id', 'id');
    }
}
