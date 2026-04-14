<?php
declare(strict_types=1);

namespace App\Examples\SimpleService\Web\Http\Controllers;

use App\Examples\SimpleService\Application\UseCases\RegisterObraUseCase;

final class RegisterObraController
{
    private RegisterObraUseCase $useCase;

    public function __construct(RegisterObraUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function handle(array $request): array
    {
        $obra = $this->useCase->execute([
            'titulo' => $request['titulo'] ?? '',
            'descripcion' => $request['descripcion'] ?? null,
        ]);

        return $obra->toArray();
    }
}

