<?php

namespace App\Http\Controllers\Landingpage;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsInterface $news;
    private NewsCategoryInterface $newsCategory;

    public function __construct(NewsInterface $news, NewsCategoryInterface $newsCategory)
    {
        $this->news = $news;
        $this->newsCategory = $newsCategory;
    }

    public function index()
    {
        $latest = $this->news->latest();
        $recentPosts = $this->news->recentPosts();
        $otherNews = $this->news->otherNews();   
        $categories = $this->newsCategory->all();
        return view('landing.news.news', compact('latest', 'recentPosts', 'otherNews', 'categories'));
    }

    public function show($slug)
    {
        $news = $this->news->showWithSlug($slug);
        return view('landing.news.detail', compact('news'));
    }
}
