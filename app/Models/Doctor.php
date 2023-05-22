<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function Department()
    {
        return $this->belongsTo(Department::class, 'department', 'id');
    }
}
