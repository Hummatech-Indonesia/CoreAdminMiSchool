<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\RfidInterface;
use App\Contracts\Interfaces\SchoolInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private SchoolInterface $school;
    private RfidInterface $rfid;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SchoolInterface $school, RfidInterface $rfid)
    {
        $this->middleware('auth');
        $this->school = $school;
        $this->rfid = $rfid;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $school_active = $this->school->where('1', $request);
        $school_not_active = $this->school->where('0', $request);
        $rfid = $this->rfid->get();
        return view('admin.pages.dashboard', compact('school_active', 'school_not_active', 'rfid'));
    }
}
