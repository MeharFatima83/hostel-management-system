<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notice;

class NoticeController extends Controller
{
    // Display All Notices
    public function index()
    {
        $notices = Notice::all();

        return view(
            'notice.index',
            compact('notices')
        );
    }

    // Show Add Notice Form
    public function create()
    {
        return view('notice.create');
    }

    // Store Notice
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'publish_date' => 'required|date',
        ]);

        // Generate next ID manually for TiDB
        $noticeId = (DB::table('notices')->max('id') ?? 0) + 1;

        Notice::create([
            'id' => $noticeId,
            'title' => $request->title,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
        ]);

        return redirect('/notices')
            ->with(
                'success',
                'Notice Added Successfully'
            );
    }

    // Show Edit Form
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);

        return view(
            'notice.edit',
            compact('notice')
        );
    }

    // Update Notice
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'publish_date' => 'required|date',
        ]);

        $notice = Notice::findOrFail($id);

        $notice->update([
            'title' => $request->title,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
        ]);

        return redirect('/notices')
            ->with(
                'success',
                'Notice Updated Successfully'
            );
    }

    // Delete Notice
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);

        $notice->delete();

        return redirect('/notices')
            ->with(
                'success',
                'Notice Deleted Successfully'
            );
    }
}