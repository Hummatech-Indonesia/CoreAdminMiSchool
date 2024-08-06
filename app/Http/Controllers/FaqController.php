<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\FaqInterface;
use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private FaqInterface $faq;

    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $faqs = $this->faq->paginate($request);
        return view('admin.pages.faq.index', compact('faqs'));
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
    public function store(StoreFaqRequest $request)
    {
        $this->faq->store($request->validated());
        return redirect()->back()->with('success', 'Faq berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $this->faq->update($faq->id, $request->validated());
        return redirect()->back()->with('success', 'Faq berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $this->faq->delete($faq->id);
        return redirect()->back()->with('success', 'Faq berhasil dihapus');
    }
}
