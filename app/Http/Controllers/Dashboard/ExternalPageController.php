<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ExternalPage;
use Illuminate\Http\Request;

class ExternalPageController extends Controller
{
    public function index()
    {
        $pages = ExternalPage::all();

        return view('dashboard.external_pages.index', compact('pages'));
    }

    public function create()
    {
        return view('dashboard.external_pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $page = new ExternalPage();
        $page->title_ar = $request->title_ar;
        $page->title_en = $request->title_en;
        $page->link = $request->link;
        $page->save();

        return redirect()->route('dashboard.external_pages.index')->with('success', __('dashboard.created_successfully'));
    }

    public function edit($external_page_id)
    {
        $page = ExternalPage::find($external_page_id);

        return view('dashboard.external_pages.edit', compact('page'));
    }

    public function update(Request $request, $external_page_id)
    {
        $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $page = ExternalPage::find($external_page_id);
        $page->title_ar = $request->title_ar;
        $page->title_en = $request->title_en;
        $page->link = $request->link;
        $page->save();

        return redirect()->route('dashboard.external_pages.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function delete($external_page_id)
    {
        $page = ExternalPage::find($external_page_id);
        $page->delete();
        return redirect()->route('dashboard.external_pages.index')->with('success', __('dashboard.deleted_successfully'));
    }

    public function show($external_page_id)
    {
        $page = ExternalPage::find($external_page_id);
        return view('dashboard.external_pages.show', compact('page'));
    }
}

