<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";

    public function project_assigments()
    {
        return $this->hasMany(project_assigments::class);
    }
    public function getAllProject()
    {
        return \DB::table($this->table)
                ->get();
    }
    public function getOneProject($projectId)
    {
        return \DB::table($this->table)
                ->where("id",$projectId)
                ->select("nameProject")
                ->get();
    }
}
