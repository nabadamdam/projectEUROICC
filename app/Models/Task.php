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
}
