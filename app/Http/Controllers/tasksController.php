<?php

namespace App\Http\Controllers;

use App\Http\Requests\taskRequest;
use App\taskes\taske;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;

class tasksController extends Controller
{
    public function index()
    {
       $value= taske::select('id', 'task_'.LaravelLocalization::getCurrentLocale().' as task','timetask','don')->get();
       return view('taske.welcome')->with('data', $value);
    }

    public function create()
    {
        return view('taske.create');
    }

    public function store(taskRequest $req)
    {
        taske::create([
            'task_ar' => $req -> task_ar,
            'task_en' => $req -> task_en,
            'timetask' => $req -> timetask,
        ]);
        return redirect()->back()-> with(['done' =>__('messages.done')]);
    }

    public function edit($task_id){
       $task = taske::find($task_id);
        if (!$task) return redirect()->back();
        return view('taske.update', compact('task'));

    }
    public function doUpdate(taskRequest $request,$task_id){
        $task = taske::find($task_id);
        if (!$task)
            return redirect()->back();
        $task -> update($request -> all());
        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);
    }


}
