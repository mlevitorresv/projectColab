<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'creation_date',
        'start_date',
        'end_date',
        'creador_id'
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'creador_id');
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'users_projects', 'project_id', 'user_id')
        ->withPivot('rol')
        ->withTimestamps();
    }

    public function comunications(){
        return $this->hasMany(Communication::class);
    }
}
