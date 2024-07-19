<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SubDistrictInterface;
use App\Models\SubDistrict;

class SubDistrictRepository extends BaseRepository implements SubDistrictInterface
{
    public function __construct(SubDistrict $subDistrict) {
        $this->model = $subDistrict;
    }

    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('city_id', $data)->get();
    }
}