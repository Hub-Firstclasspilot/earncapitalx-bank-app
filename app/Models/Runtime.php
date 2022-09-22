<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runtime extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function investment()
    {
        return $this->belongsTo(Investment::class, 'investment_id');
    }
}
