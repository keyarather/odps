<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patient(){
        return $this->belongsTo(patient::class);
    }

    public function Department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function Doctor(){
        return $this->belongsTo(Doctor::class);

    }
}
