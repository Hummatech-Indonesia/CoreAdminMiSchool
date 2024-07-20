<?php

namespace App\Http\Controllers\API;

use App\Contracts\Interfaces\RfidInterface;
use App\Http\Controllers\Controller;
use App\Models\Rfid;
use F9Web\ApiResponseHelpers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiRfidController extends Controller
{
    use ApiResponseHelpers;
    private RfidInterface $rfid;

    public function __construct(RfidInterface $rfid = null) {
        $this->rfid = $rfid;
    }


    public function check(Request $request) {
        if($this->rfid->check($request->rfid) != null) return $this->respondWithSuccess();
        else return $this->respondNotFound('RFID tidak valid');
    }
}
