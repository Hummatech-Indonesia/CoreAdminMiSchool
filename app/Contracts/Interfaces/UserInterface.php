<?php

namespace App\Contracts\Interfaces;

interface UserInterface
{
    public function where(mixed $query): mixed;
}
