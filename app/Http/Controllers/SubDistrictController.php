<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\SubDistrictInterface;
use App\Models\SubDistrict;
use App\Http\Requests\StoreSubDistrictRequest;
use App\Http\Requests\UpdateSubDistrictRequest;
use Illuminate\Http\Request;

class SubDistrictController extends Controller
{
    private SubDistrictInterface $subDistrict;

    public function __construct(SubDistrictInterface $subDistrict)
    {
        $this->subDistrict = $subDistrict;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSubDistrictRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $cityId = $request->input('city_id');
        $subDistricts = $this->subDistrict->where($cityId);
        return response()->json(['data' => $subDistricts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubDistrict $subDistrict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubDistrictRequest $request, SubDistrict $subDistrict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubDistrict $subDistrict)
    {
        //
    }
}
