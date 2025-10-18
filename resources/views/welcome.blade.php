<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Bienvenido a SoftCo, donde cada grano cuenta una historia. Descubre nuestro café de especialidad, tostado a la perfección." />
    <title>SoftCo - El Arte del Café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/softco.png') }}" />
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" />
</head>

<body>

    {{-- Barra de navegacion --}}
    <nav class="navbar navbar-expand-md navbar-welcome">
        <div class="container">
            <a class="navbar-brand" href="{{ route('panel') }}">
                <img src="{{ asset('assets/img/softco.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
                SoftCo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <form action="{{ route('login.index') }}" method="get">
                    <button class="btn btn-coffee" type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Header --}}
    <header class="hero-section">
        <div class="hero-content">
            <h1>El Arte del Café, Tostado a la Perfección</h1>
            <p>Descubre la pasión y tradición que infundimos en cada grano, desde las fincas más selectas hasta tu taza.
            </p>
            <a href="{{ route('login.index') }}" role="button" class="btn btn-coffee mt-3">Entra a Nuestro Mundo</a>
        </div>
    </header>

    {{-- Seccion principal --}}
    <section class="passion-section">
        <div class="container">
            <h2>De la Finca a Tu Taza</h2>
            <div class="row g-5">
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <div class="icon"><i class="fas fa-leaf"></i></div>
                            <h4 class="card-title fw-bold">Origen Único</h4>
                            <p class="card-text">Trabajamos directamente con productores locales para traerte granos de
                                la más alta calidad, cultivados con respeto por la tierra y su gente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <div class="icon"><i class="fas fa-fire"></i></div>
                            <h4 class="card-title fw-bold">Tostado Artesanal</h4>
                            <p class="card-text">Nuestros maestros tostadores desarrollan perfiles únicos para cada
                                lote, resaltando las notas y aromas que hacen a nuestro café inolvidable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <div class="icon"><i class="fas fa-box-open"></i></div>
                            <h4 class="card-title fw-bold">Frescura Garantizada</h4>
                            <p class="card-text">Tostamos nuestro café en pequeños lotes y lo empacamos al momento para
                                asegurar que recibas un producto con la máxima frescura y sabor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="text-center footer-welcome py-4">
        <div class="container">
            <section class="mb-4"></section>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2025 Copyright:
                <a class="text-white" href="#">softco.com</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
