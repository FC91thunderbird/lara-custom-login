<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::slug($value);
    }
}
