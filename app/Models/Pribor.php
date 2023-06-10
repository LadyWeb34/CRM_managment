<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'description',
        'deta_count'
    ];
    protected $dates = ['date_realese', 'date_start', 'date_end'];
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function departament()
    {
        return $this->belongsTo(Departament::class, 'departament_id', 'id');
    }
    public function calculateEndDate()
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $this->date_start);
        $dateCount = intval(preg_replace('/[^0-9]+/', '', $this->deta_count));
        $endDate = $startDate->copy()->addMonths($dateCount);
        $this->date_end = $endDate->format('Y-m-d');
    }
    
}
