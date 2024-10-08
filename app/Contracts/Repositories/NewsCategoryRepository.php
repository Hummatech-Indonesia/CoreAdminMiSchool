<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryRepository extends BaseRepository implements NewsCategoryInterface
{
    public function __construct(NewsCategory $news_category)
    {
        $this->model = $news_category;
    }

    public function get(Request $request): mixed
    {
        return $this->model->query()
            ->when($request->name, function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            })
            ->when($request->sort_by, function ($query) use ($request) {
                $sortDirection = $request->sort_by === 'oldest' ? 'asc' : 'desc';
                $query->orderBy('created_at', $sortDirection);
            }, function ($query) {
                $query->orderBy('created_at', 'desc');
            })
            ->get();
    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }

    public function show(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id);
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function paginate(): mixed
    {
        return $this->model->query()->paginate(10);
    }

    public function all(): mixed
    {
        return $this->model->get();
    }
}
