<?php

namespace App\Http\Controllers\Landingpage;

use App\Contracts\Interfaces\NewsInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsInterface $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
    }

    public function index()
    {
        $latest = $this->news->latest();
        $recentPosts = $this->news->recentPosts();
        $otherNews = $this->news->otherNews();    
        dd($latest, $recentPosts, $otherNews);
        return view('landing.news.news', compact('latest', 'recentPosts'));
    }
}
