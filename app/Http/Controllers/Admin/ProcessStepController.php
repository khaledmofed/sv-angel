<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProcessStep;
use Illuminate\Http\Request;

class ProcessStepController extends Controller
{
    public function index() { return view('admin.process.index', ['steps' => ProcessStep::orderBy('order')->get()]); }
    public function create() { return view('admin.process.form', ['step' => new ProcessStep()]); }

    public function store(Request $request)
    {
        $data = $request->validate(['number'=>'required|string','title'=>'required|string','description'=>'nullable|string','order'=>'integer']);
        ProcessStep::create($data);
        return redirect()->route('admin.process.index')->with('success','Added!');
    }

    public function edit(ProcessStep $process) { return view('admin.process.form', ['step' => $process]); }

    public function update(Request $request, ProcessStep $process)
    {
        $data = $request->validate(['number'=>'required|string','title'=>'required|string','description'=>'nullable|string','order'=>'integer']);
        $process->update($data);
        return redirect()->route('admin.process.index')->with('success','Updated!');
    }

    public function destroy(ProcessStep $process) { $process->delete(); return back()->with('success','Deleted!'); }
}
