<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";

    public function user_tasks()
    {
        return $this->hasMany(user_tasks::class);
    }
    public function getAllTask()
    {
        return \DB::table($this->table)
                ->get();
    }
    public function getAllForUserTaskProject()
    {
        return \DB::table($this->table)
                ->join('user_tasks', 'tasks.id', '=', 'user_tasks.task_id')
                ->join('project_assigments', 'user_tasks.project_assignment_id', '=', 'project_assigments.id')
                ->join('users', 'project_assigments.user_id', '=', 'users.id')
                ->join('projects', 'project_assigments.project_id', '=', 'projects.id')
                ->select('users.nameUser','users.email','projects.nameProject','tasks.name')
                ->groupBy('users.nameUser','users.email','projects.nameProject','tasks.name')
                ->get();
                
    }
}
