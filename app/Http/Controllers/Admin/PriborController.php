<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Type;
use App\Models\Pribor;
use App\Models\Departament;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\PriborRequest;
use ProtoneMedia\Splade\SpladeTable;

class PriborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departaments = Departament::pluck('title', 'id')->toArray();
        $types = Type::pluck('title', 'id')->toArray();
        return view('admin.pribor.index', [
            'pribors' => SpladeTable::for(Pribor::class)
            ->column('id','#')
            ->column('title','Название прибора')
            ->withGlobalSearch(columns: ['number'], label: 'Поиск по инвертарному номеру')
            ->selectFilter('type_id', $types, 'Название прибора')
            ->column('number','Инвертарный номер')
            ->column('date_realese','Дата выпуска')
            ->column('date_start','Дата начала пользования')
            // ->column('date_end','Дата следующей проверки')
            // ->column('date_count','Переодичность проверки (в месяцах)')
            ->column('description','Описание')
            ->selectFilter('departament_id',$departaments,'Отдел')
            ->column('status','Статус')
            ->column('action','Действие')
            ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departaments = Departament::pluck('title', 'id')->toArray();
        $types = Type::pluck('title', 'id')->toArray();
        return view('admin.pribor.create', compact('departaments','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriborRequest $request)
    {
        // $validatedData = $request->validate([
        //     'title' => ['required'],
        //     'type_id' => ['required'],
        //     'number' => ['required'],
        //     'date_realese' => ['required','date'],
        //     'status' => ['required'],
        //     'departament_id' => ['required'],
        //     'description' => ['required'],
        //     'date_start' => ['required','date'],
        //     'deta_count' => ['required','numeric']
        // ]);
        // App::setLocale('ru');
        // $title = $validatedData['title'];    
        // $type_id = $validatedData['type_id'];
        // $number = $validatedData['number'];
        // $date_realese = $validatedData['date_realese'];
        // $status = $validatedData['status'];
        // $departament_id = $validatedData['departament_id'];
        // $description = $validatedData['description'];
        // $deta_count = $validatedData['deta_count'];
        // $date_start = Carbon::parse($validatedData['date_start']);
        // $date_end = $date_start->copy()->addMonths('deta_count')->format('Y-m-d');

        $pribor = new Pribor();
        $pribor->title = $request->title;
        $pribor->type_id = $request->type_id;
        $pribor->number = $request->number;
        $pribor->date_realese = $request->date_realese;
        $pribor->status = $request->status;
        $pribor->departament_id = $request->departament_id;
        $pribor->description = $request->description;
        $pribor->date_start = $request->date_start;
        $pribor->deta_count = $request->deta_count;
        $pribor->calculateEndDate();
        $pribor->save();
        // Pribor::create($request->validated());
        // $pribor = $request->validated();
        // $pribor['date_end'] = $this->calculateEndDate($pribor['date_start'], $pribor['deta_count']);
        // Pribor::created($pribor);
        return redirect()->route('pribor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pribor $pribor)
    {
        return view('admin.pribor.show', compact('pribor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pribor $pribor)
    {
        $departaments = Departament::pluck('title', 'id')->toArray();
        $types = Type::pluck('title', 'id')->toArray();
        return view('admin.pribor.edit', compact('pribor','departaments','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriborRequest $request, Pribor $pribor)
    {
        $pribor->update($request->validated());
        return redirect()->route('pribor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pribor $pribor)
    {
        $pribor->delete();
        return redirect()->route('pribor.index');
    }
}
