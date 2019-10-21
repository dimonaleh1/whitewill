<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'title',
    ];

    public function toArray() {
        $this->property->toArray();
        return parent::toArray();
    }

    public function property()
    {
        return $this->hasMany(PostExtAttributes::class, 'post_id', 'id');
    }
}
