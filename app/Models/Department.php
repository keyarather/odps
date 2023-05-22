<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Appointment(){
        return $this->belongsTo(Appointment::class,);
    }
}
