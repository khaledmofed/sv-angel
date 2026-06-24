<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;

class MessageController extends Controller
{
    public function index()
    {
        $messages = ContactSubmission::latest()->paginate(20);
        return view('admin.messages.index', compact('messages'));
    }

    public function show(int $id)
    {
        $message = ContactSubmission::findOrFail($id);
        $message->update(['is_read' => true]);
        return view('admin.messages.show', compact('message'));
    }

    public function markRead(int $id)
    {
        ContactSubmission::findOrFail($id)->update(['is_read' => true]);
        return back()->with('success','Marked as read!');
    }

    public function destroy(int $id)
    {
        ContactSubmission::findOrFail($id)->delete();
        return redirect()->route('admin.messages.index')->with('success','Deleted!');
    }
}
