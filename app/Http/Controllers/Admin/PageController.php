<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Page\StorePage;
use App\Models\Page;

class PageController extends Controller
{
    public function home()
    {
        return view('admin.home.index');
    }

    public function indexSection($slug, $section)
    {
        $page = Page::where('title', $slug)->first();
        if (!$page) {
            $page = Page::create([
                'title' => $slug,
            ]);
        }

        $pageSection = PageSection::where('page_id', $page->id)->where('section', $section)->first();
        if (!$pageSection) {
            $pageSection = new PageSection();
        }

        if ($section == 'banner') {
            return view('admin.home.banner', [
                'pageSection' => $pageSection
            ]);
        } else if ($section == 'about-us') {
            return view('admin.home.about-us', [
                'pageSection' => $pageSection
            ]);
        }
    }

    public function save(StorePage $request, $slug, $section)
    {
        $sanitized = $request->validated();
        $sanitized['section'] = $section;

        $page = Page::where('title', $slug)->first();
        if (!$page) {
            $page = Page::create([
                'title' => $slug,
            ]);
        }

        $sanitized['page_id'] = $page->id;

        // return response()->json($request->all());

        $pageSection = PageSection::where('page_id', $page->id)->where('section', $section)->first();
        if (!$pageSection) {
            PageSection::create($sanitized);
        } else {
            $pageSection->update($sanitized);
        }

        // return redirect('/admin');
        return response()->json("Successfuly save data", 200);
    }
}
