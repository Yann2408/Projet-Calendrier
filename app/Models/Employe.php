<?php

namespace App\Models;

use App\Models\Meet;
use App\Models\Slot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    protected $fillable = ['nom', 'email'];

    use HasFactory;

    public function Slots()
    {
        return $this->belongsToMany(Slot::class);
    }

    public function Meets()
    {
        return $this->belongsToMany(Meet::class);
    }
}
