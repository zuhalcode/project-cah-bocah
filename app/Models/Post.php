<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function checkout(){
        return $this->hasMany(Checkout::class, 'post_id', 'id');
    }

    public function history() {
        return $this->belongsTo(History::class);
    } 

    public function getRouteKeyName(){
        return 'slug';
    }
    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}


