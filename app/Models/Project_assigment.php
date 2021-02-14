<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_assigment extends Model
{
    use HasFactory;
    protected $table = "project_assigments";

    public function users()
    {
        return $this->belongsTo(users::class);
    }
    public function projects()
    {
        return $this->belongsTo(projects::class);
    }
    public function user_tasks()
    {
        return $this->hasMany(user_tasks::class);
    }
    public function insert($user,$project)
    {
        return \DB::table($this->table)
                ->insertGetId(
                    ["user_id" => $user,"project_id" => $project]
                );
    }
}
