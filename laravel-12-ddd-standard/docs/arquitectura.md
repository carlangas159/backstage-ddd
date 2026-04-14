# Arquitectura: Laravel 12 + DDD + Clean Architecture

Este documento describe el diseño arquitectural del estándar.

Principios clave

- Separación de responsabilidades en capas: Domain, Application, Infrastructure, Web.
- Domain: lógica de negocio pura; sin dependencias a `Illuminate` ni a frameworks.
- Application: casos de uso que coordinan entidades y contratos del Domain.
- Infrastructure: adaptadores concretos (Eloquent, servicios externos, colas) que implementan los contratos del Domain.
- Web: adaptadores HTTP (Controllers) que traducen requests a comandos para Application.

Estructura de carpetas (ejemplo)

```
code/src/
  Domain/
    Entities/
    Repositories/
  Application/
    UseCases/
  Infrastructure/
    Persistence/Eloquent/
  Web/
    Http/Controllers/
```

Integración con Backstage

- `catalog-info.yaml` (componente) contiene metadata y anotaciones para TechDocs (`backstage.io/techdocs-ref: dir:.`).
- TechDocs usará `mkdocs.yml` para construir la documentación visible en Backstage.

Buenas prácticas

- Registrar repositorios en Backstage apuntando al `catalog-info.yaml` de cada componente.
- Mantener `metadata.description` y `metadata.links` para facilitar descubrimiento.
- Registrar owners con el formato `user:username` o `group:team`.

