<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];
    protected $hidden = ['password', 'remember_token'];
    protected $table    = 'users';

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function employement_status()
    {
        return $this->belongsTo(EmployementStatus::class, 'employement_status_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function news()
    {
        return $this->HasMany(News::class, 'user_id', 'id');
    }
}
