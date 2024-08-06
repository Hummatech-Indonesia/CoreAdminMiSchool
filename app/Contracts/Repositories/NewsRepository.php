<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\NewsInterface;
use App\Models\News;

class NewsRepository extends BaseRepository implements NewsInterface
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }

    public function showWithSlug(string $slug): mixed
    {
        return $this->model->query()->where('slug', $slug)->first();
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

    public function latest(): mixed
    {
        return $this->model->query()->latest()->first();
    }

    public function recentPosts(): mixed
    {
        $latestPost = $this->latest();

        return $this->model->query()
            ->latest()
            ->where('id', '!=', $latestPost->id)
            ->take(4)
            ->get();
    }

    public function otherNews(): mixed
    {
        $latestPost = $this->latest();
        $recentPostIds = $this->recentPosts()->pluck('id')->toArray();

        return $this->model->query()
            ->whereNotIn('id', array_merge([$latestPost->id], $recentPostIds))
            ->paginate(3);
    }
}
