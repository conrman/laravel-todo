<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    /**
     * Add one-to-many relationship to project model
     *
     * @return Relationship
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
