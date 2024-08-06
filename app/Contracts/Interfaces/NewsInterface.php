<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\PaginateInterface;
use App\Contracts\Interfaces\Eloquent\ShowWithSlugInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface NewsInterface extends GetInterface, StoreInterface, ShowWithSlugInterface, UpdateInterface, DeleteInterface, PaginateInterface
{
    public function latest(): mixed;
    public function recentPosts(): mixed;
    public function otherNews(): mixed;
}
