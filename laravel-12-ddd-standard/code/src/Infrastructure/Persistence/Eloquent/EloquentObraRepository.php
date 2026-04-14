<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\Entities\Obra;
use App\Domain\Repositories\ObraRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Models\ObraEloquent;

final class EloquentObraRepository implements ObraRepositoryInterface
{
    public function save(Obra $obra): void
    {
        // Mapear entidad a modelo Eloquent
        $data = [
            'id' => $obra->id(),
            'titulo' => $obra->titulo(),
            'descripcion' => $obra->descripcion(),
        ];

        // upsert para simplicidad; en Laravel real usaría save/update apropiado
        $model = ObraEloquent::find($obra->id());

        if ($model === null) {
            ObraEloquent::create($data);
            return;
        }

        $model->fill($data);
        $model->save();
    }

    public function findById(string $id): ?Obra
    {
        $model = ObraEloquent::find($id);

        if ($model === null) {
            return null;
        }

        return new Obra((string) $model->id, (string) $model->titulo, isset($model->descripcion) ? (string) $model->descripcion : null);
    }
}

