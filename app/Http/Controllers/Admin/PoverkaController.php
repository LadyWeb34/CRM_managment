<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pribor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\SpladeTable;

class PoverkaController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now();
        $records = Pribor::whereDate('date_end', '>=', $currentDate->subMonth())
                   ->whereDate('date_end', '<=', $currentDate->addMonth())
                   ->get();
        return view('admin.poverka.index', [
            'pribor' => SpladeTable::for($records)
            ->column('title', 'Название прибора')
            ->column('date_start', 'Дата ввода в эксплуатацию')
            ->column('date_end', 'Дата плановой поверки')
            ->column('deta_count', 'Переодичность проверки в месяцах')
        ]);
    }
}
