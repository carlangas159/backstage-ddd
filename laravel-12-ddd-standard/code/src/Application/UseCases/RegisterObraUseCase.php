<?php
declare(strict_types=1);

namespace App\Application\UseCases;

use App\Domain\Entities\Obra;
use App\Domain\Repositories\ObraRepositoryInterface;

final class RegisterObraUseCase
{
    private ObraRepositoryInterface $repository;

    public function __construct(ObraRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Ejecuta el caso de uso de registro de Obra.
     * Se espera un array con keys: titulo (string), descripcion (string|null)
     */
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
        // Generador simple de id; en producción usar UUIDs más robustos
        return bin2hex(random_bytes(16));
    }
}

