<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OperationRequest;
use App\Models\Operation;
use App\Models\Pribor;
use App\Models\Staff;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pribors = Pribor::pluck('title', 'id')->toArray();
        return view('admin.operation.index', [
            'operations'=>SpladeTable::for(Operation::class)
            ->column('id','#')
            ->column('pribor_id','Наименование прибора')
            ->column('staff_id','Исполнитель')
            ->column('execute','Дата выполнения')
            ->column('comment','Комментарий')
            ->column('created_at','Дата регистрации работы')
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
        $pribors = Pribor::where('status', '4')->pluck('title', 'id')->toArray();
        $staffs = Staff::pluck('name', 'id')->toArray();
        return view('admin.operation.create', compact('pribors','staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OperationRequest $request)
    {
        Operation::create($request->validated());
        return redirect()->route('operation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Operation $operation)
    {
        return view('admin.operation.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operation $operation)
    {   
        $pribors = Pribor::where('status', '4')->pluck('title', 'id')->toArray();
        $staffs = Staff::pluck('name', 'id')->toArray();
        return view('admin.operation.edit', compact('operation','pribors','staffs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OperationRequest $request, Operation $operation)
    {
        $operation->update($request->validated());
        return redirect()->route('operation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operation $operation)
    {
        $operation->delete();
        return redirect()->route('operation.index');
    }
}
