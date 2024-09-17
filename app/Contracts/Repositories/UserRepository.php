<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\UserInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user) {
        // Konstruktor untuk menginisialisasi model user$user.
        $this->model = $user;
    }

    /**
     * Mengambil data kecamatan berdasarkan ID kota.
     *
     * @param mixed $data ID kota yang ingin dicari.
     * @return mixed Koleksi data kecamatan yang termasuk dalam kota tersebut.
     */
    public function where(mixed $query): mixed
    {
        return $this->model->query()
            ->where('email', $query)
            ->first();
    }
}
