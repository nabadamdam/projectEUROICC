<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_task extends Model
{
    use HasFactory;
    protected $table = "user_tasks";

    public function project_assigments()
    {
        return $this->belongsTo(project_assigments::class);
    }
    public function tasks()
    {
        return $this->belongsTo(tasks::class);
    }
    public function insertOneByOne($idAssigment,$c)
    {
        return \DB::table($this->table)
                ->insert(
                    ["project_assignment_id" => $idAssigment,"task_id" => $c]
                );
    }
}
