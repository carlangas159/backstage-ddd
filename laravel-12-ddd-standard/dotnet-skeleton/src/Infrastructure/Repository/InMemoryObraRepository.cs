using System.Collections.Concurrent;
using System.Threading.Tasks;

namespace App.DotNet.Skeleton.Infrastructure.Repository
{
    using App.DotNet.Skeleton.Domain.Entities;
    using App.DotNet.Skeleton.Domain.Repositories;

    public sealed class InMemoryObraRepository : IObraRepository
    {
        private readonly ConcurrentDictionary<string, Obra> _storage = new();

        public Task SaveAsync(Obra obra)
        {
            _storage[obra.Id] = obra;
            return Task.CompletedTask;
        }

        public Task<Obra?> FindByIdAsync(string id)
        {
            _storage.TryGetValue(id, out var obra);
            return Task.FromResult(obra);
        }
    }
}

