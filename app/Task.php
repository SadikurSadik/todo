<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ["name", "project_id", "est_start_time", "est_end_time", "description", "member_id"];
}
