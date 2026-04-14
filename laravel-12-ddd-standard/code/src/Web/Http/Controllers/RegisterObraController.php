<?php
declare(strict_types=1);

namespace App\Web\Http\Controllers;

use App\Application\UseCases\RegisterObraUseCase;

final class RegisterObraController
{
    private RegisterObraUseCase $useCase;

    public function __construct(RegisterObraUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * Maneja una petición para registrar una obra.
     * Recibe un array asociativo con keys: titulo, descripcion
     * Devuelve array con la obra creada.
     */
    public function handle(array $request): array
    {
        $obra = $this->useCase->execute([
            'titulo' => $request['titulo'] ?? '',
            'descripcion' => $request['descripcion'] ?? null,
        ]);

        return $obra->toArray();
    }
}

