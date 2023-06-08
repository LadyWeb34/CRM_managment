<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriborRequest;
use App\Models\Departament;
use App\Models\Pribor;
use App\Models\Type;
use Illuminate\Http\Request;
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
            ->selectFilter('type_id', $types, 'Название прибора')
            ->column('number','Инвертарный номер')
            ->column('date_realese','Дата выпуска')
            ->column('date_start','Дата начала пользования')
            ->column('date_end','Дата окончания пользования')
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
        Pribor::create($request->validated());
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
