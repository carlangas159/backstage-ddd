# Standard: Laravel 12 + DDD + Clean Architecture

Este estándar describe una forma de organizar aplicaciones PHP (Laravel 12) aplicando principios de Domain-Driven Design (DDD), Clean Architecture y un enfoque hexagonal.

El objetivo principal es separar claramente la lógica de negocio (Domain) del framework (Laravel/Illuminate) para facilitar migraciones desde sistemas legacy, mejorar testabilidad y conseguir mayor escalabilidad.

Principios clave:
- La capa Domain contiene entidades, value objects y contratos (interfaces). No debe depender de Laravel ni de paquetes de infraestructura.
- La capa Application contiene casos de uso que coordinan la lógica de negocio y dependen únicamente de contratos definidos en Domain.
- La capa Infrastructure implementa los contratos usando adaptadores concretos (Eloquent, Azure Service Bus, repositorios, etc.).
- La capa Web contiene adaptadores para HTTP (Controllers) que traducen requests/responses hacia/desde la capa Application.

Este repositorio sirve como blueprint para migraciones y generación automatizada de artefactos por agentes de IA.

