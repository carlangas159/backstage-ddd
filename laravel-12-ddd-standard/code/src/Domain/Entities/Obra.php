<?php
declare(strict_types=1);

namespace App\Domain\Entities;

final class Obra
{
    private string $id;
    private string $titulo;
    private ?string $descripcion;

    public function __construct(string $id, string $titulo, ?string $descripcion = null)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function titulo(): string
    {
        return $this->titulo;
    }

    public function descripcion(): ?string
    {
        return $this->descripcion;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
        ];
    }
}

