<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartamentRequest;
use App\Models\Departament;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departament.index', [
            'departaments' => SpladeTable::for(Departament::class)
            ->column('id', '#')
            ->column('title', 'Название отдела')
            ->column('company', 'Наименование компании')
            ->column('phone', 'Мобильный телефон')
            ->column('s_phone', 'Внутренний телефон')
            ->column('adress', 'Адрес')
            ->column('people', 'Ответственно лицо')
            ->column('action', 'Действие')
            ->searchInput(
                'title',
                'Поиск по названию отдела'
            )
            ->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departament.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartamentRequest $request)
    {
        Departament::create($request->validated());
        return redirect()->route('departaments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departament $departament)
    {
        return view('admin.departament.edit', compact('departament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartamentRequest $request, Departament $departament)
    {
        $departament->update($request->validated());
        return redirect()->route('departaments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departament $departament)
    {
        $departament->delete();
        return redirect()->route('departaments.index');
    }
}
