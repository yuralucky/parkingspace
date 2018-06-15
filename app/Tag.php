<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable=['name'];

    public $timestamps=false;

    /**
     * Tag has many tasks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tasks(){
        return $this->belongsToMany('App\Task')->withTimestamps();
    }
}
