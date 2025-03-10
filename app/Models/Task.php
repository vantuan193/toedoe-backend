<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_completed', 'priority_id', 'user_id'];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}