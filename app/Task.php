<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * Add one-to-many relationship to task model
     *
     * @return Relationship
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
