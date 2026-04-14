# Laravel 12 + DDD Standard

Blueprint y estándar técnico para proyectos PHP basados en Laravel 12 que aplican DDD y Clean Architecture.

Contenido principal

- `catalog-info.yaml`: entidad del componente para Backstage (ya incluye `metadata.description` y `metadata.links`).
- `mkdocs.yml` + `docs/`: TechDocs para documentación del estándar.
- `code/src/`: ejemplo de skeleton con capas Domain, Application, Infrastructure y Web.
 - `examples/`: ejemplos de microservicios y adaptadores.
 - `systems/`: plantillas para el Scaffolder de Backstage.

Registrar en Elevate Latam Hub (Backstage)

1. Registrar usando la URL del archivo `catalog-info.yaml` (recomendado):

   - Ejemplo: `https://github.com/carlangas159/backstage-ddd/blob/main/laravel-12-ddd-standard/catalog-info.yaml`

2. Registrar apuntando al repositorio (Backstage buscará `catalog-info.yaml`):

   - Ejemplo: `https://github.com/carlangas159/backstage-ddd`

Nota: el wizard de Backstage analizará el `catalog-info.yaml`, mostrará una preview de las entidades y las añadirá al catálogo.

Recomendaciones

- Mantén `metadata.description` y `metadata.links` actualizados para facilitar la adopción.
- Asegura que `mkdocs.yml` lista las páginas reales dentro de `docs/` (index, arquitectura, setup).
- Si el repo no contiene `catalog-info.yaml`, el wizard puede crear un Pull Request con un ejemplo para que el componente sea registrado una vez se mergee.


Ejemplo y Scaffolder

- `examples/simple-service/` contiene un microservicio mínimo que ejemplifica Controller -> UseCase -> Repository (in-memory).
- `systems/templates/laravel-service/` contiene una plantilla mínima para el Scaffolder de Backstage.


