# Setup y uso del estándar

Este documento explica pasos mínimos para usar este blueprint en un repositorio o para preparar el repositorio antes de registrarlo en Elevate Latam Hub (Backstage).

1. Estructura mínima requerida

- Tener `catalog-info.yaml` en la raíz del componente (o en la ruta que se va a referenciar desde la Location de Backstage).
- Incluir `mkdocs.yml` y una carpeta `docs/` con al menos `index.md`.

2. Registro en Backstage (wizard)

- URL del archivo: si tu repositorio está en GitHub, usa la URL del archivo `catalog-info.yaml`, por ejemplo:
  `https://github.com/carlangas159/backstage-ddd/blob/main/laravel-12-ddd-standard/catalog-info.yaml`
- URL del repositorio: si apuntas al repo, el wizard buscará automáticamente `catalog-info.yaml` en el repositorio.

3. Preparar el repositorio

- Añadir `metadata.description` y `metadata.links` en el `catalog-info.yaml` para mejorar la preview.
- Documentar en `docs/` la arquitectura y pasos de setup (este proyecto ya incluye `arquitectura.md` y `setup.md`).

4. Sugerencia para CI (opcional)

- Añadir validación YAML y checks básicos (yamllint, php -l) antes de abrir PRs que afecten `catalog-info.yaml`.

