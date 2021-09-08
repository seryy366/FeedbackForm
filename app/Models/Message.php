<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Message extends Model
{

    use Sluggable;
    use HasFactory;
    protected $fillable = ['title','name', 'phone', 'company', 'content','user_id', 'thumbnail'];
    public function users()
    {
        return $this->belongsTo(User::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
