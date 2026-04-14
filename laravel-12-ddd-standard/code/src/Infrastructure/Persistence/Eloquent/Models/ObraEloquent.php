<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class ObraEloquent extends Model
{
    protected $table = 'obras';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
    ];
}

