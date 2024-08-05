<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Models\NewsCategory;

class NewsCategoryRepository extends BaseRepository implements NewsCategoryInterface
{
    public function __construct(NewsCategory $news_category)
    {
        $this->model = $news_category;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
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
}
