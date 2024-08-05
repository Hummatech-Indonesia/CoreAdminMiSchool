<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Services\NewsService;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsCategoryInterface $newsCategory;
    private NewsService $newsService;

    public function __construct(NewsInterface $news, NewsCategoryInterface $newsCategory, NewsService $newsService)
    {
        $this->news = $news;
        $this->newsCategory = $newsCategory;
        $this->newsService = $newsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newses = $this->news->get();
        $categories = $this->newsCategory->get();
        return view('admin.pages.news.index', compact('newses', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newsCategories = $this->newsCategory->get();
        return view('', compact('newsCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $data = $this->newsService->store($request);
        // dd($data);
        $this->news->store($data);
        return redirect()->back()->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $newsCategories = $this->newsCategory->get();
        return view('', compact('newsCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $this->newsService->update($news, $request);
        $this->news->update($news->id, $data);
        return redirect()->back()->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $this->newsService->delete($news);  
        $this->news->delete($news->id);
        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }
}
