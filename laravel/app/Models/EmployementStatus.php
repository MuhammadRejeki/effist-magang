<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployementStatus extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $table    = 'employement_status';

    public function user()
    {
        return $this->hasMany(User::class, 'employement_status_id', 'id');
    }
}
