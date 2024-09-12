<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\RfidInterface;
use App\Enums\RfidStatusEnum;
use App\Models\Rfid;
use App\Http\Requests\StoreRfidRequest;
use App\Http\Requests\UpdateRfidRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $countrfid = $this->rfid->count('null');
        $usecountrfid = $this->rfid->count('used');
        $notusecountrfid = $this->rfid->count('notused');
        $usedRfids = $this->rfid->used($request);
        $notUsedRfids = $this->rfid->notUsed($request);
        return view('admin.pages.rfid.index', compact('rfids', 'usedRfids', 'notUsedRfids', 'countrfid', 'usecountrfid', 'notusecountrfid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $response = Http::get(config('api.check_rfid'));

            $data = $response->json();
            $statusCode = $response->status();

            foreach ($data['data'] as $item) {
                $this->rfid->updateUsed($item['rfid'], ['status' => RfidStatusEnum::USED->value]);
            }

            return redirect()->back()->with('success', 'Berhasil refresh');
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'Tidak ada data');
        }
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
