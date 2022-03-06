<?php

namespace App\Models;

use App\Models\Slot;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meet extends Model
{

    protected $fillable = ['name', 'slot_id', 'employe_id'];

    public function slot()
    {
        return $this->belongsTo(Slot::class);
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class);
    }

    use HasFactory;
}
