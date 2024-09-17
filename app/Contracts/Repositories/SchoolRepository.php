<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SchoolInterface;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolRepository extends BaseRepository implements SchoolInterface
{
    public function __construct(School $school)
    {
        // Konstruktor untuk menginisialisasi model School.
        $this->model = $school;
    }

    // Mengambil semua data sekolah dari database.
    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    /**
     * Menyimpan data sekolah baru ke database.
     *
     * @param array $data Data sekolah yang akan disimpan.
     */
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }

    /**
     * Menampilkan data sekolah berdasarkan slug.
     *
     * @param string $slug Slug dari sekolah yang ingin ditampilkan.
     */
    public function showWithSlug(string $slug): mixed
    {
        return $this->model->query()->where('slug', $slug)->firstOrFail();
    }

    /**
     * Mengupdate data sekolah berdasarkan ID.
     *
     * @param mixed $id ID dari sekolah yang ingin diupdate.
     * @param array $data Data sekolah yang baru.
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }

    /**
     * Menghapus data sekolah berdasarkan ID.
     *
     * @param mixed $id ID dari sekolah yang ingin dihapus.
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function search(Request $request):mixed
    {
        $query = $this->model->query();

        $query->when($request->name, function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        });

        return $query;
    }

    public function where(mixed $data, Request $request): mixed
    {
        return $this->model->query()->where('active', $data)
        ->when($request->name, function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        })
        ->paginate(10);
    }

    public function check_email(mixed $email): mixed
    {
        return $this->model->query()->where('email', $email)->first();
    }
}
