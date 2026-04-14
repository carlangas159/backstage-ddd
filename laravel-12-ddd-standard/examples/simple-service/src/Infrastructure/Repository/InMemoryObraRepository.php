<?php
declare(strict_types=1);

namespace App\Examples\SimpleService\Infrastructure\Repository;

use App\Examples\SimpleService\Domain\Entities\Obra;
use App\Examples\SimpleService\Domain\Repositories\ObraRepositoryInterface;

final class InMemoryObraRepository implements ObraRepositoryInterface
{
    /** @var array<string, array> */
    private array $storage = [];

    public function save(Obra $obra): void
    {
        $this->storage[$obra->id()] = $obra->toArray();
    }

    public function findById(string $id): ?Obra
    {
        if (!isset($this->storage[$id])) {
            return null;
        }

        $data = $this->storage[$id];

        return new Obra((string) $data['id'], (string) $data['titulo'], $data['descripcion'] ?? null);
    }
}

