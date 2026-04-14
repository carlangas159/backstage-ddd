<?php
declare(strict_types=1);

namespace App\Examples\SimpleService\Application\UseCases;

use App\Examples\SimpleService\Domain\Entities\Obra;
use App\Examples\SimpleService\Domain\Repositories\ObraRepositoryInterface;

final class RegisterObraUseCase
{
    private ObraRepositoryInterface $repository;

    public function __construct(ObraRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(array $data): Obra
    {
        $id = $this->generateId();
        $titulo = (string) ($data['titulo'] ?? '');
        $descripcion = isset($data['descripcion']) ? (string) $data['descripcion'] : null;

        $obra = new Obra($id, $titulo, $descripcion);

        $this->repository->save($obra);

        return $obra;
    }

    private function generateId(): string
    {
        return bin2hex(random_bytes(8));
    }
}

