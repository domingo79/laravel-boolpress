<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use phpDocumentor\Reflection\DocBlock\Tag;

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
    //aggiunta di una many to many Post Tag 
    /**The tags that belong to the Post
     * @return \illuminate\Database\Eloquent\Relations\BelongsToMany 
     * 
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
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
