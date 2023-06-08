<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pribor extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type_id',
        'number',
        'date_realese',
        'date_start',
        'date_end',
        'status',
        'departament_id',
        'description'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function departament()
    {
        return $this->belongsTo(Departament::class, 'departament_id', 'id');
    }
}
