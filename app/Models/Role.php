<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    // ************************************************************************
    // DUJO
    // 21-12-2022
    // role belongs to many users
    public function users()
    {
        // secend param for table name (standard is user_role)
        return $this->belongsToMany(User::class, 'user_roles');
    }
    // ************************************************************************
}
