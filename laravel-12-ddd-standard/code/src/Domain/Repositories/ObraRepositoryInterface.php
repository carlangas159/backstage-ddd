<?php
declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\Obra;

interface ObraRepositoryInterface
{
    public function save(Obra $obra): void;

    public function findById(string $id): ?Obra;
}

