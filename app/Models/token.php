<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    use HasFactory;
        protected $fillable = [
        "tokenable_type",
        "tokenable_id",
        "name",
        "token",
        "abilites",
        "last_used_at",
    ];
        protected $table = 'personal_access_tokens';
}
