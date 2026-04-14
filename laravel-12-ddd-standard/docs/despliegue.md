# Despliegue

Pautas mínimas para desplegar proyectos que sigan este estándar:

1. Contenedores

- Construye imágenes reproducibles basadas en PHP 8.1+ (recomendado 8.4+ cuando esté disponible).
- Usa multi-stage builds para minimizar el tamaño de la imagen.

2. Variables de entorno

- Mantén credenciales fuera del repositorio (`.env` o secretos en tu plataforma de CI/CD).

3. Migraciones y base de datos

- Versiona migraciones y ejecuta en CI o durante despliegue controlado.

4. Observabilidad

- Exporta métricas y logs estructurados; integra tracing si es aplicable.

