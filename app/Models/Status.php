<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Tasks;

class Status extends Model
{
    use HasFactory;
    public $table = "Status";
    public $timestamps = false;

    public function tasks()
    {
        return $this->belongsToMany(Tasks::class);
    }
}
