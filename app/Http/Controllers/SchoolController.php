<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CityInterface;
use App\Contracts\Interfaces\ProvinceInterface;
use App\Contracts\Interfaces\SchoolInterface;
use App\Contracts\Interfaces\SubDistrictInterface;
use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Services\SchoolService;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    private SchoolInterface $school;
    private SchoolService $service;
    private ProvinceInterface $province;
    private CityInterface $city;
    private SubDistrictInterface $subdistrict;

    public function __construct(SchoolInterface $school, SchoolService $service, ProvinceInterface $province, CityInterface $city, SubDistrictInterface $subdistrict) {
        $this->school = $school;
        $this->service = $service;
        $this->province = $province;
        $this->city = $city;
        $this->subdistrict = $subdistrict;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schools = $this->school->search($request)->paginate(10);
        $activeSchools = $this->school->where('1', $request);
        $nonActiveSchools = $this->school->where('0', $request);
        return view('', compact('schools', 'activeSchools', 'nonActiveSchools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = $this->province->get();
        $cities = $this->city->get();
        $subdistricts = $this->subdistrict->get();
        return view('', compact('provinces', 'cities', 'subdistricts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {
        $data = $this->service->store($request);
        $this->school->store($data);
        return to_route('')->with('success', 'Berhasil menambahkan sekolah');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $school = $this->school->showWithSlug($slug);
        return view('', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $school = $this->school->showWithSlug($slug);
        $provinces = $this->province->get();
        $cities = $this->city->get();
        $subdistricts = $this->subdistrict->get();
        return view('', compact('school', 'provinces', 'cities', 'subdistricts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $data = $this->service->update($school, $request);
        $this->school->update($school->id, $data);
        return to_route('settings-information.index')->with('success', 'Berhasil memperbarui sekolah');
    }

    public function nonactive(School $school)
    {
        $this->school->update($school->id, ['active' => 0]);
        return redirect()->back()->with('success', 'Sekolah berhasil dinonaktifkan');
    }

    public function active(School $school)
    {
        $this->school->update($school->id, ['active' => 1]);
        return redirect()->back()->with('success', 'Sekolah berhasil diaktifkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $this->service->delete($school);
        $this->school->delete($school->id);
        return to_route('')->with('success', 'Berhasil menghapus sekolah');
    }
}
