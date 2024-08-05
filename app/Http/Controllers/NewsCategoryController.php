<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Models\NewsCategory;
use App\Http\Requests\StoreNewsCategoryRequest;
use App\Http\Requests\UpdateNewsCategoryRequest;

class NewsCategoryController extends Controller
{
    private NewsCategoryInterface $newsCategory;

    public function __construct(NewsCategoryInterface $newsCategory)
    {
        $this->newsCategory = $newsCategory;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsCategories = $this->newsCategory->get();
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
        $this->newsCategory->store($request->all());
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
    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $this->newsCategory->update($newsCategory, $request->all());
        return redirect()->back()->with('success', 'Kategori berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $this->newsCategory->delete($newsCategory);
        return redirect()->back()->with('success', 'Kategori berita berhasil dihapus');
    }
}
