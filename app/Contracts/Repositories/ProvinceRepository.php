<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ProvinceInterface;
use App\Models\Province;

class ProvinceRepository extends BaseRepository implements ProvinceInterface
{
    public function __construct(Province $province)
    {
        // Konstruktor untuk menginisialisasi model province.
        $this->model = $province;
    }

    // Mengambil semua data provinsi dari database.
    public function get(): mixed
    {
        return $this->model->query()->get();
    }
}