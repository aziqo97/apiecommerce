<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ["name"];
    public array $translatable = ["name"];
    public function attribute() :BelongsToMany
    {
        $this->belongsToMany(Attribute::class);
    }

}
