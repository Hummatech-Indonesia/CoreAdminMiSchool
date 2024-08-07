<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\FaqInterface;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqRepository extends BaseRepository implements FaqInterface
{
    public function __construct(Faq $faq)
    {
        $this->model = $faq;
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

    public function paginate(Request $request): mixed
    {
        return $this->model->query()
            ->when($request->question, function ($query) use ($request) {
                $query->where(function ($subQuery) use ($request) {
                    $subQuery->where('question', 'LIKE', '%' . $request->question . '%')
                        ->orWhere('answer', 'LIKE', '%' . $request->question . '%');
                });
            })
            ->when($request->sort_by, function ($query) use ($request) {
                $sortDirection = $request->sort_by === 'oldest' ? 'asc' : 'desc';
                $query->orderBy('created_at', $sortDirection);
            }, function ($query) {
                $query->orderBy('created_at', 'desc');
            })
            ->paginate(10);
    }
}
