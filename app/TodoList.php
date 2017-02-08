<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    /**
     * Attributes that are mass assignable
     *
     * @var array
     */
     protected $fillable = ['name'];

     /**
      * Get the tasks for the todolist
      */
      public function tasks()
      {
          return $this->hasMany('App\Task');
      }
}
