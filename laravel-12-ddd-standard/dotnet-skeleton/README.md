# DotNet skeleton — Laravel 12 DDD Standard (C#)

Este directorio contiene un skeleton C# que replica las capas y las reglas del estándar `laravel-12-ddd-standard` para proyectos .NET.

Propósito
- Proveer un ejemplo y plantilla inicial para proyectos .NET que respeten DDD, Clean Architecture y las mismas reglas de separación de capas.

Estructura

```
dotnet-skeleton/
  src/
    Domain/
      Domain.csproj
      Entities/Obra.cs
      Repositories/IObraRepository.cs
    Application/
      Application.csproj
      UseCases/RegisterObraUseCase.cs
    Infrastructure/
      Infrastructure.csproj
      Repository/InMemoryObraRepository.cs
    Web/
      Web.csproj
      Program.cs
      Controllers/ObrasController.cs
```

Notas importantes
- Mantén la capa `Domain` libre de dependencias a EF o ASP.NET (solo POCOs e interfaces).
- Registra las implementaciones concretas en `Program.cs` (composition root) mediante DI.
- Este skeleton usa convenciones equivalentes a las del estándar PHP: repositorios terminan en `I*Repository`, entidades en singular, inyección por constructor.

Cómo usar (local)
- Este es solo un conjunto de archivos. Para probar localmente crea una solución y los proyectos con `dotnet` y compila/run (ejemplo de comandos en proyecto real). No ejecutes comandos aquí si no deseas hacerlo.

