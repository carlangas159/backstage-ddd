using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace App.DotNet.Skeleton.Web.Controllers
{
    using App.DotNet.Skeleton.Application.UseCases;

    [ApiController]
    [Route("api/[controller]")]
    public class ObrasController : ControllerBase
    {
        private readonly RegisterObraUseCase _useCase;

        public ObrasController(RegisterObraUseCase useCase)
        {
            _useCase = useCase;
        }

        [HttpPost]
        public async Task<IActionResult> Create([FromBody] CreateObraRequest request)
        {
            var obra = await _useCase.ExecuteAsync(request.Titulo, request.Descripcion).ConfigureAwait(false);
            return CreatedAtAction(nameof(GetById), new { id = obra.Id }, obra);
        }

        [HttpGet("{id}")]
        public async Task<IActionResult> GetById(string id)
        {
            // In a real controller you would inject a query use case or repository via DI
            return NotFound();
        }
    }

    public sealed class CreateObraRequest
    {
        public string Titulo { get; set; } = string.Empty;
        public string? Descripcion { get; set; }
    }
}

