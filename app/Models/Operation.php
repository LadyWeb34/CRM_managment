<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $fillable = [
        'pribor_id',
        'staff_id',
        'execute',
        'comment',
        'status',
    ];
    public function pribor()
    {
        return $this->belongsTo(Pribor::class, 'pribor_id', 'id');
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
