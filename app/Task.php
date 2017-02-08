<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Attributes that are mass assignable
     *
     * @var array
     */
     protected $fillable = ['name', 'due_at'];


     /**
      * Get the TodoList that owns this task
      */
      public function todoList()
      {
          return $this->belongsTo('App\TodoList');
      }
}
