<?php

namespace App\Http\Controllers;
use App\Http\Requests\taskRequest;
use App\taskes\taske;
use App\Traits\taskTrait;
use LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert;

class tasksController extends Controller
{
    use taskTrait;
    public function index()
    {
       $value= taske::select('id', 'task_'.LaravelLocalization::getCurrentLocale().' as task','timetask', 'pic' , 'don')->get();
       return view('taske.gettodos')->with('data', $value);
    }

    public function create()
    {
        return view('taske.create');
    }

    public function store(taskRequest $req)
    {
        //save photo in folder
        $img_name = $this -> saveImage($req -> pic , 'images/taskes');
        taske::create([
            'pic' => $img_name,
            'task_ar' => $req -> task_ar,
            'task_en' => $req -> task_en,
            'timetask' => $req -> timetask,
        ]);
        Alert::success('', __('messages.done'));
        return redirect()->back();
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
        $img_name = $this -> saveImage($request -> pic , 'images/taskes');
        $task -> update([
            'pic'=> $img_name,
            'task_ar' =>$request -> task_ar,
            'task_en' =>$request -> task_en,
            'timetask' =>$request -> timetask,
        ]);
        Alert::success('', __('messages.done update'));
        return redirect()->back()->with(['done' => __('messages.done update')]);
    }

    public function deletetTaske($task_id){
        $deleted_task = taske::find($task_id);
        if (!$deleted_task) {
            Alert::error('', 'messages.notdeleted');
            return back();
        }
        $deleted_task -> delete();
        Alert::success('', __('messages.deleted'));
        return  redirect()->route('taskes.all');
    }




}
