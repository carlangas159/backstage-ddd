using Microsoft.AspNetCore.Builder;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;

var builder = WebApplication.CreateBuilder();

// Register application services and repositories
builder.Services.AddScoped<App.DotNet.Skeleton.Domain.Repositories.IObraRepository, App.DotNet.Skeleton.Infrastructure.Repository.InMemoryObraRepository>();
builder.Services.AddScoped<App.DotNet.Skeleton.Application.UseCases.RegisterObraUseCase>();

builder.Services.AddControllers();
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

var app = builder.Build();

if (app.Environment.IsDevelopment())
{
    app.UseDeveloperExceptionPage();
    app.UseSwagger();
    app.UseSwaggerUI();
}

app.MapControllers();

// Note: this Program.cs is a template placeholder. To run, create a proper SDK project and restore packages.

app.Run();

