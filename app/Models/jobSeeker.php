<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobSeeker extends Model
{
    use HasFactory;

    public function experience() {
        return $this->hasMany(Experience::class);
    }
}
