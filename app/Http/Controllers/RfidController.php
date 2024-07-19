<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\RfidInterface;
use App\Models\Rfid;
use App\Http\Requests\StoreRfidRequest;
use App\Http\Requests\UpdateRfidRequest;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    private RfidInterface $rfid;

    public function __construct(RfidInterface $rfid) {
        $this->rfid = $rfid;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rfids = $this->rfid->search($request);
        $usedRfids = $this->rfid->used($request);
        $notUsedRfids = $this->rfid->notUsed($request);
        return view('', compact('rfids', 'usedRfids', 'notUsedRfids'));
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
    public function store(StoreRfidRequest $request)
    {
        try {
            $this->rfid->store($request->validated());
            return redirect()->back()->with('success', 'Berhasil mendaftarkan RFID');
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'RFID sudah tersedia');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rfid $rfid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rfid $rfid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRfidRequest $request, Rfid $rfid)
    {
        try {
            $this->rfid->update($request, $rfid->id);
            return redirect()->back()->with('success', 'Berhasil memperbarui RFID');
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'RFID sudah tersedia');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rfid $rfid)
    {
        $this->rfid->delete($rfid->id);
        return redirect()->back()->with('success', 'Berhasil menghapus RFID');
    }
}
