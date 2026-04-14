# Backstage DDD Standards (Laravel)

Este repositorio agrupa estándares y plantillas para proyectos PHP basados en Laravel 12 aplicando Domain-Driven Design (DDD), Clean Architecture y un enfoque hexagonal. Está pensado para integrarse con Elevate Latam Hub (Backstage) mediante entidades del Software Catalog y TechDocs.

Propósito

- Proveer un blueprint «AI-friendly» y reusable para migraciones legacy y nuevos servicios.
- Centralizar documentación técnica (TechDocs) y plantillas (Scaffolder) para generar microservicios coherentes con los estándares de la organización.

Contenido principal

- `laravel-12-ddd-standard/` — Estándar principal unificado (incluye código ejemplo, docs, Agents.md, Scaffolder templates y ejemplos). Es el componente canonico.
- `laravel-api-standard/` — Antiguo estándar integrado; marcado como deprecado. Su contenido fue migrado a `laravel-12-ddd-standard`.

Estructura destacada dentro de `laravel-12-ddd-standard`

- `catalog-info.yaml` — metadatos para registrar el componente en Backstage.
- `mkdocs.yml` y `docs/` — TechDocs (index, arquitectura, setup, despliegue, openapi.yaml).
- `examples/simple-service/` — ejemplo mínimo Controller → UseCase → Repository (in-memory).
- `systems/templates/` — plantillas mínimas para el Scaffolder.
- `Agents.md` — reglas y contexto para agentes de IA (incluye referencia a `docs/openapi.yaml`).

Cómo registrar este estándar en Elevate Latam Hub (Backstage)

Opción A — Registrar usando la URL del archivo `catalog-info.yaml` (recomendado):

1. Sube el repositorio a GitHub (o usa la URL existente).
2. Copia la URL del archivo `catalog-info.yaml`. Ejemplo:

   `https://github.com/carlangas159/backstage-ddd/blob/main/laravel-12-ddd-standard/catalog-info.yaml`

3. En Backstage, abre el wizard "Register existing component" y pega la URL del archivo. El wizard analizará el YAML, mostrará la preview y añadirá la entidad al catálogo.

Opción B — Registrar apuntando al repositorio (Backstage descubrirá `catalog-info.yaml` automáticamente):

1. Pega la URL del repositorio (por ejemplo `https://github.com/carlangas159/backstage-ddd`).
2. El wizard intentará localizar `catalog-info.yaml` en el repo y te ofrecerá añadir las entidades encontradas.

Notas importantes para el registro

- Asegúrate de que `catalog-info.yaml` contiene `metadata.name`, `apiVersion`, `kind: Component` y `annotations` (por ejemplo `backstage.io/techdocs-ref: dir:.`).
- TechDocs: Backstage usará `mkdocs.yml` y la carpeta `docs/` referenciada por la anotación `backstage.io/techdocs-ref: dir:.`.
- Owners: usa formato `user:username` o `group:team` en `spec.owner`.
- Si el wizard no encuentra entidades, puedes añadir manualmente un `catalog-info.yaml` en la raíz o permitir que el wizard prepare un PR de ejemplo.

Validaciones recomendadas antes de registrar

- Revisar sintaxis YAML (indentación y campos obligatorios).
- Verificar que `docs/index.md` y las páginas listadas en `mkdocs.yml` existan.
- Comprobar que `Agents.md` y `docs/openapi.yaml` están presentes si dependes de generadores/IA que validen contratos.

Política de fusión y eliminación del antiguo estándar

- `laravel-api-standard` fue integrado en `laravel-12-ddd-standard`. Antes de eliminar la carpeta `laravel-api-standard`:
  1. Revisar que todos los artefactos necesarios se encuentren en `laravel-12-ddd-standard`.
  2. Actualizar referencias en documentación y CI/CD.
  3. Abrir un PR que elimine `laravel-api-standard` y documente la migración (se sugiere incluir `DEPRECATED.md` como referencia en el commit previo a la eliminación).

Contacto y mantenimiento

- Owner del estándar: `user:cmrondon` (definido en `catalog-info.yaml`).
- Para cambios en el estándar, crea un PR en este repositorio y referencia el cambio en `Agents.md` y TechDocs.

Si quieres, puedo preparar automáticamente un archivo `REMOVE-LARAVEL-API-STANDARD.md` con la lista exacta de ficheros a eliminar y el comando `git rm -r` sugerido para que lo pegues en tu PR. ¿Deseas que lo genere?

