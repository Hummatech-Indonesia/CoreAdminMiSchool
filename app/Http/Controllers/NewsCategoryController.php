<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Models\NewsCategory;
use App\Http\Requests\StoreNewsCategoryRequest;
use App\Http\Requests\UpdateNewsCategoryRequest;
use App\Services\NewsCategoryService;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    private NewsCategoryInterface $newsCategory;
    private NewsCategoryService $newsCategoryService;

    public function __construct(NewsCategoryInterface $newsCategory, NewsCategoryService $newsCategoryService)
    {
        $this->newsCategory = $newsCategory;
        $this->newsCategoryService = $newsCategoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $newsCategories = $this->newsCategory->get($request);
        return view('admin.pages.news.category.index', compact('newsCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsCategoryRequest $request)
    {
        $data = $this->newsCategoryService->store($request);
        $this->newsCategory->store($data);
        return redirect()->back()->with('success', 'Kategori berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsCategoryRequest $request, NewsCategory $news_category)
    {
        // dd($request->all());
        $data = $this->newsCategoryService->update($news_category, $request);
        $this->newsCategory->update($news_category->id, $data);
        // dd($data);
        return redirect()->back()->with('success', 'Kategori berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsCategory $news_category)
    {
        $this->newsCategory->delete($news_category->id);
        return redirect()->back()->with('success', 'Kategori berita berhasil dihapus');
    }
}
