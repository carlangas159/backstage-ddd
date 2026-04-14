using System;
using System.Threading.Tasks;

namespace App.DotNet.Skeleton.Application.UseCases
{
    using App.DotNet.Skeleton.Domain.Entities;
    using App.DotNet.Skeleton.Domain.Repositories;

    public sealed class RegisterObraUseCase
    {
        private readonly IObraRepository _repository;

        public RegisterObraUseCase(IObraRepository repository)
        {
            _repository = repository;
        }

        public async Task<Obra> ExecuteAsync(string titulo, string? descripcion = null)
        {
            var id = GenerateId();
            var obra = new Obra(id, titulo, descripcion);
            await _repository.SaveAsync(obra).ConfigureAwait(false);
            return obra;
        }

        private static string GenerateId() => Guid.NewGuid().ToString("N");
    }
}

