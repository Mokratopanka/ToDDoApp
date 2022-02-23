<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Status;

class Tasks extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function status()
    {
        return $this->belongsToMany(Status::class);
    }
}
