namespace App.DotNet.Skeleton.Domain.Entities
{
    #nullable enable
    public sealed class Obra
    {
        public string Id { get; }
        public string Titulo { get; }
        public string? Descripcion { get; }

        public Obra(string id, string titulo, string? descripcion = null)
        {
            Id = id;
            Titulo = titulo;
            Descripcion = descripcion;
        }
    }
}

