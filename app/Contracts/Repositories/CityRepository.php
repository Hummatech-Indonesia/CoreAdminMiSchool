<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CityInterface;
use App\Models\City;

class CityRepository extends BaseRepository implements CityInterface
{
    public function __construct(City $city)
    {
        $this->model = $city;
    }

    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('province_id', $data)->get();
    }
}