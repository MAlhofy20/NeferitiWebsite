<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    
    public function index()
    {
        $faqs = Faq::get();
        return view('dashboard.faqs.index', compact('faqs'));
    }


    public function create()
    {
        return view('dashboard.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_ar' => 'required|max:255',
            'question_en' => 'required|max:255',
            'answer_ar' => 'required',
            'answer_en' => 'required',
        ]);

        $faq = new Faq();
        $faq->question_ar = $request->question_ar;
        $faq->question_en = $request->question_en;
        $faq->answer_ar = $request->answer_ar;
        $faq->answer_en = $request->answer_en;
        $faq->save();

        return redirect()->route('dashboard.faqs.index')->with('success', __('dashboard.created_successfully'));
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('dashboard.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('dashboard.faqs.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return response()->json([
            'success' => true,
            'message' => __('dashboard.deleted_successfully'),
        ]);
    }
}
