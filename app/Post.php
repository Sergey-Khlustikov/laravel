<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // Модель привязывается к таблице с таким же названием. Post = posts.
    // Чтобы указать другую таблицу -
    // protected $table = 'hot_posts';
    //
    // Модель предполагает, что в таблице всегда есть колонка id, к которой модель привязывается.
    // Чтобы поменять id на другую колонку -
    // protected $primaryKey = 'another_id';
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content', 'is_admin', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
