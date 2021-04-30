<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    //
    public function view()
    {
        $data=Todo::all();

        return view('todo')->with('datas',$data);
    }
    public function save(Request $request)
    {
        $task=new Todo;
        $this -> validate($request,[
            'task'=>'required',
          
        ]);
        $task->task=$request->task;
        $task->save();
        $data=Todo::all();
       return redirect()->back()->with('datas',$data);
     

    }
    public function complete($id)
    {
        $task=Todo::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }
    public function notcomplete($id)
    {
        $task=Todo::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $task=Todo::find($id);
        $task->delete();
        return redirect()->back();
    }
}
