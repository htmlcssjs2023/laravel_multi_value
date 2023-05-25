<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSub extends Model
{
    use HasFactory;
    public $table = 'studentsubs';
    protected $fillable = ['sub_name','sub_code'];
}
