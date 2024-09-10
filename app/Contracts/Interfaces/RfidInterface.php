<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\WhereInterface;
use Illuminate\Http\Request;

interface RfidInterface extends GetInterface, StoreInterface, UpdateInterface, ShowInterface, DeleteInterface, PaginateInterface, WhereInterface
{
    public function count(): mixed;
    public function used(Request $request): mixed;
    public function notUsed(Request $request): mixed;
    public function search(Request $request): mixed;
    public function check(string $rfid): mixed;

    public function updateUsed(mixed $rfid, array $data): mixed;
}
