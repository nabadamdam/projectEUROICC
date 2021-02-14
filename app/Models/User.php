<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";

    public function project_assigments()
    {
        return $this->hasMany(project_assigments::class);
    }
    public function getAllUser()
    {
        return \DB::table($this->table)
                ->get();

    }
    public function getOneUser($userId)
    {
        return \DB::table($this->table)
                ->where("id",$userId)
                ->select("nameUser")
                ->get();
    }
}
