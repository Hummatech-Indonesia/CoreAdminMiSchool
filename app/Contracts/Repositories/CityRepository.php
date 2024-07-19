<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CityInterface;
use App\Models\City;

class CityRepository extends BaseRepository implements CityInterface
{
    public function __construct(City $city)
    {
        // Konstruktor untuk menginisialisasi model City.
        $this->model = $city;
    }

    // Mengambil semua data kota dari database.
    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    /**
     * Mengambil data kota berdasarkan ID provinsi.
     *
     * @param mixed $data ID provinsi yang ingin dicari.
     * @return mixed Koleksi data kota yang termasuk dalam provinsi tersebut.
     */
    public function where(mixed $data): mixed
    {
        return $this->model->query()->where('province_id', $data)->get();
    }
}