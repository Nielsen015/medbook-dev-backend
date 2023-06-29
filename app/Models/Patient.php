<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function gender()
{
    return $this->belongsTo(Gender::class);
}

public function services()
{
    return $this->hasMany(Service::class);
}

}
