<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    public function setSlugAttribute($value){

        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'),
            '-');
    }


   public function children(){

       return $this-> hasMany(self::class,'parent_id');

   }
    // Polymorphic relation with articles
    public function articles()
    {
        return $this->morphedByMany('App\Article', 'categoryable');
    }

    public function scopeLastCategories($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

}
