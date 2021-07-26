<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'image', 'description', 'category_id'];
    /**
     * get the category that owns the Post
     * @return \illuminate\Database\Relation\BelongTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * fun per img & url
     */
    public function getPathAttribute()
    {
        $url = $this->image;
        if (stristr($this->image, 'http') === false) {
            $url = 'storage/' . $this->image;
        }
        return $url;
    }
}
