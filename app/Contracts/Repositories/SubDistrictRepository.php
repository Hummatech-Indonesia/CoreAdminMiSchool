<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SubDistrictInterface;
use App\Models\SubDistrict;

class SubDistrictRepository extends BaseRepository implements SubDistrictInterface
{
    public function __construct(SubDistrict $subDistrict) {
        // Konstruktor untuk menginisialisasi model SubDistrict.
        $this->model = $subDistrict;
    }

    // Mengambil semua data kecamatan dari database.
    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    /**
     * Mengambil data kecamatan berdasarkan ID kota.
     *
     * @param mixed $data ID kota yang ingin dicari.
     * @return mixed Koleksi data kecamatan yang termasuk dalam kota tersebut.
     */
    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('city_id', $data)->get();
    }
}
