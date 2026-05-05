<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionTitle;

class QuestionTitleController extends Controller
{
    public function all()
    {
        $questiontitles = QuestionTitle::orderBy('id', 'asc')->get();
        return view('superadmin.questiontitle.list', compact('questiontitles'));
    }

    public function Create()
    {
        return view('superadmin.questiontitle.add_questiontitle');
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'status' => 'required',

        ]);

        $questiontitle = new QuestionTitle();
        $questiontitle->title = $request->title;
        $questiontitle->status = $request->status;
        $questiontitle->save();
        $notification = array(
            'messege' => ' QuestionTitle Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $questiontitle = QuestionTitle::find($id);
        return view('superadmin.questiontitle.edit_questiontitle', compact('questiontitle'));
    }

    public function update(Request $request, $id)
    {
        $questiontitle = QuestionTitle::find($id);
        $questiontitle->title = $request->title;
        $questiontitle->status = $request->status;

        $questiontitle->save();
        $notification = array(
            'messege' => ' QuestionTitle Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('superadmin.all.question')->with($notification);
    }

    public function delete($id)
    {
        $questiontitle = QuestionTitle::find($id);
        $questiontitle->delete();
        $notification = array(
            'messege' => 'Question Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }




    public function QuestionSummary()
    {
        return view('superadmin.case.question_summary');
    }

    public function status($id)
    {
        $questionTitle = QuestionTitle::findOrFail($id);

        // toggle status
        if ($questionTitle->status == 1) {
            $questionTitle->status = 0;
        } else {
            $questionTitle->status = 1;
        }

        $questionTitle->save();

        return redirect()->back()
            ->with('success', 'Status changed successfully');
    }
}
