<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\RfidInterface;
use App\Enums\RfidStatusEnum;
use App\Models\Rfid;
use Illuminate\Http\Request;

class RfidRepository extends BaseRepository implements RfidInterface
{
    public function __construct(Rfid $rfid)
    {
        $this->model = $rfid;
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }

    public function count(mixed $query): mixed
    {
        $result = $this->model->query();
        $query == 'used' ? $result->where('status', RfidStatusEnum::USED) : ($query == 'notused' ? $result->where('status', RfidStatusEnum::NOTUSED) : $result);
        return $result->count();
    }

    public function where(mixed $data): bool
    {
        return $this->model->query()->where('rfid', $data)->exists();
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

    public function updateUsed(mixed $rfid, array $data): mixed
    {
        return $this->model->query()
            ->where('rfid', $rfid)
            ->update($data);
    }

    public function updateAllNotUsed(array $rfids, array $data): mixed
    {
        return $this->model->query()
            ->whereNotIn('rfid', $rfids)
            ->update($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete();
    }

    public function paginate() : mixed
    {
        return $this->model->query()->latest()->paginate(10);
    }

    public function used(Request $request): mixed
    {
        return $this->model->query()->where('status', RfidStatusEnum::USED->value)
        ->when($request->search, function ($query) use ($request) {
            $query->where('rfid', 'LIKE', '%' .  $request->search . '%');
        })->when($request->filter === "terbaru", function($query) {
            $query->latest();
        })
        ->when($request->filter === "terlama", function($query) {
            $query->oldest();
        }) ->when($request->status, function($query) use ($request) {
            $query->where('status', $request->status);
        })->paginate(10, ['*'], 'usedPage', $request->usedPage);
    }

    public function notUsed(Request $request): mixed
    {
        return $this->model->query()->where('status', RfidStatusEnum::NOTUSED->value)
        ->when($request->search, function ($query) use ($request) {
            $query->where('rfid', 'LIKE', '%' .  $request->search . '%');
        })->when($request->filter === "terbaru", function($query) {
            $query->latest();
        })
        ->when($request->filter === "terlama", function($query) {
            $query->oldest();
        }) ->when($request->status, function($query) use ($request) {
            $query->where('status', $request->status);
        })->paginate(10, ['*'], 'unusedPage', $request->unusedPage);
    }

    public function search(Request $request): mixed
    {
        return $this->model->query()
        ->when($request->search, function ($query) use ($request) {
            $query->where('rfid', 'LIKE', '%' .  $request->search . '%');
        })->when($request->filter === "terbaru", function($query) {
            $query->latest();
        })
        ->when($request->filter === "terlama", function($query) {
            $query->oldest();
        }) ->when($request->status, function($query) use ($request) {
            $query->where('status', $request->status);
        })->paginate(10);
    }


    public function check(string $rfid) : mixed {
        return $this->model->query()
        ->where('rfid', $rfid)
        ->first();
    }
}
