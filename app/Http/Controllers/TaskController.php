<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 public function taskList() {
    $taskLists =  Task::all();
    return view('task.index', compact('taskLists'));
 }

 public function showTask() {
    return view('task.show');
 }

 public function editTask() {
    return view('task.edit_task');
 }

 public function addTask() {
    return view('task.add_task');
 }

 public function taskStore(Request $request) {
    $task = new Task();
    $task->title            =      $request->title;
    $task->description      =      $request->description;
    $task->long_description =      $request->long_description;
    $task->save();

    return redirect('/');

 }

}
