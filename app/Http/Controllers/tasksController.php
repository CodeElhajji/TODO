<?php

namespace App\Http\Controllers;

use App\taskes\taske;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class tasksController extends Controller
{
    public function index()
    {
       $value= taske::get();
       return view('welcome')->with('data', $value);
    }
    public function create()
    {
        return view('taske.create');
    }
    public function store(Request $req)
    {
        //vaidation part

        $ruels=[
            'task' => 'required|unique:taskes,task', //validation exemple
            'timetask' => 'required',
        ]; //secend way to pass validation to validator

        $msg= $this -> getMessaged(); //another way to pass validation to validator
        $validator = Validator::make($req ->all(),$ruels ,$msg); //you can pasin validation here
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($req->all());
        }

        //request part

        taske::create([
            'task' => $req -> task,
            'timetask' => $req -> timetask,
        ]);
        return redirect()->back()-> with(['done' =>'تمت الاظافة بنجاح']);
    }
    //pest praqtess in php
    protected function getMessaged(){
        return $messages =[
            'task.required' => 'اسم العملية مطلوب',
            'timetask.required' => 'تاريخ العملية مطلوب',
            'task.unique' => 'الاسم موجود',
        ];
    }
}
