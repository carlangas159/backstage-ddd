<?php
declare(strict_types=1);

namespace App\Examples\SimpleService\Domain\Repositories;

use App\Examples\SimpleService\Domain\Entities\Obra;

interface ObraRepositoryInterface
{
    public function save(Obra $obra): void;

    public function findById(string $id): ?Obra;
}

