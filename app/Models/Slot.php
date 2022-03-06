<?php

namespace App\Models;

use App\Models\Meet;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slot extends Model
{

    protected $fillable = ['day', 'hour'];

    use HasFactory;

    public function meets()
    {
        return $this->hasMany(Meet::class);
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class);
    }
}
