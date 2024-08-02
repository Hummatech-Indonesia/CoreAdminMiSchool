<?php

namespace App\Http\Controllers\API;

use App\Contracts\Interfaces\FaqInterface;
use App\Http\Controllers\Controller;
use F9Web\ApiResponseHelpers;

class ApiFaqController extends Controller
{
    use ApiResponseHelpers;
    private FaqInterface $faq;

    public function __construct(FaqInterface $faq) {
        $this->faq = $faq;
    }

    public function index() {
        $faqs = $this->faq->get();
        return $this->respondWithSuccess($faqs);
    }

}
