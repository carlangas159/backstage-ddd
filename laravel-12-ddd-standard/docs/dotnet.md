# Extensión .NET — Cómo aplicar el estándar en C# (.NET)

Esta página describe cómo mapear y usar el estándar `laravel-12-ddd-standard` en proyectos .NET (C#), y referencia el skeleton incluido en `dotnet-skeleton/`.

Resumen

- El skeleton .NET replica las mismas capas: `Domain`, `Application`, `Infrastructure`, `Web`.
- Reglas DDD/Hexagonal se mantienen: la capa `Domain` no debe tener referencias a infra (EF, ASP.NET), los repositorios son interfaces y la inyección de dependencias se hace en el composition root.

Archivos de ejemplo incluidos

- `dotnet-skeleton/src/Domain/Entities/Obra.cs` — Entidad POCO.
- `dotnet-skeleton/src/Domain/Repositories/IObraRepository.cs` — Interfaz de repositorio.
- `dotnet-skeleton/src/Application/UseCases/RegisterObraUseCase.cs` — Caso de uso.
- `dotnet-skeleton/src/Infrastructure/Repository/InMemoryObraRepository.cs` — Implementación en memoria.
- `dotnet-skeleton/src/Web/Controllers/ObrasController.cs` — Controller ASP.NET Core de ejemplo.
- `dotnet-skeleton/src/Web/Program.cs` — Composition root con registro DI y Swagger (placeholder).

Mapeo conceptual (equivalencias)

- Eloquent model (PHP) → EF Core Entity / DbContext (C#) en Infrastructure.
- Service Provider (Laravel) → registro DI en `Program.cs` (ASP.NET Core).
- UseCase (PHP) → Service/Handler (C#) (p. ej. MediatR handler o clase de aplicación).

Buenas prácticas para proyectos .NET

1. Mantener `Domain` puro: solo POCOs, Value Objects e interfaces.
2. Usar `I` prefix para interfaces (`IObraRepository`).
3. Registrar implementaciones en `Program.cs` (composition root).
4. Separar modelos de persistencia (EF) de entidades de dominio.
5. Generar Swagger con Swashbuckle y exponer/o exportar `swagger.json` para integrarlo con TechDocs si se desea.

Integración con Backstage

- El `catalog-info.yaml` no necesita cambios solo por añadir un skeleton .NET: sigue describiendo el componente del estándar.
- Si vas a publicar un servicio .NET como componente nuevo, crea un `catalog-info.yaml` en el repo del servicio y registra la entidad con Backstage (wizard). Puedes reutilizar `docs/openapi.yaml` o publicar el swagger generado por .NET como `docs/openapi.yaml` del servicio.

Siguientes pasos recomendados

- Ajustar `TargetFramework` en los `.csproj` del skeleton según la versión .NET que uses (por defecto use net8.0; puedo cambiarlo a net6.0 o net7.0 si lo prefieres).
- Añadir un ejemplo de implementación EF Core en `Infrastructure` si necesitas persistencia real.
- Añadir pruebas unitarias de ejemplo (xUnit) para el UseCase y tests de integración para el controller.

Si quieres, puedo:
- cambiar los `.csproj` a `net6.0` o `net7.0`.
- añadir tests básicos xUnit para `RegisterObraUseCase`.
- agregar un ejemplo EF Core `DbContext` y un repositorio `EfObraRepository`.

