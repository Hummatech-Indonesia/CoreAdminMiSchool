<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\FaqInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    private FaqInterface $faq;

    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    public function index()
    {
        $faqs = $this->faq->get(); 
        return view('welcome',compact('faqs'));
    }
}
