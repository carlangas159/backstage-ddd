using System.Threading.Tasks;

namespace App.DotNet.Skeleton.Domain.Repositories
{
    using App.DotNet.Skeleton.Domain.Entities;

    public interface IObraRepository
    {
        Task SaveAsync(Obra obra);
        Task<Obra?> FindByIdAsync(string id);
    }
}

