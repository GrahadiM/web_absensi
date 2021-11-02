<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'attendances';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function pegawai()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
