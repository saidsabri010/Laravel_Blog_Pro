<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    protected $fillable = [
        'slug','title','description','image_path','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
